<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/php-error.log');

$host = "localhost";
$dbname = "u906769102_IFTS";
$username = "u906769102_IFTS";
$password = "u906769102_IFTS";


$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Database Connection Failed");
}

error_log("checkout.php hit — METHOD=" . $_SERVER['REQUEST_METHOD'] . " | save_order=" . (isset($_POST['save_order']) ? $_POST['save_order'] : 'NOT SET') . " | POST keys=" . implode(',', array_keys($_POST)));

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_order'])) {

  $customer_name  = trim($_POST['customer_name']  ?? '');
  $whatsapp       = trim($_POST['whatsapp']        ?? '');
  $email          = trim($_POST['email']           ?? '');
  $city           = trim($_POST['city']            ?? '');
  $transaction_id = trim($_POST['transaction_id']  ?? '');
  $paid_amount    = trim($_POST['paid_amount']     ?? '');
  $payment_date   = trim($_POST['payment_date']    ?? '');
  $order_id       = trim($_POST['order_id']        ?? '');
  $services       = $_POST['services']             ?? '';
  $referral_code  = isset($_POST['referral_code']) ? trim($_POST['referral_code']) : '';
  $payment_status = "Pending Verification";

  $required = [
    'order_id'       => $order_id,
    'customer_name'  => $customer_name,
    'whatsapp'       => $whatsapp,
    'email'          => $email,
    'city'           => $city,
    'transaction_id' => $transaction_id,
    'paid_amount'    => $paid_amount,
    'payment_date'   => $payment_date,
  ];

  foreach ($required as $field => $value) {
    if ($value === '') {
      echo json_encode(["success" => false, "error" => "Missing required field: $field"]);
      exit;
    }
  }

  if (!is_dir("uploads/")) {
    mkdir("uploads/", 0755, true);
  }

  $allowed_types      = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
  $allowed_ext        = ['jpg', 'jpeg', 'png', 'webp'];
  $uploaded_filenames = [];

  if (!empty($_FILES['screenshots'])) {
    $files = $_FILES['screenshots'];
    $count = is_array($files['name']) ? count($files['name']) : 0;
    for ($i = 0; $i < $count; $i++) {
      if ($files['error'][$i] !== UPLOAD_ERR_OK) continue;
      $tmp_name  = $files['tmp_name'][$i];
      $orig_name = basename($files['name'][$i]);
      $mime_type = $files['type'][$i];
      $ext       = strtolower(pathinfo($orig_name, PATHINFO_EXTENSION));
      if (!in_array($mime_type, $allowed_types) || !in_array($ext, $allowed_ext)) continue;
      $filename = time() . "_" . $i . "_" . $orig_name;
      if (move_uploaded_file($tmp_name, "uploads/" . $filename)) {
        $uploaded_filenames[] = $filename;
      }
    }
  }

  $screenshots_json = json_encode($uploaded_filenames);

  $stmt = $conn->prepare("
    INSERT INTO orders (order_id,customer_name,whatsapp,email,city,transaction_id,paid_amount,payment_date,screenshot,services,payment_status,referral_code)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)
  ");
  $stmt->bind_param("ssssssssssss", $order_id, $customer_name, $whatsapp, $email, $city, $transaction_id, $paid_amount, $payment_date, $screenshots_json, $services, $payment_status, $referral_code);
  $insert_success = $stmt->execute();
  $stmt->close();
  $conn->close();

  if ($insert_success) {
    try {
      require_once __DIR__ . '/backend/mailer.php';
      if (function_exists('buildNotificationHtml') && function_exists('sendNotificationEmail')) {
        $referral_display = !empty($referral_code) ? $referral_code : "N/A";
        $emailHtml = buildNotificationHtml("New Order Received", [
          "Order ID"       => $order_id,
          "Customer Name"  => $customer_name,
          "Email"          => $email,
          "WhatsApp"       => $whatsapp,
          "City"           => $city,
          "Paid Amount"    => "PKR " . $paid_amount,
          "Transaction ID" => $transaction_id,
          "Referral Code"  => $referral_display,
          "Payment Date"   => $payment_date,
        ], "Please login to the Admin Dashboard and review this order.");
        sendNotificationEmail("New Order Received - IFTS", $emailHtml);
      }
    } catch (\Throwable $e) {
      error_log("checkout.php: notification email failed — " . $e->getMessage());
    }
  }

  echo json_encode(["success" => $insert_success]);
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout – IFTS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --blue: #0d2b6b;
      --blue2: #1565c0;
      --blue-lt: #e8eef8;
      --green: #2e7d32;
      --gold: #b45309;
      --border: #e0e7f0;
      --bg: #f0f4f8;
      --text: #1a1a2e;
      --muted: #666;
      --radius: 12px;
    }

    body {
      font-family: 'Plus Jakarta Sans', 'Segoe UI', Arial, sans-serif;
      background: var(--bg);
      min-height: 100vh;
      color: var(--text);
      font-size: 14px;
    }

    /* ── TOP HEADER ── */
    .top-header {
      background: #fff;
      border-bottom: 1px solid var(--border);
      padding: 14px 40px;
      text-align: center;
      position: relative;
    }

    .top-header-line {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
    }

    .top-header-line::before,
    .top-header-line::after {
      content: '';
      flex: 1;
      max-width: 120px;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--blue2));
    }

    .top-header-line::after {
      background: linear-gradient(90deg, var(--blue2), transparent);
    }

    .top-header h1 {
      font-size: 13px;
      font-weight: 800;
      color: var(--blue);
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    /* ── PAGE WRAPPER ── */
    .page-wrap {
      padding: 28px 20px 40px;
    }

    /* ── CARD ── */
    .checkout-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 4px 32px rgba(13, 43, 107, .12);
      overflow: hidden;
      display: none;
      opacity: 0;
      transform: translateY(12px);
      transition: opacity .35s ease, transform .35s ease;
      max-width: 960px;
      margin: 0 auto;
    }

    .checkout-card.card-on {
      display: block;
    }

    .checkout-card.card-visible {
      opacity: 1;
      transform: none;
    }

    /* ── NAVBAR ── */
    .card-navbar {
      background: var(--blue);
      padding: 12px 20px;
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .navbar-logo-img {
      height: 30px;
      object-fit: contain;
    }

    .ifts-logo {
      font-size: 18px;
      font-weight: 900;
      color: #fff;
      font-style: italic;
      font-family: Georgia, serif;
      border: 2px solid #fff;
      padding: 2px 7px;
      border-radius: 3px;
    }

    .card-steps {
      display: flex;
      align-items: center;
      gap: 6px;
      flex: 1;
      justify-content: center;
    }

    .card-step {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 11.5px;
      color: rgba(255, 255, 255, .5);
      font-weight: 500;
    }

    .card-step.active {
      color: #fff;
      font-weight: 700;
    }

    .card-step-num {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      border: 1.5px solid rgba(255, 255, 255, .4);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10px;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
    }

    .card-step.active .card-step-num {
      background: #fff;
      border-color: #fff;
      color: var(--blue);
    }

    .card-step.done .card-step-num {
      background: rgba(255, 255, 255, .2);
      border-color: rgba(255, 255, 255, .5);
      color: #fff;
    }

    .card-step-arrow {
      color: rgba(255, 255, 255, .3);
      font-size: 11px;
    }

    .card-close {
      color: rgba(255, 255, 255, .7);
      font-size: 18px;
      cursor: pointer;
      background: none;
      border: none;
      padding: 4px;
      border-radius: 4px;
      transition: background .2s;
    }

    .card-close:hover {
      background: rgba(255, 255, 255, .15);
      color: #fff;
    }

    /* ── BOTTOM STRIP ── */
    .bottom-strip {
      background: #fff;
      border-top: 1px solid var(--border);
      padding: 14px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      flex-wrap: wrap;
    }

    .strip-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      color: var(--muted);
      font-weight: 500;
    }

    .strip-item i {
      color: var(--green);
      font-size: 16px;
    }

    .strip-item-text strong {
      display: block;
      font-size: 12px;
      font-weight: 700;
      color: var(--text);
    }

    .strip-item-text span {
      font-size: 11px;
      color: var(--muted);
    }

    /* last strip item (hours) */
    .strip-hours {
      background: var(--blue-lt);
      border-radius: 8px;
      padding: 6px 12px;
      font-size: 11.5px;
      font-weight: 700;
      color: var(--blue);
      display: flex;
      align-items: center;
      gap: 6px;
    }

    /* ════════════════════════════════
       CARD 1 — CART
    ════════════════════════════════ */
    .cart-body {
      padding: 24px 24px 0;
    }

    .cart-heading-row {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 20px;
    }

    .cart-icon-circle {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: var(--blue-lt);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .cart-icon-circle i {
      color: var(--blue);
      font-size: 22px;
    }

    .cart-heading-text h2 {
      font-size: 20px;
      font-weight: 700;
      color: var(--blue);
    }

    .cart-heading-text p {
      font-size: 12.5px;
      color: var(--muted);
      margin-top: 2px;
    }

    /* service items */
    .service-item {
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 12px 14px;
      margin-bottom: 10px;
      display: flex;
      align-items: flex-start;
      gap: 12px;
      transition: box-shadow .2s;
    }

    .service-item:hover {
      box-shadow: 0 2px 12px rgba(13, 43, 107, .09);
    }

    .service-icon {
      width: 38px;
      height: 38px;
      flex-shrink: 0;
      background: var(--blue-lt);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .service-icon i {
      color: var(--blue);
      font-size: 17px;
    }

    .service-info {
      flex: 1;
    }

    .service-id {
      font-size: 10.5px;
      font-weight: 700;
      color: var(--blue2);
      background: #e8f0fc;
      border-radius: 4px;
      padding: 1px 7px;
      display: inline-block;
      margin-bottom: 4px;
      letter-spacing: .3px;
    }

    .service-name {
      font-size: 13.5px;
      font-weight: 700;
      color: var(--blue);
      line-height: 1.35;
      margin-bottom: 2px;
    }

    .service-pkg {
      font-size: 11px;
      color: #888;
      text-transform: uppercase;
      letter-spacing: .3px;
    }

    .service-timeline {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 11.5px;
      color: var(--blue2);
      font-weight: 600;
      margin-top: 5px;
    }

    .service-timeline i {
      font-size: 11px;
    }

    .service-right {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 10px;
    }

    .service-price {
      font-size: 15px;
      font-weight: 800;
      color: var(--blue);
      white-space: nowrap;
    }

    .delete-btn {
      background: none;
      border: none;
      color: #bbb;
      cursor: pointer;
      font-size: 16px;
      transition: color .2s;
    }

    .delete-btn:hover {
      color: #e53935;
    }

    /* empty cart */
    .empty-cart {
      text-align: center;
      padding: 28px 16px;
      color: #aaa;
      font-size: 13px;
      display: none;
    }

    .empty-cart i {
      font-size: 36px;
      margin-bottom: 10px;
      display: block;
      color: #ddd;
    }

    /* add more */
    .add-more-card {
      border: 1.5px dashed #b0c4de;
      border-radius: 10px;
      padding: 11px 14px;
      margin-bottom: 18px;
      display: flex;
      align-items: center;
      gap: 12px;
      cursor: pointer;
      background: #fafcff;
      transition: background .2s, border-color .2s;
    }

    .add-more-card:hover {
      background: #f0f4ff;
      border-color: var(--blue);
    }

    .add-more-icon {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      border: 1.5px solid var(--blue);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .add-more-icon i {
      color: var(--blue);
      font-size: 13px;
    }

    .add-more-text {
      font-size: 13px;
      font-weight: 700;
      color: var(--blue);
    }

    .add-more-sub {
      font-size: 11px;
      color: #888;
    }

    /* order summary */
    .order-summary {
      border-top: 1px solid #e8eef8;
      padding-top: 14px;
      margin-bottom: 18px;
    }

    .order-summary h4 {
      font-size: 13px;
      font-weight: 700;
      color: var(--blue);
      margin-bottom: 9px;
    }

    .summary-row {
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      color: #555;
      margin-bottom: 5px;
    }

    .summary-row.discount {
      color: #c62828;
      font-weight: 600;
    }

    .summary-row.total {
      font-size: 15px;
      font-weight: 800;
      color: var(--blue);
      border-top: 1px solid #e8eef8;
      padding-top: 9px;
      margin-top: 4px;
    }

    /* proceed btn */
    .proceed-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      width: 100%;
      background: linear-gradient(135deg, var(--blue), var(--blue2));
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 14px;
      font-size: 14.5px;
      font-weight: 700;
      cursor: pointer;
      margin-bottom: 12px;
      letter-spacing: .3px;
      transition: opacity .2s, transform .15s;
      font-family: inherit;
    }

    .proceed-btn:hover {
      opacity: .92;
      transform: translateY(-1px);
    }

    .proceed-btn:active {
      transform: none;
    }

    .proceed-btn:disabled {
      background: #b0bec5;
      cursor: not-allowed;
    }

    .secure-text {
      text-align: center;
      font-size: 11.5px;
      color: #999;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
      padding-bottom: 20px;
    }

    /* ════════════════════════════════
       CARD 2 — PAYMENT (two-column)
    ════════════════════════════════ */
    .payment-body {
      padding: 24px;
    }

    /* two-col grid */
    .payment-cols {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    /* LEFT column */
    .pay-left {}

    .payment-heading-row {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 18px;
    }

    .payment-icon-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: var(--blue-lt);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .payment-icon-circle i {
      color: var(--blue);
      font-size: 20px;
    }

    .payment-heading-text h2 {
      font-size: 19px;
      font-weight: 700;
      color: var(--blue);
    }

    .payment-heading-text p {
      font-size: 12px;
      color: var(--muted);
      margin-top: 2px;
    }

    .payment-order-summary {
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 12px 14px;
      margin-bottom: 16px;
      background: #fafcff;
    }

    .pay-os-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 6px;
    }

    .pay-os-top h4 {
      font-size: 13px;
      font-weight: 700;
      color: var(--text);
    }

    .view-cart-link {
      font-size: 12px;
      color: var(--blue2);
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
    }

    .view-cart-link:hover {
      text-decoration: underline;
    }

    .payment-total-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .payment-total-row span:first-child {
      font-size: 13px;
      font-weight: 600;
      color: #333;
    }

    .payment-total-amount {
      font-size: 17px;
      font-weight: 800;
      color: var(--blue);
    }

    /* bank box */
    .section-heading {
      font-size: 13px;
      font-weight: 700;
      color: var(--blue);
      margin-bottom: 12px;
      padding-bottom: 8px;
      border-bottom: 2px solid #e8eef8;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .section-heading i {
      font-size: 13px;
      color: var(--blue2);
    }

    .bank-box {
      border: 1px solid #c5d5ea;
      border-radius: 12px;
      padding: 14px 16px;
      background: #fafcff;
      margin-bottom: 16px;
    }

    .bank-top-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
      padding-bottom: 10px;
      border-bottom: 1px solid #e8eef8;
    }

    .askari-text {
      font-size: 17px;
      font-weight: 800;
      color: #1a5276;
      font-family: Georgia, serif;
    }

    .verified-badge {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 2px;
    }

    .verified-top {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 11px;
      font-weight: 700;
      color: var(--green);
    }

    .verified-sub {
      font-size: 10px;
      color: #666;
      text-align: right;
    }

    .bank-detail-row {
      display: flex;
      align-items: center;
      gap: 9px;
      margin-bottom: 7px;
      font-size: 12.5px;
    }

    .bank-detail-row i {
      color: var(--blue);
      font-size: 12px;
      width: 15px;
      text-align: center;
    }

    .bank-detail-label {
      color: #555;
      min-width: 100px;
      font-weight: 500;
    }

    .bank-detail-value {
      font-weight: 700;
      color: var(--text);
      font-size: 11.5px;
      flex: 1;
    }

    .copy-btn {
      background: none;
      border: 1px solid #d0dbe8;
      cursor: pointer;
      color: var(--blue2);
      font-size: 11px;
      padding: 2px 7px;
      border-radius: 4px;
      transition: background .15s;
      white-space: nowrap;
      flex-shrink: 0;
    }

    .copy-btn:hover {
      background: var(--blue-lt);
    }

    .copy-btn.copied {
      color: var(--green);
      border-color: var(--green);
    }

    /* instructions */
    .instructions-box {
      border: 1px solid #d0e4f7;
      border-radius: 10px;
      padding: 12px 14px;
      background: #f0f7ff;
    }

    .instructions-heading {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 12.5px;
      font-weight: 700;
      color: var(--text);
      margin-bottom: 8px;
    }

    .instructions-heading i {
      color: var(--blue2);
    }

    .instructions-list {
      list-style: disc;
      padding-left: 18px;
    }

    .instructions-list li {
      font-size: 12px;
      color: #444;
      margin-bottom: 4px;
      line-height: 1.45;
    }

    /* RIGHT column — form */
    .pay-right {}

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-bottom: 14px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .form-group.full {
      grid-column: 1/-1;
    }

    .form-label {
      font-size: 11.5px;
      font-weight: 700;
      color: #444;
      letter-spacing: .3px;
    }

    .form-label .req {
      color: #e53935;
      margin-left: 2px;
    }

    .form-input {
      border: 1.5px solid #d0dbe8;
      border-radius: 8px;
      padding: 9px 11px;
      font-size: 13px;
      color: var(--text);
      font-family: inherit;
      background: #fafcff;
      outline: none;
      transition: border-color .2s, box-shadow .2s;
    }

    .form-input:focus {
      border-color: var(--blue);
      box-shadow: 0 0 0 3px rgba(13, 43, 107, .08);
    }

    .form-input::placeholder {
      color: #aab;
      font-size: 12px;
    }

    /* upload */
    .upload-label {
      font-size: 13px;
      font-weight: 700;
      color: var(--text);
      margin-bottom: 8px;
    }

    .upload-box {
      border: 2px dashed #b0c4de;
      border-radius: 12px;
      padding: 22px 14px;
      text-align: center;
      background: #f7faff;
      cursor: pointer;
      transition: border-color .2s, background .2s;
      margin-bottom: 12px;
    }

    .upload-box:hover {
      border-color: var(--blue);
      background: #eef4ff;
    }

    .upload-box.upload-done {
      border-color: var(--green);
      background: #f0fff4;
    }

    .upload-box i {
      font-size: 30px;
      color: #4a90d9;
      margin-bottom: 8px;
      display: block;
    }

    .upload-box.upload-done i {
      color: var(--green);
    }

    .upload-main {
      font-size: 13px;
      font-weight: 700;
      color: var(--text);
      margin-bottom: 3px;
    }

    .upload-sub {
      font-size: 11px;
      color: #777;
    }

    .preview-wrap {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 12px;
    }

    .preview-thumb {
      position: relative;
      width: 64px;
      height: 64px;
      border-radius: 8px;
      overflow: hidden;
      border: 1.5px solid #d0dbe8;
    }

    .preview-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .remove-thumb {
      position: absolute;
      top: 2px;
      right: 2px;
      width: 18px;
      height: 18px;
      background: rgba(0, 0, 0, .55);
      color: #fff;
      border: none;
      border-radius: 50%;
      font-size: 11px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .remove-thumb:hover {
      background: #e53935;
    }

    /* payment buttons */
    .payment-buttons {
      display: flex;
      gap: 10px;
      margin-top: 16px;
    }

    .back-btn {
      flex: 0 0 auto;
      display: flex;
      align-items: center;
      gap: 8px;
      background: #fff;
      color: var(--blue);
      border: 1.5px solid var(--blue);
      border-radius: 10px;
      padding: 12px 18px;
      font-size: 13px;
      font-weight: 700;
      cursor: pointer;
      transition: background .2s;
      font-family: inherit;
    }

    .back-btn:hover {
      background: #f0f4f8;
    }

    .paid-btn {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background: linear-gradient(135deg, var(--blue), var(--blue2));
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 12px;
      font-size: 13.5px;
      font-weight: 700;
      cursor: pointer;
      font-family: inherit;
      transition: opacity .2s, transform .15s;
    }

    .paid-btn:hover {
      opacity: .9;
      transform: translateY(-1px);
    }

    .paid-btn:disabled {
      background: #b0bec5;
      cursor: not-allowed;
      transform: none;
    }

    /* ════════════════════════════════
       CARD 3 — CONFIRMATION
    ════════════════════════════════ */
    .confirm-body {}

    /* success banner */
    .confirm-banner {
      background: linear-gradient(135deg, var(--blue), var(--blue2));
      padding: 32px 28px 28px;
      display: flex;
      align-items: center;
      gap: 28px;
    }

    .banner-icon-wrap {
      flex-shrink: 0;
    }

    .success-circle {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: var(--green);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 0 10px rgba(46, 125, 50, .2), 0 0 0 20px rgba(46, 125, 50, .08);
    }

    .success-circle i {
      color: #fff;
      font-size: 34px;
    }

    .banner-text {}

    .banner-text h2 {
      font-size: 20px;
      font-weight: 800;
      color: #fff;
      margin-bottom: 8px;
      letter-spacing: .3px;
    }

    .banner-text p {
      font-size: 13px;
      color: rgba(255, 255, 255, .8);
      line-height: 1.6;
    }

    /* summary strip */
    .conf-summary-strip {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      border-bottom: 1px solid var(--border);
      background: #fff;
    }

    .conf-sum-item {
      padding: 16px 12px;
      text-align: center;
      border-right: 1px solid var(--border);
    }

    .conf-sum-item:last-child {
      border-right: none;
    }

    .conf-sum-icon {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--blue-lt);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 8px;
    }

    .conf-sum-icon i {
      color: var(--blue);
      font-size: 15px;
    }

    .conf-sum-label {
      font-size: 10px;
      color: #888;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: .5px;
      margin-bottom: 4px;
    }

    .conf-sum-value {
      font-size: 13px;
      font-weight: 800;
      color: var(--blue);
    }

    /* payment meta row */
    .conf-meta-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      border-bottom: 1px solid var(--border);
      background: #fff;
    }

    .conf-meta-item {
      padding: 14px 16px;
      border-right: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .conf-meta-item:last-child {
      border-right: none;
    }

    .conf-meta-icon {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--blue-lt);
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .conf-meta-icon i {
      color: var(--blue);
      font-size: 14px;
    }

    .conf-meta-label {
      font-size: 11px;
      color: var(--muted);
      margin-bottom: 3px;
    }

    .conf-meta-value {
      font-size: 13px;
      font-weight: 700;
      color: var(--text);
    }

    .status-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 11.5px;
      font-weight: 700;
    }

    .status-badge.pending {
      background: #fff3cd;
      color: #856404;
    }

    .status-badge.verified {
      background: #e8f5e9;
      color: var(--green);
    }

    .conf-meta-icon.green {
      background: #e8f5e9;
    }

    .conf-meta-icon.green i {
      color: var(--green);
    }

    /* confirm inner */
    .confirm-inner {
      padding: 24px 24px 0;
    }

    /* two-col confirm layout */
    .confirm-cols {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 20px;
    }

    /* next steps */
    .section-title {
      font-size: 13px;
      font-weight: 800;
      color: var(--text);
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      gap: 8px;
      letter-spacing: .3px;
    }

    .section-title i {
      color: var(--blue2);
    }

    .next-steps-flow {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 0;
    }

    .next-step-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      flex: 1;
      position: relative;
      padding: 0 5px;
    }

    .next-step-item:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 21px;
      right: -17px;
      width: 34px;
      height: 2px;
      background: #4caf50;
      z-index: 0;
    }

    .next-step-item:not(:last-child)::before {
      content: '';
      position: absolute;
      top: 16px;
      right: -7px;
      border-top: 5px solid transparent;
      border-bottom: 5px solid transparent;
      border-left: 8px solid #4caf50;
      z-index: 1;
    }

    .next-step-icon-wrap {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: #fff;
      border: 2px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 8px;
      position: relative;
      z-index: 2;
      box-shadow: 0 2px 8px rgba(13, 43, 107, .1);
    }

    .next-step-icon-wrap i {
      color: var(--blue);
      font-size: 17px;
    }

    .next-step-badge {
      position: absolute;
      top: -5px;
      right: -5px;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      background: var(--blue);
      color: #fff;
      font-size: 9px;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #fff;
    }

    .next-step-title {
      font-size: 11.5px;
      font-weight: 700;
      color: var(--blue);
      margin-bottom: 3px;
    }

    .next-step-text {
      font-size: 10px;
      color: #666;
      line-height: 1.45;
    }

    /* important box */
    .important-box {
      background: #fffbf0;
      border: 1px solid #ffe082;
      border-radius: 10px;
      padding: 14px;
    }

    .important-heading {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 13px;
      font-weight: 700;
      color: var(--gold);
      margin-bottom: 10px;
    }

    .important-list {
      list-style: none;
    }

    .important-list li {
      font-size: 12.5px;
      color: #555;
      margin-bottom: 6px;
      display: flex;
      align-items: flex-start;
      gap: 7px;
      line-height: 1.45;
    }

    .important-list li:last-child {
      margin-bottom: 0;
    }

    .li-check {
      color: #4caf50;
      font-size: 11px;
      margin-top: 2px;
      flex-shrink: 0;
    }

    /* need help */
    .help-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 8px;
    }

    .help-item {
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 12px 8px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      cursor: pointer;
      transition: background .15s, box-shadow .2s;
    }

    .help-item:hover {
      background: #f0f4f8;
      box-shadow: 0 2px 10px rgba(13, 43, 107, .08);
    }

    .help-icon {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .help-icon.wa {
      background: #e8f5e9;
    }

    .help-icon.wa i {
      color: #25d366;
      font-size: 20px;
    }

    .help-icon.em {
      background: var(--blue-lt);
    }

    .help-icon.em i {
      color: var(--blue2);
      font-size: 17px;
    }

    .help-icon.hr {
      background: #fff3e0;
    }

    .help-icon.hr i {
      color: #f57c00;
      font-size: 17px;
    }

    .help-title {
      font-size: 11.5px;
      font-weight: 700;
      color: var(--text);
    }

    .help-sub {
      font-size: 10.5px;
      color: #777;
      line-height: 1.3;
    }

    /* confirm buttons */
    .confirm-buttons {
      display: flex;
      gap: 10px;
      margin-bottom: 0;
    }

    .dashboard-btn {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background: linear-gradient(135deg, var(--blue), var(--blue2));
      color: #fff;
      border: none;
      border-radius: 10px;
      padding: 13px 10px;
      font-size: 13.5px;
      font-weight: 700;
      cursor: pointer;
      font-family: inherit;
      transition: opacity .2s;
    }

    .dashboard-btn:hover {
      opacity: .9;
    }

    .browse-btn {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background: #fff;
      color: var(--blue);
      border: 1.5px solid var(--blue);
      border-radius: 10px;
      padding: 13px 10px;
      font-size: 13.5px;
      font-weight: 700;
      cursor: pointer;
      font-family: inherit;
      transition: background .2s;
    }

    .browse-btn:hover {
      background: var(--blue-lt);
    }

    .browse-side {
      display: flex;
      flex-direction: column;
      justify-content: center;
      font-size: 12px;
      color: var(--muted);
    }

    .browse-side strong {
      color: var(--text);
      font-size: 12.5px;
    }

    /* thank you bar */
    .thankyou-bar {
      background: linear-gradient(135deg, var(--blue), var(--blue2));
      padding: 14px 20px;
      margin-top: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .thankyou-bar i {
      color: rgba(255, 255, 255, .6);
    }

    .thankyou-star {
      color: #ffd700;
    }

    .thankyou-text {
      font-size: 13px;
      font-weight: 700;
      color: #fff;
      text-align: center;
    }

    .thankyou-sub {
      font-size: 11px;
      color: rgba(255, 255, 255, .65);
      text-align: center;
      margin-top: 2px;
    }

    /* ── TOAST ── */
    .toast {
      position: fixed;
      bottom: 28px;
      left: 50%;
      transform: translateX(-50%) translateY(20px);
      background: var(--blue);
      color: #fff;
      padding: 11px 24px;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 600;
      z-index: 9999;
      opacity: 0;
      transition: opacity .3s, transform .3s;
      pointer-events: none;
      white-space: nowrap;
      box-shadow: 0 4px 16px rgba(0, 0, 0, .18);
    }

    .toast.show {
      opacity: 1;
      transform: translateX(-50%) translateY(0);
    }

    .toast.t-ok {
      background: var(--green);
    }

    .toast.t-err {
      background: #c62828;
    }

    /* ── SPINNER ── */
    .spinner-overlay {
      position: fixed;
      inset: 0;
      background: rgba(13, 43, 107, .4);
      z-index: 9998;
      display: none;
      align-items: center;
      justify-content: center;
    }

    .spinner-overlay.show {
      display: flex;
    }

    .spinner-box {
      background: #fff;
      border-radius: 14px;
      padding: 28px 38px;
      text-align: center;
      box-shadow: 0 8px 32px rgba(0, 0, 0, .2);
    }

    .spinner {
      width: 46px;
      height: 46px;
      border: 4px solid #e8eef8;
      border-top-color: var(--blue);
      border-radius: 50%;
      animation: spin .8s linear infinite;
      margin: 0 auto 12px;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .spinner-text {
      font-size: 14px;
      font-weight: 700;
      color: var(--blue);
    }

    .spinner-sub {
      font-size: 12px;
      color: #888;
      margin-top: 4px;
    }

    /* ════════════════════════════════
       RESPONSIVE — MOBILE
    ════════════════════════════════ */
    @media (max-width: 760px) {
      .top-header {
        padding: 12px 16px;
      }

      .page-wrap {
        padding: 16px 12px 32px;
      }

      /* payment two-col → single */
      .payment-cols {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      /* confirm banner → stack */
      .confirm-banner {
        flex-direction: column;
        align-items: flex-start;
        gap: 18px;
        padding: 24px 20px;
      }

      /* conf summary strip → 2×2 */
      .conf-summary-strip {
        grid-template-columns: 1fr 1fr;
      }

      .conf-sum-item:nth-child(2) {
        border-right: none;
      }

      .conf-sum-item:nth-child(3) {
        border-top: 1px solid var(--border);
        border-right: 1px solid var(--border);
      }

      .conf-sum-item:nth-child(4) {
        border-top: 1px solid var(--border);
      }

      /* meta row → stack */
      .conf-meta-row {
        grid-template-columns: 1fr;
      }

      .conf-meta-item {
        border-right: none;
        border-bottom: 1px solid var(--border);
      }

      .conf-meta-item:last-child {
        border-bottom: none;
      }

      /* confirm inner cols → single */
      .confirm-cols {
        grid-template-columns: 1fr;
      }

      /* next steps → vertical */
      .next-steps-flow {
        flex-direction: column;
        align-items: center;
        gap: 0;
      }

      .next-step-item {
        flex-direction: row;
        text-align: left;
        align-items: flex-start;
        width: 100%;
        padding: 0;
        margin-bottom: 14px;
        gap: 12px;
      }

      .next-step-item:not(:last-child)::after {
        top: auto;
        bottom: -10px;
        left: 21px;
        right: auto;
        width: 2px;
        height: 10px;
      }

      .next-step-item:not(:last-child)::before {
        top: auto;
        bottom: -14px;
        left: 16px;
        right: auto;
        border-top: 8px solid #4caf50;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: none;
      }

      .next-step-icon-wrap {
        flex-shrink: 0;
        margin-bottom: 0;
      }

      /* help grid → single col */
      .help-grid {
        grid-template-columns: 1fr;
      }

      /* confirm buttons → stack */
      .confirm-buttons {
        flex-direction: column;
      }

      /* form grid → single */
      .form-grid {
        grid-template-columns: 1fr;
      }

      /* bottom strip */
      .bottom-strip {
        padding: 12px 16px;
        gap: 12px;
        justify-content: flex-start;
      }

      .strip-item {
        flex: 0 0 calc(50% - 5px);
      }

      .strip-hours {
        width: 100%;
        justify-content: center;
      }

      /* card steps — shorten labels */
      .card-step span {
        display: none;
      }

      .card-step.active span {
        display: inline;
      }

      /* payment buttons */
      .payment-buttons {
        flex-direction: column;
      }

      .back-btn {
        flex: auto;
      }

      /* cart body */
      .cart-body {
        padding: 16px 16px 0;
      }

      .payment-body {
        padding: 16px;
      }

      .confirm-inner {
        padding: 16px 16px 0;
      }
    }

    @media (max-width: 480px) {
      .conf-summary-strip {
        grid-template-columns: 1fr 1fr;
      }
    }
  </style>
</head>

<body>

  <!-- SPINNER -->
  <div class="spinner-overlay" id="spinner-overlay">
    <div class="spinner-box">
      <div class="spinner"></div>
      <div class="spinner-text">Submitting Payment…</div>
      <div class="spinner-sub">Please wait, do not close this page</div>
    </div>
  </div>

  <!-- TOP HEADER -->
  <div class="top-header">
    <div class="top-header-line">
      <h1>Full Checkout Flow</h1>
    </div>
  </div>

  <div class="page-wrap">

    <!-- ══════════════════════════════════
       CARD 1 — CART
  ══════════════════════════════════ -->
    <div class="checkout-card" id="card-cart">
      <div class="card-navbar">
        <img src="images/logo2.png" alt="IFTS" class="navbar-logo-img"
          onerror="this.style.display='none';document.getElementById('logo1').style.display='block'">
        <div class="ifts-logo" id="logo1" style="display:none">IFTS</div>
        <div class="card-steps">
          <div class="card-step active">
            <div class="card-step-num">1</div><span>Cart</span>
          </div>
          <span class="card-step-arrow">——</span>
          <div class="card-step">
            <div class="card-step-num">2</div><span>Payment</span>
          </div>
          <span class="card-step-arrow">——</span>
          <div class="card-step">
            <div class="card-step-num">3</div><span>Confirmation</span>
          </div>
        </div>
        <button class="card-close" onclick="closeCheckout()"><i class="fa fa-times"></i></button>
      </div>

      <div class="cart-body">
        <div class="cart-heading-row">
          <div class="cart-icon-circle"><i class="fa fa-shopping-cart"></i></div>
          <div class="cart-heading-text">
            <h2>Your Cart</h2>
            <p>Review your selected services before proceeding</p>
          </div>
        </div>

        <div id="cart-items"></div>
        <div class="empty-cart" id="empty-cart">
          <i class="fa fa-shopping-cart"></i>
          Your cart is empty. Add services to proceed.
        </div>

        <div class="add-more-card" onclick="window.location.href='all_services.php'">
          <div class="add-more-icon"><i class="fa fa-plus"></i></div>
          <div>
            <div class="add-more-text">Add More Services</div>
            <div class="add-more-sub">Browse &amp; add more services to your cart</div>
          </div>
        </div>

        <div class="order-summary">
          <h4>Order Summary</h4>
          <div class="summary-row"><span>Subtotal</span><span id="subtotal-val">Rs. 0</span></div>
          <div class="summary-row total"><span>Total Amount</span><span id="total-val">Rs. 0</span></div>
        </div>

        <button class="proceed-btn" id="proceed-btn" onclick="proceedToPayment()">
          Proceed to Payment <i class="fa fa-arrow-right"></i>
        </button>
        <div class="secure-text"><i class="fa fa-lock"></i> Your payment information is secure with us</div>
      </div>

      <!-- Bottom Strip -->
      <div class="bottom-strip">
        <div class="strip-item">
          <i class="fa fa-shield-halved"></i>
          <div class="strip-item-text"><strong>Secure Payment</strong><span>Your payment is 100% secure</span></div>
        </div>
        <div class="strip-item">
          <i class="fa fa-user-check"></i>
          <div class="strip-item-text"><strong>Manual Verification</strong><span>Expert team verification</span></div>
        </div>
        <div class="strip-item">
          <i class="fab fa-whatsapp"></i>
          <div class="strip-item-text"><strong>WhatsApp Updates</strong><span>Real-time order updates</span></div>
        </div>
        <div class="strip-item">
          <i class="fa fa-file-lines"></i>
          <div class="strip-item-text"><strong>Digital Document Collection</strong><span>Paperless &amp; hassle-free</span></div>
        </div>
      </div>
    </div>

    <!-- ══════════════════════════════════
       CARD 2 — PAYMENT
  ══════════════════════════════════ -->
    <div class="checkout-card" id="card-payment">
      <div class="card-navbar">
        <img src="images/logo2.png" alt="IFTS" class="navbar-logo-img"
          onerror="this.style.display='none';document.getElementById('logo2').style.display='block'">
        <div class="ifts-logo" id="logo2" style="display:none">IFTS</div>
        <div class="card-steps">
          <div class="card-step done">
            <div class="card-step-num"><i class="fa fa-check" style="font-size:9px"></i></div><span>Cart</span>
          </div>
          <span class="card-step-arrow">——</span>
          <div class="card-step active">
            <div class="card-step-num">2</div><span>Payment</span>
          </div>
          <span class="card-step-arrow">——</span>
          <div class="card-step">
            <div class="card-step-num">3</div><span>Confirmation</span>
          </div>
        </div>
        <button class="card-close" onclick="closeCheckout()"><i class="fa fa-times"></i></button>
      </div>

      <div class="payment-body">
        <div class="payment-cols">

          <!-- LEFT -->
          <div class="pay-left">
            <div class="payment-heading-row">
              <div class="payment-icon-circle"><i class="fa fa-lock"></i></div>
              <div class="payment-heading-text">
                <h2>Payment</h2>
                <p>Complete your payment and fill in the form</p>
              </div>
            </div>

            <div class="payment-order-summary">
              <div class="pay-os-top">
                <h4>Order Summary</h4>
                <a class="view-cart-link" onclick="goToCart()">View Cart</a>
              </div>
              <div class="payment-total-row">
                <span>Total Amount</span>
                <span class="payment-total-amount" id="pay-total">Rs. 0</span>
              </div>
            </div>

            <div class="section-heading"><i class="fa fa-university"></i> Bank Account Details</div>
            <div class="bank-box">
              <div class="bank-top-row">
                <div>
                  <span class="askari-text">askari<span style="font-style:normal;font-weight:400">bank</span></span>
                  <div style="font-size:7px;color:#888;letter-spacing:.5px;margin-top:1px">LIMITED</div>
                </div>
                <div class="verified-badge">
                  <div class="verified-top"><i class="fa fa-check-circle"></i> Verified Account</div>
                  <div class="verified-sub">Account details are verified<br>and secure.</div>
                </div>
              </div>
              <div class="bank-detail-row"><i class="fa fa-id-card"></i><span class="bank-detail-label">Title / Account Name:</span><span class="bank-detail-value">Ismail Financial and Tax Solutions</span></div>
              <div class="bank-detail-row"><i class="fa fa-credit-card"></i><span class="bank-detail-label">A/C Number:</span><span class="bank-detail-value">08490200008040</span><button class="copy-btn" id="copy-acno" onclick="copyText('08490200008040','copy-acno')"><i class="fa fa-copy"></i> Copy</button></div>
              <div class="bank-detail-row"><i class="fa fa-hashtag"></i><span class="bank-detail-label">IBAN:</span><span class="bank-detail-value">PK87ASCM0008490200008040</span><button class="copy-btn" id="copy-iban" onclick="copyText('PK87ASCM0008490200008040','copy-iban')"><i class="fa fa-copy"></i> Copy</button></div>
              <div class="bank-detail-row"><i class="fa fa-university"></i><span class="bank-detail-label">Bank Name:</span><span class="bank-detail-value">Askari Bank Limited</span><button class="copy-btn" id="copy-bank" onclick="copyText('Askari Bank Limited','copy-bank')"><i class="fa fa-copy"></i> Copy</button></div>
            </div>

            <div class="instructions-box">
              <div class="instructions-heading"><i class="fa fa-info-circle"></i> Important Instructions</div>
              <ul class="instructions-list">
                <li>Please transfer the exact amount as shown above.</li>
                <li>After payment, fill in the form and upload the screenshot for verification.</li>
                <li>Payment verification usually takes 5–30 minutes during business hours.</li>
                <li>Our team will verify and confirm your payment within minutes.</li>
              </ul>
            </div>
          </div>

          <!-- RIGHT — FORM -->
          <div class="pay-right">
            <div class="section-heading"><i class="fa fa-file-alt"></i> Payment Confirmation Form</div>

            <div class="form-grid">
              <div class="form-group">
                <label class="form-label">Full Name <span class="req">*</span></label>
                <input type="text" class="form-input" id="pf-name" placeholder="e.g. Ahmed Khan">
              </div>
              <div class="form-group">
                <label class="form-label">WhatsApp Number <span class="req">*</span></label>
                <input type="tel" class="form-input" id="pf-whatsapp" placeholder="e.g. 03XX XXXXXXXX">
              </div>
              <div class="form-group">
                <label class="form-label">Email Address <span class="req">*</span></label>
                <input type="email" class="form-input" id="pf-email" placeholder="e.g. ahmed@email.com">
              </div>
              <div class="form-group">
                <label class="form-label">City <span class="req">*</span></label>
                <input type="text" class="form-input" id="pf-city" placeholder="e.g. Karachi">
              </div>
              <div class="form-group">
                <label class="form-label">Transaction ID / Reference No <span class="req">*</span></label>
                <input type="text" class="form-input" id="pf-txn" placeholder="e.g. TXN123456789">
              </div>
              <div class="form-group">
                <label class="form-label">Referral / Coupon Code</label>
                <input type="text" class="form-input" id="pf-referral" placeholder="E.G. ALIREF OR PARTNER10"
                  autocomplete="off" spellcheck="false" style="text-transform:uppercase">
              </div>
              <div class="form-group">
                <label class="form-label">Paid Amount (Rs.) <span class="req">*</span></label>
                <input type="number" class="form-input" id="pf-amount" placeholder="e.g. 7850">
              </div>
              <div class="form-group">
                <label class="form-label">Payment Date <span class="req">*</span></label>
                <input type="date" class="form-input" id="pf-date">
              </div>
            </div>

            <div class="upload-label">Upload Payment Screenshot(s) <span class="req" style="color:#e53935">*</span></div>
            <div class="upload-box" id="upload-box" onclick="triggerUpload()">
              <i class="fa fa-cloud-upload-alt" id="upload-icon"></i>
              <div class="upload-main" id="upload-main">Click to upload or drag &amp; drop</div>
              <div class="upload-sub" id="upload-sub">You may upload one or multiple payment screenshots for verification<br>( JPG, PNG, WEBP – Max 5MB each )</div>
            </div>
            <div class="preview-wrap" id="upload-preview-list"></div>
            <input type="file" id="file-input" accept="image/jpeg,image/png,image/webp" multiple
              style="display:none" onchange="handleFiles(this.files)">

            <div class="payment-buttons">
              <button class="back-btn" onclick="goToCart()"><i class="fa fa-arrow-left"></i> Back to Cart</button>
              <button class="paid-btn" id="paid-btn" onclick="proceedToConfirm()">
                SUBMIT PAYMENT &amp; START SERVICE <i class="fa fa-arrow-right"></i>
              </button>
            </div>
            <div class="secure-text" style="margin-top:10px"><i class="fa fa-lock"></i> Your payment information is secure with us</div>
          </div>

        </div><!-- /payment-cols -->
      </div><!-- /payment-body -->

      <!-- Bottom Strip -->
      <div class="bottom-strip">
        <div class="strip-item">
          <i class="fa fa-shield-halved"></i>
          <div class="strip-item-text"><strong>Secure Payment</strong><span>Your payment is 100% secure</span></div>
        </div>
        <div class="strip-item">
          <i class="fa fa-user-check"></i>
          <div class="strip-item-text"><strong>Manual Verification</strong><span>Expert team verification</span></div>
        </div>
        <div class="strip-item">
          <i class="fab fa-whatsapp"></i>
          <div class="strip-item-text"><strong>WhatsApp Updates</strong><span>Real-time order updates</span></div>
        </div>
        <div class="strip-item">
          <i class="fa fa-file-lines"></i>
          <div class="strip-item-text"><strong>Digital Document Collection</strong><span>Paperless &amp; hassle-free</span></div>
        </div>
        <div class="strip-hours"><i class="fa fa-clock"></i> Verification Hours: &nbsp;<strong>Monday–Saturday | 9:00 AM – 6:00 PM</strong></div>
      </div>
    </div>

    <!-- ══════════════════════════════════
       CARD 3 — CONFIRMATION
  ══════════════════════════════════ -->
    <div class="checkout-card" id="card-confirm">
      <div class="card-navbar">
        <img src="images/logo2.png" alt="IFTS" class="navbar-logo-img"
          onerror="this.style.display='none';document.getElementById('logo3').style.display='block'">
        <div class="ifts-logo" id="logo3" style="display:none">IFTS</div>
        <div class="card-steps">
          <div class="card-step done">
            <div class="card-step-num"><i class="fa fa-check" style="font-size:9px"></i></div><span>Cart</span>
          </div>
          <span class="card-step-arrow">——</span>
          <div class="card-step done">
            <div class="card-step-num"><i class="fa fa-check" style="font-size:9px"></i></div><span>Payment</span>
          </div>
          <span class="card-step-arrow">——</span>
          <div class="card-step active">
            <div class="card-step-num">3</div><span>Confirmation</span>
          </div>
        </div>
        <button class="card-close" onclick="closeCheckout()"><i class="fa fa-times"></i></button>
      </div>

      <div class="confirm-body">

        <!-- Banner -->
        <div class="confirm-banner">
          <div class="banner-icon-wrap">
            <div class="success-circle"><i class="fa fa-check"></i></div>
          </div>
          <div class="banner-text">
            <h2>Payment Confirmation Received!</h2>
            <p>Thank you! Your payment details have been submitted successfully.<br>Our finance team will verify your payment shortly.</p>
          </div>
        </div>

        <!-- Summary Strip (4 items) -->
        <div class="conf-summary-strip">
          <div class="conf-sum-item">
            <div class="conf-sum-icon"><i class="fa fa-hashtag"></i></div>
            <div class="conf-sum-label">Reference ID</div>
            <div class="conf-sum-value" id="conf-id">—</div>
          </div>
          <div class="conf-sum-item">
            <div class="conf-sum-icon"><i class="fa fa-calendar-alt"></i></div>
            <div class="conf-sum-label">Submitted On</div>
            <div class="conf-sum-value" id="conf-date">—</div>
          </div>
          <div class="conf-sum-item">
            <div class="conf-sum-icon"><i class="fa fa-money-bill-wave"></i></div>
            <div class="conf-sum-label">Total Amount</div>
            <div class="conf-sum-value" id="conf-total">—</div>
          </div>
          <div class="conf-sum-item">
            <div class="conf-sum-icon"><i class="fa fa-boxes-stacked"></i></div>
            <div class="conf-sum-label">Services Ordered</div>
            <div class="conf-sum-value" id="conf-services-count">—</div>
          </div>
        </div>

        <!-- Meta Row (3 items) -->
        <div class="conf-meta-row">
          <div class="conf-meta-item">
            <div class="conf-meta-icon"><i class="fa fa-university"></i></div>
            <div>
              <div class="conf-meta-label">Payment Method</div>
              <div class="conf-meta-value">Bank Transfer (Askari Bank)</div>
            </div>
          </div>
          <div class="conf-meta-item">
            <div class="conf-meta-icon"><i class="fa fa-credit-card"></i></div>
            <div>
              <div class="conf-meta-label">Payment Status</div>
              <div class="conf-meta-value">
                <span class="status-badge pending" id="pay-status-badge">⏳ Verification in Progress</span>
              </div>
              <div style="font-size:11px;color:var(--muted);margin-top:3px">Expected: Within 5–30 Minutes</div>
            </div>
          </div>
          <div class="conf-meta-item">
            <div class="conf-meta-icon green"><i class="fa fa-shield-halved"></i></div>
            <div>
              <div class="conf-meta-label" style="color:var(--green);font-weight:700">Your payment is secure with us.</div>
              <div style="font-size:11.5px;color:var(--muted)">We do not share your information with any third party.</div>
            </div>
          </div>
        </div>

        <!-- Inner -->
        <div class="confirm-inner">

          <!-- What Happens Next -->
          <div class="section-title"><i class="fa fa-list-check"></i> What Happens Next?</div>
          <div class="next-steps-flow" style="margin-bottom:24px">
            <div class="next-step-item">
              <div class="next-step-icon-wrap"><i class="fa fa-search"></i>
                <div class="next-step-badge">1</div>
              </div>
              <div>
                <div class="next-step-title">Verification</div>
                <div class="next-step-text">Our accounts team is verifying your payment details.</div>
              </div>
            </div>
            <div class="next-step-item">
              <div class="next-step-icon-wrap"><i class="fa fa-check-circle"></i>
                <div class="next-step-badge">2</div>
              </div>
              <div>
                <div class="next-step-title">Confirmation</div>
                <div class="next-step-text">Once verified, you will be notified immediately.</div>
              </div>
            </div>
            <div class="next-step-item">
              <div class="next-step-icon-wrap"><i class="fa fa-file-alt"></i>
                <div class="next-step-badge">3</div>
              </div>
              <div>
                <div class="next-step-title">Receive Data Collection Forms</div>
                <div class="next-step-text">You will receive IFTS Data Collection Form(s) via WhatsApp &amp; Email.</div>
              </div>
            </div>
            <div class="next-step-item">
              <div class="next-step-icon-wrap"><i class="fa fa-rocket"></i>
                <div class="next-step-badge">4</div>
              </div>
              <div>
                <div class="next-step-title">Start Process</div>
                <div class="next-step-text">Submit the forms and our expert team will start processing your order.</div>
              </div>
            </div>
          </div>

          <!-- Two-col: Important Info + Need Help -->
          <div class="confirm-cols">
            <div class="important-box">
              <div class="important-heading"><i class="fa fa-info-circle"></i> Important Information</div>
              <ul class="important-list">
                <li><i class="fa fa-check li-check"></i> You will receive updates on your WhatsApp: <strong id="conf-whatsapp" style="color:var(--blue2)">—</strong></li>
                <li><i class="fa fa-check li-check"></i> Please save our number and check your WhatsApp regularly.</li>
                <li><i class="fa fa-check li-check"></i> Forms can be completed on Mobile or Desktop.</li>
                <li><i class="fa fa-check li-check"></i> All your information is secure and confidential.</li>
              </ul>
            </div>

            <div>
              <div class="section-title" style="font-size:12.5px"><i class="fa fa-headset"></i> Need Help?</div>
              <div style="font-size:12px;color:var(--muted);margin-bottom:10px">Our support team is here to assist you.</div>
              <div class="help-grid">
                <div class="help-item">
                  <div class="help-icon wa"><i class="fab fa-whatsapp"></i></div>
                  <div class="help-title">WhatsApp</div>
                  <div class="help-sub">+92 300 1234567</div>
                </div>
                <div class="help-item">
                  <div class="help-icon em"><i class="fa fa-envelope"></i></div>
                  <div class="help-title">Email Us</div>
                  <div class="help-sub">support@ifts.com.pk</div>
                </div>
                <div class="help-item">
                  <div class="help-icon hr"><i class="fa fa-clock"></i></div>
                  <div class="help-title">Hours</div>
                  <div class="help-sub">Mon – Sat<br>9:00 AM – 6:00 PM</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Buttons + Browse side text -->
          <div style="display:flex;align-items:center;gap:16px;margin-bottom:0;flex-wrap:wrap">
            <div class="confirm-buttons" style="flex:1;min-width:260px">
              <button class="dashboard-btn" onclick="window.location.href='index.php'">
                Go to Home Page <i class="fa fa-arrow-right"></i>
              </button>
              <button class="browse-btn" onclick="window.location.href='startbusiness.php'">
                <i class="fa fa-grid-2"></i> Browse Services
              </button>
            </div>
            <div class="browse-side">
              <strong>Need another service?</strong>
              <span>Explore 150+ professional business services.</span>
            </div>
          </div>


        </div><!-- /confirm-inner -->

      </div><!-- /confirm-body -->

      <!-- Bottom Strip -->
      <div class="bottom-strip">
        <div class="strip-item">
          <i class="fa fa-shield-halved"></i>
          <div class="strip-item-text"><strong>Secure Payment</strong><span>Your payment is 100% secure</span></div>
        </div>
        <div class="strip-item">
          <i class="fa fa-user-check"></i>
          <div class="strip-item-text"><strong>Manual Verification</strong><span>Expert team verification</span></div>
        </div>
        <div class="strip-item">
          <i class="fab fa-whatsapp"></i>
          <div class="strip-item-text"><strong>WhatsApp Updates</strong><span>Real-time order updates</span></div>
        </div>
        <div class="strip-item">
          <i class="fa fa-file-lines"></i>
          <div class="strip-item-text"><strong>Digital Document Collection</strong><span>Paperless &amp; hassle-free</span></div>
        </div>
      </div>
    </div>

  </div><!-- /page-wrap -->

  <!-- TOAST -->
  <div class="toast" id="toast-el"></div>

  <script>
    'use strict';

    /* ══ STATE ══ */
    const State = {
      step: 1,
      cart: [],
      uploadedFiles: [],
      order: null,

      save() {
        try {
          localStorage.setItem('ifts_cart', JSON.stringify(this.cart));
        } catch (_) {}
      },
      load() {
        try {
          const r = localStorage.getItem('ifts_cart');
          this.cart = r ? JSON.parse(r) : [];
        } catch (_) {
          this.cart = [];
        }
      },
      clearCart() {
        this.cart = [];
        try {
          localStorage.removeItem('ifts_cart');
        } catch (_) {}
      },
      total() {
        return this.cart.reduce((s, i) => s + Number(String(i.price).replace(/,/g, '')), 0);
      },
      fmt(n) {
        return 'Rs. ' + n.toLocaleString('en-PK');
      },
      addService(svc) {
        if (!this.cart.find(i => i.id === svc.id)) {
          this.cart.push(svc);
          this.save();
          return true;
        }
        return false;
      },
      removeService(id) {
        this.cart = this.cart.filter(i => i.id !== id);
        this.save();
      }
    };

    /* ══ CARD TRANSITIONS ══ */
    function showCard(step) {
      State.step = step;
      ['card-cart', 'card-payment', 'card-confirm'].forEach((id, idx) => {
        const el = document.getElementById(id);
        if (idx + 1 === step) {
          el.classList.add('card-on');
          setTimeout(() => el.classList.add('card-visible'), 20);
        } else {
          el.classList.remove('card-visible');
          setTimeout(() => {
            if (State.step !== idx + 1) el.classList.remove('card-on');
          }, 360);
        }
      });
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    /* ══ CART RENDER ══ */
    function esc(s) {
      return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    function renderCart() {
      const container = document.getElementById('cart-items');
      const empty = document.getElementById('empty-cart');
      const btn = document.getElementById('proceed-btn');
      container.innerHTML = '';

      if (State.cart.length === 0) {
        empty.style.display = 'block';
        btn.disabled = true;
      } else {
        empty.style.display = 'none';
        btn.disabled = false;
        State.cart.forEach(item => {
          const div = document.createElement('div');
          div.className = 'service-item';
          div.innerHTML = `
        <div class="service-icon"><i class="fa ${esc(item.icon||'fa-briefcase')}"></i></div>
        <div class="service-info">
          ${item.id ? `<div class="service-id">${esc(item.id)}</div>` : ''}
          <div class="service-name">${esc(item.name)}</div>
          <div class="service-pkg">${esc(item.pkg||'')}</div>
          ${item.timeline ? `<div class="service-timeline"><i class="fa-regular fa-clock"></i> Estimated Delivery: <strong>${esc(item.timeline)}</strong></div>` : ''}
        </div>
        <div class="service-right">
          <div class="service-price">${State.fmt(Number(String(item.price).replace(/,/g,'')))}</div>
          <button class="delete-btn" onclick="removeItem('${esc(item.id)}')"><i class="fa fa-trash"></i></button>
        </div>`;
          container.appendChild(div);
        });
      }

      const t = State.total();
      document.getElementById('subtotal-val').textContent = State.fmt(t);
      document.getElementById('total-val').textContent = State.fmt(t);
      document.getElementById('pay-total').textContent = State.fmt(t);
    }

    function removeItem(id) {
      State.removeService(id);
      renderCart();
      toast('Service removed.', '');
    }

    /* ══ CART ACTIONS ══ */
    function addServiceToCart(svc) {
      const ok = State.addService(svc);
      toast(ok ? 'Service added to cart!' : 'Already in cart.', ok ? 'ok' : '');
      renderCart();
    }

    function proceedToPayment() {
      if (State.cart.length === 0) {
        toast('Please add at least one service first.', 'err');
        return;
      }
      document.getElementById('pf-amount').value = State.total();
      document.getElementById('pf-date').value = new Date().toISOString().split('T')[0];
      renderCart();
      showCard(2);
    }

    function goToCart() {
      renderCart();
      showCard(1);
    }

    /* ══ FILE UPLOAD ══ */
    function triggerUpload() {
      document.getElementById('file-input').click();
    }

    function handleFiles(fileList) {
      if (!fileList || !fileList.length) return;
      const allowed = ['image/jpeg', 'image/png', 'image/webp'];
      let added = false;
      for (const f of fileList) {
        if (!allowed.includes(f.type)) {
          toast('Only JPG, PNG, WEBP allowed.', 'err');
          continue;
        }
        if (f.size > 5 * 1024 * 1024) {
          toast(`"${f.name}" exceeds 5MB.`, 'err');
          continue;
        }
        State.uploadedFiles.push(f);
        added = true;
      }
      if (!added) return;
      const box = document.getElementById('upload-box');
      box.classList.add('upload-done');
      document.getElementById('upload-icon').className = 'fa fa-check-circle';
      const n = State.uploadedFiles.length;
      document.getElementById('upload-main').textContent = n + (n === 1 ? ' screenshot selected' : ' screenshots selected');
      document.getElementById('upload-sub').textContent = 'Click to add more, or remove below ✓';
      renderPreviews();
      toast('Screenshot(s) uploaded!', 'ok');
    }

    function renderPreviews() {
      const wrap = document.getElementById('upload-preview-list');
      wrap.innerHTML = '';
      State.uploadedFiles.forEach((file, idx) => {
        const div = document.createElement('div');
        div.className = 'preview-thumb';
        const img = document.createElement('img');
        const r = new FileReader();
        r.onload = e => {
          img.src = e.target.result;
        };
        r.readAsDataURL(file);
        div.appendChild(img);
        const btn = document.createElement('button');
        btn.className = 'remove-thumb';
        btn.innerHTML = '&times;';
        btn.type = 'button';
        btn.onclick = e => {
          e.stopPropagation();
          removePreview(idx);
        };
        div.appendChild(btn);
        wrap.appendChild(div);
      });
    }

    function removePreview(idx) {
      State.uploadedFiles.splice(idx, 1);
      renderPreviews();
      const n = State.uploadedFiles.length;
      const box = document.getElementById('upload-box');
      if (n === 0) {
        box.classList.remove('upload-done');
        document.getElementById('upload-icon').className = 'fa fa-cloud-upload-alt';
        document.getElementById('upload-main').textContent = 'Click to upload or drag & drop';
        document.getElementById('upload-sub').innerHTML = 'You may upload one or multiple payment screenshots for verification<br>( JPG, PNG, WEBP – Max 5MB each )';
      } else {
        document.getElementById('upload-main').textContent = n + (n === 1 ? ' screenshot selected' : ' screenshots selected');
      }
    }

    (function setupDrop() {
      const box = document.getElementById('upload-box');
      box.addEventListener('dragover', e => {
        e.preventDefault();
        box.style.borderColor = '#0d2b6b';
        box.style.background = '#eef4ff';
      });
      box.addEventListener('dragleave', () => {
        if (!State.uploadedFiles.length) {
          box.style.borderColor = '';
          box.style.background = '';
        }
      });
      box.addEventListener('drop', e => {
        e.preventDefault();
        box.style.borderColor = '';
        box.style.background = '';
        if (e.dataTransfer.files.length) handleFiles(e.dataTransfer.files);
      });
    })();

    /* ══ FORM VALIDATION ══ */
    function validatePaymentForm() {
      const fields = [{
          id: 'pf-name',
          label: 'Full Name'
        },
        {
          id: 'pf-email',
          label: 'Email Address'
        },
        {
          id: 'pf-whatsapp',
          label: 'WhatsApp Number'
        },
        {
          id: 'pf-txn',
          label: 'Transaction ID'
        },
        {
          id: 'pf-date',
          label: 'Payment Date'
        },
        {
          id: 'pf-city',
          label: 'City'
        },
        {
          id: 'pf-amount',
          label: 'Paid Amount'
        },
      ];
      for (const f of fields) {
        const el = document.getElementById(f.id);
        if (!el.value.trim()) {
          el.focus();
          toast('Please fill in: ' + f.label, 'err');
          return false;
        }
      }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(document.getElementById('pf-email').value.trim())) {
        document.getElementById('pf-email').focus();
        toast('Please enter a valid email address.', 'err');
        return false;
      }
      return true;
    }

    /* ══ PROCEED TO CONFIRM ══ */
    async function proceedToConfirm() {
      if (!validatePaymentForm()) return;
      if (State.uploadedFiles.length === 0) {
        toast('Please upload at least one payment screenshot.', 'err');
        return;
      }

      const btn = document.getElementById('paid-btn');
      btn.disabled = true;
      btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing…';
      document.getElementById('spinner-overlay').classList.add('show');

      generateOrder();
      State.order.paymentStatus = 'Verification in Progress';

      const fd = new FormData();
      fd.append('save_order', '1');
      fd.append('customer_name', document.getElementById('pf-name').value);
      fd.append('whatsapp', document.getElementById('pf-whatsapp').value);
      fd.append('email', document.getElementById('pf-email').value);
      fd.append('city', document.getElementById('pf-city').value);
      fd.append('transaction_id', document.getElementById('pf-txn').value);
      fd.append('paid_amount', document.getElementById('pf-amount').value);
      fd.append('payment_date', document.getElementById('pf-date').value);
      fd.append('order_id', State.order.orderId);
      fd.append('services', JSON.stringify(State.cart));
      fd.append('referral_code', document.getElementById('pf-referral').value.trim().toUpperCase());
      State.uploadedFiles.forEach(f => fd.append('screenshots[]', f));

      try {
        const res = await fetch('checkout.php', {
          method: 'POST',
          body: fd
        });
        const result = await res.json();
        if (!result.success) {
          toast('Failed to save order. Please try again.', 'err');
          document.getElementById('spinner-overlay').classList.remove('show');
          btn.disabled = false;
          btn.innerHTML = 'SUBMIT PAYMENT &amp; START SERVICE <i class="fa fa-arrow-right"></i>';
          return;
        }
      } catch (err) {
        toast('Network error. Please try again.', 'err');
        document.getElementById('spinner-overlay').classList.remove('show');
        btn.disabled = false;
        btn.innerHTML = 'SUBMIT PAYMENT &amp; START SERVICE <i class="fa fa-arrow-right"></i>';
        return;
      }

      document.getElementById('spinner-overlay').classList.remove('show');
      btn.disabled = false;
      btn.innerHTML = 'SUBMIT PAYMENT &amp; START SERVICE <i class="fa fa-arrow-right"></i>';

      fillConfirmation();
      State.clearCart();
      State.uploadedFiles = [];
      showCard(3);
    }

    /* ══ ORDER GENERATION ══ */
    function generateOrder() {
      const now = new Date();
      const pad = n => String(n).padStart(2, '0');
      const yy = String(now.getFullYear()).slice(2);
      const mm = pad(now.getMonth() + 1);
      const dd = pad(now.getDate());
      const seq = String(Math.floor(Math.random() * 90000) + 10000);
      const orderId = `IFTS-${yy}${mm}${dd}-${seq}`;
      const MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      let h = now.getHours(),
        ampm = 'AM';
      if (h >= 12) {
        ampm = 'PM';
        if (h > 12) h -= 12;
      }
      if (h === 0) h = 12;
      const dateStr = `${now.getDate()} ${MONTHS[now.getMonth()]} ${now.getFullYear()} ${pad(h)}:${pad(now.getMinutes())} ${ampm}`;
      State.order = {
        orderId,
        dateStr,
        total: State.total()
      };
      try {
        localStorage.setItem('ifts_last_order', JSON.stringify(State.order));
      } catch (_) {}
    }

    function fillConfirmation() {
      const o = State.order;
      document.getElementById('conf-id').textContent = o.orderId;
      document.getElementById('conf-date').textContent = o.dateStr;
      document.getElementById('conf-total').textContent = State.fmt(o.total);
      document.getElementById('conf-services-count').textContent = State.cart.length + (State.cart.length === 1 ? ' Service' : ' Services');
      const wa = document.getElementById('pf-whatsapp');
      if (wa) document.getElementById('conf-whatsapp').textContent = wa.value || '—';
      const badge = document.getElementById('pay-status-badge');
      badge.textContent = '⏳ ' + o.paymentStatus;
      badge.className = 'status-badge ' + (o.paymentStatus === 'Paid & Verified' ? 'verified' : 'pending');
    }

    /* ══ MISC ══ */
    function closeCheckout() {
      toast('Checkout closed. Your cart is saved.', '');
    }

    function copyText(text, btnId) {
      navigator.clipboard.writeText(text).then(() => {
        const b = document.getElementById(btnId);
        b.classList.add('copied');
        b.innerHTML = '<i class="fa fa-check"></i> Copied!';
        toast('Copied to clipboard!', 'ok');
        setTimeout(() => {
          b.classList.remove('copied');
          b.innerHTML = '<i class="fa fa-copy"></i> Copy';
        }, 2000);
      }).catch(() => toast('Copy failed.', 'err'));
    }

    let _tt = null;

    function toast(msg, type) {
      const el = document.getElementById('toast-el');
      el.textContent = msg;
      el.className = 'toast' + (type === 'ok' ? ' t-ok' : type === 'err' ? ' t-err' : '');
      el.classList.add('show');
      if (_tt) clearTimeout(_tt);
      _tt = setTimeout(() => el.classList.remove('show'), 3200);
    }

    /* ══ PUBLIC API ══ */
    window.IFTS = {
      addToCart(svc) {
        addServiceToCart(svc);
      },
      openCheckout() {
        init();
      }
    };

    /* ══ INIT ══ */
    function init() {
      State.load();
      renderCart();
      const c = document.getElementById('card-cart');
      c.classList.add('card-on');
      setTimeout(() => c.classList.add('card-visible'), 20);
    }
    document.addEventListener('DOMContentLoaded', init);
  </script>
</body>

</html>