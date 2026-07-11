<?php
/**
 * change_password.php
 * ──────────────────────────────────────────────────────────
 * Handles the "Change Password" form in dashboard.php.
 * Works against the existing `admins` table — no new table needed.
 *
 * Supports a safe migration from plain-text to hashed passwords:
 *   - If the stored password is already hashed, it verifies with password_verify().
 *   - If the stored password is still plain text (old rows), it falls back
 *     to a direct comparison, exactly like login.php currently does.
 *   - Either way, the NEW password is always saved using password_hash().
 *
 * After this runs once for an admin, their row becomes properly hashed.
 *
 * Expects POST: current_password, new_password, confirm_password
 * Returns JSON: { success: true/false, message: "..." }
 * ──────────────────────────────────────────────────────────
 */

session_start();
include 'db.php';

header('Content-Type: application/json');

/* AUTH CHECK — same guard as dashboard.php */
if (!isset($_SESSION['admin_logged_in'])) {
    echo json_encode(['success' => false, 'message' => 'Not authorized. Please log in again.']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

$current_password = trim($_POST['current_password'] ?? '');
$new_password      = trim($_POST['new_password'] ?? '');
$confirm_password  = trim($_POST['confirm_password'] ?? '');

/* Basic validation */
if ($current_password === '' || $new_password === '' || $confirm_password === '') {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

if ($new_password !== $confirm_password) {
    echo json_encode(['success' => false, 'message' => 'New password and confirmation do not match.']);
    exit;
}

if (strlen($new_password) < 6) {
    echo json_encode(['success' => false, 'message' => 'New password must be at least 6 characters long.']);
    exit;
}

/* Fetch the currently logged-in admin's record */
$username = $_SESSION['admin_username'];

$stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['success' => false, 'message' => 'Admin account not found.']);
    exit;
}

$admin = $result->fetch_assoc();
$stored_password = $admin['password'];

/* Verify current password — support both hashed and legacy plain-text rows */
$is_hashed = (strlen($stored_password) >= 60 && (strpos($stored_password, '$2y$') === 0 || strpos($stored_password, '$2a$') === 0));

if ($is_hashed) {
    $password_correct = password_verify($current_password, $stored_password);
} else {
    // Legacy plain-text row — same comparison login.php currently uses
    $password_correct = ($current_password === $stored_password);
}

if (!$password_correct) {
    echo json_encode(['success' => false, 'message' => 'Current password is incorrect.']);
    exit;
}

/* Save new password — always hashed from this point on */
$new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);

$update = $conn->prepare("UPDATE admins SET password = ? WHERE username = ?");
$update->bind_param("ss", $new_password_hashed, $username);

if ($update->execute()) {

    /* Send security alert email — does NOT block the response if it fails */
    if (file_exists(__DIR__ . '/mailer.php')) {
        require_once __DIR__ . '/mailer.php';

        $emailHtml = buildNotificationHtml(
            "Security Alert: Password Changed",
            [
                "Admin Account" => $username,
                "IP Address"    => $_SERVER['REMOTE_ADDR'] ?? null,
            ],
            "If you did not perform this action, secure your account immediately."
        );

        sendNotificationEmail("Security Alert: Password Changed", $emailHtml);
    }

    echo json_encode(['success' => true, 'message' => 'Password updated successfully.']);

} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update password. Please try again.']);
}