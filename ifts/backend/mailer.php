<?php
/**
 * mailer.php
 * ──────────────────────────────────────────────────────────
 * Reusable email notification helper for IFTS Platform.
 *
 * Sends formatted HTML admin-notification emails via SMTP
 * (PHPMailer). Used for: new orders, Ask an Expert submissions,
 * contact form submissions, and password-change security alerts.
 *
 * NOT used for: order verified, order deleted (per requirements).
 * ──────────────────────────────────────────────────────────
 *
 * SETUP (manual / no-Composer):
 * 1. Download PHPMailer source zip from:
 *    https://github.com/PHPMailer/PHPMailer/releases/latest
 * 2. From inside the zip, take only the "src" folder.
 * 3. Upload it to your server so the path looks like:
 *
 *      your-project-folder/
 *      ├── mailer.php          (this file)
 *      └── PHPMailer/
 *          └── src/
 *              ├── PHPMailer.php
 *              ├── SMTP.php
 *              └── Exception.php
 *
 * 4. Fill in SMTP_USERNAME / SMTP_PASSWORD below with a Gmail
 *    App Password (NOT your normal Gmail password).
 * ──────────────────────────────────────────────────────────
 */

require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* ──────────────────────────────────────────
   CONFIGURATION — fill these in
────────────────────────────────────────── */

// Admin email address that RECEIVES all notifications
$admin_email = "pkwebmaker58@gmail.com";

// SMTP server settings (Gmail example shown — change if using another provider)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'pkwebmaker58@gmail.com'); // TODO: the Gmail account that SENDS the email
define('SMTP_PASSWORD', 'qbip ubgl fbkw orqk');     // TODO: Gmail App Password (Google Account > Security > App Passwords)
define('SMTP_SECURE', PHPMailer::ENCRYPTION_STARTTLS);
define('SMTP_FROM_EMAIL', 'pkwebmaker58@gmail.com'); // usually same as SMTP_USERNAME for Gmail
define('SMTP_FROM_NAME', 'IFTS Platform');

/**
 * sendNotificationEmail
 * ──────────────────────────────────────────
 * Sends a clean HTML-formatted notification email to the admin.
 *
 * @param string $subject Email subject line
 * @param string $message Pre-built HTML message body (use buildNotificationHtml() to format it)
 * @return bool true on success, false on failure
 */
function sendNotificationEmail($subject, $message) {
    global $admin_email;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;

        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress($admin_email);

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);

        $mail->send();
        return true;

    } catch (Exception $e) {
        error_log("sendNotificationEmail failed: " . $mail->ErrorInfo);
        return false;
    }
}

/**
 * buildNotificationHtml
 * ──────────────────────────────────────────
 * Builds a consistent, clean HTML email body for any event type.
 *
 * @param string $eventType   e.g. "New Order Received"
 * @param array  $fields      Associative array of label => value rows.
 *                             Empty/null values are skipped automatically.
 * @param string $footnote    Optional short note shown below the table.
 * @return string HTML message body
 */
function buildNotificationHtml($eventType, $fields = [], $footnote = '') {

    $timestamp = date('Y-m-d H:i:s');

    $rows = '';
    foreach ($fields as $label => $value) {
        if ($value === null || $value === '') {
            continue;
        }
        $safeLabel = htmlspecialchars($label);
        $safeValue = htmlspecialchars($value);
        $rows .= "
            <tr>
                <td style='padding:10px 14px;background:#f8f9fc;border-bottom:1px solid #e2e8f0;font-weight:600;color:#334155;font-size:13px;width:160px;'>{$safeLabel}</td>
                <td style='padding:10px 14px;border-bottom:1px solid #e2e8f0;color:#0d1b4b;font-size:13px;'>{$safeValue}</td>
            </tr>";
    }

    $rows .= "
        <tr>
            <td style='padding:10px 14px;background:#f8f9fc;font-weight:600;color:#334155;font-size:13px;width:160px;'>Timestamp</td>
            <td style='padding:10px 14px;color:#0d1b4b;font-size:13px;'>{$timestamp}</td>
        </tr>";

    $safeEvent = htmlspecialchars($eventType);
    $safeFootnote = htmlspecialchars($footnote);

    $footnoteHtml = $footnote !== ''
        ? "<p style='margin-top:18px;font-size:12px;color:#64748b;'>{$safeFootnote}</p>"
        : '';

    return "
    <div style='font-family:DM Sans, Arial, sans-serif;background:#f1f3f9;padding:30px;'>
        <div style='max-width:520px;margin:0 auto;background:#ffffff;border-radius:14px;overflow:hidden;border:1px solid #e2e8f0;'>

            <div style='background:#0d1b4b;padding:20px 24px;'>
                <span style='color:#00c2c7;font-weight:700;font-size:13px;letter-spacing:0.5px;'>IFTS PLATFORM</span>
                <h2 style='color:#ffffff;font-size:18px;margin:6px 0 0;font-family:Arial, sans-serif;'>{$safeEvent}</h2>
            </div>

            <div style='padding:20px 24px;'>
                <table style='width:100%;border-collapse:collapse;border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;'>
                    {$rows}
                </table>
                {$footnoteHtml}
            </div>

            <div style='background:#f8f9fc;padding:14px 24px;border-top:1px solid #e2e8f0;'>
                <span style='font-size:11px;color:#94a3b8;'>This is an automated notification from the IFTS Admin Platform.</span>
            </div>

        </div>
    </div>";
}