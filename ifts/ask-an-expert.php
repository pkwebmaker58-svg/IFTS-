<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask an Expert – IFTS</title>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
            --red: #ef4444;
            --green: #22c55e;
            --gold: #1a2f7f;
            --gold-light: #e8edf8;
            --gold-border: #e8edf8;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08), 0 1px 4px rgba(0,0,0,0.04);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.10), 0 2px 8px rgba(0,0,0,0.05);
            --radius: 12px;
            --radius-sm: 8px;
            --radius-lg: 16px;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f4f6fb;
            color: var(--gray-700);
            min-height: 100vh;
        }

        .page-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            padding: 48px 32px;
        }

        .main-grid {
            display: grid;
            grid-template-columns: 340px 1fr;
            gap: 40px;
            align-items: start;
        }

        .hero-heading {
            font-size: 38px;
            font-weight: 800;
            line-height: 1.2;
            color: var(--blue-dark);
            margin-bottom: 14px;
        }

        .hero-heading .cyan { color: var(--cyan); }

        .hero-underline {
            width: 48px;
            height: 3px;
            background: var(--cyan);
            border-radius: 2px;
            margin-bottom: 20px;
        }

        .hero-sub {
            font-size: 15px;
            line-height: 1.7;
            color: var(--gray-500);
            max-width: 320px;
            margin-bottom: 32px;
        }

        .desktop-image-placeholder {
            width: 100%;
            height: 220px;
            background: var(--gray-100);
            border-radius: var(--radius);
            border: 2px dashed var(--gray-300);
            margin-bottom: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-400);
            font-size: 13px;
            font-weight: 500;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 16px;
            box-shadow: var(--shadow-sm);
            margin-bottom: 20px;
        }

        .feature-card {
            background: transparent;
            border: none;
            border-radius: 0;
            padding: 0;
            box-shadow: none;
        }

        .feature-icon {
            width: 36px;
            height: 36px;
            margin-bottom: 10px;
            color: var(--blue-primary);
        }

        .feature-title {
            font-size: 13px;
            font-weight: 700;
            color: var(--blue-dark);
            margin-bottom: 4px;
        }

        .feature-desc {
            font-size: 12px;
            color: var(--gray-500);
            line-height: 1.5;
        }

        .need-help-row {
            display: flex;
            align-items: center;
            gap: 16px;
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 12px 16px;
            margin-bottom: 14px;
            box-shadow: var(--shadow-sm);
        }

        .need-help-badge {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--blue-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 13px;
            font-weight: 800;
            color: white;
        }

        .need-help-label {
            font-size: 13px;
            font-weight: 700;
            color: var(--blue-dark);
            margin-right: 8px;
        }

        .need-help-contact {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .need-help-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12.5px;
            color: var(--gray-700);
            font-weight: 500;
        }

        .need-help-item svg { color: var(--gray-400); }

        .secure-card {
            display: flex;
            align-items: center;
            gap: 12px;
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 14px 16px;
            box-shadow: var(--shadow-sm);
        }

        .secure-card svg { color: var(--blue-primary); flex-shrink: 0; }

        .secure-title {
            font-size: 13px;
            font-weight: 700;
            color: var(--blue-dark);
        }

        .secure-sub {
            font-size: 12px;
            color: var(--gray-500);
        }

        .form-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 28px 24px 24px;
        }

        .consultation-label {
            font-size: 16px;
            font-weight: 800;
            color: var(--blue-dark);
            margin-bottom: 14px;
        }

        .consultation-label span {
            font-size: 14px;
            font-weight: 700;
            color: var(--gray-500);
            margin-right: 6px;
        }

        .consultation-cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 28px;
        }

        .consult-card {
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 18px 16px;
            cursor: pointer;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            transition: border-color .2s, background .2s, box-shadow .2s;
            background: var(--white);
            position: relative;
        }

        .consult-card.active {
            border-color:#162466;
              background: var(--blue-light);
        }

        .consult-card.active-blue {
            border-color: var(--blue-primary);
            background: var(--blue-light);
            box-shadow: 0 0 0 3px rgba(26,47,127,0.07);
        }

        .consult-radio {
            width: 18px;
            height: 18px;
            border: 2px solid var(--gray-300);
            border-radius: 50%;
            flex-shrink: 0;
            margin-top: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: border-color .2s;
        }

        .consult-card.active .consult-radio,
        .consult-card.active-blue .consult-radio {
            border-color: var(--blue-dark);
        }

        .consult-radio-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--blue-dark);
            display: none;
        }

        .consult-card.active .consult-radio-dot,
        .consult-card.active-blue .consult-radio-dot {
            display: block;
        }

        .consult-body { flex: 1; }

        .consult-title {
            font-size: 14px;
            font-weight: 800;
            color: var(--blue-dark);
            margin-bottom: 8px;
        }

        .consult-features {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .consult-features li {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12.5px;
            color: var(--gray-700);
        }

        .consult-features li::before {
            content: '';
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='8' fill='%2322c55e'/%3E%3Cpath d='M4 8l2.5 2.5 5.5-5' stroke='white' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-size: cover;
        }

        .consult-badge {
            position: absolute;
            top: 14px;
            right: 14px;
        }

        .consult-badge svg { display: block; }

        .form-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--gray-200);
        }

        .form-header-icon {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: var(--blue-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .form-header-icon svg { color: white; }

        .form-header-title {
            font-size: 22px;
            font-weight: 800;
            color: var(--blue-dark);
        }

        .form-header-sub {
            font-size: 14px;
            color: var(--gray-500);
            margin-top: 2px;
        }

        .field-row {
            display: grid;
            gap: 20px;
            margin-bottom: 20px;
        }

        .field-row-3 { grid-template-columns: 1fr 1fr 1fr; }
        .field-row-2 { grid-template-columns: 1fr 1fr; }

        .field-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .field-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--blue-dark);
        }

        .field-label .req {
            color: var(--red);
            margin-left: 2px;
        }

        .input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 13px;
            width: 18px;
            height: 18px;
            color: var(--gray-400);
            pointer-events: none;
            flex-shrink: 0;
        }

        .form-input {
            width: 100%;
            padding: 11px 14px 11px 40px;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-sm);
            font-family: inherit;
            font-size: 14px;
            color: var(--gray-700);
            background: var(--white);
            transition: border-color .2s, box-shadow .2s;
            outline: none;
        }

        .form-input::placeholder { color: var(--gray-300); }

        .form-input:focus {
            border-color: var(--blue-primary);
            box-shadow: 0 0 0 3px rgba(26,47,127,0.08);
        }

        .select-wrap { position: relative; }

        .select-wrap select {
            width: 100%;
            padding: 11px 42px 11px 14px;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-sm);
            font-family: inherit;
            font-size: 14px;
            color: var(--gray-700);
            background: var(--white);
            appearance: none;
            cursor: pointer;
            outline: none;
            transition: border-color .2s;
        }

        .select-wrap select:focus { border-color: var(--blue-primary); }

        .select-arrow {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: var(--gray-400);
        }

        .field-helper {
            font-size: 12px;
            color: var(--gray-400);
        }

        .textarea-wrap { position: relative; }

        .form-textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-sm);
            font-family: inherit;
            font-size: 14px;
            color: var(--gray-700);
            background: var(--white);
            resize: vertical;
            min-height: 130px;
            outline: none;
            transition: border-color .2s;
        }

        .form-textarea::placeholder { color: var(--gray-300); }

        .form-textarea:focus {
            border-color: var(--blue-primary);
            box-shadow: 0 0 0 3px rgba(26,47,127,0.08);
        }

        .char-counter {
            position: absolute;
            bottom: 10px;
            right: 12px;
            font-size: 12px;
            color: var(--gray-400);
        }

        .section-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--blue-dark);
            margin-bottom: 4px;
        }

        .section-sub {
            font-size: 13px;
            color: var(--gray-500);
            margin-bottom: 14px;
        }

        .upload-box {
            border: 2px dashed var(--gray-300);
            border-radius: var(--radius);
            padding: 28px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            background: var(--gray-50);
            cursor: pointer;
            transition: border-color .2s, background .2s;
            margin-bottom: 10px;
        }

        .upload-box:hover,
        .upload-box.drag-over {
            border-color: var(--blue-primary);
            background: var(--blue-light);
        }

        .upload-icon { color: var(--cyan); }

        .upload-text {
            font-size: 14px;
            color: var(--gray-500);
        }

        .upload-or {
            color: var(--gray-400);
            margin: 0 8px;
        }

        .btn-choose {
            padding: 9px 20px;
            border: 1.5px solid var(--blue-primary);
            border-radius: var(--radius-sm);
            background: white;
            color: var(--blue-primary);
            font-family: inherit;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: background .2s, color .2s;
            white-space: nowrap;
        }

        .btn-choose:hover {
            background: var(--blue-primary);
            color: white;
        }

        .upload-meta {
            font-size: 12.5px;
            color: var(--gray-400);
            margin-bottom: 16px;
            display: flex;
            gap: 0;
            flex-wrap: wrap;
        }

        .upload-meta span {
            display: inline-flex;
            align-items: center;
        }

        .upload-meta .sep {
            margin: 0 10px;
            color: var(--gray-300);
        }

        .doc-info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 20px;
        }

        .doc-info-card {
            background: var(--gold-light);
            border: 1px solid var( --blue-light);
            border-radius: var(--radius);
            padding: 14px 16px;
        }

        .doc-info-card-header {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 800;
            color: var(--blue-dark);
            margin-bottom: 10px;
        }

        .doc-info-card-header svg { flex-shrink: 0; }

        .doc-list {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5px 8px;
        }

        .doc-list li {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            color: var(--gray-700);
        }

        .doc-list li svg { color: var(--gray-400); flex-shrink: 0; }

        .priority-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .priority-list li {
            display: flex;
            align-items: flex-start;
            gap: 7px;
            font-size: 12.5px;
            color: var(--gray-700);
        }

        .priority-list li::before {
            content: '';
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            margin-top: 1px;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='8' fill='%2322c55e'/%3E%3Cpath d='M4 8l2.5 2.5 5.5-5' stroke='white' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-size: cover;
        }

       .contact-cards {
    display: flex;
    flex-wrap: nowrap;   /* 👈 MOST IMPORTANT (no wrap) */
    gap: 12px;
    width: 100%;
}

        .contact-card {
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 14px 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: border-color .2s, box-shadow .2s;
            position: relative;
            background: white;
            flex: 1;              /* equal width */
    min-width: 0;         /* prevents breaking */
    white-space: nowrap; 
        }

        .contact-card.active {
            border-color: var(--green);
            background: #f0fdf4;
            box-shadow: 0 0 0 3px rgba(34,197,94,0.1);
        }

        .contact-card-check {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: var(--green);
            display: none;
            align-items: center;
            justify-content: center;
        }

        .contact-card.active .contact-card-check { display: flex; }

        .contact-card-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gray-100);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-card.active .contact-card-icon { background: #dcfce7; }

        .contact-card-label {
            font-size: 13px;
            font-weight: 700;
            color: var(--blue-dark);
        }

        .contact-card-sub {
            font-size: 11.5px;
            color: var(--gray-500);
        }

        .fee-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            margin-bottom: 20px;
        }

        .fee-card {
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 14px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            background: var(--white);
        }

        .fee-card-icon {
            width: 40px;
            height: 40px;
            border-radius: var(--radius-sm);
            background: var(--gold-light);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .fee-label {
            font-size: 12px;
            color: var(--gray-500);
            margin-bottom: 2px;
        }

        .fee-amount {
            font-size: 22px;
            font-weight: 800;
            color: var(--gold);
            line-height: 1;
        }

        .fee-note-card {
            border: 1.5px solid var(--gold-border);
            border-radius: var(--radius);
            padding: 14px 16px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: var(--gold-light);
        }

        .fee-note-icon { flex-shrink: 0; color: #1a2f7f; margin-top: 1px; }

        .fee-note-title {
            font-size: 13px;
            font-weight: 700;
            color: var(--gold);
            margin-bottom: 3px;
        }

        .fee-note-desc {
            font-size: 12px;
            color: var(--gray-700);
            line-height: 1.5;
        }

        .btn-submit-full {
            width: 100%;
            padding: 16px 24px;
            background: var(--blue-dark);
            color: white;
            border: none;
            border-radius: var(--radius);
            font-family: inherit;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: background .2s, transform .15s, box-shadow .2s;
            box-shadow: 0 4px 16px rgba(13,27,75,0.25);
            margin-bottom: 10px;
        }

        .btn-submit-full:hover {
            background: #162466;
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(13,27,75,0.3);
        }

        .secure-payment-note {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            font-size: 12.5px;
            color: var(--gray-500);
            margin-bottom: 24px;
        }

        .secure-payment-note svg { color: var(--gray-400); }

        .next-card {
            background: var(--gray-50);
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius);
            padding: 18px 20px;
        }

        .next-title {
            font-size: 15px;
            font-weight: 800;
            color: var(--blue-dark);
            margin-bottom: 14px;
        }

        .timeline-desktop {
            display: flex;
            align-items: flex-start;
            gap: 0;
        }

        .timeline-step {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            flex: 1;
        }

        .step-icon-wrap {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--blue-light);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--blue-primary);
        }

        .step-number-badge {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--blue-dark);
            color: white;
            font-size: 11px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .step-label {
            font-size: 12.5px;
            font-weight: 700;
            color: var(--blue-dark);
            margin-bottom: 2px;
        }

        .step-desc {
            font-size: 11.5px;
            color: var(--gray-500);
            line-height: 1.4;
            max-width: 160px;
        }

        .step-content-inner { display: flex; flex-direction: column; gap: 2px; }

        .step-num-label-row {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 3px;
        }

        .timeline-arrow {
            display: flex;
            align-items: center;
            padding: 0 8px;
            padding-top: 12px;
            color: var(--gray-300);
            flex-shrink: 0;
        }

        .mobile-hero {
            display: none;
            background: var(--white);
            padding: 28px 20px 24px;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--gray-100);
        }

        .mobile-hero-inner {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
        }

        .mobile-hero-text { flex: 1; }

        .mobile-hero .hero-heading {
            color: var(--blue-dark);
            font-size: 26px;
        }

        .mobile-hero .hero-sub {
            color: var(--gray-500);
            font-size: 13.5px;
            max-width: 100%;
            margin-bottom: 0;
        }

        .mobile-hero .hero-underline {
            background: var(--cyan);
            margin-bottom: 12px;
        }

        .hero-image-placeholder {
            width: 130px;
            height: 130px;
            background: var(--gray-100);
            border-radius: var(--radius);
            border: 2px dashed var(--gray-300);
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: var(--gray-400);
            text-align: center;
            padding: 8px;
        }

        .mobile-feature-list { display: none; }

        .mobile-feature-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 16px 0;
            border-bottom: 1px solid var(--gray-100);
        }

        .mobile-feature-item:last-child { border-bottom: none; }

        .mfi-icon {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            color: var(--blue-primary);
        }

        .mfi-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--blue-dark);
            margin-bottom: 3px;
        }

        .mfi-desc {
            font-size: 13px;
            color: var(--gray-500);
        }

        .timeline-mobile { display: none; }

        .tl-step-m {
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .tl-step-m .step-desc { max-width: none; }

        .tl-arrow-m {
            display: flex;
            justify-content: flex-start;
            padding-left: 19px;
            padding-top: 4px;
            padding-bottom: 4px;
            color: var(--gray-400);
        }

        @media (max-width: 1100px) {
            .main-grid {
                grid-template-columns: 280px 1fr;
                gap: 28px;
            }
            .hero-heading { font-size: 30px; }
            .form-card { padding: 24px 20px; }
            .field-row-3 { grid-template-columns: 1fr 1fr; }
            .consultation-cards { grid-template-columns: 1fr; }
        }

        @media (max-width: 860px) {
            .main-grid { grid-template-columns: 1fr; }
            .left-col { display: none; }
            .mobile-hero { display: block; }
            .page-wrapper { padding: 0 0 32px; }
            .form-card {
                border-radius: 16px 16px 0 0;
                margin-top: -16px;
                position: relative;
                box-shadow: 0 -4px 24px rgba(0,0,0,0.08);
                padding: 28px 20px;
            }
            .field-row-3 { grid-template-columns: 1fr; }
            .field-row-2 { grid-template-columns: 1fr; }
            .consultation-cards { grid-template-columns: 1fr; gap: 10px; }
            .upload-box { flex-direction: column; gap: 10px; }
            .doc-info-grid { grid-template-columns: 1fr; }
            .fee-row { grid-template-columns: 1fr; }
            .next-card {
                background: var(--white);
                border: 1.5px solid var(--gray-200);
                border-radius: var(--radius-lg);
                padding: 24px 20px;
                margin: 20px 16px;
            }
            .next-title { font-size: 16px; margin-bottom: 20px; }
            .timeline-desktop { display: none; }
            .timeline-mobile { display: block; }
            .mobile-feature-list {
                display: block;
                padding: 0 16px;
                background: white;
            }
            .contact-cards {
                grid-template-columns: repeat(3, 1fr);
                gap: 8px;
            }
            .contact-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: 14px 8px;
                gap: 6px;
            }
            .contact-card-check { top: 6px; right: 6px; }
        }

        @media (max-width: 480px) {
            .contact-cards { gap: 8px; }
            .contact-card { padding: 12px 6px; gap: 6px; }
            .contact-card-label { font-size: 12px; }
            .contact-card-sub { font-size: 11px; }
            .contact-card-icon { width: 32px; height: 32px; }
            .doc-list { grid-template-columns: 1fr; }
        }
               .upload-attach-note {
            font-size: 12.5px;
            color: var(--gray-500);
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
.doc-info-grid.free-mode {
    grid-template-columns: 1fr;
}

.doc-info-grid.free-mode #attachInfoCard {
    grid-column: 1 / -1;
    width: 100%;
}

.doc-info-grid.free-mode .upload-attach-note,
.doc-info-grid.free-mode .doc-info-card-header {
    color:#64748b;
}

.doc-info-grid.free-mode .doc-info-card-header {
    font-weight: 700;
}

        /* Free Consultation: simple text layout for "What You Can Attach" (no card styling) */
        .doc-info-card.plain-attach {
            background: transparent;
            border: none;
            border-radius: 0;
            padding: 0;
        }

        /* Free Consultation: contact cards expand to fill width when Phone is hidden */
        .contact-cards.two-col {
            grid-template-columns: 1fr 1fr;
        }
        @media (max-width: 860px) {
               .contact-cards {
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
    }

    .contact-card {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 14px 8px;
        gap: 6px;
    }

        }
    </style>
</head>

<body>

    <!-- MOBILE HERO -->
    <div class="mobile-hero">
        <div class="mobile-hero-inner">
            <div class="mobile-hero-text">
                <h1 class="hero-heading">Ask an Expert.<br>We're Here to <span class="cyan">Help!</span></h1>
                <div class="hero-underline" style="margin-top:12px;"></div>
                <p class="hero-sub">Submit your query and our experts will review your case and get back to you with the best solution.</p>
            </div>
            <div class="hero-image-placeholder">
                <!-- Client image -->
            </div>
        </div>
    </div>

    <!-- PAGE WRAPPER -->
    <div class="page-wrapper">
        <div class="main-grid">

            <!-- LEFT COLUMN -->
            <div class="left-col">
                <h1 class="hero-heading">Ask an Expert.<br>We're Here to <span class="cyan">Help!</span></h1>
                <div class="hero-underline"></div>
                <p class="hero-sub">Submit your query and our experts will review your case and get back to you with the best solution.</p>

                <div class="desktop-image-placeholder">
                    <!-- Client image will be added later -->
                </div>

                <div class="feature-grid">
                    <div class="feature-card">
                        <svg class="feature-icon" viewBox="0 0 36 36" fill="none">
                            <circle cx="18" cy="18" r="14" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M12 18l4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="feature-title">Expert Guidance</div>
                        <div class="feature-desc">Get professional advice from experienced experts.</div>
                    </div>
                    <div class="feature-card">
                        <svg class="feature-icon" viewBox="0 0 36 36" fill="none">
                            <rect x="10" y="15" width="16" height="13" rx="3" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M13 15v-3a5 5 0 0110 0v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            <circle cx="18" cy="21" r="1.5" fill="currentColor"/>
                        </svg>
                        <div class="feature-title">Secure &amp; Confidential</div>
                        <div class="feature-desc">Your information is safe and fully confidential.</div>
                    </div>
                    <div class="feature-card">
                        <svg class="feature-icon" viewBox="0 0 36 36" fill="none">
                            <circle cx="14" cy="14" r="5" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="24" cy="14" r="5" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M7 28c0-4 3.1-7 7-7h8c3.9 0 7 3 7 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                        <div class="feature-title">Trusted by Businesses</div>
                        <div class="feature-desc">Thousands of businesses trust IFTS.</div>
                    </div>
                    <div class="feature-card">
                        <svg class="feature-icon" viewBox="0 0 36 36" fill="none">
                            <path d="M18 8v10l6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="18" cy="18" r="10" stroke="currentColor" stroke-width="1.8"/>
                        </svg>
                        <div class="feature-title">Fast &amp; Reliable</div>
                        <div class="feature-desc">We respond quickly and value your time.</div>
                    </div>
                </div>

               

               
            </div>

            <!-- RIGHT COLUMN -->
            <div class="right-col">
                <div class="form-card">

                    <!-- 1. Choose Consultation Type -->
                    <div class="consultation-label">
                        <span>1.</span> Choose Consultation Type
                    </div>
                    <div class="consultation-cards" id="consultationCards">

                        <div class="consult-card active-blue" data-type="free">
                            <div class="consult-radio">
                                <div class="consult-radio-dot"></div>
                            </div>
                            <div class="consult-body">
                                <div class="consult-title">Free Consultation</div>
                                <ul class="consult-features">
                                    <li>Response within 24–48 Hours</li>
                                    <li>General Guidance</li>
                                    <li>No Payment Required</li>
                                </ul>
                            </div>
                            <div class="consult-badge">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <rect width="44" height="44" rx="10" fill="#e8edf8"/>
                                    <rect x="10" y="13" width="24" height="18" rx="3" stroke="#1a2f7f" stroke-width="1.6"/>
                                    <path d="M10 19h24" stroke="#1a2f7f" stroke-width="1.6"/>
                                    <circle cx="22" cy="28" r="2" fill="#1a2f7f"/>
                                    <path d="M18 24h8" stroke="#1a2f7f" stroke-width="1.4" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>

                        <div class="consult-card" data-type="priority">
                            <div class="consult-radio">
                                <div class="consult-radio-dot"></div>
                            </div>
                            <div class="consult-body">
                                <div class="consult-title">Priority Expert Review – Rs. 15,000</div>
                                <ul class="consult-features">
                                    <li>Response within 6–8 Working Hours</li>
                                    <li>Dedicated Expert Assignment</li>
                                    <li>Adjustable in Final Service Fee</li>
                                </ul>
                            </div>
                            <div class="consult-badge">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="18" r="10" fill="#1a2f7f" stroke="#1a2f7f" stroke-width="1.5"/>
                                    <path d="M22 12l1.8 3.6 4 .6-2.9 2.8.7 4-3.6-1.9-3.6 1.9.7-4-2.9-2.8 4-.6L22 12z" fill="white"/>
                                    <path d="M15 26l-3 10 10-4 10 4-3-10" fill="#1a2f7f" stroke="#1a2f7f" stroke-width="1" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <input type="hidden" name="consultation_type" id="consultationTypeInput" value="free">

                    <!-- Row 1: Full Name / WhatsApp / Email -->
                    <div class="field-row field-row-3">
                        <div class="field-group">
                            <label class="field-label">Full Name <span class="req">*</span></label>
                            <div class="input-wrap">
                                <svg class="input-icon" viewBox="0 0 20 20" fill="none">
                                    <circle cx="10" cy="7" r="3.5" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M3 18c0-3.9 3.1-7 7-7s7 3.1 7 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                                <input class="form-input" type="text" name="full_name" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="field-group">
                            <label class="field-label">WhatsApp Number <span class="req">*</span></label>
                            <div class="input-wrap">
                                <svg class="input-icon" viewBox="0 0 20 20" fill="none">
                                    <circle cx="10" cy="10" r="8" stroke="#25D366" stroke-width="1.5"/>
                                    <path d="M13.5 12.4c-.2-.1-1.2-.6-1.4-.6-.2-.1-.3-.1-.5.1l-.6.7c-.1.1-.2.1-.4 0-.2-.1-.8-.3-1.6-1-.6-.6-1-1.2-1.1-1.4 0-.2 0-.3.1-.4l.4-.5c.1-.1.1-.2.1-.3 0-.1-.3-.9-.5-1.2-.1-.3-.3-.2-.4-.2h-.4c-.2 0-.4.1-.6.3-.5.6-.7 1.2-.5 2 .2.8.8 1.6 1.7 2.5.4.4.9.8 1.4 1.1.6.3 1.1.5 1.6.5.5 0 .9-.1 1.3-.4.3-.3.5-.7.5-1.1 0-.2-.1-.3-.1-.3z" fill="#25D366"/>
                                </svg>
                                <input class="form-input" type="tel" name="whatsapp" placeholder="03xxxxxxxxx">
                            </div>
                        </div>
                        <div class="field-group">
                            <label class="field-label">Email Address <span class="req">*</span></label>
                            <div class="input-wrap">
                                <svg class="input-icon" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" y="4" width="16" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M2 7l8 5 8-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                                <input class="form-input" type="email" name="email" placeholder="youremail@example.com">
                            </div>
                        </div>
                    </div>

                    <!-- Select Matter -->
                    <div class="field-row" style="grid-template-columns:1fr; margin-bottom:20px;">
                        <div class="field-group">
                            <label class="field-label" id="serviceLabel">What Do You Need Help With? <span class="req">*</span></label>

                            <div class="select-wrap">
                                <select name="service" id="serviceSelect">
                                    <option value="" disabled selected>What Do You Need Help With?</option>
                                    <option>NTN Registration / Filer Registration</option>
                                    <option>Income Tax Return Filing</option>
                                    <option>Sales Tax Registration</option>
                                    <option>Sales Tax Return Filing</option>
                                    <option>ATL Status &amp; Tax Compliance</option>
                                    <option>FBR Notices &amp; Compliance</option>
                                    <option>SECP Company Registration</option>
                                    <option>SECP Compliance &amp; Annual Filings</option>
                                    <option>Trademark Registration</option>
                                    <option>Copyright Registration</option>
                                    <option>Patent Registration</option>
                                    <option>Import Export Registration (PSW)</option>
                                    <option>PSEB Registration</option>
                                    <option>PSB Registration</option>
                                    <option>IPO Pakistan Matters</option>
                                    <option>Accounting &amp; Bookkeeping</option>
                                    <option>Payroll Management</option>
                                    <option>Audit &amp; Assurance</option>
                                    <option>Financial Statements Preparation</option>
                                    <option>Business Advisory</option>
                                    <option>Tax Advisory</option>
                                    <option>Banking &amp; Business Documentation</option>
                                    <option>Digital Business Setup</option>
                                    <option>Website Development</option>
                                    <option>E-Commerce Solutions</option>
                                    <option>CRM / Business Automation</option>
                                    <option>Branding &amp; Design</option>
                                    <option>Digital Marketing</option>
                                    <option>Mobile App Development</option>
                                    <option>General Consultation</option>
                                    <option>Other</option>
                                </select>
                                <span class="select-arrow">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
<div class="field-helper" id="serviceHelper">
    Choose the service you need help with
</div>                        </div>
                    </div>

                    
                    <!-- Describe Your Query -->
                    <div class="field-group" style="margin-bottom:20px;">
                        <label class="field-label">Describe Your Query <span class="req">*</span></label>
                        <div class="textarea-wrap">
                            <textarea class="form-textarea" id="queryTextarea" name="query" placeholder="Please explain your matter in detail so the appropriate expert can review it." maxlength="2000"></textarea>
                            <span class="char-counter" id="charCounter">0/2000</span>
                        </div>
                    </div>

                    <!-- Attach Supporting Documents -->
                    <div style="margin-bottom:20px;">
                        <div class="section-title">Attach Supporting Documents (Recommended)</div>
                        <div class="section-sub">Upload documents related to your matter for faster and better review.</div>

                        <div class="upload-box" id="dropZone">
                            <svg class="upload-icon" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <path d="M18 24V12M18 12l-5 5M18 12l5 5" stroke="#00c2c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 28c-3.3 0-6-2.7-6-6 0-3 2.1-5.5 5-5.9C8 12.3 12.6 9 18 9c5.4 0 10 3.3 11 7.1 2.9.4 5 2.9 5 5.9 0 3.3-2.7 6-6 6" stroke="#00c2c7" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <span class="upload-text">Drag &amp; drop files here</span>
                            <span class="upload-or">or</span>
                            <button class="btn-choose" type="button">Choose Files</button>
                            <input type="file" id="fileInput" name="documents[]" multiple accept=".pdf,.jpg,.jpeg,.png" style="display:none;">
                        </div>

                        <div class="upload-meta">
                            <span>Supported formats: PDF, JPG, PNG</span>
                            <span class="sep">|</span>
                            <span>Max file size: 10MB per file</span>
                            <span class="sep">|</span>
                            <span>You can upload up to 5 files</span>
                        </div>

                        <div class="doc-info-grid" id="docInfoGrid">
                            <div class="doc-info-card plain-attach" id="attachInfoCard">
                                                                 <p class="upload-attach-note">
                           <strong>What You Can Attach: </strong>Notices, Certificates, Tax Documents, CNIC, Registration Documents, Bank Statements, Contracts, Invoices, Letters, or any other relevant files.
                        </p>
                            </div>

                            <div class="doc-info-card" id="priorityIncludesCard" style="display:none;">
                                <div class="doc-info-card-header">
                                   
                                    Priority Expert Review Includes
                                </div>
                                <ul class="priority-list">
                                    <li>Dedicated Expert Assignment</li>
                                    <li>Document &amp; Notice Review</li>
                                    <li>Response within 6–8 Working Hours</li>
                                    <li>WhatsApp Follow-up</li>
                                    <li>Rs. 15,000 Adjustable Against Final Service Fee</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Preferred Contact Method -->
                    <div style="margin-bottom:20px;">
                        <div class="section-title">Preferred Contact Method <span style="color:var(--red);">*</span></div>
                        <div class="contact-cards two-col" id="contactCards">

                            <div class="contact-card active" data-method="whatsapp">
                                <div class="contact-card-check">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M2 5l2.5 2.5 4.5-4.5" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="contact-card-icon">
                                   <i class="fa-brands fa-whatsapp" style="font-size: 23px;"></i>
                                </div>
                                <div>
                                    <div class="contact-card-label">WhatsApp</div>
                                    <div class="contact-card-sub">Get updates on WhatsApp</div>
                                </div>
                            </div>

<div class="contact-card" id="phoneCard" data-method="phone" style="display:none;">                                <div class="contact-card-check">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M2 5l2.5 2.5 4.5-4.5" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="contact-card-icon">
<i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <div class="contact-card-label">Phone Call</div>
                                    <div class="contact-card-sub">We will call you</div>
                                </div>
                            </div>

                            <div class="contact-card" data-method="email">
                                <div class="contact-card-check">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M2 5l2.5 2.5 4.5-4.5" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="contact-card-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" y="4" width="16" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M2 7l8 5 8-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="contact-card-label">Email</div>
                                    <div class="contact-card-sub">We will email you</div>
                                </div>
                            </div>

                        </div>
                        <input type="hidden" name="contact_method" id="contactMethodInput" value="whatsapp">
                    </div>

                    <!-- Priority Expert Review Fee -->
                    <div class="fee-row" id="feeRow" style="display:none;">
                        <div class="fee-card">
                            <div class="fee-card-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <rect x="2" y="5" width="18" height="13" rx="3" stroke="#1a2f7f" stroke-width="1.6"/>
                                    <path d="M2 9h18" stroke="#1a2f7f" stroke-width="1.6"/>
                                    <circle cx="6" cy="14" r="1.2" fill="#1a2f7f"/>
                                </svg>
                            </div>
                            <div>
                                <div class="fee-label">Priority Expert Review Fee</div>
                                <div class="fee-amount">Rs. 15,000</div>
                            </div>
                        </div>
                        <div class="fee-note-card">
                            <svg class="fee-note-icon" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <circle cx="9" cy="9" r="8" stroke="#1a2f7f" stroke-width="1.5"/>
                                <path d="M9 5v4M9 12v1" stroke="#1a2f7f" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                            <div>
                                <div class="fee-note-title">Proceeding with IFTS services later?</div>
                                <div class="fee-note-desc">This amount will be adjusted in your final service invoice.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn-submit-full" type="submit" id="submitBtn">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M2 9h14M9.5 3l6 6-6 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span id="submitBtnText">SUBMIT QUERY</span>
                    </button>

                    <div class="secure-payment-note">
                        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
                            <path d="M8 1L2 4v5c0 4 2.7 7.5 6 8.5 3.3-1 6-4.5 6-8.5V4L8 1z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/>
                        </svg>
                        Secure Payment — Your payment information is 100% secure.
                    </div>

                    <!-- What Happens Next -->
                    <div class="next-card">
                        <div class="next-title">What Happens Next?</div>

                        <!-- Desktop Timeline -->
                        <div class="timeline-desktop">
                            <div class="timeline-step">
                                <div class="step-icon-wrap">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="3" y="2" width="14" height="16" rx="2.5" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M7 7h6M7 10h6M7 13h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="step-num-label-row">
                                        <div class="step-label">Query Submitted</div>
                                    </div>
                                    <div class="step-desc">We receive your query and documents.</div>
                                </div>
                            </div>
                            <div class="timeline-arrow">
                                <svg width="28" height="20" viewBox="0 0 28 20" fill="none">
                                    <path d="M2 10h22M18 4l6 6-6 6" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="timeline-step">
                                <div class="step-icon-wrap">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="8" r="4" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M3 17c0-3.3 3.1-6 7-6s7 2.7 7 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="step-num-label-row">
                                        <div class="step-label">Expert Review</div>
                                    </div>
                                    <div class="step-desc">A dedicated expert reviews your matter.</div>
                                </div>
                            </div>
                            <div class="timeline-arrow">
                                <svg width="28" height="20" viewBox="0 0 28 20" fill="none">
                                    <path d="M2 10h22M18 4l6 6-6 6" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="timeline-step">
                                <div class="step-icon-wrap">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" y="4" width="16" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M2 7l8 5 8-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="step-num-label-row">
                                        <div class="step-label">Response Delivered</div>
                                    </div>
                                    <div class="step-desc" id="timelineDescDesktop">Receive a detailed response within 24–48 Hours.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Timeline -->
                        <div class="timeline-mobile">
                            <div class="tl-step-m">
                                <div class="step-icon-wrap" style="width:44px;height:44px;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="3" y="2" width="14" height="16" rx="2.5" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M7 7h6M7 10h6M7 13h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div style="padding-top:8px;">
                                    <div class="step-num-label-row">
                                        <div class="step-label">Query Submitted</div>
                                    </div>
                                    <div class="step-desc">We receive your query and documents.</div>
                                </div>
                            </div>
                            <div class="tl-arrow-m">
                                <svg width="20" height="28" viewBox="0 0 20 28" fill="none">
                                    <path d="M10 2v22M4 18l6 6 6-6" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="tl-step-m">
                                <div class="step-icon-wrap" style="width:44px;height:44px;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <circle cx="10" cy="8" r="4" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M3 17c0-3.3 3.1-6 7-6s7 2.7 7 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div style="padding-top:8px;">
                                    <div class="step-num-label-row">
                                        <div class="step-label">Expert Review</div>
                                    </div>
                                    <div class="step-desc">A dedicated expert reviews your matter.</div>
                                </div>
                            </div>
                            <div class="tl-arrow-m">
                                <svg width="20" height="28" viewBox="0 0 20 28" fill="none">
                                    <path d="M10 2v22M4 18l6 6 6-6" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="tl-step-m">
                                <div class="step-icon-wrap" style="width:44px;height:44px;">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <rect x="2" y="4" width="16" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M2 7l8 5 8-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div style="padding-top:8px;">
                                    <div class="step-num-label-row">
                                        <div class="step-label">Response Delivered</div>
                                    </div>
                                    <div class="step-desc" id="timelineDescMobile">Receive a detailed response within 24–48 Hours.</div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /next-card -->

                </div><!-- /form-card -->
            </div><!-- /right-col -->

        </div><!-- /main-grid -->

        <!-- Mobile Feature List -->
        <div class="mobile-feature-list">
            <div class="mobile-feature-item">
                <svg class="mfi-icon" viewBox="0 0 40 40" fill="none">
                    <circle cx="20" cy="20" r="15" stroke="currentColor" stroke-width="1.8"/>
                    <path d="M13 20l5 5 9-9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div>
                    <div class="mfi-title">Expert Guidance</div>
                    <div class="mfi-desc">Get professional advice from experienced experts.</div>
                </div>
            </div>
            <div class="mobile-feature-item">
                <svg class="mfi-icon" viewBox="0 0 40 40" fill="none">
                    <rect x="11" y="18" width="18" height="14" rx="3" stroke="currentColor" stroke-width="1.8"/>
                    <path d="M14 18v-4a6 6 0 0112 0v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    <circle cx="20" cy="25" r="2" fill="currentColor"/>
                </svg>
                <div>
                    <div class="mfi-title">Secure &amp; Confidential</div>
                    <div class="mfi-desc">Your information is safe and fully confidential.</div>
                </div>
            </div>
            <div class="mobile-feature-item">
                <svg class="mfi-icon" viewBox="0 0 40 40" fill="none">
                    <circle cx="15" cy="15" r="6" stroke="currentColor" stroke-width="1.8"/>
                    <circle cx="26" cy="15" r="6" stroke="currentColor" stroke-width="1.8"/>
                    <path d="M7 33c0-5 3.6-8 8-8h10c4.4 0 8 3 8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
                <div>
                    <div class="mfi-title">Trusted by Businesses</div>
                    <div class="mfi-desc">Thousands of businesses trust IFTS.</div>
                </div>
            </div>
            <div class="mobile-feature-item">
                <svg class="mfi-icon" viewBox="0 0 40 40" fill="none">
                    <path d="M20 8v12l7 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="20" cy="20" r="12" stroke="currentColor" stroke-width="1.8"/>
                </svg>
                <div>
                    <div class="mfi-title">Fast &amp; Reliable</div>
                    <div class="mfi-desc">We respond quickly and value your time.</div>
                </div>
            </div>
        </div>

    </div><!-- /page-wrapper -->

    <script>
        const priorityIncludesCard = document.getElementById('priorityIncludesCard');
        const attachInfoCard = document.getElementById('attachInfoCard');
        const contactCards = document.getElementById('contactCards');
        const timelineDescDesktop = document.getElementById('timelineDescDesktop');
        const timelineDescMobile = document.getElementById('timelineDescMobile');

        function updateServiceSection(type) {

    const label = document.getElementById('serviceLabel');
    const helper = document.getElementById('serviceHelper');
    const select = document.getElementById('serviceSelect');

    if (type === 'free') {
 noticeDocRow.style.display = 'none';
    priorityIncludesCard.style.display = 'none';

    document.getElementById('docInfoGrid')
        .classList.add('free-mode');
        label.innerHTML =
            'What Do You Need Help With? <span class="req">*</span>';

        helper.textContent =
            'Choose the service you need help with';

        select.options[0].text =
            'What Do You Need Help With?';

        // Hide Notice/Document dropdown, show plain attach text, hide priority includes card
        noticeDocRow.style.display = 'none';
        priorityIncludesCard.style.display = 'none';
        attachInfoCard.classList.add('plain-attach');
        contactCards.classList.add('two-col');

        // Timeline text
        timelineDescDesktop.textContent = 'Receive a detailed response within 24–48 Hours.';
        timelineDescMobile.textContent = 'Receive a detailed response within 24–48 Hours.';

    } else {

         noticeDocRow.style.display = 'grid';
    priorityIncludesCard.style.display = 'block';

    document.getElementById('docInfoGrid')
        .classList.remove('free-mode');
        label.innerHTML =
            'Select Your Matter / Issue Type <span class="req">*</span>';

        helper.textContent =
            'Choose the option that best matches your issue.';

        select.options[0].text =
            'Select Your Matter / Issue Type';

        // Show Notice/Document dropdown, restore Priority Expert Review Includes card
        noticeDocRow.style.display = 'grid';
        priorityIncludesCard.style.display = 'block';
        attachInfoCard.classList.remove('plain-attach');
        contactCards.classList.remove('two-col');

        // Timeline text
        timelineDescDesktop.textContent = 'Receive a detailed response within 6–8 Working Hours.';
        timelineDescMobile.textContent = 'Receive a detailed response within 6–8 Working Hours.';
    }
}
        // ── Dropdown options per consultation type ──
        const serviceOptions = {
            free: [
                'NTN Registration / Filer Registration',
                'Income Tax Return Filing',
                'Sales Tax Registration',
                'Sales Tax Return Filing',
                'ATL Status & Tax Compliance',
                'FBR Notices & Compliance',
                'SECP Company Registration',
                'SECP Compliance & Annual Filings',
                'Trademark Registration',
                'Copyright Registration',
                'Patent Registration',
                'Import Export Registration (PSW)',
                'PSEB Registration',
                'PSB Registration',
                'IPO Pakistan Matters',
                'Accounting & Bookkeeping',
                'Payroll Management',
                'Audit & Assurance',
                'Financial Statements Preparation',
                'Business Advisory',
                'Tax Advisory',
                'Banking & Business Documentation',
                'Digital Business Setup',
                'Website Development',
                'E-Commerce Solutions',
                'CRM / Business Automation',
                'Branding & Design',
                'Digital Marketing',
                'Mobile App Development',
                'General Consultation',
                'Other'
            ],
            priority: [
                'FBR Notice',
                'SECP Notice',
                'FIA Notice',
                'Income Tax Matter',
                'Sales Tax Matter',
                'ATL / Filer Issue',
                'Company Registration',
                'Trademark Objection',
                'Accounting & Bookkeeping',
                'Business Advisory',
                'Website Development',
                'CRM / Automation',
                'Digital Marketing',
                'Other Matter'
            ]
        };

        function updateServiceDropdown(type) {
            const select = document.getElementById('serviceSelect');
            const options = serviceOptions[type] || serviceOptions.free;
            const placeholderText = type === 'free' ? 'What Do You Need Help With?' : 'Select Your Matter / Issue Type';
            select.innerHTML = '<option value="" disabled selected>' + placeholderText + '</option>';
            options.forEach(function(opt) {
                const el = document.createElement('option');
                el.textContent = opt;
                select.appendChild(el);
            });
        }

        // ── Character counter ──
        const textarea = document.getElementById('queryTextarea');
        const counter  = document.getElementById('charCounter');
        textarea.addEventListener('input', function() {
            counter.textContent = textarea.value.length + '/2000';
        });

        // ── Contact method selection ──
        const contactMethodInput = document.getElementById('contactMethodInput');
        document.getElementById('contactCards').addEventListener('click', function(e) {
            const card = e.target.closest('.contact-card');
            if (!card) return;
            document.querySelectorAll('.contact-card').forEach(function(c) { c.classList.remove('active'); });
            card.classList.add('active');
            contactMethodInput.value = card.dataset.method;
        });
        const phoneCard = document.getElementById('phoneCard');

        // ── Consultation type selection ──
        const consultationTypeInput = document.getElementById('consultationTypeInput');
        const feeRow = document.getElementById('feeRow');
        const submitBtnText = document.getElementById('submitBtnText');

        document.getElementById('consultationCards').addEventListener('click', function(e) {
            const card = e.target.closest('.consult-card');
            if (!card) return;
            document.querySelectorAll('.consult-card').forEach(function(c) {
                c.classList.remove('active', 'active-blue');
            });
            const type = card.dataset.type;
          if (type === 'priority') {

    phoneCard.style.display = 'flex';

    card.classList.add('active');
    feeRow.style.display = 'grid';
    submitBtnText.textContent =
        'Proceed to Payment & Submit Priority Review';

} else {

    phoneCard.style.display = 'none';

    // اگر پہلے Phone منتخب تھا تو WhatsApp منتخب کر دو
    document.querySelectorAll('.contact-card')
        .forEach(c => c.classList.remove('active'));

    document.querySelector('[data-method="whatsapp"]')
        .classList.add('active');

    contactMethodInput.value = 'whatsapp';

    card.classList.add('active-blue');
    feeRow.style.display = 'none';
    submitBtnText.textContent = 'SUBMIT QUERY';
}
            consultationTypeInput.value = type;
            updateServiceDropdown(type);
            updateServiceSection(type);
        });

        // ── Drag & drop visual ──
        const dropZone  = document.getElementById('dropZone');
        const fileInput = document.getElementById('fileInput');

        dropZone.addEventListener('click', function() { fileInput.click(); });

        ['dragenter', 'dragover'].forEach(function(evt) {
            dropZone.addEventListener(evt, function(e) { e.preventDefault(); dropZone.classList.add('drag-over'); });
        });
        ['dragleave', 'drop'].forEach(function(evt) {
            dropZone.addEventListener(evt, function(e) { e.preventDefault(); dropZone.classList.remove('drag-over'); });
        });

        // ── Choose Files button ──
        document.querySelector('.btn-choose').addEventListener('click', function(e) {
            e.stopPropagation();
            fileInput.click();
        });
        updateServiceSection('free');
        phoneCard.style.display = 'none';

        const priorityService = {
    id: "MB-ASK-001",
    name: "Ask an Expert - Priority Expert Review",
    pkg: "Priority Expert Review",
    price: 15000,
    icon: "fa-user-tie"
};
document.getElementById('submitBtn')
.addEventListener('click', function(e){

    const consultationType =
        document.getElementById(
            'consultationTypeInput'
        ).value;

    // FREE CONSULTATION
    if(consultationType === 'free'){
        return true;
    }

    // PRIORITY EXPERT REVIEW
    e.preventDefault();

    const service = {

        id: 'MB-ASK-001',

        name: 'Ask an Expert',

        pkg: 'Priority Expert Review',

        price: 15000,

        icon: 'fa-user-tie'
    };

    let cart = [];

    try {

        cart = JSON.parse(
            localStorage.getItem('ifts_cart')
        ) || [];

    } catch {

        cart = [];

    }

    const exists = cart.find(item =>
        item.id === service.id
    );

    if(!exists){

        cart.push(service);

        localStorage.setItem(
            'ifts_cart',
            JSON.stringify(cart)
        );

    }

    window.location.href = 'checkout.php';

});
    </script>

</body>
</html>