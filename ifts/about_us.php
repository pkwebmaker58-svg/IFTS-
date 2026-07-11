<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About IFTS</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #222;
      background: #fff;
      font-size: 14px;
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    ul {
      list-style: none;
    }

    .wrap {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* ── BREADCRUMB ── */
    .breadcrumb {
      padding: 10px 0;
    
      background-color:#dae6f5;
    }

    .breadcrumb .wrap {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 13px;
      color: #888;
    }

    .breadcrumb a {
      color: #888;
    }

    .breadcrumb .sep {
      color: #bbb;
      font-size: 11px;
    }

    .breadcrumb .cur {
      color: #1a3a8f;
      font-weight: 500;
    }

    /* ══ HERO ══ */
   .hero{
    background:#dae6f5;
    padding:10px 0 0;
}

.hero-image-desktop img{
    width:100%;
    display:block;
}

.hero-image-mobile{
    display:none;
}

    .hero-grid {
      display: grid;
      grid-template-columns: 1fr 420px;
      gap: 40px;
      align-items: flex-start;
      padding-bottom: 10px;
    }

    .hero-left h1 {
      font-size: 38px;
      font-weight: 800;
      color: #0e1e5b;
      line-height: 1.15;
      font-family:'Montserrat', sans-serif;
      margin-bottom: 6px;
    }

    .hero-tagline {
      font-size: 15px;
      font-weight: 600;
      color: #1e56d9;
      margin-bottom: 14px;
    }

    .hero-left p {
      font-size: 13.5px;
      color: #444;
      line-height: 1.75;
      margin-bottom: 10px;
        font-family:'Poppins',sans-serif ;
      max-width: 490px;
    }

  

    /* ══ MISSION / VISION ══ */
    .mv-section {
      padding: 24px 0;
      background: #fff;
      border-top: 1px solid #eef0f7;
    }

    .mv-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 18px;
    }

    .mv-card {
      display: flex;
      gap: 16px;
      align-items: flex-start;
      background: #fff;
      border: 1px solid #e8eeff;
      border-radius: 10px;
      padding: 22px 20px;
      box-shadow: 0 2px 10px rgba(26, 58, 143, .05);
    }

    .mv-icon-wrap {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: #0e1e5b;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .mv-icon-wrap svg {
      width: 26px;
      height: 26px;
    }

    .mv-card h3 {
      font-size: 15px;
      font-weight: 700;
      color: #0e1e5b;
      margin-bottom: 6px;
    }

    .mv-card p {
      font-size: 12.5px;
      color: #555;
      line-height: 1.7;
    }

    /* ══ WHAT WE DO ══ */
    .what-section {
      padding: 3px 0 20px;
      background: #fff;
    }

    .sec-head {
      text-align: center;
      margin-bottom: 18px;
    }

    .sec-head h2 {
      font-size: 22px;
      font-weight: 700;
      color: #0e1e5b;
      margin-bottom: 4px;
    }

    .sec-head p {
      font-size: 13px;
      color: #888;
    }

    .services-grid {
       display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
    }

    .svc-col {
    
        padding: 22px 20px;
  border-radius: 14px;
  border: 1px solid #e4ecff;
  box-shadow: 0 4px 14px rgba(26, 58, 143, 0.05);
  transition: all .25s ease;
      
    }
    .svc-col:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 24px rgba(26, 58, 143, 0.10);
}

    .svc-col.blue {
      background: #f0f5ff;
    }

  .svc-col.green {
  background: #f0fff6;
}

    .svc-col.orange {
      background: #fff9f0;
    }

    .svc-head {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 7px;
    }

    .svc-circle {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .svc-circle.blue {
      background: #2563eb;
    }

    .svc-circle.green {
      background: #16a34a;
    }

    .svc-circle.orange {
      background: #f59e0b;
    }

    .svc-circle svg {
      width: 20px;
      height: 20px;
      fill: #fff;
    }

    .svc-title {
      font-size: 14.5px;
      font-weight: 700;
    }

    .svc-col.blue .svc-title {
      color: #2563eb;
    }

    .svc-col.green .svc-title {
      color: #16a34a;
    }

    .svc-col.orange .svc-title {
      color: #d97706;
    }

    .svc-desc {
      font-size: 12px;
      color: #666;
      margin-bottom: 12px;
      line-height: 1.55;
    }

    .svc-list li {
      font-size: 12px;
      color: #444;
      padding: 3px 0;
      display: flex;
      align-items: flex-start;
      gap: 6px;
      line-height: 1.5;
    }

    .svc-list li .tick {
      font-weight: 700;
      flex-shrink: 0;
      margin-top: 1px;
      font-size: 11px;
    }

    .svc-col.blue .svc-list li .tick {
      color: #2563eb;
    }

    .svc-col.green .svc-list li .tick {
      color: #16a34a;
    }

    .svc-col.orange .svc-list li .tick {
      color: #d97706;
    }

    /* ══ WHY CHOOSE + WORKING APPROACH ══ */
  
.two-col {
  display: grid;
  grid-template-columns: 0.95fr 1.05fr;
  gap: 20px;
  align-items: start;
}
.pv-two-col {
  display: grid;
  grid-template-columns: 1.28fr 0.82fr;
  gap: 20px;
  align-items: start;
}
.why-left,
.approach-right {
  background: #fff;
  border: 1px solid #e8eeff;
  border-radius: 14px;
  padding: 26px 24px;
  box-shadow: 0 4px 14px rgba(26, 58, 143, 0.05);
  height: 100%;
}

    .why-left h2,
    .approach-right h2 {
      font-size: 19px;
      font-weight: 700;
      color: #0e1e5b;
      margin-bottom: 16px;
    }

    .why-inner {
      display: flex;
      align-items: flex-start;
      gap: 20px;
    }

    .why-list li {
      display: flex;
      align-items: flex-start;
      gap: 8px;
      font-size: 12.5px;
      color: #444;
      padding: 5px 0;
      line-height: 1.5;
    }

    .why-chk {
      width: 19px;
      height: 19px;
      border-radius: 50%;
      background: #2563eb;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 1px;
    }

    .why-chk svg {
      width: 10px;
      height: 10px;
      fill: #fff;
    }

    .shield-visual {
      flex-shrink: 0;
      width: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 8px;
    }

    .approach-items {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .approach-row {
      display: flex;
      gap: 12px;
      align-items: flex-start;
    }

    .app-icon {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background:  #2563eb ;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .app-icon svg {
      width: 18px;
      height: 18px;
      fill: #fff;
    }

    .app-text h4 {
      font-size: 13.5px;
      font-weight: 600;
      color: #0e1e5b;
      margin-bottom: 3px;
    }

    .app-text p {
      font-size: 12px;
      color: #555;
      line-height: 1.65;
    }

    /* ══ PLATFORM + CORE VALUES ══ */
    .pv-section {
      padding: 20px 0;
      background: #fff;
    }

    .platform-left h2,
    .values-right h2 {
      font-size: 19px;
      font-weight: 700;
      color: #0e1e5b;
      margin-bottom: 3px;
    }

    .platform-left .sub {
      font-size: 12.5px;
      color: #888;
      margin-bottom: 22px;
      
    }

  

    .plat-card {
      border: 1.5px solid #dde6ff;
      border-radius: 8px;
       padding: 20px 12px;

      text-align: center;
      background: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }
.plat-grid-all .plat-card:nth-last-child(-n+4) {
  justify-self: center;
  width: 100%;
  max-width: 140px;
}
.plat-grid-all{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 18px;
}
    .plat-card svg {
      width: 30px;
      height: 30px;
    }

    .plat-card span {
      font-size: 10.5px;
      font-weight: 600;
      color: #444;
      line-height: 1.35;
      display: block;
    }

    .values-right h2 {
      margin-bottom: 18px;
    }

    .values-list {
      display: flex;
      flex-direction: column;
      gap: 13px;
    }

    .val-row {
      display: flex;
      gap: 11px;
      align-items: flex-start;
    }

    .val-icon {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: #f0f5ff;
      border: 1.5px solid #dde6ff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .val-icon svg {
      width: 15px;
      height: 15px;
      stroke: #2563eb;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .val-text h4 {
      font-size: 13px;
      font-weight: 600;
      color: #0e1e5b;
      margin-bottom: 1px;
    }

    .val-text p {
      font-size: 11.5px;
      color: #666;
      line-height: 1.5;
    }

  /* ==========================
   CTA BANNER
========================== */

.cta-banner{
    background:#ffffff;
    border:1px solid #E2E8F0;
    border-radius:20px;
    padding:30px 36px;
    display:flex;
    align-items:center;
    gap:24px;
    margin-top:28px;
    box-shadow:0 4px 12px rgba(15,23,42,.05);
    position:relative;
    overflow:hidden;
      max-width: 1100px;
    width: 100%;
    margin: 0 auto; /* Center the section */
    margin-bottom:28px;
}

/* Background waves */

.cta-banner::before{
    content:'';
    position:absolute;
    right:160px;
    top:0;
    bottom:0;
    width:300px;
    background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 80'%3E%3Cpath d='M0 40 Q75 10 150 40 Q225 70 300 40' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3Cpath d='M0 50 Q75 20 150 50 Q225 80 300 50' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3Cpath d='M0 30 Q75 0 150 30 Q225 60 300 30' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3C/svg%3E") center/cover;
    opacity:.5;
    pointer-events:none;
}

/* Left Icon Circle */

.cta-icon-wrap{
    width:64px;
    height:64px;
    min-width:64px;
    border-radius:50%;
    background:#EAF3FF;
    display:flex;
    align-items:center;
    justify-content:center;
    position:relative;
    z-index:2;
}

.cta-icon-wrap svg{
    width:28px;
    height:28px;
    color:#2563EB;
}

/* Content */

.cta-text{
    flex:1;
    position:relative;
    z-index:2;
}

.cta-text h3{
    margin:0 0 4px;
    font-size:19px;
    font-weight:800;
    color:#0F172A;
    line-height:1.3;
}

.cta-text p{
    margin:0;
    font-size:13.5px;
    color:#64748B;
    line-height:1.6;
}

/* Buttons */

.cta-buttons{
    display:flex;
    gap:12px;
    position:relative;
    z-index:2;
}

.btn{
    text-decoration:none;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:11px 20px;
    border-radius:9px;
    font-size:13.5px;
    font-weight:700;
    transition:.25s ease;
    white-space:nowrap;
}

/* Contact Button */

.btn-primary{
    background:#2563EB;
    color:#ffffff;
}

.btn-primary:hover{
    background:#1D4ED8;
}

/* WhatsApp Button */

.btn-whatsapp{
    background:#ffffff;
    color:#15803D;
    border:2px solid #22C55E;
}

.btn-whatsapp:hover{
    background:#F0FDF4;
}

/* ==========================
   MOBILE
========================== */

@media (max-width:768px){
.hero-image-desktop{
    display:none;
}

.hero-image-mobile{
    display:block;
}

.hero-image-mobile img{
    width:100%;
    display:block;
    margin-top: -30px;
}
    .cta-banner{
        flex-direction:column;
        text-align:center;
        padding:24px 18px;
        gap:16px;
    }

    .cta-banner::before{
        display:none;
    }

    .cta-buttons{
        width:100%;
        flex-direction:column;
    }

    .btn{
        width:100%;
    }

    .cta-text h3{
        font-size:18px;
    }

}



/* PLATFORM COVERAGE + CORE VALUES BOXES */
   .plat-grid-all {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 10px;
}
.pv-two-col {
  display: grid;
  grid-template-columns: 1.28fr 0.82fr;
  gap: 20px;
  align-items: start;
}

.platform-left,
.values-right {
  background: #fff;
  border: 1px solid #e5ebff;
  border-radius: 16px;
  padding: 26px 24px;
  box-shadow: 0 4px 14px rgba(26, 58, 143, 0.05);
}

    /* ══ RESPONSIVE ══ */
    @media(max-width: 960px) {
      .hero-grid {
        grid-template-columns: 1fr;
      }
       .pv-two-col {
    grid-template-columns: 1fr;
  }
.pv-two-col {
    grid-template-columns: 1fr;
  }

  .platform-left,
  .values-right {
    padding: 22px 18px;
  }

  .plat-grid-all {
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
       .why-left,
  .approach-right {
    padding: 22px 18px;
  }
.plat-grid-all {
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
      .stats-row {
        grid-template-columns: repeat(2, 1fr);
      }

      .stat-item:nth-child(2) {
        border-right: none;
      }

      .stat-item:nth-child(3) {
        border-top: 1px solid #eef0ff;
      }

      .stat-item:nth-child(4) {
        border-top: 1px solid #eef0ff;
      }

      .mv-grid {
        grid-template-columns: 1fr;
        gap: 14px;
      }

      .services-grid {
        grid-template-columns: 1fr;
      }

      .svc-col.green {
        border-left: none;
        border-right: none;
        border-top: 1px solid #e4ecff;
        border-bottom: 1px solid #e4ecff;
      }

      .two-col {
        grid-template-columns: 1fr;
        gap: 32px;
      }

      .shield-visual {
        display: none;
      }

      .why-inner {
        flex-direction: column;
      }

    

   
      .plat-card {
        padding: 18px 8px 14px;
        gap: 8px;
      }

      .plat-card svg {
        width: 36px;
        height: 36px;
      }

      .plat-card span {
        font-size: 11.5px;
      }

      .cta-inner {
        flex-direction: column;
        text-align: center;
        gap: 24px;
      }

      .cta-device {
        display: block;
      }

      .cta-btns {
        justify-content: center;
        flex-direction: column;
        align-items: center;
      }

      .btn-blue,
      .btn-ghost {
        width: 100%;
        max-width: 300px;
        justify-content: center;
      }

    
    }

    @media(max-width: 600px) {
      .hero-left h1 {
        font-size: 28px;
      }
 .plat-grid-all {
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }
      .hero {
        padding: 8px 0 0;
      }

      .hero-grid {
        gap: 24px;
        padding-bottom: 8px;
      }

      .stats-row {
        grid-template-columns: repeat(2, 1fr);
      }

      .brand-logo {
        font-size: 38px;
      }

      .mv-section {
        padding: 20px 0;
      }

      .mv-card {
        padding: 18px 16px;
        gap: 12px;
      }

      .mv-icon-wrap {
        width: 46px;
        height: 46px;
      }

      .what-section {
        padding: 28px 0;
      }

      .sec-head h2 {
        font-size: 20px;
      }

      .svc-col {
        padding: 18px 16px;
      }

      .why-section {
        padding: 28px 0;
      }

      .why-left h2,
      .approach-right h2 {
        font-size: 17px;
      }

      .pv-section {
        padding: 28px 0;
      }

      .platform-left h2,
      .values-right h2 {
        font-size: 17px;
      }

  

      .plat-card {
        padding: 18px 8px 14px;
        gap: 8px;
        border-radius: 10px;
      }

      .plat-card svg {
        width: 36px;
        height: 36px;
      }

      .plat-card span {
        font-size: 11.5px;
        font-weight: 600;
      }

      .cta-text h2 {
        font-size: 20px;
      }

      .cta-inner {
        padding: 28px 20px;
      }

      .wrap {
        padding: 0 16px;
      }
    }
  </style>
</head>

<body>
<?php include "navbar.php" ?>
  <!-- ── BREADCRUMB ── -->
  <div class="breadcrumb">
    <div class="wrap">
      <a href="index.php">Home</a>
      <span class="sep">›</span>
      <span class="cur">About Us</span>
    </div>
  </div>

  <!-- ══ HERO ══ -->
  <section class="hero">
    <div class="wrap">
      <div class="hero-grid">
        <div class="hero-left">
          <h1>About IFTS</h1>
          <p class="hero-tagline">Business Infrastructure Platform for Pakistan</p>
          <p>IFTS – Ismail Financial and Tax Solutions is a modern Business Infrastructure Platform designed to help
            individuals, startups, SMEs, companies, and digital businesses across Pakistan to Start, Manage, and Grow
            their business operations through one integrated platform.</p>
          <p>We simplify complex registration, compliance, taxation, financial management, digital infrastructure, and
            growth solutions into a professional and easy-to-access system.</p>
        </div>
<div class="hero-image-desktop">
    <img src="images/Ifts_About_Us_deskstop.jpg" alt="">
</div>

<div class="hero-image-mobile">
    <img src="images/Ifts_About_Us_deskstop.jpg" alt="">
</div>
    

  </section>

  <!-- ══ MISSION / VISION ══ -->
  <section class="mv-section">
    <div class="wrap">
      <div class="mv-grid">
        <div class="mv-card">
          <div class="mv-icon-wrap">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="10" fill="#fff" opacity="0.15" />
              <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z" fill="none"
                stroke="#fff" stroke-width="1.5" />
              <circle cx="12" cy="12" r="5" fill="none" stroke="#fff" stroke-width="1.5" />
              <circle cx="12" cy="12" r="2" fill="#fff" />
              <line x1="12" y1="2" x2="12" y2="7" stroke="#fff" stroke-width="1.5" />
              <line x1="12" y1="17" x2="12" y2="22" stroke="#fff" stroke-width="1.5" />
              <line x1="2" y1="12" x2="7" y2="12" stroke="#fff" stroke-width="1.5" />
              <line x1="17" y1="12" x2="22" y2="12" stroke="#fff" stroke-width="1.5" />
            </svg>
          </div>
          <div>
            <h3>Our Mission</h3>
            <p>To simplify business compliance and infrastructure for entrepreneurs and organizations through reliable,
              transparent, and technology-driven professional services.</p>
          </div>
        </div>
        <div class="mv-card">
          <div class="mv-icon-wrap">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" fill="none" stroke="#fff" stroke-width="1.5"
                stroke-linecap="round" />
              <circle cx="12" cy="12" r="4" fill="none" stroke="#fff" stroke-width="1.5" />
              <circle cx="12" cy="12" r="1.5" fill="#fff" />
            </svg>
          </div>
          <div>
            <h3>Our Vision</h3>
            <p>To become Pakistan's leading digital business infrastructure platform that empowers businesses with
              compliance, operational clarity, automation, and scalable growth solutions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══ WHAT WE DO ══ -->
  <section class="what-section">
    <div class="wrap">
      <div class="sec-head">
        <h2>What We Do</h2>
        <p>Complete business solutions under one platform</p>
      </div>
      <div class="services-grid">
        <div class="svc-col blue">
          <div class="svc-head">
            <div class="svc-circle blue">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="#fff" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <span class="svc-title">Start Business</span>
          </div>
          <p class="svc-desc">Helping businesses legally establish and launch operations.</p>
          <ul class="svc-list">
            <li><span class="tick">✓</span>NTN Registration</li>
            <li><span class="tick">✓</span>Company Registration (SECP)</li>
            <li><span class="tick">✓</span>PSW / Import Export Registration</li>
            <li><span class="tick">✓</span>NGO / NPO Registration</li>
            <li><span class="tick">✓</span>Business Documentation</li>
            <li><span class="tick">✓</span>POS &amp; Compliance Setup</li>
            <li><span class="tick">✓</span>Digital Business Setup</li>
          </ul>
        </div>
        <div class="svc-col green">
          <div class="svc-head">
            <div class="svc-circle green">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="3" stroke="#fff" stroke-width="2" />
                <path
                  d="M19.07 4.93l-1.41 1.41M4.93 19.07l1.41-1.41M22 12h-2M4 12H2M19.07 19.07l-1.41-1.41M4.93 4.93l1.41 1.41M12 2v2M12 20v2"
                  stroke="#fff" stroke-width="2" stroke-linecap="round" />
              </svg>
            </div>
            <span class="svc-title">Manage Business</span>
          </div>
          <p class="svc-desc">Helping businesses stay compliant, organized, and financially structured.</p>
          <ul class="svc-list">
            <li><span class="tick">✓</span>Income Tax Returns</li>
            <li><span class="tick">✓</span>Sales Tax Compliance</li>
            <li><span class="tick">✓</span>PRA / SRB / KPRA / BRA Compliance</li>
            <li><span class="tick">✓</span>Accounting &amp; Bookkeeping</li>
            <li><span class="tick">✓</span>Payroll &amp; HR Compliance</li>
            <li><span class="tick">✓</span>Trademark Registration</li>
            <li><span class="tick">✓</span>Corporate Compliance</li>
            <li><span class="tick">✓</span>CFO &amp; Financial Advisory</li>
          </ul>
        </div>
        <div class="svc-col orange">
          <div class="svc-head">
            <div class="svc-circle orange">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="#fff" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
                <polyline points="17 6 23 6 23 12" stroke="#fff" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <span class="svc-title">Grow Business</span>
          </div>
          <p class="svc-desc">Helping businesses expand, automate, and scale professionally.</p>
          <ul class="svc-list">
            <li><span class="tick">✓</span>Business Automation</li>
            <li><span class="tick">✓</span>CRM &amp; Workflow Systems</li>
            <li><span class="tick">✓</span>Digital Marketing</li>
            <li><span class="tick">✓</span>E-Commerce Solutions</li>
            <li><span class="tick">✓</span>Brand Development</li>
            <li><span class="tick">✓</span>Growth Strategy</li>
            <li><span class="tick">✓</span>Financial Planning</li>
            <li><span class="tick">✓</span>Business Expansion Advisory</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ══ WHY CHOOSE + WORKING APPROACH ══ -->
  <section class="why-section">
    <div class="wrap">
      <div class="two-col">
        <div class="why-left">
          <h2>Why Businesses Choose IFTS</h2>
          <div class="why-inner">
            <ul class="why-list">
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>One Platform for Multiple Business Needs</li>
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>Professional Compliance Support</li>
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>Secure &amp; Confidential Process</li>
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>Transparent Pricing Structure</li>
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>Fast Processing &amp; Monitoring</li>
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>Digital Documentation Workflow</li>
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>WhatsApp-Based Client Coordination</li>
              <li><span class="why-chk"><svg viewBox="0 0 24 24" fill="#fff">
                    <polyline points="20 6 9 17 4 12" />
                  </svg></span>Business-Focused Advisory Approach</li>
            </ul>
            <div class="shield-visual">
              <svg width="120" height="130" viewBox="0 0 120 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="60" cy="72" rx="52" ry="52" fill="#dde9ff" opacity="0.5" />
                <ellipse cx="60" cy="72" rx="42" ry="42" fill="#c5d8ff" opacity="0.5" />
                <path d="M60 12 L20 28 L20 60 C20 85 38 105 60 115 C82 105 100 85 100 60 L100 28 Z" fill="#e8f0fe"
                  stroke="#3a6de8" stroke-width="2" />
                <path d="M60 22 L30 35 L30 60 C30 80 43 96 60 104 C77 96 90 80 90 60 L90 35 Z" fill="#c5d8ff"
                  opacity="0.6" />
                <circle cx="60" cy="65" r="18" fill="#2563eb" />
                <polyline points="51,65 57,72 70,57" stroke="#fff" stroke-width="3" stroke-linecap="round"
                  stroke-linejoin="round" fill="none" />
              </svg>
            </div>
          </div>
        </div>

        <div class="approach-right">
          <h2>Our Working Approach</h2>
          <div class="approach-items">
            <div class="approach-row">
              <div class="app-icon">
               <i class="fas fa-users" style="color: white;"></i>
              </div>
              <div class="app-text">
                <h4>Structured Workflow</h4>
                <p>Every service follows a proper workflow including onboarding, document collection, compliance review,
                  processing, tracking, and delivery.</p>
              </div>
            </div>
            <div class="approach-row">
              <div class="app-icon">
                <svg viewBox="0 0 24 24" fill="#fff">
                  <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                </svg>
              </div>
              <div class="app-text">
                <h4>Client Communication</h4>
                <p>Clients receive updates through WhatsApp coordination, automated tracking messages, and digital
                  documentation systems.</p>
              </div>
            </div>
            <div class="approach-row">
              <div class="app-icon">
                <svg viewBox="0 0 24 24" fill="#fff">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
              </div>
              <div class="app-text">
                <h4>Compliance First</h4>
                <p>Our systems are designed to align with FBR, SECP, PRA, PSW, and other regulatory frameworks
                  applicable in Pakistan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══ PLATFORM COVERAGE + CORE VALUES ══ -->
  <section class="pv-section">
    <div class="wrap">
      <div class="pv-two-col">
        <div class="platform-left">
          <h2>Platform Coverage</h2>
          <p class="sub">We provide support for a wide range of businesses</p>

          <div class="plat-grid-all">
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="13" r="6" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M7 35c0-7.18 5.82-13 13-13s13 5.82 13 13" stroke="#1a3a8f" stroke-width="1.8"
                  stroke-linecap="round" />
              </svg>
              <span>Individuals &amp; Salaried Persons</span>
            </div>
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="13" r="6" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M8 36v-2a10 10 0 0 1 10-10h4a10 10 0 0 1 10 10v2" stroke="#1a3a8f" stroke-width="1.8"
                  stroke-linecap="round" />
              </svg>
              <span>Sole Proprietors</span>
            </div>
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="14" cy="13" r="5" stroke="#1a3a8f" stroke-width="1.8" />
                <circle cx="26" cy="13" r="5" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M3 34a11 11 0 0 1 22 0" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
                <path d="M20 34a11 11 0 0 1 17 0" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
              </svg>
              <span>AOP / Partnerships</span>
            </div>
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="6" y="14" width="28" height="20" rx="2" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M14 14V10a6 6 0 0 1 12 0v4" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
                <line x1="20" y1="22" x2="20" y2="28" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
                <line x1="17" y1="25" x2="23" y2="25" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
              </svg>
              <span>Private Limited Companies</span>
            </div>
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 5L5 14v20h30V14L20 5z" stroke="#1a3a8f" stroke-width="1.8" stroke-linejoin="round" />
                <rect x="14" y="22" width="12" height="12" stroke="#1a3a8f" stroke-width="1.8" />
                <rect x="17" y="14" width="6" height="5" stroke="#1a3a8f" stroke-width="1.5" />
              </svg>
              <span>NGOs / NPOs</span>
            </div>
          

     
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="10" width="30" height="20" rx="2" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M10 20h20M10 25h12" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
                <circle cx="30" cy="30" r="6" fill="#fff" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M28 30h4M30 28v4" stroke="#1a3a8f" stroke-width="1.5" stroke-linecap="round" />
              </svg>
              <span>E-Commerce Businesses</span>
            </div>
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="6" y="8" width="28" height="22" rx="2" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M6 30h28" stroke="#1a3a8f" stroke-width="1.5" />
                <path d="M14 34v-4M26 34v-4" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
                <path d="M11 38h18" stroke="#1a3a8f" stroke-width="1.8" stroke-linecap="round" />
                <rect x="12" y="14" width="6" height="5" rx="1" stroke="#1a3a8f" stroke-width="1.5" />
                <rect x="22" y="14" width="6" height="5" rx="1" stroke="#1a3a8f" stroke-width="1.5" />
              </svg>
              <span>Software Houses &amp; Freelancers</span>
            </div>
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="8" width="30" height="24" rx="2" stroke="#1a3a8f" stroke-width="1.8" />
                <path d="M5 18h30M20 8v24" stroke="#1a3a8f" stroke-width="1.5" />
                <path d="M9 13h6M9 23h6M25 13h6M25 23h6" stroke="#1a3a8f" stroke-width="1.5" stroke-linecap="round" />
              </svg>
              <span>Import &amp; Export Businesses</span>
            </div>
            <div class="plat-card">
              <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 35V18L20 7l13 11v17" stroke="#1a3a8f" stroke-width="1.8" stroke-linejoin="round" />
                <rect x="15" y="23" width="10" height="12" stroke="#1a3a8f" stroke-width="1.8" />
                <rect x="8" y="18" width="5" height="5" stroke="#1a3a8f" stroke-width="1.5" />
                <rect x="27" y="18" width="5" height="5" stroke="#1a3a8f" stroke-width="1.5" />
              </svg>
              <span>Restaurants &amp; Retail Businesses</span>
            </div>
          </div>
        </div>

        <div class="values-right">
          <h2>Our Core Values</h2>
          <div class="values-list">
            <div class="val-row">
              <div class="val-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                </svg>
              </div>
              <div class="val-text">
                <h4>Professionalism</h4>
                <p>We deliver services with integrity and professional standards.</p>
              </div>
            </div>
            <div class="val-row">
              <div class="val-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                </svg>
              </div>
              <div class="val-text">
                <h4>Transparency</h4>
                <p>We believe in clear communication and transparent processes.</p>
              </div>
            </div>
            <div class="val-row">
              <div class="val-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
              </div>
              <div class="val-text">
                <h4>Reliability</h4>
                <p>Our clients rely on us for accurate and timely solutions.</p>
              </div>
            </div>
            <div class="val-row">
              <div class="val-icon">
                <svg viewBox="0 0 24 24">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </div>
              <div class="val-text">
                <h4>Compliance Accuracy</h4>
                <p>We ensure 100% compliance with applicable regulations.</p>
              </div>
            </div>
           
            <div class="val-row">
              <div class="val-icon">
                <svg viewBox="0 0 24 24">
                  <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                  <polyline points="17 6 23 6 23 12" />
                </svg>
              </div>
              <div class="val-text">
                <h4>Continuous Improvement</h4>
                <p>We continuously improve our systems and services for you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══ CTA BANNER ══ -->
  <section>
      <div class="cta-banner">

    <div class="cta-icon-wrap">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.6 3.34 2 2 0 0 1 3.57 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.74a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
    </div>

    <div class="cta-text">
        <h3>Need Help Understanding Our Terms?</h3>
        <p>Our support team is here to assist you with any questions or concerns.</p>
    </div>

    <div class="cta-buttons">

        <a href="mailto:info@ifts.digital" class="btn btn-primary">
          Ask an Expert
        </a>

        <a href="https://wa.me/923355651782" target="_blank" class="btn btn-whatsapp">
            WhatsApp Us
        </a>

    </div>

</div>
  </section>

 
<?php include "footer.php" ?>
</body>

</html>