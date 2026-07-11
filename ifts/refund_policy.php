<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Refund Policy – IFTS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --navy:        #0B1D3A;
      --navy-mid:    #122550;
      --blue:        #1A3F8F;
      --blue-mid:    #1E52B8;
      --accent:      #2563EB;
      --accent-soft: #3B82F6;
      --sky:         #EEF4FF;
      --sky-mid:     #DBEAFE;
      --orange:      #F97316;
      --red:         #EF4444;
      --green:       #22C55E;
      --white:       #FFFFFF;
      --text-primary:   #0B1D3A;
      --text-secondary: #4B5563;
      --text-muted:     #9CA3AF;
      --border:      #E2E8F0;
      --shadow-sm:   0 1px 3px rgba(11,29,58,.08);
      --shadow-md:   0 4px 16px rgba(11,29,58,.10);
      --shadow-lg:   0 8px 32px rgba(11,29,58,.13);
      --radius-sm:   8px;
      --radius-md:   14px;
      --radius-lg:   20px;
      --font-head:   'Montserrat', sans-serif;
      --font-body:   'Poppins',sans-serif   ;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--font-body);
      color: var(--text-primary);
      background: #F8FAFF;
      line-height: 1.6;
    }
    img { max-width: 100%; display: block; }
    a { color: inherit; text-decoration: none; }
    ul { list-style: none; }

    /* ============================================================
       PAGE WRAPPER
    ============================================================ */
    .page-wrap {
      max-width: 1180px;
      margin: 0 auto;
      padding: 0 32px 80px;
    }

    /* ============================================================
       BREADCRUMB
    ============================================================ */
    .breadcrumb {
       padding:18px 50px 0px;
            background-color:rgb(219, 231, 245);
      font-size: 13px;
      color: var(--text-secondary);
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .breadcrumb a { color: var(--text-secondary); }
    .breadcrumb a:hover { color: var(--accent); }
    .breadcrumb .sep { color: var(--text-muted); font-size: 12px; }
    .breadcrumb strong { color: var(--text-primary); font-weight: 600; }

    /* ============================================================
       HERO
    ============================================================ */
     .hero {
      background-image:url('images/Refund_Policy_deskstop.jpg');
    background-repeat:no-repeat;
    background-position:center;
    background-size:cover;
    min-height:420px;

    display:flex;
    align-items:center;

  margin-top: -20px;
   
        padding:0px 50px;

    }
    .hero-left{
      width: 45%;
    }
    .hero-mobile-banner{
      display:none;
    }

    .hero-heading {
      font-family: var(--font-head);
      font-size: 52px;
      font-weight: 800;
      line-height: 1.06;
      color: var(--navy);
      letter-spacing: -0.8px;
      margin-bottom: 8px;
    }

    .hero-tagline {
      font-family: var(--font-head);
      font-size: 17px;
      font-weight: 700;
      color: var(--accent);
      margin-bottom: 18px;
    }

    .hero-desc {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.75;
      max-width: 480px;
      margin-bottom: 10px;
    }


    /* ============================================================
       SECTION TITLE & DIVIDER
    ============================================================ */
    .section-divider {
      border: none;
      border-top: 1px solid var(--border);
      margin: 0 0 40px;
    }

    .section-label {
      font-family: var(--font-head);
      font-size: 12px;
      font-weight: 700;
      color: var(--accent);
      letter-spacing: .09em;
      text-transform: uppercase;
      margin-bottom: 5px;
    }
    .section-heading {
      font-family: var(--font-head);
      font-size: 24px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 24px;
    }

    /* ============================================================
       POLICY CARDS GRID
    ============================================================ */
    .cards-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-bottom: 16px;
    }
    .cards-grid-row2 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 16px;
    }
    .cards-grid-row3 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 16px;
    }
    .cards-grid-row4 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-bottom: 0;
    }

    .policy-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      padding: 22px 18px 20px;
      box-shadow: var(--shadow-sm);
      transition: box-shadow .22s, transform .22s, border-color .22s;
      display: flex;
      flex-direction: column;
    }
    .policy-card:hover {
      box-shadow: var(--shadow-md);
      transform: translateY(-2px);
      border-color: #BFDBFE;
    }

    .card-icon-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: #1a5bb8 ;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
      flex-shrink: 0;
    }
    .card-icon-circle svg { width: 22px; height: 22px; color: #fff; stroke: #fff; }

    .card-num {
      font-family: var(--font-head);
      font-size: 10px;
      font-weight: 700;
      color: var(--text-muted);
      margin-bottom: 3px;
      letter-spacing: .04em;
      display: none;
    }

    .card-title {
      font-family: var(--font-head);
      font-size: 13.5px;
      font-weight: 800;
      color: var(--navy);
      line-height: 1.3;
      margin-bottom: 10px;
    }

    .card-body {
      font-size: 12px;
      color: var(--text-secondary);
      line-height: 1.65;
      margin-bottom: 8px;
    }

    .card-sub-label {
      font-size: 11.5px;
      font-weight: 700;
      color: var(--accent);
      margin-bottom: 7px;
      font-family: var(--font-head);
      letter-spacing: .02em;
    }

    .card-list {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .card-list li {
      display: flex;
      gap: 7px;
      font-size: 11.5px;
      color: var(--text-secondary);
      line-height: 1.5;
      align-items: flex-start;
    }

    .card-list li::before {
      content: '';
      width: 16px;
      height: 16px;
      min-width: 16px;
      border-radius: 50%;
      background: var(--accent);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
      background-size: 9px;
      background-repeat: no-repeat;
      background-position: center;
      margin-top: 1px;
      flex-shrink: 0;
    }

    .card-list.cross li::before {
      background-color: var(--red);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='18' y1='6' x2='6' y2='18'/%3E%3Cline x1='6' y1='6' x2='18' y2='18'/%3E%3C/svg%3E");
    }

    .card-note {
      font-size: 11px;
      color: var(--text-muted);
      font-style: italic;
      margin-top: 10px;
      line-height: 1.5;
      padding-top: 8px;
      border-top: 1px dashed var(--border);
    }

    /* Highlight badge inside card */
    .card-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      background: var(--sky);
      border: 1px solid #BFDBFE;
      border-radius: 6px;
      padding: 4px 10px;
      font-size: 11px;
      font-weight: 700;
      color: var(--accent);
      font-family: var(--font-head);
      margin-top: 8px;
    }

    /* ============================================================
       SPECIAL OPTIONS SECTION (Option A & B)
    ============================================================ */
    .options-section {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin: 16px 0;
    }

    .option-card {
      border-radius: var(--radius-md);
      padding: 22px 22px 20px;
      border: 1.5px solid;
    }

    .option-card.option-a {
      background: #F0FDF4;
      border-color: #86EFAC;
    }

    .option-card.option-b {
      background: #FFF5F5;
      border-color: #FCA5A5;
    }

    .option-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
    }

    .option-icon {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .option-a .option-icon { background: #22C55E; }
    .option-b .option-icon { background: var(--red); }
    .option-icon svg { width: 18px; height: 18px; stroke: #fff; }

    .option-label {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 800;
      color: var(--navy);
    }

    .option-a .option-label { color: #15803D; }
    .option-b .option-label { color: #B91C1C; }

    .option-body {
      font-size: 12px;
      color: var(--text-secondary);
      line-height: 1.65;
      margin-bottom: 10px;
    }

    .option-highlight {
      background: rgba(34,197,94,.12);
      border-radius: 7px;
      padding: 8px 12px;
      font-size: 11.5px;
      font-weight: 700;
      color: #15803D;
      font-family: var(--font-head);
      margin-bottom: 8px;
      display: block;
    }

    .option-b .option-highlight {
      background: rgba(239,68,68,.10);
      color: #B91C1C;
    }

    .option-list {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .option-list li {
      display: flex;
      gap: 7px;
      font-size: 11.5px;
      color: var(--text-secondary);
      line-height: 1.5;
      align-items: flex-start;
    }

    .option-a .option-list li::before {
      content: '';
      width: 16px;
      height: 16px;
      min-width: 16px;
      border-radius: 50%;
      background: #22C55E;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
      background-size: 9px;
      background-repeat: no-repeat;
      background-position: center;
      margin-top: 1px;
      flex-shrink: 0;
    }

    .option-b .option-list li::before {
      content: '';
      width: 16px;
      height: 16px;
      min-width: 16px;
      border-radius: 50%;
      background: var(--red);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='18' y1='6' x2='6' y2='18'/%3E%3Cline x1='6' y1='6' x2='18' y2='18'/%3E%3C/svg%3E");
      background-size: 9px;
      background-repeat: no-repeat;
      background-position: center;
      margin-top: 1px;
      flex-shrink: 0;
    }

    /* Reclassification example box */
    .example-box {
      background: var(--sky);
      border: 1px solid #BFDBFE;
      border-radius: 8px;
      padding: 10px 14px;
      margin-top: 10px;
    }
    .example-box .ex-label {
      font-family: var(--font-head);
      font-size: 10px;
      font-weight: 700;
      color: var(--accent);
      text-transform: uppercase;
      letter-spacing: .06em;
      margin-bottom: 5px;
    }
    .example-box .ex-row {
      font-size: 11px;
      color: var(--text-secondary);
      line-height: 1.6;
    }
    .example-box .ex-row strong {
      color: var(--navy);
      font-weight: 700;
    }

    /* Timeline badge */
    .timeline-badge {
      background: var(--accent);
      color: #fff;
      border-radius: 8px;
      padding: 8px 14px;
      font-size: 13px;
      font-weight: 800;
      font-family: var(--font-head);
      text-align: center;
      margin: 10px 0;
    }

    /* ============================================================
       COMMITMENT BANNER
    ============================================================ */
    .commitment-banner {
      background: #eef1fb;
      border-radius: var(--radius-lg);
      padding: 32px 40px;
      display: grid;
      grid-template-columns: 80px 1fr auto;
      gap: 28px;
      align-items: center;
      margin: 44px 0 0;
      position: relative;
      overflow: hidden;
    }

    .commitment-shield {
      width: 68px;
      height: 68px;
      position: relative;
      z-index: 1;
      flex-shrink: 0;
    }
    .commitment-shield svg { width: 100%; height: 100%; }

    .commitment-text { position: relative; z-index: 1; }
    .commitment-text h3 {
      font-family: var(--font-head);
      font-size: 20px;
      font-weight: 800;
      color: var(--text-primary);
      margin-bottom: 5px;
    }
    .commitment-text p {
      font-size: 13.5px;
      color: var(--text-secondary);
      line-height: 1.6;
      max-width: 460px;
    }

    .commitment-badges {
      display: flex;
      gap: 20px;
      flex-shrink: 0;
      position: relative;
      z-index: 1;
    }

    .badge-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 7px;
      text-align: center;
    }

    .badge-icon {
      width: 46px;
      height: 46px;
      background: rgba(255, 255, 255, 0.7);
      border: 1px solid rgba(37,99,235,.15);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .badge-icon svg { width: 20px; height: 20px; color: var(--navy); stroke: var(--navy); }

    .badge-label {
      font-family: var(--font-head);
      font-size: 10px;
      font-weight: 700;
      color: var(--text-primary);
      line-height: 1.35;
    }

    /* ============================================================
       MOBILE ACCORDION
    ============================================================ */
    .mobile-accordion { display: none; }

    .accordion-item {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
    }

    .accordion-trigger {
      display: flex;
      align-items: center;
      gap: 14px;
      width: 100%;
      padding: 16px 18px;
      background: none;
      border: none;
      cursor: pointer;
      text-align: left;
      -webkit-tap-highlight-color: transparent;
    }

    .acc-icon-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--navy);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .acc-icon-circle svg { width: 19px; height: 19px; color: #fff; stroke: #fff; }

    .acc-trigger-text { flex: 1; min-width: 0; }
    .acc-num {
      font-size: 10px;
      font-weight: 700;
      color: var(--accent);
      font-family: var(--font-head);
      letter-spacing: .05em;
      display: none;
    }
    .acc-title {
      font-family: var(--font-head);
      font-size: 14px;
      font-weight: 800;
      color: var(--navy);
      line-height: 1.25;
    }

    .acc-chevron {
      width: 30px;
      height: 30px;
      border-radius: 8px;
      background: var(--sky);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: background .2s, transform .28s cubic-bezier(.4,0,.2,1);
    }
    .acc-chevron svg { width: 15px; height: 15px; color: var(--accent); transition: transform .28s cubic-bezier(.4,0,.2,1); }

    .accordion-item.open .acc-chevron { background: var(--accent); }
    .accordion-item.open .acc-chevron svg { color: #fff; transform: rotate(180deg); }
    .accordion-item.open .accordion-trigger { background: var(--sky); }

    .accordion-body {
      max-height: 0;
      overflow: hidden;
      transition: max-height .32s cubic-bezier(.4,0,.2,1);
    }
    .accordion-body-inner {
      padding: 0 18px 18px;
      border-top: 1px solid var(--border);
    }

    .acc-body-text {
      font-size: 13px;
      color: var(--text-secondary);
      line-height: 1.65;
      margin: 12px 0 8px;
    }
    .acc-sub-label {
      font-size: 11.5px;
      font-weight: 700;
      color: var(--accent);
      font-family: var(--font-head);
      margin: 10px 0 6px;
    }
    .acc-list {
      display: flex;
      flex-direction: column;
      gap: 7px;
    }
    .acc-list li {
      display: flex;
      gap: 9px;
      font-size: 13px;
      color: var(--text-secondary);
      line-height: 1.5;
      align-items: flex-start;
    }
    .acc-list li::before {
      content: '';
      width: 18px;
      height: 18px;
      min-width: 18px;
      border-radius: 50%;
      background: var(--accent);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
      background-size: 10px;
      background-repeat: no-repeat;
      background-position: center;
      margin-top: 1px;
      flex-shrink: 0;
    }
    .acc-list.cross li::before {
      background-color: var(--red);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='18' y1='6' x2='6' y2='18'/%3E%3Cline x1='6' y1='6' x2='18' y2='18'/%3E%3C/svg%3E");
    }
    .acc-note {
      font-size: 11.5px;
      color: var(--text-muted);
      font-style: italic;
      margin-top: 10px;
      padding-top: 8px;
      border-top: 1px dashed var(--border);
      line-height: 1.5;
    }
    .acc-badge {
      display: inline-flex;
      background: var(--accent);
      color: #fff;
      border-radius: 7px;
      padding: 6px 12px;
      font-size: 12px;
      font-weight: 800;
      font-family: var(--font-head);
      margin: 8px 0;
    }

    /* Accordion option blocks */
    .acc-option-block {
      border-radius: 10px;
      padding: 14px 14px 12px;
      margin-top: 10px;
    }
    .acc-option-block.opt-a { background: #F0FDF4; border: 1px solid #86EFAC; }
    .acc-option-block.opt-b { background: #FFF5F5; border: 1px solid #FCA5A5; }
    .acc-option-block .opt-title {
      font-family: var(--font-head);
      font-size: 12.5px;
      font-weight: 800;
      margin-bottom: 6px;
    }
    .opt-a .opt-title { color: #15803D; }
    .opt-b .opt-title { color: #B91C1C; }
    .acc-option-block .opt-text {
      font-size: 12px;
      color: var(--text-secondary);
      line-height: 1.6;
    }
    .acc-example {
      background: var(--sky);
      border: 1px solid #BFDBFE;
      border-radius: 7px;
      padding: 8px 12px;
      margin-top: 8px;
      font-size: 12px;
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 1200px) {
      .cards-grid { grid-template-columns: repeat(3, 1fr); }
      .cards-grid-row2 { grid-template-columns: repeat(2, 1fr); }
      .cards-grid-row3 { grid-template-columns: repeat(2, 1fr); }
      .cards-grid-row4 { grid-template-columns: repeat(3, 1fr); }
      .commitment-badges { gap: 16px; }
    }

    @media (max-width: 900px) {
      .page-wrap { padding: 0 20px 60px; }

      .options-section { grid-template-columns: 1fr; }

      .commitment-banner {
        grid-template-columns: 64px 1fr;
        padding: 28px 24px;
        gap: 20px;
      }
      .commitment-badges {
        grid-column: 1 / -1;
        justify-content: center;
        flex-wrap: wrap;
        gap: 16px;
      }
 .hero{
        background-image:none; /* desktop background hide */
        display:flex;
        flex-direction:column;
        align-items:flex-start;
              padding:20px 20px !important;
               background-color:rgb(219, 231, 245);
               margin-top: 0px;

    }

    .hero-left{
        width:100%;
        order:1;
    }

    .hero-mobile-banner{
        display:block;
        width:100%;
        margin-top:20px;
        order:2;
    }

    .hero-mobile-banner img{
        display:block;
        width:100%;
        height:auto;
    }
    
.breadcrumb {
     
     
          padding:18px 20px 0px;
        

    }
      .cards-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
      .cards-grid-row2 { grid-template-columns: repeat(2, 1fr); gap: 14px; }
      .cards-grid-row3 { grid-template-columns: repeat(2, 1fr); gap: 14px; }
      .cards-grid-row4 { grid-template-columns: repeat(2, 1fr); gap: 14px; }
    }

    @media (max-width: 640px) {
      .page-wrap { padding: 0 14px 60px; }
      .hero { padding: 22px 0 30px; }
      .hero-heading { font-size: 30px; }
      .hero-tagline { font-size: 15px; }

      .cards-grid,
      .cards-grid-row2,
      .cards-grid-row3,
      .cards-grid-row4,
      .options-section { display: none; }
      .section-heading { font-size: 20px; margin-bottom: 16px; }
      .mobile-accordion {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 0;
      }

      .commitment-banner {
        padding: 22px 18px;
        text-align: center;
        grid-template-columns: 1fr;
        gap: 16px;
      }
      .commitment-shield { margin: 0 auto; width: 56px; height: 56px; }
      .commitment-badges { justify-content: center; gap: 14px; }
      .commitment-text h3 { font-size: 18px; }

      .section-divider { margin: 0 0 28px; }
    }

    @media (max-width: 380px) {
      .commitment-badges { gap: 10px; }
      .badge-icon { width: 40px; height: 40px; }
      .badge-label { font-size: 9.5px; }
    }
  </style>
</head>
<body>
<?php include "navbar.php" ?>

  <!-- BREADCRUMB -->
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="#">Home</a>
    
    <span class="sep">›</span>
    <strong>Refund Policy</strong>
  </nav>

  <!-- ============================================================
       HERO
  ============================================================ -->
  <section class="hero">
    <div class="hero-left">
      <h1 class="hero-heading">Refund Policy</h1>
      <p class="hero-tagline">Transparent. Fair. Client-Focused.</p>
      <p class="hero-desc">At IFTS, we are committed to transparency and client satisfaction. This Refund Policy explains how refunds, service upgrades, reclassification, and payment adjustments are handled for all services purchased through our platform.</p>
    </div>

   
    <div class="hero-mobile-banner">
    <img src="images/Refund_Policy_mobile.jpg" alt="">
</div>
  </section>

  <hr class="section-divider" />
<div class="page-wrap">

  <p class="section-label">Policy Sections</p>
  <h2 class="section-heading">What Our Refund Policy Covers</h2>

  <!-- ============================================================
       DESKTOP: ROW 1 — Cards 01, 02, 03
  ============================================================ -->
  <div class="cards-grid">

    <!-- 01 Service Nature -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
      </div>
      <div class="card-num">01</div>
      <h3 class="card-title">Service Nature</h3>
      <p class="card-body">Most IFTS services are professional digital compliance, registration, taxation, documentation, advisory, and infrastructure services that involve resource allocation, compliance review, document handling, and workflow processing immediately after order confirmation.</p>
      <p class="card-body">Because of this, refund eligibility depends on the processing stage of the service.</p>
    </div>

    <!-- 02 Fixed Price Services -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
      </div>
      <div class="card-num">02</div>
      <h3 class="card-title">Fixed Price Services</h3>
      <p class="card-body">Where a service card clearly mentions "Fixed Price", "No Hidden Charges", "Everything Included", the client will not be charged any additional amount unless:</p>
      <ul class="card-list">
        <li>The client changes the service scope</li>
        <li>Requests optional add-ons</li>
        <li>Provides incorrect category information</li>
        <li>The case falls under a different service category after compliance review</li>
      </ul>
    </div>

    <!-- 03 Service Reclassification & Upgrade Policy -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
      </div>
      <div class="card-num">03</div>
      <h3 class="card-title">Service Reclassification &amp; Upgrade Policy</h3>
      <p class="card-body">If a client purchases a lower-category package/service and, after document review or compliance checking, the case is identified under another applicable category with a higher service fee, the client will be informed properly.</p>
      <div class="example-box">
        <div class="ex-label">Example</div>
        <div class="ex-row">Initial Purchased Service: <strong>Rs. 5,000</strong><br/>Revised Applicable Service: <strong>Rs. 8,000</strong></div>
      </div>
    </div>

  </div>

  <!-- DESKTOP: Option A & B Special Section -->
  <div class="options-section">

    <div class="option-card option-a">
      <div class="option-header">
        <div class="option-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg>
        </div>
        <span class="option-label">Option A — Upgrade the Service</span>
      </div>
      <p class="option-body">The client can pay the remaining balance amount only.</p>
      <span class="option-highlight">In the above example: Additional Payment Required: Rs. 3,000</span>
      <p class="option-body" style="margin-top:6px;">Both payment screenshots may be attached with the upgraded order/service record for compliance and verification purposes.</p>
    </div>

    <div class="option-card option-b">
      <div class="option-header">
        <div class="option-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        </div>
        <span class="option-label">Option B — Request Refund</span>
      </div>
      <p class="option-body">If the client does not agree with the revised category or upgraded package:</p>
      <ul class="option-list">
        <li>The previously paid amount will be refunded in full</li>
        <li>With zero deduction</li>
        <li>Within approximately 7 working days</li>
      </ul>
    </div>

  </div>

  <!-- DESKTOP: ROW 2 — Cards 04, 05, 06, 07 -->
  <div class="cards-grid-row2">

    <!-- 04 Non-Refundable Situations -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
      </div>
      <div class="card-num">04</div>
      <h3 class="card-title">Non-Refundable Situations</h3>
      <p class="card-body">Refunds may not be applicable in the following cases:</p>
      <ul class="card-list cross">
        <li>Government fee already submitted</li>
        <li>Authority processing initiated</li>
        <li>Verification already performed</li>
        <li>Documents already filed/submitted</li>
        <li>Client stops responding after processing starts</li>
        <li>False or misleading information provided</li>
        <li>Client changes mind after work initiation</li>
        <li>Delay caused by missing client documents</li>
      </ul>
    </div>

    <!-- 05 Refund Eligibility -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
      </div>
      <div class="card-num">05</div>
      <h3 class="card-title">Refund Eligibility</h3>
      <p class="card-body">Refund requests may be considered if:</p>
      <ul class="card-list">
        <li>Payment was made by mistake</li>
        <li>Duplicate payment occurred</li>
        <li>Service cannot legally proceed</li>
        <li>IFTS is unable to process the case</li>
        <li>Service was not initiated</li>
      </ul>
      <p class="card-note">All refund requests are reviewed internally before approval.</p>
    </div>

    <!-- 06 Government Fees & Third-Party Charges -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      </div>
      <div class="card-num">06</div>
      <h3 class="card-title">Government Fees &amp; Third-Party Charges</h3>
      <p class="card-body">Government taxes, challans, authority fees, verification fees, courier charges, or third-party charges already paid are generally non-refundable.</p>
      <p class="card-sub-label">Applicable authorities/platforms:</p>
      <ul class="card-list">
        <li>FBR &amp; SECP</li>
        <li>PSW &amp; PRA / SRB / KPRA / BRA</li>
        <li>PSEB &amp; IPO Pakistan</li>
        <li>Banking Systems</li>
        <li>Courier &amp; Communication Providers</li>
      </ul>
    </div>

    <!-- 07 Refund Processing Timeline -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <div class="card-num">07</div>
      <h3 class="card-title">Refund Processing Timeline</h3>
      <p class="card-body">Approved refunds are generally processed within:</p>
      <div class="timeline-badge">5–7 Working Days</div>
      <p class="card-body">Depending on:</p>
      <ul class="card-list">
        <li>Banking channels</li>
        <li>Payment verification</li>
        <li>Transaction clearance</li>
      </ul>
      <p class="card-note">Refunds are issued through the original payment method whenever possible.</p>
    </div>

  </div>

  <!-- DESKTOP: ROW 3 — Cards 08, 09, 10, 11 -->
  <div class="cards-grid-row3" style="margin-top:16px;">

    <!-- 08 Payment Security Policy -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      </div>
      <div class="card-num">08</div>
      <h3 class="card-title">Payment Security Policy</h3>
      <p class="card-body">IFTS only accepts payments through:</p>
      <ul class="card-list">
        <li>Online Bank Transfer</li>
        <li>Raast Transfer</li>
        <li>Official Company Bank Accounts</li>
        <li>Official Raast IDs</li>
      </ul>
      <p class="card-sub-label" style="margin-top:8px;">Clients may upload payment screenshots through:</p>
      <ul class="card-list">
        <li>Checkout Page</li>
        <li>IFTS Digital Forms</li>
        <li>Official Verification Forms</li>
      </ul>
    </div>

    <!-- 09 Service Timeline Conditions -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      </div>
      <div class="card-num">09</div>
      <h3 class="card-title">Service Timeline Conditions</h3>
      <p class="card-body">Service timelines begin only after:</p>
      <ul class="card-list">
        <li>Complete information submission</li>
        <li>Required documents submission</li>
        <li>Verification confirmation</li>
        <li>Successful compliance review</li>
      </ul>
      <p class="card-sub-label" style="margin-top:8px;">Processing time may vary due to:</p>
      <ul class="card-list">
        <li>Government authority processing</li>
        <li>Verification requirements</li>
        <li>Document completeness</li>
        <li>Technical issues &amp; regulatory delays</li>
        <li>Third-party platform downtime</li>
      </ul>
    </div>

    <!-- 10 Client Assistance for Digital Forms -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      </div>
      <div class="card-num">10</div>
      <h3 class="card-title">Client Assistance for Digital Forms</h3>
      <p class="card-body">If a client faces difficulty while filling IFTS digital forms on mobile or desktop devices, our support team may assist the client in completing the forms properly.</p>
      <p class="card-body">Our team is available through official support channels to guide clients through the process.</p>
    </div>

    <!-- 11 Cancellation Requests -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
      </div>
      <div class="card-num">11</div>
      <h3 class="card-title">Cancellation Requests</h3>
      <p class="card-body">Clients may request cancellation before processing begins.</p>
      <p class="card-body">Once substantial work, filing, compliance processing, or authority submission has started, cancellation may not qualify for refund eligibility.</p>
    </div>

  </div>

  <!-- DESKTOP: ROW 4 — Cards 12, 13, 14 -->
  <div class="cards-grid-row4" style="margin-top:16px;">

    <!-- 12 Communication Regarding Refunds -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      </div>
      <div class="card-num">12</div>
      <h3 class="card-title">Communication Regarding Refunds</h3>
      <p class="card-body">All refund discussions, approvals, and updates are communicated through official IFTS channels only:</p>
      <ul class="card-list">
        <li>Official Email</li>
        <li>WhatsApp Business</li>
        <li>Client Dashboard</li>
        <li>Official Contact Numbers</li>
      </ul>
    </div>

    <!-- 13 Policy Updates -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
      </div>
      <div class="card-num">13</div>
      <h3 class="card-title">Policy Updates</h3>
      <p class="card-body">IFTS reserves the right to update or revise this Refund Policy at any time without prior notice to maintain legal, compliance, operational, or business requirements.</p>
      <p class="card-note">Updated versions will be published on the platform.</p>
    </div>

    <!-- 14 Contact Information -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.52 1.26h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </div>
      <div class="card-num">14</div>
      <h3 class="card-title">Contact Information</h3>
      <p class="card-body">For refund-related support or questions:</p>
      <ul class="card-list">
        <li>Website: ifts.digital</li>
        <li>Email: info@ifts.digital</li>
        <li>WhatsApp Support: +92 335 5651782</li>
      </ul>
    </div>

  </div>

  <!-- ============================================================
       MOBILE ACCORDION (all 14 items)
  ============================================================ -->
  <div class="mobile-accordion" id="mobileAccordion">

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">01</div><div class="acc-title">Service Nature</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Most IFTS services are professional digital compliance, registration, taxation, documentation, advisory, and infrastructure services that involve resource allocation, compliance review, document handling, and workflow processing immediately after order confirmation.</p>
        <p class="acc-body-text">Because of this, refund eligibility depends on the processing stage of the service.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">02</div><div class="acc-title">Fixed Price Services</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Where a service card clearly mentions "Fixed Price", "No Hidden Charges", or "Everything Included", the client will not be charged any additional amount unless:</p>
        <ul class="acc-list"><li>The client changes the service scope</li><li>Requests optional add-ons</li><li>Provides incorrect category information</li><li>The case falls under a different service category after compliance review</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">03</div><div class="acc-title">Service Reclassification &amp; Upgrade Policy</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">If a client purchases a lower-category package and after document review the case is identified under a higher service fee category, the client will be informed and may choose:</p>
        <div class="acc-example"><strong>Example:</strong> Initial Service: Rs. 5,000 → Revised: Rs. 8,000<br/>Additional Payment Required: Rs. 3,000</div>
        <div class="acc-option-block opt-a" style="margin-top:10px;">
          <div class="opt-title">Option A — Upgrade the Service</div>
          <div class="opt-text">The client can pay the remaining balance amount only.</div>
        </div>
        <div class="acc-option-block opt-b">
          <div class="opt-title">Option B — Request Refund</div>
          <ul class="acc-list" style="margin-top:6px;"><li>Full refund with zero deduction</li><li>Within approximately 7 working days</li></ul>
        </div>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">04</div><div class="acc-title">Non-Refundable Situations</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Refunds may not be applicable in the following cases:</p>
        <ul class="acc-list cross"><li>Government fee already submitted</li><li>Authority processing initiated</li><li>Verification already performed</li><li>Documents already filed/submitted</li><li>Client stops responding after processing starts</li><li>False or misleading information provided</li><li>Client changes mind after work initiation</li><li>Delay caused by missing client documents</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">05</div><div class="acc-title">Refund Eligibility</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Refund requests may be considered if:</p>
        <ul class="acc-list"><li>Payment was made by mistake</li><li>Duplicate payment occurred</li><li>Service cannot legally proceed</li><li>IFTS is unable to process the case</li><li>Service was not initiated</li></ul>
        <p class="acc-note">All refund requests are reviewed internally before approval.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">06</div><div class="acc-title">Government Fees &amp; Third-Party Charges</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Government taxes, challans, authority fees, verification fees, courier charges, or third-party charges already paid are generally non-refundable.</p>
        <p class="acc-sub-label">Applicable authorities/platforms:</p>
        <ul class="acc-list"><li>FBR &amp; SECP</li><li>PSW &amp; PRA / SRB / KPRA / BRA</li><li>PSEB &amp; IPO Pakistan</li><li>Banking Systems</li><li>Courier &amp; Communication Providers</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">07</div><div class="acc-title">Refund Processing Timeline</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Approved refunds are generally processed within:</p>
        <span class="acc-badge">5–7 Working Days</span>
        <p class="acc-body-text">Depending on banking channels, payment verification, and transaction clearance.</p>
        <p class="acc-note">Refunds are issued through the original payment method whenever possible.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">08</div><div class="acc-title">Payment Security Policy</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">IFTS only accepts payments through:</p>
        <ul class="acc-list"><li>Online Bank Transfer</li><li>Raast Transfer</li><li>Official Company Bank Accounts</li><li>Official Raast IDs</li></ul>
        <p class="acc-sub-label">Clients may upload payment screenshots through:</p>
        <ul class="acc-list"><li>Checkout Page</li><li>IFTS Digital Forms</li><li>Official Verification Forms</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">09</div><div class="acc-title">Service Timeline Conditions</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Service timelines begin only after complete information submission, required documents submission, verification confirmation, and successful compliance review.</p>
        <p class="acc-sub-label">Processing time may vary due to:</p>
        <ul class="acc-list"><li>Government authority processing</li><li>Verification requirements</li><li>Document completeness</li><li>Technical issues &amp; regulatory delays</li><li>Third-party platform downtime</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">10</div><div class="acc-title">Client Assistance for Digital Forms</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">If a client faces difficulty while filling IFTS digital forms on mobile or desktop devices, our support team may assist the client in completing the forms properly through official support channels.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">11</div><div class="acc-title">Cancellation Requests</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Clients may request cancellation before processing begins. Once substantial work, filing, compliance processing, or authority submission has started, cancellation may not qualify for refund eligibility.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">12</div><div class="acc-title">Communication Regarding Refunds</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">All refund discussions, approvals, and updates are communicated through official IFTS channels only:</p>
        <ul class="acc-list"><li>Official Email</li><li>WhatsApp Business</li><li>Client Dashboard</li><li>Official Contact Numbers</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">13</div><div class="acc-title">Policy Updates</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">IFTS reserves the right to update or revise this Refund Policy at any time without prior notice to maintain legal, compliance, operational, or business requirements.</p>
        <p class="acc-note">Updated versions will be published on the platform.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.52 1.26h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 9a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">14</div><div class="acc-title">Contact Information</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">For refund-related support or questions:</p>
        <ul class="acc-list"><li>Website: ifts.digital</li><li>Email: info@ifts.digital</li><li>WhatsApp Support: +92 335 5651782</li></ul>
      </div></div>
    </div>

  </div><!-- /mobile-accordion -->

  <!-- ============================================================
       COMMITMENT BANNER
  ============================================================ -->
  <div class="commitment-banner">
    <div class="commitment-shield">
      <svg viewBox="0 0 80 90" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M40 4 L74 18 L74 46 C74 65 58 79 40 86 C22 79 6 65 6 46 L6 18 Z" fill="#2563EB" stroke="#1E52B8" stroke-width="1.5"/>
        <polyline points="26,44 35,53 54,34" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
      </svg>
    </div>
    <div class="commitment-text">
      <h3>Our Commitment</h3>
      <p>We believe in fairness, transparency, and building long-term trust with our clients. Your success is our priority, and we are always here to support you.</p>
    </div>
    <div class="commitment-badges">
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></div>
        <span class="badge-label">Fair &amp;<br>Transparent</span>
      </div>
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
        <span class="badge-label">Secure<br>Payments</span>
      </div>
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <span class="badge-label">Fast<br>Refunds</span>
      </div>
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <span class="badge-label">Client<br>Focused</span>
      </div>
    </div>
  </div>

</div><!-- /page-wrap -->
<?php include "footer.php" ?>
<script>
  document.querySelectorAll('.accordion-trigger').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.accordion-item');
      const body = item.querySelector('.accordion-body');
      const inner = item.querySelector('.accordion-body-inner');
      const isOpen = item.classList.contains('open');

      document.querySelectorAll('.accordion-item.open').forEach(openItem => {
        openItem.classList.remove('open');
        openItem.querySelector('.accordion-trigger').setAttribute('aria-expanded', 'false');
        openItem.querySelector('.accordion-body').style.maxHeight = '0';
      });

      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        body.style.maxHeight = inner.scrollHeight + 'px';
      }
    });
  });
</script>

</body>
</html>