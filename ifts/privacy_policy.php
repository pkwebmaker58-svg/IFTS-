<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy – IFTS</title>
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
     
      font-size: 13px;
      color: var(--text-secondary);
      display: flex;
      align-items: center;
      gap: 6px;
          padding:18px 50px 0px;
            background-color:#dae6f5;
            margin-bottom: -20px;

    }
    .breadcrumb a { color: var(--text-secondary); }
    .breadcrumb a:hover { color: var(--accent); }
    .breadcrumb .sep { color: var(--text-muted); font-size: 12px; }
    .breadcrumb strong { color: var(--text-primary); font-weight: 600; }

    /* ============================================================
       HERO
    ============================================================ */
    .hero {
      background-image:url('images/Privacy_Policy_Desktop.jpg');
    background-repeat:no-repeat;
    background-position:center;
    background-size:cover;
    min-height:420px;

    display:flex;
    align-items:center;

  
   
        padding:60px 50px;

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
      grid-template-columns: repeat(5, 1fr);
      gap: 16px;
      margin-bottom: 16px;
    }
    .cards-grid-row2 {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
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
      background: var(--accent);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
      flex-shrink: 0;
    }
    .card-icon-circle svg { width: 22px; height: 22px; color: #fff; stroke: #fff; }

  

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

    .card-note {
      font-size: 11px;
      color: var(--text-muted);
      font-style: italic;
      margin-top: 10px;
      line-height: 1.5;
      padding-top: 8px;
      border-top: 1px dashed var(--border);
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
       CONTACT US SECTION
    ============================================================ */
    .contact-section {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      margin-top: 24px;
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      display: grid;
      grid-template-columns: 1fr 1.1fr 280px;
    }

    /* Left: Contact info */
    .contact-left {
      padding: 32px 32px;
      border-right: 1px solid var(--border);
      display: flex;
      gap: 20px;
      align-items: flex-start;
    }

    .contact-avatar {
      width: 62px;
      height: 62px;
      border-radius: 50%;
      background: linear-gradient(135deg, #1A3F8F, #2563EB);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .contact-avatar svg { width: 28px; height: 28px; stroke: #fff; fill: none; }

    .contact-left-text h4 {
      font-family: var(--font-head);
      font-size: 17px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 4px;
    }
    .contact-left-text p {
      font-size: 12.5px;
      color: var(--text-secondary);
      line-height: 1.55;
      margin-bottom: 16px;
    }

    .contact-info-list {
      display: flex;
      flex-direction: column;
      gap: 9px;
    }

    .contact-info-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: var(--text-secondary);
    }
    .contact-info-item svg {
      width: 15px;
      height: 15px;
      stroke: var(--accent);
      fill: none;
      flex-shrink: 0;
    }

    /* Middle: Platform info */
    .contact-middle {
      padding: 32px 32px;
      border-right: 1px solid var(--border);
    }

    .contact-middle h4 {
      font-family: var(--font-head);
      font-size: 15px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 18px;
    }

    .platform-info-list {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .platform-info-item {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 13px;
      color: var(--text-secondary);
    }

    .platform-info-icon {
      width: 34px;
      height: 34px;
      background: var(--sky);
      border-radius: 9px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .platform-info-icon svg {
      width: 16px;
      height: 16px;
      stroke: var(--accent);
      fill: none;
    }

    /* Right: Illustration */
    .contact-right {
      background: linear-gradient(135deg, #EEF4FF 0%, #DBEAFE 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px;
      position: relative;
      overflow: hidden;
    }

    .contact-illustration {
      position: relative;
      width: 200px;
      height: 140px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Envelope SVG illustration */
    .env-wrap {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* ============================================================
       TRUST STRIP
    ============================================================ */
    .trust-strip {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      overflow: hidden;
      margin-top: 24px;
      box-shadow: var(--shadow-sm);
    }

    .trust-item {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 20px 24px;
      border-right: 1px solid var(--border);
      transition: background .2s;
    }
    .trust-item:hover { background: var(--sky); }
    .trust-item:last-child { border-right: none; }

    .trust-icon {
      width: 40px;
      height: 40px;
      background: var(--sky);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .trust-icon svg { width: 19px; height: 19px; color: var(--accent); stroke: var(--accent); fill: none; }

    .trust-text strong {
      display: block;
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 1px;
    }
    .trust-text span {
      font-size: 11.5px;
      color: var(--text-muted);
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
    .acc-note {
      font-size: 11.5px;
      color: var(--text-muted);
      font-style: italic;
      margin-top: 10px;
      padding-top: 8px;
      border-top: 1px dashed var(--border);
      line-height: 1.5;
    }

    /* ============================================================
       RESPONSIVE – keep mobile exactly as before
    ============================================================ */
    @media (max-width: 1200px) {
      .cards-grid,
      .cards-grid-row2 { grid-template-columns: repeat(3, 1fr); }
      .commitment-badges { gap: 16px; }
    }

    @media (max-width: 900px) {
      .page-wrap { padding: 0 20px 60px; }

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

      .trust-strip { grid-template-columns: 1fr 1fr; }
      .trust-item:nth-child(2) { border-right: none; }
      .trust-item:nth-child(3) { border-top: 1px solid var(--border); }
      .trust-item:nth-child(4) { border-top: 1px solid var(--border); border-right: none; }

      .cards-grid,
      .cards-grid-row2 { grid-template-columns: repeat(2, 1fr); gap: 14px; }

      .contact-section { grid-template-columns: 1fr; }
      .contact-left { border-right: none; border-bottom: 1px solid var(--border); }
      .contact-middle { border-right: none; border-bottom: 1px solid var(--border); }
      .contact-right { min-height: 140px; }
     .hero{
        background-image:none; /* desktop background hide */
        display:flex;
        flex-direction:column;
        align-items:flex-start;
              padding:20px 20px 3px !important;
               background-color:#dae6f5;

    }

    .hero-left{
        width:100%;
        order:1;
    }

    .hero-mobile-banner{
        display:block;
        width:100%;
        margin-top:-60px;
       
        order:2;
    }

    .hero-mobile-banner img{
        display:block;
        width:100%;
        height:auto;
    }
    
.breadcrumb {
     
     
          padding:18px 20px 0px;
          margin-bottom: 0px;
        

    }
    }

    @media (max-width: 640px) {
      .page-wrap { padding: 0 14px 60px; }
      .hero { padding: 22px 0 30px; }
      .hero-heading { font-size: 30px; }
      .hero-tagline { font-size: 15px; }
      .hero-desc{
      
        position: relative;
        z-index: 3;
      }

      .cards-grid,
      .cards-grid-row2 { display: none; }
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

      .trust-strip { grid-template-columns: 1fr 1fr; }
      .trust-item { padding: 14px 14px; }
      .trust-text strong { font-size: 12px; }
      .section-divider { margin: 0 0 28px; }

      .contact-section { grid-template-columns: 1fr; }
      .contact-left { flex-direction: column; gap: 14px; }
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
    <strong>Privacy Policy</strong>
  </nav>

  <!-- ============================================================
       HERO
  ============================================================ -->
  <section class="hero">
    <div class="hero-left">
      <h1 class="hero-heading">Privacy Policy</h1>
      <p class="hero-tagline">Your Privacy Matters to IFTS</p>
      <p class="hero-desc">At IFTS – Ismail Financial and Tax Solutions, we value the trust our clients place in us. This Privacy Policy explains how we collect, use, protect, and manage your information when you use our platform and services.</p>
      <p class="hero-desc">By using our website and services, you agree to the terms outlined in this Privacy Policy.</p>
    </div>

   <div class="hero-mobile-banner">
    <img src="images/Privacy_Policy_Mobile.jpg" alt="">
</div>
  </section>
<div class="page-wrap">
  <hr class="section-divider" />

  <p class="section-label">Policy Sections</p>
  <h2 class="section-heading">What Our Privacy Policy Covers</h2>

  <!-- ============================================================
       DESKTOP: POLICY CARDS ROW 1
  ============================================================ -->
  <div class="cards-grid">

    <!-- 01 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      </div>
     
      <h3 class="card-title">Information We Collect</h3>
      <p class="card-body">We may collect the following information from clients and website users:</p>
      <ul class="card-list">
        <li>Personal Information</li>
        <li>Business &amp; Compliance Information</li>
        <li>Technical Information</li>
      </ul>
    </div>

    <!-- 02 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><path d="M14 17.5h7m-3.5-3.5v7"/></svg>
      </div>
      
      <h3 class="card-title">How We Use Your Information</h3>
      <p class="card-body">We use collected information to:</p>
      <ul class="card-list">
        <li>Process registrations and compliance services</li>
        <li>Communicate service updates</li>
        <li>Verify client identity and documentation</li>
        <li>Improve platform functionality</li>
        <li>Maintain compliance records</li>
        <li>Provide customer support</li>
        <li>Generate invoices and order tracking</li>
        <li>Deliver hard and soft copy documents</li>
      </ul>
    </div>

    <!-- 03 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
      </div>
   
      <h3 class="card-title">Data Protection &amp; Security</h3>
      <p class="card-body">IFTS follows professional procedures to protect client information.</p>
      <p class="card-sub-label">We Implement:</p>
      <ul class="card-list">
        <li>Secure digital document handling</li>
        <li>Restricted internal access</li>
        <li>Password-protected systems</li>
        <li>Secure communication channels</li>
        <li>Confidentiality protocols</li>
        <li>Data monitoring and administrative safeguards</li>
      </ul>
    </div>

    <!-- 04 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      </div>
    
      <h3 class="card-title">Sharing of Information</h3>
      <p class="card-body">We do not sell or trade client data.</p>
      <p class="card-body">Information may only be shared with:</p>
      <ul class="card-list">
        <li>Government authorities (FBR, SECP, PRA, PSW, etc.) where required for processing</li>
        <li>Authorized payment verification procedures</li>
        <li>Delivery and communication partners for document dispatch and updates</li>
      </ul>
    </div>

    <!-- 05 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
      </div>
      
      <h3 class="card-title">Cookies &amp; Website Analytics</h3>
      <p class="card-body">Our website may use cookies and analytics tools to improve user experience.</p>
      <p class="card-sub-label">These tools help us:</p>
      <ul class="card-list">
        <li>Improve navigation</li>
        <li>Monitor website performance</li>
        <li>Enhance service experience</li>
        <li>Optimize platform functionality</li>
      </ul>
      <p class="card-note">Users may disable cookies through browser settings if preferred.</p>
    </div>

  </div>

  <!-- DESKTOP: POLICY CARDS ROW 2 -->
  <div class="cards-grid-row2" style="margin-top:16px;">

    <!-- 06 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
      </div>
      
      <h3 class="card-title">Document Retention</h3>
      <p class="card-body">Client records and submitted documents may be securely retained for:</p>
      <ul class="card-list">
        <li>Compliance tracking</li>
        <li>Service history</li>
        <li>Regulatory support</li>
        <li>Future filing assistance</li>
        <li>Internal documentation management</li>
      </ul>
      <p class="card-note">Retention duration may vary depending on applicable regulations and service type.</p>
    </div>

    <!-- 07 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
      </div>
  
      <h3 class="card-title">Payment Information</h3>
      <p class="card-body">IFTS may use third-party banking and payment verification systems.</p>
      <ul class="card-list">
        <li>We do not store sensitive banking passwords, ATM PINs, or confidential payment credentials.</li>
        <li>Payment verification screenshots or transaction records may be used solely for order confirmation and audit purposes.</li>
      </ul>
    </div>

    <!-- 08 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      </div>

      <h3 class="card-title">Client Responsibilities</h3>
      <p class="card-body">Clients are responsible for:</p>
      <ul class="card-list">
        <li>Providing accurate information</li>
        <li>Submitting authentic documents</li>
        <li>Reviewing submitted details before confirmation</li>
        <li>Maintaining confidentiality of their personal login credentials</li>
      </ul>
      <p class="card-note">IFTS is not responsible for issues caused by inaccurate or incomplete client-provided information.</p>
    </div>

    <!-- 09 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
      </div>

      <h3 class="card-title">Third-Party Links</h3>
      <p class="card-body">Our website may contain links to external platforms such as:</p>
      <ul class="card-list">
        <li>FBR</li>
        <li>SECP</li>
        <li>PSW</li>
        <li>PRA / SRB / KPRA / BRA</li>
        <li>Banking or payment portals</li>
      </ul>
      <p class="card-note">IFTS is not responsible for the privacy practices of external websites.</p>
    </div>

    <!-- 10 -->
    <div class="policy-card">
      <div class="card-icon-circle">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
      </div>
  
      <h3 class="card-title">Updates to Privacy Policy</h3>
      <p class="card-body">This Privacy Policy may be updated periodically to reflect:</p>
      <ul class="card-list">
        <li>Regulatory changes</li>
        <li>Platform improvements</li>
        <li>Service updates</li>
        <li>Security enhancements</li>
      </ul>
      <p class="card-note">Updated versions will be published on the website.</p>
    </div>

  </div>

  <!-- ============================================================
       MOBILE ACCORDION (all 10 items)
  ============================================================ -->
  <div class="mobile-accordion" id="mobileAccordion">

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">01</div><div class="acc-title">Information We Collect</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">We may collect the following information from clients and website users:</p>
        <ul class="acc-list"><li>Personal Information</li><li>Business &amp; Compliance Information</li><li>Technical Information</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><path d="M14 17.5h7m-3.5-3.5v7"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">02</div><div class="acc-title">How We Use Your Information</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">We use collected information to:</p>
        <ul class="acc-list"><li>Process registrations and compliance services</li><li>Communicate service updates</li><li>Verify client identity and documentation</li><li>Improve platform functionality</li><li>Maintain compliance records</li><li>Provide customer support</li><li>Generate invoices and order tracking</li><li>Deliver hard and soft copy documents</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">03</div><div class="acc-title">Data Protection &amp; Security</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">IFTS follows professional procedures to protect client information.</p>
        <p class="acc-sub-label">We Implement:</p>
        <ul class="acc-list"><li>Secure digital document handling</li><li>Restricted internal access</li><li>Password-protected systems</li><li>Secure communication channels</li><li>Confidentiality protocols</li><li>Data monitoring and administrative safeguards</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">04</div><div class="acc-title">Sharing of Information</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">We do not sell or trade client data. Information may only be shared with:</p>
        <ul class="acc-list"><li>Government authorities (FBR, SECP, PRA, PSW, etc.) where required for processing</li><li>Authorized payment verification procedures</li><li>Delivery and communication partners for document dispatch and updates</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">05</div><div class="acc-title">Cookies &amp; Website Analytics</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Our website may use cookies and analytics tools to improve user experience.</p>
        <p class="acc-sub-label">These tools help us:</p>
        <ul class="acc-list"><li>Improve navigation</li><li>Monitor website performance</li><li>Enhance service experience</li><li>Optimize platform functionality</li></ul>
        <p class="acc-note">Users may disable cookies through browser settings if preferred.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">06</div><div class="acc-title">Document Retention</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Client records and submitted documents may be securely retained for:</p>
        <ul class="acc-list"><li>Compliance tracking</li><li>Service history</li><li>Regulatory support</li><li>Future filing assistance</li><li>Internal documentation management</li></ul>
        <p class="acc-note">Retention duration may vary depending on applicable regulations and service type.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">07</div><div class="acc-title">Payment Information</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">IFTS may use third-party banking and payment verification systems.</p>
        <ul class="acc-list"><li>We do not store sensitive banking passwords, ATM PINs, or confidential payment credentials.</li><li>Payment verification screenshots or transaction records may be used solely for order confirmation and audit purposes.</li></ul>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">08</div><div class="acc-title">Client Responsibilities</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Clients are responsible for:</p>
        <ul class="acc-list"><li>Providing accurate information</li><li>Submitting authentic documents</li><li>Reviewing submitted details before confirmation</li><li>Maintaining confidentiality of their personal login credentials</li></ul>
        <p class="acc-note">IFTS is not responsible for issues caused by inaccurate or incomplete client-provided information.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">09</div><div class="acc-title">Third-Party Links</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">Our website may contain links to external platforms such as:</p>
        <ul class="acc-list"><li>FBR</li><li>SECP</li><li>PSW</li><li>PRA / SRB / KPRA / BRA</li><li>Banking or payment portals</li></ul>
        <p class="acc-note">IFTS is not responsible for the privacy practices of external websites.</p>
      </div></div>
    </div>

    <div class="accordion-item">
      <button class="accordion-trigger" aria-expanded="false">
        <div class="acc-icon-circle"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg></div>
        <div class="acc-trigger-text"><div class="acc-num">10</div><div class="acc-title">Updates to Privacy Policy</div></div>
        <div class="acc-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
      </button>
      <div class="accordion-body"><div class="accordion-body-inner">
        <p class="acc-body-text">This Privacy Policy may be updated periodically to reflect:</p>
        <ul class="acc-list"><li>Regulatory changes</li><li>Platform improvements</li><li>Service updates</li><li>Security enhancements</li></ul>
        <p class="acc-note">Updated versions will be published on the website.</p>
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
      <h3>Our Commitment to Your Privacy &amp; Security</h3>
      <p>Your information is treated with strict confidentiality and is never intentionally shared without authorization except where legally required.</p>
    </div>
    <div class="commitment-badges">
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
        <span class="badge-label">Secure<br>&amp; Confidential</span>
      </div>
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
        <span class="badge-label">Protecting Your<br>Important Data</span>
      </div>
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <span class="badge-label">Trusted by<br>Thousands</span>
      </div>
      <div class="badge-item">
        <div class="badge-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></div>
        <span class="badge-label">100% Compliance<br>Focused</span>
      </div>
    </div>
  </div>

 

   

  

  

  <!-- ============================================================
       TRUST STRIP
  ============================================================ -->
  <div class="trust-strip">
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      </div>
      <div class="trust-text"><strong>100% Secure</strong><span>Your data is protected</span></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      </div>
      <div class="trust-text"><strong>SSL Encrypted</strong><span>256-bit SSL protection</span></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
      <div class="trust-text"><strong>Trusted Platform</strong><span>4.9/5 customer rating</span></div>
    </div>
    <div class="trust-item">
      <div class="trust-icon">
        <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <div class="trust-text"><strong>24/7 Support</strong><span>We're here to help</span></div>
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