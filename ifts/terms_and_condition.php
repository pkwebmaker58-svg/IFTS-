<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terms & Conditions – IFTS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --navy:        #0B1D3A;
      --blue-mid:    #1E52B8;
      --accent:      #2563EB;
      --sky:         #EEF4FF;
      --sky-mid:     #DBEAFE;
      --white:       #FFFFFF;
      --text-primary:   #0B1D3A;
      --text-secondary: #4B5563;
      --text-muted:     #9CA3AF;
      --border:      #E2E8F0;
      --shadow-sm:   0 1px 3px rgba(11,29,58,.08);
      --shadow-md:   0 4px 16px rgba(11,29,58,.10);
      --shadow-lg:   0 8px 32px rgba(11,29,58,.13);
      --radius-sm:   8px;
      --radius-md:   12px;
      --radius-lg:   18px;
      --font-head:  'Montserrat', sans-serif;
      --font-body:   'Poppins',sans-serif   ;

      /* ── CHANGE 5: Sidebar background token ── */
      --sidebar-bg:  #F3F7FF;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--font-body);
      color: var(--text-primary);
      background: #F8FAFF;
      line-height: 1.6;
    }
    a { color: inherit; text-decoration: none; }
    ul { list-style: none; }

    /* ── PAGE WRAPPER ── */
    .page-wrap {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 28px 72px;
    }

    /* ── BREADCRUMB ── */
    .breadcrumb {
    padding:18px 50px 0px;
            background-color:rgb(222, 234, 248);
      font-size: 13px !important;
      color: #CCCED2;
      display: flex;
      align-items: center;
      gap: 6px;
      margin-bottom: -20px;
    }
    .breadcrumb a { color: var(--text-secondary); }
    .breadcrumb a:hover { color: var(--accent); }
    .breadcrumb .sep { color: var(--text-muted); }
    .breadcrumb strong { color: var(--text-primary); font-weight: 600; }

    /* ═══════════════════════════════════════
       HERO
       CHANGE 1: illustration shifted LEFT by
       reducing hero gap + pulling right col inward
    ═══════════════════════════════════════ */
   .hero {
      background-image:url('images/Terms_&_Conditions_deskstop.jpg');
    background-repeat:no-repeat;
    background-position:center;
    background-size:cover;
    min-height:320px;

    display:flex;
    align-items:center;

  
   
        padding:60px 40px;
      

    }
    .hero-left{
      width: 50%;
    }
    .hero-mobile-banner{
      display:none;
    }

    .hero-heading {
      font-family: var(--font-head);
      font-size: clamp(28px, 3.8vw, 52px);
      font-weight: 800;
      line-height: 1.1;
      color: var(--navy);
      letter-spacing: -0.5px;
      margin-bottom: 12px;
    }

    .hero-sub {
      font-size: 15px;
      color: var(--text-secondary);
      max-width: 420px;
      line-height: 1.65;
    }

   

    /* ═══════════════════════════════════════
       MAIN LAYOUT
       CHANGE 2 & 7: sidebar moved upward with
       negative margin-top; z-index & overflow
       kept safe so nothing clips the illustration
    ═══════════════════════════════════════ */
    .main-layout {
      display: grid;
      grid-template-columns: 1fr 288px;   /* was: 300px — CHANGE 6: narrower */
      gap: 24px;                           /* was: 28px */
      align-items: start;
      /* CHANGE 3: position context so sidebar z-index is scoped */
      position: relative;
      margin-top:40px
      
    }

    /* ── DESKTOP: 4-col cards grid (all expanded) ── */
    .desktop-terms {
      display: block;
    }

    .terms-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
    }

    .term-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      /* CHANGE 6: reduced padding from 16px 15px 16px */
      padding: 13px 13px 13px;
      box-shadow: var(--shadow-sm);
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .term-card-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 7px;            /* was: 8px */
    }

    .term-icon-circle {
      width: 34px;                   /* was: 36px — CHANGE 6 */
      height: 34px;
      border-radius: 50%;
      background: #1a5bb8 ;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .term-icon-circle svg {
      width: 15px;                   /* was: 17px */
      height: 15px;
      stroke: #fff;
      fill: none;
    }

    .term-meta {
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .term-num {
      font-size: 10px;
      font-weight: 700;
      color: var(--text-muted);
      font-family: var(--font-head);
      line-height: 1.2;
      display: none;
    }

    .term-title {
      font-family: var(--font-head);
      font-size: 12px;               /* was: 12.5px */
      font-weight: 700;
      color: var(--navy);
      line-height: 1.3;
    }

    .term-desc {
      font-size: 11px;               /* was: 11.5px */
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* Card 19 contact */
    .term-contact-list {
      display: flex;
      flex-direction: column;
      gap: 4px;
      margin-top: 2px;
    }
    .term-contact-item {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 11px;
      color: var(--text-secondary);
    }
    .term-contact-item i{
    color: #1a5bb8 ;
    }

    /* ── MOBILE: Accordion (hidden on desktop) ── */
    .mobile-terms {
      display: none;
    }

    .acc-list {
      display: flex;
      flex-direction: column;
      gap: 7px;
    }

    .acc-item {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
    }
    .acc-item.open { border-color: #BFDBFE; }

    .acc-trigger {
      width: 100%;
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 13px 16px;
      background: none;
      border: none;
      cursor: pointer;
      text-align: left;
      font-family: var(--font-head);
      -webkit-tap-highlight-color: transparent;
    }
    .acc-item.open .acc-trigger { background: var(--sky); }

    .acc-icon-box {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: var(--navy);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .acc-icon-box svg {
      width: 16px;
      height: 16px;
      stroke: #fff;
      fill: none;
    }

    .acc-trigger-text {
      flex: 1;
      min-width: 0;
    }
    .acc-item-num {
      font-size: 10px;
      font-weight: 700;
      color: var(--accent);
      font-family: var(--font-head);
      letter-spacing: .04em;
      display: block;
      line-height: 1.2;
      display: none;
    }
    .acc-item-title {
      font-family: var(--font-head);
      font-size: 13.5px;
      font-weight: 700;
      color: var(--navy);
      line-height: 1.25;
    }

    .acc-chevron {
      width: 28px;
      height: 28px;
      border-radius: 7px;
      background: var(--sky);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: background .2s;
    }
    .acc-chevron svg {
      width: 14px;
      height: 14px;
      stroke: var(--accent);
      fill: none;
      transition: transform .25s cubic-bezier(.4,0,.2,1);
    }
    .acc-item.open .acc-chevron { background: var(--accent); }
    .acc-item.open .acc-chevron svg { stroke: #fff; transform: rotate(180deg); }

    .acc-body {
      max-height: 0;
      overflow: hidden;
      transition: max-height .3s cubic-bezier(.4,0,.2,1);
    }
    .acc-body-inner {
      padding: 0 16px 16px 62px;
      border-top: 1px solid var(--border);
    }
    .acc-body-inner p {
      font-size: 13px;
      color: var(--text-secondary);
      line-height: 1.65;
      margin: 10px 0 6px;
    }
    .acc-body-inner ul {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }
    .acc-body-inner ul li {
      display: flex;
      gap: 8px;
      font-size: 12.5px;
      color: var(--text-secondary);
      line-height: 1.55;
    }
    .acc-body-inner ul li::before {
      content: '';
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--accent);
      flex-shrink: 0;
      margin-top: 7px;
    }

    /* ═══════════════════════════════════════
       SIDEBAR
       CHANGE 2: negative margin-top pulls sidebar up
       CHANGE 5: subtle background
       CHANGE 6: compact padding & sizing
    ═══════════════════════════════════════ */
    .sidebar {
      display: flex;
      flex-direction: column;
      gap: 10px;                     /* was: 14px — CHANGE 6 */

      /* CHANGE 2: pull sidebar upward to align with hero illustration */
    

      /* CHANGE 5: subtle sidebar background */
      background: var(--sidebar-bg);
      border: 1px solid #D9E6FF;
      border-radius: var(--radius-lg);
      padding: 14px 12px;            /* CHANGE 6: contained padding */

      /* CHANGE 3: keep sidebar in normal stacking — below the hero layer */
      position: relative;
      z-index: 0;
    }

    /* CHANGE 5 + 6: Policy sidebar cards — compact */
    .sidebar-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      /* CHANGE 6: reduced from 18px 18px 16px */
      padding: 13px 14px 11px;
      box-shadow: var(--shadow-sm);
    }

    .sidebar-card-top {
      display: flex;
      align-items: flex-start;
      gap: 10px;                     /* was: 12px */
      margin-bottom: 6px;            /* was: 8px */
    }

    /* CHANGE 6: smaller icon boxes */
    .s-icon {
      width: 36px;                   /* was: 42px */
      height: 36px;
      border-radius: 9px;            /* was: 10px */
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .s-icon.orange { background: #FFF7ED; }
    .s-icon.green  { background: #F0FDF4; }
    .s-icon.red    { background: #FEF2F2; }
    .s-icon.blue   { background: var(--sky); }
    .s-icon svg { width: 17px; height: 17px; } /* was: 20px */

    .sidebar-card-top h4 {
      font-family: var(--font-head);
      font-size: 12px;               /* was: 13px — CHANGE 6 */
      font-weight: 700;
      color: var(--navy);
      line-height: 1.3;
      padding-top: 2px;
    }

    .sidebar-card p {
      font-size: 11px;               /* was: 12px — CHANGE 6 */
      color: var(--text-secondary);
      line-height: 1.55;
    }

    /* FAQ */
    .faq-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      /* CHANGE 6: reduced from 18px 18px 14px */
      padding: 13px 14px 10px;
      box-shadow: var(--shadow-sm);
    }

    .faq-card h3 {
      font-family: var(--font-head);
      font-size: 13px;               /* was: 15px — CHANGE 6 */
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 10px;           /* was: 12px */
    }

    .faq-list { display: flex; flex-direction: column; }

    .faq-item { border-bottom: 1px solid var(--border); }
    .faq-item:last-child { border-bottom: none; }

    .faq-trigger {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      /* CHANGE 6: reduced from 10px 0 */
      padding: 8px 0;
      background: none;
      border: none;
      cursor: pointer;
      font-family: var(--font-body);
      font-size: 11.5px;             /* was: 12.5px */
      font-weight: 500;
      color: var(--navy);
      text-align: left;
      gap: 8px;
    }

    .faq-plus {
      font-size: 16px;               /* was: 18px */
      color: var(--accent);
      flex-shrink: 0;
      transition: transform .2s;
      font-weight: 300;
      line-height: 1;
    }
    .faq-item.open .faq-plus { transform: rotate(45deg); }

    .faq-answer {
      display: none;
      font-size: 11px;               /* was: 12px */
      color: var(--text-secondary);
      padding: 0 0 8px;              /* was: 10px */
      line-height: 1.6;
    }
    .faq-item.open .faq-answer { display: block; }

    /* ═══════════════════════════════════════
       MOBILE POLICY HIGHLIGHTS (4 cards 2x2)
    ═══════════════════════════════════════ */
    .mobile-policy-cards {
      display: none;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin-bottom: 20px;
     
    }

    .mob-policy-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      padding: 14px 12px;
      display: flex;
      gap: 10px;
      align-items: flex-start;
      box-shadow: var(--shadow-sm);
    }

    .mob-p-icon {
      width: 38px;
      height: 38px;
      border-radius: 9px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .mob-p-icon.orange { background: #FFF7ED; }
    .mob-p-icon.green  { background: #F0FDF4; }
    .mob-p-icon.red    { background: #FEF2F2; }
    .mob-p-icon.blue   { background: var(--sky); }
    .mob-p-icon svg { width: 18px; height: 18px; }

    .mob-p-text h4 {
      font-family: var(--font-head);
      font-size: 11.5px;
      font-weight: 700;
      color: var(--navy);
      margin-bottom: 4px;
      line-height: 1.3;
    }
    .mob-p-text p {
      font-size: 11px;
      color: var(--text-secondary);
      line-height: 1.5;
    }

    /* ── MOBILE FAQ ── */
    .mobile-faq {
      display: none;
      margin-top: 20px;
    }
    .mobile-faq .faq-card { border-radius: var(--radius-md); }

    /* ═══════════════════════════════════════
       CTA BANNER
    ═══════════════════════════════════════ */
    .cta-banner {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 30px 36px;
      display: flex;
      align-items: center;
      gap: 24px;
      margin-top: 28px;
      box-shadow: var(--shadow-sm);
      position: relative;
      overflow: hidden;
    }

    .cta-banner::before {
      content: '';
      position: absolute;
      right: 160px;
      top: 0;
      bottom: 0;
      width: 300px;
      background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 80'%3E%3Cpath d='M0 40 Q75 10 150 40 Q225 70 300 40' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3Cpath d='M0 50 Q75 20 150 50 Q225 80 300 50' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3Cpath d='M0 30 Q75 0 150 30 Q225 60 300 30' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3C/svg%3E") center/cover;
      opacity: 0.5;
      pointer-events: none;
    }

    .cta-icon-wrap {
      width: 64px;
      height: 64px;
      background: var(--sky);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .cta-icon-wrap svg { width: 28px; height: 28px; stroke: var(--accent); fill: none; }

    .cta-text { flex: 1; }
    .cta-text h3 {
      font-family: var(--font-head);
      font-size: 19px;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 4px;
    }
    .cta-text p {
      font-size: 13.5px;
      color: var(--text-secondary);
    }

    .cta-buttons {
      display: flex;
      gap: 12px;
      flex-shrink: 0;
      position: relative;
      z-index: 1;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 11px 20px;
      border-radius: 9px;
      font-family: var(--font-head);
      font-size: 13.5px;
      font-weight: 700;
      cursor: pointer;
      border: 2px solid transparent;
      transition: all .2s;
      white-space: nowrap;
    }
    .btn-primary { background: var(--accent); color: #fff; }
    .btn-primary:hover { background: var(--blue-mid); }
    .btn-outline { background: #fff; border-color: #22C55E; color: #15803D; }
    .btn-outline:hover { background: #F0FDF4; }
    .btn svg { width: 15px; height: 15px; }

    /* ═══════════════════════════════════════
       RESPONSIVE
    ═══════════════════════════════════════ */

    /* Tablet */
    @media (max-width: 1100px) {
      .terms-grid { grid-template-columns: repeat(3, 1fr); }
      /* CHANGE 2 tablet: reduce negative margin on smaller viewports */
      .sidebar { margin-top: -160px; }
    }

    @media (max-width: 900px) {
      .main-layout { grid-template-columns: 1fr; }
      /* CHANGE 2: reset sidebar upward shift on single-column layout */
      .sidebar {
        display: none;
        margin-top: 0;
      }
      .terms-grid { grid-template-columns: repeat(2, 1fr); }
    }

    /* Mobile: switch to accordion */
    @media (max-width: 768px) {
       .hero{
        background-image:none; /* desktop background hide */
        display:flex;
        flex-direction:column;
        align-items:flex-start;
              padding:20px 20px 0px;
              margin-bottom: 9px;
               background-color:rgb(222, 234, 248);

    }

    .hero-left{
        width:100%;
        order:1;
    }

    .hero-mobile-banner{
        display:block;
        width:100%;
        margin-top:0px;
        order:2;
      overflow:hidden;
         font-size:0;
    }

    .hero-mobile-banner img{
        display:block;
        width:100%;
        height:auto;
    }
    
.breadcrumb {
     
     
          padding:18px 20px 0px;
          margin-bottom: -5px;
        

    }
      .page-wrap { padding: 0 14px 60px; }

      
      /* CHANGE 1: reset left shift on mobile — not needed */
     
      .hero-heading { font-size: 26px; letter-spacing: -0.3px; margin-bottom: 8px; }
      .hero-sub { font-size: 13px; position: relative; }

      .desktop-terms { display: none; }
      .mobile-terms { display: block; }
      .mobile-policy-cards { display: grid; }
      .mobile-faq { display: block; }

      .cta-banner {
        flex-direction: column;
        text-align: center;
        padding: 24px 18px;
        gap: 16px;
      }
      .cta-banner::before { display: none; }
      .cta-buttons { flex-direction: column; width: 100%; }
      .btn { justify-content: center; width: 100%; }
    }

    @media (max-width: 480px) {
      .hero { grid-template-columns: 1fr 1fr; }
      .hero-heading { font-size: 22px; }
    }
  </style>
</head>
<body>
<?php include "navbar.php"  ?>


  <!-- BREADCRUMB -->
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="#">Home</a>
    <span class="sep">›</span>
    <strong>Terms &amp; Conditions</strong>
  </nav>

  <!-- ═══════════════════════════════════════
       HERO
       CHANGE 1: hero-right has justify-content:flex-start
       and margin-left:-24px → illustration anchors LEFT
  ═══════════════════════════════════════ -->
  <section class="hero">
    <div class="hero-left">
      <h1 class="hero-heading">Terms &amp; Conditions</h1>
      <p class="hero-sub">Transparent policies, secure transactions, and professional service standards for all IFTS clients.</p>
    </div>

  
     <div class="hero-mobile-banner">
    <img src="images/Terms_&_Conditions-02.jpg" alt="">
</div>
  </section>
  

  <!-- ═══════════════════════════════════════
       MOBILE: 4 Policy Highlight Cards (2x2)
  ═══════════════════════════════════════ -->
  <div class="mobile-policy-cards">
    <div class="mob-policy-card">
      <div class="mob-p-icon orange">
        <svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M12 7v5l3 3"/></svg>
      </div>
      <div class="mob-p-text">
        <h4>Refund &amp; Reclassification Policy</h4>
        <p>Refund in full within 7 working days if you don't agree with the upgraded package.</p>
      </div>
    </div>
    <div class="mob-policy-card">
      <div class="mob-p-icon red">
        <svg viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      </div>
      <div class="mob-p-text">
        <h4>Payment Security Notice</h4>
        <p>We never ask for card details, PIN, CVV or any sensitive banking information.</p>
      </div>
    </div>
    <div class="mob-policy-card">
      <div class="mob-p-icon green">
        <svg viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
      </div>
      <div class="mob-p-text">
        <h4>Fixed Price Services</h4>
        <p>Where marked as Fixed Price, No Hidden Charges, everything included. No extra payments.</p>
      </div>
    </div>
    <div class="mob-policy-card">
      <div class="mob-p-icon blue">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <div class="mob-p-text">
        <h4>Service Timeline Conditions</h4>
        <p>Timeline starts after all required info, documents and payment verification are completed.</p>
      </div>
    </div>
  </div>
<div class="page-wrap">
  <!-- ═══════════════════════════════════════
       MAIN CONTENT LAYOUT
  ═══════════════════════════════════════ -->
  <div class="main-layout">

    <!-- LEFT: DESKTOP cards grid / MOBILE accordion -->
    <div>
      <!-- DESKTOP: All terms expanded as grid cards -->
      <div class="desktop-terms">
        <div class="terms-grid">

          <!-- 01 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">01</span>
                <span class="term-title">Platform Overview</span>
              </div>
            </div>
            <p class="term-desc">IFTS is a Business Infrastructure Platform offering registration, compliance, accounting, legal, digital, and advisory services.</p>
          </div>

          <!-- 02 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">02</span>
                <span class="term-title">Acceptance of Terms</span>
              </div>
            </div>
            <p class="term-desc">By using our platform, you agree to provide accurate information and comply with all applicable laws and regulations.</p>
          </div>

          <!-- 03 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">03</span>
                <span class="term-title">Service Orders &amp; Processing</span>
              </div>
            </div>
            <p class="term-desc">Orders confirm after info, documents, and payment verification. Timeline starts after complete submission.</p>
          </div>

          <!-- 04 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">04</span>
                <span class="term-title">Service Categories, Pricing &amp; Upgrades</span>
              </div>
            </div>
            <p class="term-desc">If your case falls under a higher category, pay only the difference. If not agreed, full refund in 7 working days.</p>
          </div>

          <!-- 05 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">05</span>
                <span class="term-title">Fixed Price Services</span>
              </div>
            </div>
            <p class="term-desc">Fixed price means everything included. No extra charges unless scope changes or additional services are requested.</p>
          </div>

          <!-- 06 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">06</span>
                <span class="term-title">Client Responsibilities</span>
              </div>
            </div>
            <p class="term-desc">Provide accurate info, authentic documents, review before approval, and respond promptly when requested.</p>
          </div>

          <!-- 07 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="9" y1="9" x2="15" y2="9"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="11" y2="17"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">07</span>
                <span class="term-title">Digital Forms &amp; Client Assistance</span>
              </div>
            </div>
            <p class="term-desc">Digital forms available on mobile and desktop. Ask for help if you face any difficulty while filling the form.</p>
          </div>

          <!-- 08 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">08</span>
                <span class="term-title">Payments &amp; Financial Security</span>
              </div>
            </div>
            <p class="term-desc">We accept payments via online transfer or Raast only. Never share card details. Upload payment screenshot as required.</p>
          </div>

          <!-- 09 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="22" x2="21" y2="22"/><rect x="2" y="10" width="20" height="12"/><path d="M12 2L2 10h20z"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">09</span>
                <span class="term-title">Government Fees &amp; Taxes</span>
              </div>
            </div>
            <p class="term-desc">Government fees are separate unless mentioned. Applicable taxes, fees, penalties are payable by the client.</p>
          </div>

          <!-- 10 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">10</span>
                <span class="term-title">Compliance &amp; Regulatory Services</span>
              </div>
            </div>
            <p class="term-desc">We provide guidance and support, but final approvals depend on authorities and their policies.</p>
          </div>

          <!-- 11 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">11</span>
                <span class="term-title">Digital Communication</span>
              </div>
            </div>
            <p class="term-desc">Receive updates via WhatsApp, email, notifications, and digital document delivery.</p>
          </div>

          <!-- 12 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">12</span>
                <span class="term-title">Intellectual Property</span>
              </div>
            </div>
            <p class="term-desc">All content, branding, and materials are the property of IFTS. Unauthorized use is prohibited.</p>
          </div>

          <!-- 13 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">13</span>
                <span class="term-title">Confidentiality</span>
              </div>
            </div>
            <p class="term-desc">We maintain confidentiality and do not share client information except where legally required or authorized.</p>
          </div>

          <!-- 14 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">14</span>
                <span class="term-title">Third-Party Platforms</span>
              </div>
            </div>
            <p class="term-desc">Services may involve FBR, SECP, PSW, PRA/SRB/KPRA/BRA, PSEB, IPO, Banking Systems, Courier &amp; Communication.</p>
          </div>

          <!-- 15 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">15</span>
                <span class="term-title">Limitation of Liability</span>
              </div>
            </div>
            <p class="term-desc">We are not liable for govt delays, rejections, client errors, third-party downtime, or indirect losses.</p>
          </div>

          <!-- 16 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">16</span>
                <span class="term-title">Service Modifications</span>
              </div>
            </div>
            <p class="term-desc">We may update pricing, services, features, or policies without prior notice.</p>
          </div>

          <!-- 17 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">17</span>
                <span class="term-title">Termination of Services</span>
              </div>
            </div>
            <p class="term-desc">Services may be suspended or terminated in case of fraud, misconduct, misleading information, or terms violation.</p>
          </div>

          <!-- 18 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">18</span>
                <span class="term-title">Governing Jurisdiction</span>
              </div>
            </div>
            <p class="term-desc">These Terms &amp; Conditions are governed under the applicable laws and regulations of Pakistan.</p>
          </div>

          <!-- 19 -->
          <div class="term-card">
            <div class="term-card-header">
              <div class="term-icon-circle">
                <svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.6 3.34 2 2 0 0 1 3.57 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.74a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div class="term-meta">
                <span class="term-num">19</span>
                <span class="term-title">Contact &amp; Support</span>
              </div>
            </div>
            <div class="term-contact-list">
              <div class="term-contact-item">
  <i class="fas fa-envelope"></i>
                <span>info@ifts.digital</span>
              </div>
              <div class="term-contact-item">
  <i class="fas fa-phone"></i>
                <span>+92 335 5651782</span>
              </div>
              <div class="term-contact-item">
  <i class="fab fa-whatsapp"></i>
                <span>ifts.digital</span>
              </div>
            </div>
          </div>

        </div><!-- /terms-grid -->
      </div><!-- /desktop-terms -->

      <!-- MOBILE: Accordion -->
      <div class="mobile-terms">
        <div class="acc-list" id="mobileAccordion">
          <!-- 01 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">01</span><span class="acc-item-title">Platform Overview</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>IFTS is a Business Infrastructure Platform offering registration, compliance, accounting, legal, digital, and advisory services.</p></div></div>
          </div>
          <!-- 02 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">02</span><span class="acc-item-title">Acceptance of Terms</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>By using our platform, you agree to provide accurate information and comply with all applicable laws and regulations.</p><ul><li>You confirm that all information provided is truthful and accurate.</li><li>You agree to comply with all applicable laws of Pakistan.</li><li>Continued use constitutes acceptance of these terms.</li></ul></div></div>
          </div>
          <!-- 03 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">03</span><span class="acc-item-title">Service Orders &amp; Processing</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Orders confirm after info, documents, and payment verification. Timeline starts after complete submission.</p></div></div>
          </div>
          <!-- 04 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">04</span><span class="acc-item-title">Service Categories, Pricing &amp; Upgrades</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>If your case falls under a higher category, pay only the difference. If not agreed, full refund in 7 working days.</p></div></div>
          </div>
          <!-- 05 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">05</span><span class="acc-item-title">Fixed Price Services</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Fixed price means everything included. No extra charges unless scope changes or additional services are requested.</p></div></div>
          </div>
          <!-- 06 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">06</span><span class="acc-item-title">Client Responsibilities</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Provide accurate info, authentic documents, review before approval, and respond promptly when requested.</p></div></div>
          </div>
          <!-- 07 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="9" y1="9" x2="15" y2="9"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="11" y2="17"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">07</span><span class="acc-item-title">Digital Forms &amp; Client Assistance</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Digital forms available on mobile and desktop. Ask for help if you face any difficulty while filling the form.</p></div></div>
          </div>
          <!-- 08 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">08</span><span class="acc-item-title">Payments &amp; Financial Security</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>We accept payments via online transfer or Raast only. Never share card details with anyone. Upload payment screenshot as required.</p></div></div>
          </div>
          <!-- 09 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="22" x2="21" y2="22"/><rect x="2" y="10" width="20" height="12"/><path d="M12 2L2 10h20z"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">09</span><span class="acc-item-title">Government Fees &amp; Taxes</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Government fees are separate unless mentioned. Applicable taxes, fees, penalties are payable by the client.</p></div></div>
          </div>
          <!-- 10 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">10</span><span class="acc-item-title">Compliance &amp; Regulatory Services</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>We provide guidance and support, but final approvals depend on authorities and their policies.</p></div></div>
          </div>
          <!-- 11 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">11</span><span class="acc-item-title">Digital Communication</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Receive updates via WhatsApp, email, notifications, and digital document delivery.</p></div></div>
          </div>
          <!-- 12 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">12</span><span class="acc-item-title">Intellectual Property</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>All content, branding, and materials are the property of IFTS. Unauthorized use is prohibited.</p></div></div>
          </div>
          <!-- 13 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">13</span><span class="acc-item-title">Confidentiality</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>We maintain confidentiality and do not share client information except where legally required or authorized.</p></div></div>
          </div>
          <!-- 14 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">14</span><span class="acc-item-title">Third-Party Platforms</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Services may involve FBR, SECP, PSW, PRA/SRB/KPRA/BRA, PSEB, IPO, Banking Systems, Courier &amp; Communication.</p></div></div>
          </div>
          <!-- 15 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">15</span><span class="acc-item-title">Limitation of Liability</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>We are not liable for govt delays, rejections, client errors, third-party downtime, or indirect losses.</p></div></div>
          </div>
          <!-- 16 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">16</span><span class="acc-item-title">Service Modifications</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>We may update pricing, services, features, or policies without prior notice.</p></div></div>
          </div>
          <!-- 17 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">17</span><span class="acc-item-title">Termination of Services</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Services may be suspended or terminated in case of fraud, misconduct, misleading information, or terms violation.</p></div></div>
          </div>
          <!-- 18 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">18</span><span class="acc-item-title">Governing Jurisdiction</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>These Terms &amp; Conditions are governed under the applicable laws and regulations of Pakistan.</p></div></div>
          </div>
          <!-- 19 -->
          <div class="acc-item">
            <button class="acc-trigger" aria-expanded="false">
              <div class="acc-icon-box"><svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.6 3.34 2 2 0 0 1 3.57 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.74a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
              <div class="acc-trigger-text"><span class="acc-item-num">19</span><span class="acc-item-title">Contact &amp; Support</span></div>
              <div class="acc-chevron"><svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></div>
            </button>
            <div class="acc-body"><div class="acc-body-inner"><p>Reach our support team through: Email: info@ifts.digital | WhatsApp: +92 335 5651782 | Website: ifts.digital</p></div></div>
          </div>
        </div><!-- /acc-list -->
      </div><!-- /mobile-terms -->

      <!-- MOBILE FAQ -->
      <div class="mobile-faq">
        <div class="faq-card">
          <h3>Frequently Asked Questions</h3>
          <div class="faq-list" id="mobileFaqList">
            <div class="faq-item"><button class="faq-trigger">When does service processing start?<span class="faq-plus">+</span></button><div class="faq-answer">Service processing begins after all required documents, complete information, and verified payment have been received.</div></div>
            <div class="faq-item"><button class="faq-trigger">What if my case falls under another category?<span class="faq-plus">+</span></button><div class="faq-answer">We will notify you and ask you to pay only the price difference. If you disagree, a full refund will be issued within 7 working days.</div></div>
            <div class="faq-item"><button class="faq-trigger">Do you charge any hidden or extra fees?<span class="faq-plus">+</span></button><div class="faq-answer">No. Fixed Price services include everything. Government fees, if any, are communicated clearly and are separate.</div></div>
            <div class="faq-item"><button class="faq-trigger">What payment methods do you accept?<span class="faq-plus">+</span></button><div class="faq-answer">We accept Online Bank Transfer (IBFT) and Raast payments to our official accounts. Always upload your payment screenshot after transfer.</div></div>
            <div class="faq-item"><button class="faq-trigger">How can I get help filling digital forms?<span class="faq-plus">+</span></button><div class="faq-answer">Our support team is available via WhatsApp, phone, and email during business hours (Mon–Sat, 9 AM–6 PM).</div></div>
          </div>
        </div>
      </div>

    </div><!-- /left column -->

    <!-- SIDEBAR (desktop only) -->
    <aside class="sidebar">

      <div class="sidebar-card">
        <div class="sidebar-card-top">
          <div class="s-icon orange">
            <svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M12 7v5l3 3"/></svg>
          </div>
          <h4>Refund &amp; Reclassification Policy</h4>
        </div>
        <p>If your case falls under a different category and you don't agree with the upgraded package, your initial payment will be refunded in full within 7 working days with zero deductions.</p>
      </div>

      <div class="sidebar-card">
        <div class="sidebar-card-top">
          <div class="s-icon green">
            <svg viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
          </div>
          <h4>Fixed Price Services</h4>
        </div>
        <p>Where a service is marked as Fixed Price, No Hidden Charges, Everything Included, the client will not pay anything extra unless scope changes or optional services are requested.</p>
      </div>

      <div class="sidebar-card">
        <div class="sidebar-card-top">
          <div class="s-icon red">
            <svg viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <h4>Payment Security Notice</h4>
        </div>
        <p>IFTS never asks for debit/credit card details, CVV, PIN, or any sensitive banking information. Pay only via Online Transfer / Raast to our official accounts and upload payment screenshot.</p>
      </div>

      <div class="sidebar-card">
        <div class="sidebar-card-top">
          <div class="s-icon blue">
            <svg viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h4>Service Timeline Conditions</h4>
        </div>
        <p>Service timeline begins only after completion of all required information, documents, and payment verification. Timelines may vary due to government processing, verification, or regulatory delays.</p>
      </div>

      <div class="faq-card">
        <h3>Frequently Asked Questions</h3>
        <div class="faq-list" id="faqList">
          <div class="faq-item"><button class="faq-trigger">When does service processing start?<span class="faq-plus">+</span></button><div class="faq-answer">Service processing begins after all required documents, complete information, and verified payment have been received.</div></div>
          <div class="faq-item"><button class="faq-trigger">What if my case falls under another category?<span class="faq-plus">+</span></button><div class="faq-answer">We will notify you and ask you to pay only the price difference. If you disagree, a full refund will be issued within 7 working days.</div></div>
          <div class="faq-item"><button class="faq-trigger">Do you charge any hidden or extra fees?<span class="faq-plus">+</span></button><div class="faq-answer">No. Fixed Price services include everything. Government fees, if any, are communicated clearly and are separate from our service charges.</div></div>
          <div class="faq-item"><button class="faq-trigger">What payment methods do you accept?<span class="faq-plus">+</span></button><div class="faq-answer">We accept Online Bank Transfer (IBFT) and Raast payments to our official accounts. Always upload your payment screenshot after transfer.</div></div>
          <div class="faq-item"><button class="faq-trigger">How can I get help filling digital forms?<span class="faq-plus">+</span></button><div class="faq-answer">Our support team is available via WhatsApp, phone, and email during business hours (Mon–Sat, 9 AM–6 PM) to assist you.</div></div>
          <div class="faq-item"><button class="faq-trigger">What if my service is delayed?<span class="faq-plus">+</span></button><div class="faq-answer">Delays may occur due to government processing times or document verification. Our team will keep you updated via WhatsApp and email.</div></div>
        </div>
      </div>

    </aside>

  </div><!-- /main-layout -->

  <!-- CTA BANNER -->
  <div class="cta-banner">
    <div class="cta-icon-wrap">
      <svg viewBox="0 0 24 24" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.6 3.34 2 2 0 0 1 3.57 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.74a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
    </div>
    <div class="cta-text">
      <h3>Need Help Understanding Our Terms?</h3>
      <p>Our support team is here to assist you with any questions or concerns.</p>
    </div>
    <div class="cta-buttons">
      <button class="btn btn-primary">
        Ask an Expert
      </button>
      <button class="btn btn-outline">
  <i class="fab fa-whatsapp" style="color: #15803D;font-size:larger;"></i>
        WhatsApp Us
      </button>
    </div>
  </div>

</div><!-- /page-wrap -->
<?php include "footer.php"  ?>
<script>
  // Mobile accordion – one open at a time
  document.querySelectorAll('.acc-trigger').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.acc-item');
      const body = item.querySelector('.acc-body');
      const inner = item.querySelector('.acc-body-inner');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.acc-item.open').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.acc-trigger').setAttribute('aria-expanded', 'false');
        el.querySelector('.acc-body').style.maxHeight = '0';
      });
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        body.style.maxHeight = inner.scrollHeight + 'px';
      }
    });
  });

  // FAQ toggle
  document.querySelectorAll('.faq-trigger').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      btn.closest('.faq-list').querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });
</script>
</body>
</html>