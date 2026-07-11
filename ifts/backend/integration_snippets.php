<?php
/**
 * INTEGRATION SNIPPETS
 * ──────────────────────────────────────────────────────────
 * These are snippets to paste into your existing handler files —
 * NOT full files, because the actual files (the order-creation
 * script, the Ask an Expert handler, any contact form handler,
 * and wherever password changes happen) were not shared in this
 * conversation. I don't have their real INSERT/UPDATE queries,
 * field names, or validation logic to safely reproduce in full.
 *
 * Paste the relevant block below into the matching file, directly
 * AFTER the database insert/update has succeeded.
 * ──────────────────────────────────────────────────────────
 */


/* ============================================================
   1. NEW ORDER CREATED
   Paste into whichever file performs:
     INSERT INTO orders (...) VALUES (...)
   e.g. checkout.php, place-order.php, etc.
   Place this AFTER you confirm the insert succeeded.
============================================================ */

require_once __DIR__ . '/mailer.php'; // adjust path as needed

// Example — replace with your actual variables from the order insert
$emailHtml = buildNotificationHtml(
    "New Order Received",
    [
        "Customer Name" => $customer_name ?? null,
        "Email"         => $email ?? null,
        "Phone"         => $whatsapp ?? null,
        "Order ID"      => $order_id ?? null,
        "City"          => $city ?? null,
        "Amount Paid"   => isset($paid_amount) ? "Rs. " . $paid_amount : null,
    ],
    "A new order has been placed and is awaiting verification."
);

sendNotificationEmail("New Order Received - IFTS", $emailHtml);


/* ============================================================
   2. ASK AN EXPERT SUBMISSION
   Paste into the handler that processes the Ask an Expert form
   (wherever that form's data gets inserted into the database).
============================================================ */

require_once __DIR__ . '/mailer.php';

$emailHtml = buildNotificationHtml(
    "Ask an Expert Submission",
    [
        "Name"    => $name ?? null,
        "Email"   => $email ?? null,
        "Phone"   => $phone ?? null,
        "Subject" => $subject ?? null,
        "Message" => $message ?? null,
    ],
    "A new inquiry was submitted via the Ask an Expert form."
);

sendNotificationEmail("Ask an Expert Submission", $emailHtml);


/* ============================================================
   3. CONTACT FORM SUBMISSION (if this form exists)
============================================================ */

require_once __DIR__ . '/mailer.php';

$emailHtml = buildNotificationHtml(
    "New Contact Form Submission",
    [
        "Name"    => $name ?? null,
        "Email"   => $email ?? null,
        "Phone"   => $phone ?? null,
        "Message" => $message ?? null,
    ],
    "A new message was submitted via the Contact form."
);

sendNotificationEmail("New Contact Form Submission", $emailHtml);


/* ============================================================
   4. ADMIN PASSWORD CHANGE
   Paste into wherever the admin password update query runs
   (e.g. change-password.php), AFTER the UPDATE succeeds.
============================================================ */

require_once __DIR__ . '/mailer.php';

$emailHtml = buildNotificationHtml(
    "Security Alert: Password Changed",
    [
        "Admin Account" => $admin_username ?? 'Administrator',
        "IP Address"    => $_SERVER['REMOTE_ADDR'] ?? null,
    ],
    "If you did not perform this action, secure your account immediately."
);

sendNotificationEmail("Security Alert: Password Changed", $emailHtml);


/* ============================================================
   5. ANY OTHER NEW FORM SUBMISSION / DB INSERT
   Generic pattern for future forms — same idea every time:
============================================================ */

require_once __DIR__ . '/mailer.php';

$emailHtml = buildNotificationHtml(
    "Event Name Here",                 // e.g. "New Service Request"
    [
        "Field Label" => $someVariable ?? null,
        // add as many label => value pairs as relevant
    ],
    "Optional short note about this event."
);

sendNotificationEmail("Subject Line Here", $emailHtml);