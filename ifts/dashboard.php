<?php
session_start();
include 'backend/db.php';

/* AUTH CHECK */
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: backend/login.php");
    exit;
}

/* FETCH ORDERS */
$result = $conn->query("SELECT * FROM orders ORDER BY id DESC");

$orders = [];
$total_orders = 0;
$verified_count = 0;
$pending_count = 0;

while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
    $total_orders++;

    if ($row['payment_status'] === 'Verified') {
        $verified_count++;
    } else {
        $pending_count++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFTS Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ── RESET & BASE ── */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --blue-dark: #0d1b4b;
            --blue-primary: #1a2f7f;
            --blue-mid: #1e3a8a;
            --blue-light: #e8edf8;
            --cyan: #00c2c7;
            --cyan-light: #e0f9f9;
            --white: #ffffff;
            --gray-50: #f8f9fc;
            --gray-100: #f1f3f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-700: #334155;

            --success: #00c97a;
            --success-bg: #e6faf2;
            --success-text: #00824f;
            --warn: #f59e0b;
            --warn-bg: #fffaeb;
            --warn-text: #92600a;
            --danger: #ef4444;
            --danger-bg: #fef2f2;

            --shadow-sm: 0 1px 2px rgba(13, 27, 75, 0.05), 0 1px 3px rgba(13, 27, 75, 0.04);
            --shadow-md: 0 4px 12px rgba(13, 27, 75, 0.08), 0 2px 4px rgba(13, 27, 75, 0.04);
            --shadow-lg: 0 16px 40px rgba(13, 27, 75, 0.14);

            --radius: 14px;
            --radius-sm: 9px;

            --font-head: 'Syne', sans-serif;
            --font-body: 'DM Sans', sans-serif;

            --sidebar-w: 248px;
            --topbar-h: 66px;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            background: var(--gray-50);
            color: var(--blue-dark);
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }

        a { color: inherit; }

        /* ──────────────────────────────────────────
           APP SHELL
        ────────────────────────────────────────── */
        .app-shell {
            display: flex;
            min-height: 100vh;
        }

        /* ──────────────────────────────────────────
           SIDEBAR
        ────────────────────────────────────────── */
        .sidebar {
            width: var(--sidebar-w);
            background: var(--blue-dark);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 200;
            transition: transform 0.25s ease;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 22px 22px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .brand-mark {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            background: linear-gradient(135deg, var(--cyan), #00a3a8);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-head);
            font-weight: 800;
            font-size: 15px;
            color: var(--blue-dark);
            flex-shrink: 0;
        }

        .brand-text {
            font-family: var(--font-head);
            font-weight: 700;
            font-size: 16.5px;
            color: var(--white);
            letter-spacing: -0.2px;
            line-height: 1.2;
        }

        .brand-text span {
            display: block;
            font-family: var(--font-body);
            font-weight: 500;
            font-size: 11px;
            color: rgba(255, 255, 255, 0.45);
            letter-spacing: 0.3px;
            margin-top: 1px;
        }

        .sidebar-nav {
            flex: 1;
            padding: 18px 14px;
            overflow-y: auto;
        }

        .nav-label {
            font-size: 10.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.9px;
            color: rgba(255, 255, 255, 0.32);
            padding: 0 12px;
            margin: 6px 0 10px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            border-radius: 10px;
            color: rgba(255, 255, 255, 0.68);
            font-size: 13.8px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            margin-bottom: 2px;
            transition: background 0.18s, color 0.18s;
            position: relative;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            font-family: var(--font-body);
        }

        .nav-item .nav-ico {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            opacity: 0.9;
        }

        .nav-item:hover {
            background: rgba(255, 255, 255, 0.06);
            color: var(--white);
        }

        .nav-item.active {
            background: rgba(0, 194, 199, 0.14);
            color: var(--white);
        }

        .nav-item.active::before {
            content: '';
            position: absolute;
            left: -14px;
            top: 8px;
            bottom: 8px;
            width: 3px;
            border-radius: 0 4px 4px 0;
            background: var(--cyan);
        }

        .nav-item .nav-count {
            margin-left: auto;
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.75);
            font-size: 10.5px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 30px;
        }

        .nav-item.active .nav-count {
            background: var(--cyan);
            color: var(--blue-dark);
        }

        .sidebar-foot {
            padding: 16px 18px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .sidebar-foot-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 13px;
            font-size: 11.5px;
            color: rgba(255, 255, 255, 0.45);
            line-height: 1.5;
        }

        .sidebar-foot-card strong {
            display: block;
            color: rgba(255, 255, 255, 0.75);
            font-size: 12.5px;
            margin-bottom: 2px;
        }

        /* Mobile sidebar toggle */
        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(8, 15, 35, 0.5);
            z-index: 190;
        }

        .sidebar-overlay.show { display: block; }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 20px;
            cursor: pointer;
            padding: 6px;
            margin-right: 6px;
            line-height: 1;
        }

        /* ──────────────────────────────────────────
           MAIN AREA
        ────────────────────────────────────────── */
        .main-area {
            flex: 1;
            margin-left: var(--sidebar-w);
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        /* TOP BAR */
        .topbar {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            height: var(--topbar-h);
            background: var(--white);
            border-bottom: 1px solid var(--gray-200);
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .topbar-titles h2 {
            font-family: var(--font-head);
            font-size: 18px;
            font-weight: 700;
            color: var(--blue-dark);
            letter-spacing: -0.3px;
        }

        .topbar-titles p {
            font-size: 12px;
            color: var(--gray-500);
            margin-top: 1px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .admin-pill {
            display: flex;
            align-items: center;
            gap: 9px;
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            padding: 6px 14px 6px 7px;
            border-radius: 30px;
            color: var(--blue-dark);
            font-size: 13px;
            font-weight: 600;
        }

        .admin-avatar {
            width: 27px;
            height: 27px;
            background: linear-gradient(135deg, var(--blue-mid), var(--blue-primary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            color: #fff;
            flex-shrink: 0;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            background: var(--danger-bg);
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 8px 14px;
            border-radius: 9px;
            text-decoration: none;
            font-size: 12.8px;
            font-weight: 600;
            transition: all 0.18s;
        }

        .logout-btn:hover {
            background: #fee2e2;
            border-color: #fca5a5;
        }

        /* MAIN CONTENT */
        .main {
            flex: 1;
            padding: 26px 28px 60px;
        }

        .page-section {
            display: none;
            animation: fadeUp 0.3s ease both;
        }

        .page-section.active {
            display: block;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* STATS ROW */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 26px;
        }

        .stat-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 20px 22px;
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: center;
            gap: 15px;
            transition: box-shadow 0.2s, transform 0.2s;
        }

        .stat-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .stat-icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .stat-icon.blue { background: var(--blue-light); }
        .stat-icon.green { background: var(--success-bg); }
        .stat-icon.amber { background: var(--warn-bg); }

        .stat-info .val {
            font-family: var(--font-head);
            font-size: 25px;
            font-weight: 700;
            color: var(--blue-dark);
            line-height: 1;
        }

        .stat-info .lbl {
            font-size: 12px;
            color: var(--gray-500);
            margin-top: 5px;
            font-weight: 500;
        }

        /* SECTION HEADER */
        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .section-header h3 {
            font-family: var(--font-head);
            font-size: 16px;
            font-weight: 700;
            color: var(--blue-dark);
        }

        .count-badge {
            background: var(--blue-mid);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 11px;
            border-radius: 30px;
            margin-left: 8px;
        }

        /* TABLE CARD */
        .table-card {
            background: var(--white);
            border-radius: var(--radius);
            border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        .table-scroll {
            overflow-x: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--gray-300) transparent;
        }

        .table-scroll::-webkit-scrollbar { height: 6px; }
        .table-scroll::-webkit-scrollbar-track { background: transparent; }
        .table-scroll::-webkit-scrollbar-thumb {
            background: var(--gray-300);
            border-radius: 99px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1040px;
        }

        th {
            background: var(--gray-50);
            color: var(--gray-500);
            padding: 13px 16px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            text-align: left;
            border-bottom: 1px solid var(--gray-200);
            white-space: nowrap;
        }

        th:first-child { padding-left: 22px; }
        th:last-child { padding-right: 22px; }

        td {
            padding: 14px 16px;
            font-size: 13.5px;
            vertical-align: middle;
            border-bottom: 1px solid var(--gray-100);
            color: var(--blue-dark);
        }

        td:first-child { padding-left: 22px; }
        td:last-child { padding-right: 22px; }

        tbody tr { transition: background 0.15s; }
        tbody tr:last-child td { border-bottom: none; }
        tbody tr:hover td { background: var(--gray-50); }

        /* CUSTOMER CELL */
        .customer-cell strong {
            display: block;
            font-weight: 600;
            font-size: 14px;
        }

        .customer-cell .email-row {
            font-size: 12px;
            color: var(--gray-500);
            margin-top: 2px;
        }

        /* CONTACT CELL */
        .contact-cell a {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--blue-mid);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            background: var(--blue-light);
            padding: 6px 11px;
            border-radius: 8px;
            transition: background 0.15s;
        }

        .contact-cell a:hover { background: #dbe3f7; }

        /* AMOUNT */
        .amount-val {
            font-family: var(--font-head);
            font-size: 14.5px;
            font-weight: 700;
            color: var(--blue-dark);
        }

        /* SERVICE LIST */
        .service-list {
            display: flex;
            flex-direction: column;
            gap: 6px;
            min-width: 190px;
        }

        .service-chip {
            background: var(--blue-light);
            border: 1px solid #dae3fc;
            border-radius: 8px;
            padding: 7px 11px;
            font-size: 12.5px;
            font-weight: 600;
            color: var(--blue-primary);
        }

        .no-services {
            font-size: 12px;
            color: var(--gray-400);
            font-style: italic;
        }

        /* CITY */
        .city-tag {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
            color: var(--blue-dark);
        }

        /* DATE */
        .date-cell {
            font-size: 12.5px;
            color: var(--gray-500);
            white-space: nowrap;
        }

        /* REFERRAL CODE */
        .referral-code-tag {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: var(--cyan-light);
            border: 1px solid #aeeced;
            color: #007579;
            border-radius: 6px;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.4px;
            white-space: nowrap;
            font-family: 'Courier New', monospace;
        }

        .referral-na {
            font-size: 12px;
            color: var(--gray-400);
            font-style: italic;
        }

        /* STATUS BUTTONS / BADGES */
        .btn-verify {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: linear-gradient(135deg, var(--blue-mid), var(--blue-primary));
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 14px;
            font-family: var(--font-body);
            font-size: 12.5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: var(--shadow-sm);
            white-space: nowrap;
        }

        .btn-verify:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .btn-verify:active { transform: scale(0.97); }

        .btn-verify:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .badge-verified {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: var(--success-bg);
            color: var(--success-text);
            border: 1px solid #9de8c9;
            border-radius: 8px;
            padding: 7px 12px;
            font-size: 12.5px;
            font-weight: 700;
            white-space: nowrap;
        }

        .badge-pending {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: var(--warn-bg);
            color: var(--warn-text);
            border: 1px solid #fcd97c;
            border-radius: 8px;
            padding: 7px 12px;
            font-size: 12.5px;
            font-weight: 600;
            white-space: nowrap;
        }

        /* DELETE BUTTON */
        .btn-delete {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: linear-gradient(135deg, var(--danger), #ff6b6b);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 14px;
            font-family: var(--font-body);
            font-size: 12.5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 4px 14px rgba(239, 68, 68, 0.25);
            white-space: nowrap;
        }

        .btn-delete:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(239, 68, 68, 0.38);
        }

        .btn-delete:active { transform: scale(0.97); }

        .btn-delete:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .action-cell {
            display: flex;
            gap: 8px;
        }

        /* SCREENSHOT THUMB */
        .thumb-wrap {
            cursor: pointer;
            display: inline-block;
            border-radius: 8px;
            overflow: hidden;
            border: 2px solid var(--gray-200);
            transition: border-color 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: var(--shadow-sm);
        }

        .thumb-wrap:hover {
            border-color: var(--cyan);
            transform: scale(1.05);
            box-shadow: var(--shadow-md);
        }

        .thumb-wrap img {
            width: 54px;
            height: 54px;
            object-fit: cover;
            display: block;
        }

        .no-shot {
            font-size: 12px;
            color: var(--gray-400);
            font-style: italic;
        }

        /* NO DATA ROW */
        .no-data {
            text-align: center;
            padding: 70px 20px;
            color: var(--gray-500);
            font-size: 14px;
        }

        .no-data .icon {
            font-size: 38px;
            margin-bottom: 12px;
            opacity: 0.6;
        }

        /* ──────────────────────────────────────────
           PLACEHOLDER SECTIONS
        ────────────────────────────────────────── */
        .placeholder-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius);
            box-shadow: var(--shadow-sm);
            padding: 48px 32px;
            text-align: center;
            color: var(--gray-500);
        }

        .placeholder-card .ph-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: var(--blue-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin: 0 auto 18px;
        }

        .placeholder-card h4 {
            font-family: var(--font-head);
            font-size: 17px;
            color: var(--blue-dark);
            margin-bottom: 8px;
        }

        .placeholder-card p {
            font-size: 13.5px;
            max-width: 380px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* SETTINGS / PASSWORD FORM CARD */
        .form-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius);
            box-shadow: var(--shadow-sm);
            padding: 28px;
            max-width: 460px;
        }

        .form-card h4 {
            font-family: var(--font-head);
            font-size: 16px;
            color: var(--blue-dark);
            margin-bottom: 4px;
        }

        .form-card .form-sub {
            font-size: 12.5px;
            color: var(--gray-500);
            margin-bottom: 22px;
        }

        .field-group {
            margin-bottom: 16px;
        }

        .field-group label {
            display: block;
            font-size: 12.5px;
            font-weight: 600;
            color: var(--blue-dark);
            margin-bottom: 7px;
        }

        .field-group input,
        .field-group select {
            width: 100%;
            padding: 11px 13px;
            background: var(--gray-50);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-sm);
            font-family: var(--font-body);
            font-size: 13.5px;
            color: var(--blue-dark);
            outline: none;
            transition: all 0.2s;
        }

        .field-group input:focus,
        .field-group select:focus {
            background: var(--white);
            border-color: var(--blue-mid);
            box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.1);
        }

        .form-submit-btn {
            width: 100%;
            padding: 12.5px;
            margin-top: 6px;
            background: linear-gradient(135deg, var(--blue-mid), var(--blue-primary));
            color: #fff;
            border: none;
            border-radius: var(--radius-sm);
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.22s;
            box-shadow: var(--shadow-sm);
        }

        .form-submit-btn:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .settings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
        }

        .toggle-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 0;
            border-bottom: 1px solid var(--gray-100);
        }

        .toggle-row:last-child { border-bottom: none; }

        .toggle-row .t-label {
            font-size: 13.5px;
            font-weight: 600;
            color: var(--blue-dark);
        }

        .toggle-row .t-sub {
            font-size: 11.5px;
            color: var(--gray-500);
            margin-top: 2px;
        }

        .switch {
            position: relative;
            width: 42px;
            height: 24px;
            flex-shrink: 0;
        }

        .switch input { opacity: 0; width: 0; height: 0; }

        .switch .slider {
            position: absolute;
            cursor: pointer;
            inset: 0;
            background: var(--gray-300);
            border-radius: 30px;
            transition: 0.25s;
        }

        .switch .slider::before {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            left: 3px;
            top: 3px;
            background: #fff;
            border-radius: 50%;
            transition: 0.25s;
            box-shadow: var(--shadow-sm);
        }

        .switch input:checked + .slider { background: var(--cyan); }
        .switch input:checked + .slider::before { transform: translateX(18px); }

        /* ──────────────────────────────────────────
           LIGHTBOX / MODAL
        ────────────────────────────────────────── */
        .lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 999;
            background: rgba(8, 15, 35, 0.82);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.2s ease;
            padding: 20px;
        }

        .lightbox.open { display: flex; }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .lightbox-inner {
            position: relative;
            max-width: 90vw;
            max-height: 88vh;
            animation: zoomIn 0.25s cubic-bezier(.22, .8, .4, 1) both;
        }

        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.88); }
            to { opacity: 1; transform: scale(1); }
        }

        .lightbox-inner img {
            display: block;
            max-width: 100%;
            max-height: 85vh;
            border-radius: 16px;
            box-shadow: 0 32px 80px rgba(0, 0, 0, 0.5);
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: -14px;
            right: -14px;
            width: 36px;
            height: 36px;
            background: #fff;
            border: none;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.25);
            color: #333;
            transition: background 0.2s, transform 0.2s;
            line-height: 1;
        }

        .lightbox-close:hover {
            background: #ffe5e5;
            transform: scale(1.08);
        }

        /* ──────────────────────────────────────────
           TOAST
        ────────────────────────────────────────── */
        .toast-stack {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: flex-end;
        }

        .toast {
            background: var(--blue-dark);
            color: #fff;
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 13.5px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: var(--shadow-lg);
            transform: translateX(40px);
            opacity: 0;
            transition: all 0.3s cubic-bezier(.22, .8, .4, 1);
            pointer-events: none;
            max-width: 320px;
        }

        .toast.show {
            transform: translateX(0);
            opacity: 1;
        }

        .toast.error { background: #7f1d1d; }
        .toast.success { background: var(--blue-dark); }

        .toast .toast-icon { font-size: 16px; flex-shrink: 0; }

        /* ──────────────────────────────────────────
           RESPONSIVE
        ────────────────────────────────────────── */
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
                box-shadow: var(--shadow-lg);
            }

            .main-area {
                margin-left: 0;
            }

            .menu-toggle {
                display: inline-flex;
                align-items: center;
            }

            .topbar { padding: 0 16px; }
        }

        @media (max-width: 768px) {
            .main { padding: 18px 16px 50px; }

            .topbar { height: 58px; }
            .topbar-titles h2 { font-size: 15.5px; }
            .topbar-titles p { display: none; }

            .admin-pill span { display: none; }

            .stats-row {
                grid-template-columns: 1fr 1fr;
                gap: 10px;
            }

            .stat-card { padding: 14px 16px; }
            .stat-info .val { font-size: 20px; }

            .toast-stack {
                right: 14px;
                left: 14px;
                bottom: 14px;
                align-items: stretch;
            }

            .toast { max-width: none; }
        }

        @media (max-width: 480px) {
            .stats-row { grid-template-columns: 1fr; }
        }
          /* Add this inside your existing <style> block (anywhere is fine) */
    .field-group .input-wrap {
        position: relative;
    }
 
    .field-group .input-wrap input {
        padding-right: 40px; /* room for the eye icon */
    }
 
    .field-group .toggle-pw {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: var(--gray-400);
        cursor: pointer;
        font-size: 15px;
        padding: 4px;
        line-height: 1;
        transition: color 0.2s;
    }
 
    .field-group .toggle-pw:hover {
        color: var(--blue-mid);
    }
    </style>
</head>

<body>

<div class="app-shell">

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <div class="brand-mark">IF</div>
            <div class="brand-text">
                IFTS Admin
                <span>Control Panel</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-label">General</div>

            <button class="nav-item active" data-target="section-dashboard" type="button">
                <span class="nav-ico">🏠</span> Dashboard
            </button>

            <button class="nav-item" data-target="section-orders" type="button">
                <span class="nav-ico">📦</span> All Orders
                <span class="nav-count"><?php echo $total_orders; ?></span>
            </button>

            <button class="nav-item" data-target="section-expert" type="button">
                <span class="nav-ico">💬</span> Ask an Expert
            </button>

            <div class="nav-label">Account</div>

            <button class="nav-item" data-target="section-password" type="button">
                <span class="nav-ico">🔒</span> Change Password
            </button>

            <button class="nav-item" data-target="section-settings" type="button">
                <span class="nav-ico">⚙️</span> Settings
            </button>
        </nav>

        <div class="sidebar-foot">
            <div class="sidebar-foot-card">
                <strong>IFTS Platform</strong>
                Ismail Financial &amp; Tax Solutions admin console.
            </div>
        </div>
    </aside>

    <!-- MAIN AREA -->
    <div class="main-area">

        <!-- TOP BAR -->
        <header class="topbar">
            <div class="topbar-left">
                <button class="menu-toggle" id="menuToggle" type="button" aria-label="Toggle menu">☰</button>
                <div class="topbar-titles">
                    <h2 id="pageTitle">Dashboard</h2>
                    <p id="pageSubtitle">Overview of orders and activity</p>
                </div>
            </div>

            <div class="topbar-right">
                <div class="admin-pill">
                    <div class="admin-avatar">A</div>
                    <span>Administrator</span>
                </div>

                <a href="backend/logout.php" class="logout-btn">⏻ Logout</a>
            </div>
        </header>

        <main class="main">

            <!-- ============ DASHBOARD SECTION ============ -->
            <section class="page-section active" id="section-dashboard">

                <div class="stats-row">
                    <div class="stat-card">
                        <div class="stat-icon blue">📦</div>
                        <div>
                            <div class="val"><?php echo $total_orders; ?></div>
                            <div class="lbl">Total Orders</div>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon green">✅</div>
                        <div>
                            <div class="val"><?php echo $verified_count; ?></div>
                            <div class="lbl">Verified</div>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon amber">⏳</div>
                        <div>
                            <div class="val"><?php echo $pending_count; ?></div>
                            <div class="lbl">Pending</div>
                        </div>
                    </div>
                </div>

                <div class="section-header">
                    <h3>Recent Orders</h3>
                </div>

                <div class="table-card">
    <div class="table-scroll">
        <table>

            <thead>
                <tr>
                    <th>Customer</th>
                    <th>WhatsApp</th>
                    <th>City</th>
                    <th>Amount</th>
                    <th>Services</th>
                    <th>Referral</th>
                    <th>Status</th>
                    <th>Screenshot</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php if (empty($orders)) : ?>
                <tr>
                    <td colspan="10">
                        <div class="no-data">
                            <div class="icon">📭</div>
                            No orders found
                        </div>
                    </td>
                </tr>
            <?php endif; ?>

            <?php foreach ($orders as $row) :

                $oid      = htmlspecialchars($row['order_id']);
                $name     = htmlspecialchars($row['customer_name']);
                $email    = htmlspecialchars($row['email']);
                $whatsapp = preg_replace('/\D/', '', $row['whatsapp']);
                $city     = htmlspecialchars($row['city']);
                $amount   = htmlspecialchars($row['paid_amount']);
                $status   = $row['payment_status'];
                $referral = $row['referral_code'];
             $shot_list = json_decode($row['screenshot'], true);
if (!is_array($shot_list)) {
    $shot_list = [];
}

                $services = json_decode($row['services'], true);

            ?>

            <tr id="row-<?php echo $oid; ?>">

                <!-- CUSTOMER -->
                <td>
                    <div class="customer-cell">
                        <strong><?php echo $name; ?></strong>
                        <div class="email-row"><?php echo $email; ?></div>
                    </div>
                </td>

                <!-- WHATSAPP -->
                <td class="contact-cell">
                    <a href="https://wa.me/<?php echo $whatsapp; ?>" target="_blank" rel="noopener">
                        📱 <?php echo htmlspecialchars($row['whatsapp']); ?>
                    </a>
                </td>

                <!-- CITY -->
                <td><span class="city-tag">📍 <?php echo $city; ?></span></td>

                <!-- AMOUNT -->
                <td><span class="amount-val">Rs. <?php echo $amount; ?></span></td>

                <!-- SERVICES -->
                <td>
                    <?php if ($services): ?>
                        <div class="service-list">
                            <?php foreach ($services as $svc): ?>
                                <div class="service-chip"><?php echo htmlspecialchars($svc['name']); ?></div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <span class="no-services">No services</span>
                    <?php endif; ?>
                </td>

                <!-- REFERRAL -->
                <td>
                    <?php if ($referral): ?>
                        <span class="referral-code-tag">🏷 <?php echo htmlspecialchars($referral); ?></span>
                    <?php else: ?>
                        <span class="referral-na">N/A</span>
                    <?php endif; ?>
                </td>

                <!-- STATUS -->
                <td id="status-<?php echo $oid; ?>">
                    <?php if ($status === 'Verified'): ?>
                        <span class="badge-verified">✔ Verified</span>
                    <?php else: ?>
                        <button class="btn-verify" onclick="verifyOrder('<?php echo $oid; ?>', this)">
                            Verify
                        </button>
                    <?php endif; ?>
                </td>

                <!-- SCREENSHOT -->
               <td>
    <?php if (!empty($shot_list)): ?>
        <div style="display:flex; gap:6px; flex-wrap:wrap;">
            <?php foreach ($shot_list as $shot_file): ?>
                <div class="thumb-wrap" onclick="openLightbox('uploads/<?php echo htmlspecialchars($shot_file); ?>')">
                    <img src="uploads/<?php echo htmlspecialchars($shot_file); ?>" alt="Payment screenshot">
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <span class="no-shot">No image</span>
    <?php endif; ?>
</td>

                <!-- DATE -->
                <td><span class="date-cell"><?php echo htmlspecialchars($row['created_at']); ?></span></td>

                <!-- ACTION -->
                <td>
                    <div class="action-cell">
                        <button class="btn-delete" onclick="deleteOrder('<?php echo $oid; ?>', this)">
                            Delete
                        </button>
                    </div>
                </td>

            </tr>

            <?php endforeach; ?>

            </tbody>

        </table>
    </div>
</div>

            </section>

            <!-- ============ ALL ORDERS SECTION ============ -->
            <section class="page-section" id="section-orders">

                <div class="section-header">
                    <h3>All Orders <span class="count-badge"><?php echo $total_orders; ?></span></h3>
                </div>

<div class="table-card">
    <div class="table-scroll">
        <table>

            <thead>
                <tr>
                    <th>Customer</th>
                    <th>WhatsApp</th>
                    <th>City</th>
                    <th>Amount</th>
                    <th>Services</th>
                    <th>Referral</th>
                    <th>Status</th>
                    <th>Screenshot</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php if (empty($orders)) : ?>
                <tr>
                    <td colspan="10">
                        <div class="no-data">
                            <div class="icon">📭</div>
                            No orders found
                        </div>
                    </td>
                </tr>
            <?php endif; ?>

            <?php foreach ($orders as $row) :

                $oid      = htmlspecialchars($row['order_id']);
                $name     = htmlspecialchars($row['customer_name']);
                $email    = htmlspecialchars($row['email']);
                $whatsapp = preg_replace('/\D/', '', $row['whatsapp']);
                $city     = htmlspecialchars($row['city']);
                $amount   = htmlspecialchars($row['paid_amount']);
                $status   = $row['payment_status'];
                $referral = $row['referral_code'];
       $shot_list = json_decode($row['screenshot'], true);
if (!is_array($shot_list)) {
    $shot_list = [];
}

                $services = json_decode($row['services'], true);

            ?>

            <tr id="row-<?php echo $oid; ?>">

                <!-- CUSTOMER -->
                <td>
                    <div class="customer-cell">
                        <strong><?php echo $name; ?></strong>
                        <div class="email-row"><?php echo $email; ?></div>
                    </div>
                </td>

                <!-- WHATSAPP -->
                <td class="contact-cell">
                    <a href="https://wa.me/<?php echo $whatsapp; ?>" target="_blank" rel="noopener">
                        📱 <?php echo htmlspecialchars($row['whatsapp']); ?>
                    </a>
                </td>

                <!-- CITY -->
                <td><span class="city-tag">📍 <?php echo $city; ?></span></td>

                <!-- AMOUNT -->
                <td><span class="amount-val">Rs. <?php echo $amount; ?></span></td>

                <!-- SERVICES -->
                <td>
                    <?php if ($services): ?>
                        <div class="service-list">
                            <?php foreach ($services as $svc): ?>
                                <div class="service-chip"><?php echo htmlspecialchars($svc['name']); ?></div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <span class="no-services">No services</span>
                    <?php endif; ?>
                </td>

                <!-- REFERRAL -->
                <td>
                    <?php if ($referral): ?>
                        <span class="referral-code-tag">🏷 <?php echo htmlspecialchars($referral); ?></span>
                    <?php else: ?>
                        <span class="referral-na">N/A</span>
                    <?php endif; ?>
                </td>

                <!-- STATUS -->
                <td id="status-<?php echo $oid; ?>">
                    <?php if ($status === 'Verified'): ?>
                        <span class="badge-verified">✔ Verified</span>
                    <?php else: ?>
                        <button class="btn-verify" onclick="verifyOrder('<?php echo $oid; ?>', this)">
                            Verify
                        </button>
                    <?php endif; ?>
                </td>

                <!-- SCREENSHOT -->
              <td>
    <?php if (!empty($shot_list)): ?>
        <div style="display:flex; gap:6px; flex-wrap:wrap;">
            <?php foreach ($shot_list as $shot_file): ?>
                <div class="thumb-wrap" onclick="openLightbox('uploads/<?php echo htmlspecialchars($shot_file); ?>')">
                    <img src="uploads/<?php echo htmlspecialchars($shot_file); ?>" alt="Payment screenshot">
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <span class="no-shot">No image</span>
    <?php endif; ?>
</td>

                <!-- DATE -->
                <td><span class="date-cell"><?php echo htmlspecialchars($row['created_at']); ?></span></td>

                <!-- ACTION -->
                <td>
                    <div class="action-cell">
                        <button class="btn-delete" onclick="deleteOrder('<?php echo $oid; ?>', this)">
                            Delete
                        </button>
                    </div>
                </td>

            </tr>

            <?php endforeach; ?>

            </tbody>

        </table>
    </div>
</div>
            </section>

            <!-- ============ ASK AN EXPERT SECTION (placeholder) ============ -->
            <section class="page-section" id="section-expert">

                <div class="section-header">
                    <h3>Ask an Expert — Inquiries</h3>
                </div>

                <div class="placeholder-card">
                    <div class="ph-icon">💬</div>
                    <h4>No inquiries yet</h4>
                    <p>
                        Submissions from the "Ask an Expert" page will appear here once that form is
                        connected to the database. This section is ready to display a table identical
                        in style to All Orders.
                    </p>
                </div>

            </section>

            <!-- ============ CHANGE PASSWORD SECTION ============ -->
            <section class="page-section" id="section-password">

                <div class="section-header">
                    <h3>Change Password</h3>
                </div>

                <div class="form-card">
                    <h4>Update your password</h4>
                    <p class="form-sub">Choose a strong password you haven't used elsewhere.</p>

                  <form id="changePasswordForm" onsubmit="return false;">
    <div class="field-group">
        <label for="currentPassword">Current Password</label>
        <div class="input-wrap">
            <input type="password" id="currentPassword" placeholder="••••••••">
            <button type="button" class="toggle-pw" data-target="currentPassword" aria-label="Show password">👁</button>
        </div>
    </div>
 
    <div class="field-group">
        <label for="newPassword">New Password</label>
        <div class="input-wrap">
            <input type="password" id="newPassword" placeholder="••••••••">
            <button type="button" class="toggle-pw" data-target="newPassword" aria-label="Show password">👁</button>
        </div>
    </div>
 
    <div class="field-group">
        <label for="confirmPassword">Confirm New Password</label>
        <div class="input-wrap">
            <input type="password" id="confirmPassword" placeholder="••••••••">
            <button type="button" class="toggle-pw" data-target="confirmPassword" aria-label="Show password">👁</button>
        </div>
    </div>
 
    <button type="submit" class="form-submit-btn">Update Password</button>
</form>
 
                </div>

            </section>

            <!-- ============ SETTINGS SECTION (placeholder) ============ -->
            <section class="page-section" id="section-settings">

                <div class="section-header">
                    <h3>Settings</h3>
                </div>

                <div class="settings-grid">
                    <div class="form-card" style="max-width:none;">
                        <h4>Notifications</h4>
                        <p class="form-sub">Choose what you get notified about.</p>

                        <div class="toggle-row">
                            <div>
                                <div class="t-label">New order alerts</div>
                                <div class="t-sub">Get notified when a new order comes in</div>
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>

                        <div class="toggle-row">
                            <div>
                                <div class="t-label">Payment verification reminders</div>
                                <div class="t-sub">Daily reminder for pending payments</div>
                            </div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>

                        <div class="toggle-row">
                            <div>
                                <div class="t-label">Ask an Expert submissions</div>
                                <div class="t-sub">Email alert for new inquiries</div>
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-card" style="max-width:none;">
                        <h4>Display</h4>
                        <p class="form-sub">Personalize how the dashboard looks.</p>

                        <div class="field-group">
                            <label for="rowsPerPage">Rows per page</label>
                            <select id="rowsPerPage">
                                <option>10</option>
                                <option selected>25</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>

                        <div class="field-group">
                            <label for="defaultView">Default landing section</label>
                            <select id="defaultView">
                                <option selected>Dashboard</option>
                                <option>All Orders</option>
                            </select>
                        </div>
                    </div>
                </div>

            </section>

        </main>
    </div>
</div>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-inner">
        <button class="lightbox-close" id="lightboxClose">✕</button>
        <img id="lightboxImg" src="" alt="Payment screenshot">
    </div>
</div>

<!-- TOAST STACK -->
<div class="toast-stack" id="toastStack"></div>

<script>

/* ──────────────────────────────────────────
   SIDEBAR NAVIGATION (client-side section switch)
────────────────────────────────────────── */
const navItems = document.querySelectorAll('.nav-item');
const sections = document.querySelectorAll('.page-section');
const pageTitle = document.getElementById('pageTitle');
const pageSubtitle = document.getElementById('pageSubtitle');

const titles = {
    'section-dashboard': ['Dashboard', 'Overview of orders and activity'],
    'section-orders': ['All Orders', 'Every order placed through the platform'],
    'section-expert': ['Ask an Expert', 'Inquiries submitted by visitors'],
    'section-password': ['Change Password', 'Keep your admin account secure'],
    'section-settings': ['Settings', 'Configure dashboard preferences']
};

navItems.forEach(item => {
    item.addEventListener('click', () => {
        const target = item.getAttribute('data-target');

        navItems.forEach(n => n.classList.remove('active'));
        item.classList.add('active');

        sections.forEach(s => s.classList.remove('active'));
        document.getElementById(target).classList.add('active');

        if (titles[target]) {
            pageTitle.textContent = titles[target][0];
            pageSubtitle.textContent = titles[target][1];
        }

        closeMobileSidebar();
    });
});

/* ──────────────────────────────────────────
   MOBILE SIDEBAR TOGGLE
────────────────────────────────────────── */
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const menuToggle = document.getElementById('menuToggle');

function openMobileSidebar() {
    sidebar.classList.add('show');
    sidebarOverlay.classList.add('show');
}

function closeMobileSidebar() {
    sidebar.classList.remove('show');
    sidebarOverlay.classList.remove('show');
}

menuToggle.addEventListener('click', openMobileSidebar);
sidebarOverlay.addEventListener('click', closeMobileSidebar);

/* ──────────────────────────────────────────
   TOAST NOTIFICATIONS
────────────────────────────────────────── */
function showToast(message, type = 'success') {
    const stack = document.getElementById('toastStack');

    const toast = document.createElement('div');
    toast.className = 'toast ' + (type === 'error' ? 'error' : 'success');
    toast.innerHTML =
        '<span class="toast-icon">' + (type === 'error' ? '⚠️' : '✅') + '</span>' +
        '<span>' + message + '</span>';

    stack.appendChild(toast);

    requestAnimationFrame(() => toast.classList.add('show'));

    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 320);
    }, 3200);
}

/* ──────────────────────────────────────────
   LIGHTBOX
────────────────────────────────────────── */
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const lightboxClose = document.getElementById('lightboxClose');

function openLightbox(src) {
    lightboxImg.src = src;
    lightbox.classList.add('open');
}

function closeLightbox() {
    lightbox.classList.remove('open');
    lightboxImg.src = '';
}

lightboxClose.addEventListener('click', closeLightbox);
lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
});
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLightbox();
});

/* ──────────────────────────────────────────
   VERIFY ORDER (AJAX) — unchanged endpoint/contract
────────────────────────────────────────── */
function verifyOrder(orderId, btn) {

    btn.disabled = true;
    btn.innerText = "Verifying...";

    fetch("backend/verify.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: "order_id=" + orderId
    })
    .then(res => res.json())
    .then(data => {

        if (data.success) {
            document.querySelectorAll('[id="status-' + orderId + '"]').forEach(cell => {
                cell.innerHTML = '<span class="badge-verified">✔ Verified</span>';
            });
            showToast('Order ' + orderId + ' marked as verified.', 'success');
        } else {
            btn.disabled = false;
            btn.innerText = "Verify";
            showToast('Could not verify order ' + orderId + '.', 'error');
        }
    })
    .catch(() => {
        btn.disabled = false;
        btn.innerText = "Verify";
        showToast('Network error while verifying order.', 'error');
    });
}

/* ──────────────────────────────────────────
   DELETE ORDER (AJAX) — unchanged endpoint/contract
────────────────────────────────────────── */
function deleteOrder(orderId, btn) {
 
    btn.disabled = true;
    btn.innerText = "Deleting...";
 
    fetch("backend/delete.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: "order_id=" + orderId
    })
    .then(res => res.json())
    .then(data => {

        if (data.success) {
            document.querySelectorAll('[id="row-' + orderId + '"]').forEach(row => row.remove());
            showToast('Order ' + orderId + ' deleted.', 'success');
        } else {
            btn.disabled = false;
            btn.innerText = "Delete";
            showToast('Could not delete order ' + orderId + '.', 'error');
        }
    })
    .catch(() => {
        btn.disabled = false;
        btn.innerText = "Delete";
        showToast('Network error while deleting order.', 'error');
    });
}

/* Placeholder password form (no backend yet — UI only, per spec) */
document.getElementById('changePasswordForm').addEventListener('submit', function (e) {
    e.preventDefault();
 
    const currentPassword = document.getElementById('currentPassword').value.trim();
    const newPassword     = document.getElementById('newPassword').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();
 
    if (!currentPassword || !newPassword || !confirmPassword) {
        showToast('Please fill in all password fields.', 'error');
        return;
    }
 
    const submitBtn = this.querySelector('.form-submit-btn');
    const originalText = submitBtn.innerText;
    submitBtn.disabled = true;
    submitBtn.innerText = 'Updating...';
 
    const body = new URLSearchParams({
        current_password: currentPassword,
        new_password: newPassword,
        confirm_password: confirmPassword
    });
 
    fetch('backend/change_password.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: body.toString()
    })
    .then(res => res.json())
    .then(data => {
        submitBtn.disabled = false;
        submitBtn.innerText = originalText;
 
        if (data.success) {
            showToast(data.message, 'success');
            document.getElementById('changePasswordForm').reset();
        } else {
            showToast(data.message, 'error');
        }
    })
    .catch(() => {
        submitBtn.disabled = false;
        submitBtn.innerText = originalText;
        showToast('Network error while updating password.', 'error');
    });
});
/* Show/Hide toggle for ALL password fields inside Change Password form */
document.querySelectorAll('.toggle-pw').forEach(btn => {
    btn.addEventListener('click', () => {
        const input = document.getElementById(btn.getAttribute('data-target'));
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';
        btn.textContent = isHidden ? '🙈' : '👁';
        btn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
    });
});
</script>

</body>
</html>