<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Start Business – IFTS</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Embed the Montserrat Font from Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://googleapis.com" rel="stylesheet">
<style>

/* ===== RESET ===== */
*, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }

body {
  font-family: 'Poppins', sans-serif;
  background: #f5f7fb;
  color: #1a2d4e;
}


/* ============================================================
   HERO SECTION
   ============================================================ */
.hero {
  /*
   * BACKGROUND IMAGE — replace path below with your own:
   * background-image: url('images/background.jpeg');
   */
    background-image:url('images/Start_Business_Desktop.jpg');
    background-repeat:no-repeat;
    background-position:center;
    background-size:cover;
    min-height:420px;

    display:flex;
    align-items:center;

      margin-top: -40px;
   
        padding:60px 50px;
}

.hero-mobile-banner{
    display: none;
}

.hero-inner {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;

  width: 100%;
  display: grid;
  grid-template-columns: 1fr auto;
  align-items: center;
  gap: 40px;
}

/* ----- LEFT SIDE ----- */


.hero-tag {
  font-size: 13px;
  font-weight: 600;
  color: #0b3a75;
  margin-bottom: 14px;
  letter-spacing: 0.3px;
}

.hero-heading {
  font-size: 40px;
  font-weight: 800;
  color: #0d2a52;
  line-height: 1.15;
  margin-bottom: 16px;
  font-family:'Montserrat', sans-serif ; 
}

.hero-heading span {
  color: #1a5bb8;
}

.hero-desc {
  font-size: 15px;
  color: #4a5d78;
  line-height: 1.7;
  max-width: 440px;
  margin-bottom: 28px;
  font-family:'Poppins',sans-serif;
}



.hero-feat {
  display: flex;
  align-items: center;
  gap: 9px;
}

.hero-feat-icon {
  width: 36px;
  height: 36px;
  border-radius: 8px;
  background: rgba(11,58,117,0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  color: #0b3a75;
  flex-shrink: 0;
}

.hero-feat-text strong {
  display: block;
  font-size: 12.5px;
  font-weight: 700;
  color: #0d2a52;
  line-height: 1.2;
}

.hero-feat-text span {
  font-size: 11px;
  color: #7a8fa8;
  line-height: 1.2;
}



/* ============================================================
   EXPLORE SERVICES SECTION
   ============================================================ */
.services-section {
  padding: 32px 20px 80px;
  background: #f5f7fb;
}

.services-header {
  text-align: center;
  margin-bottom: 44px;
}

.services-header h2 {
  font-size: 2rem;
  font-weight: 800;
  color: #0d2a52;
  margin-bottom: 8px;
}

.services-header p {
  font-size: 14.5px;
  color: #6a7a94; 
}

.services-divider {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  margin-top: 12px;
  margin-bottom: -12px;
}

.services-divider-line {
  width: 38px;
  height: 2px;
  background: #0b3a75;
  border-radius: 2px;
  opacity: 0.3;
}

.services-divider-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #0b3a75;
}

/* Accordion wrapper */
.accordion-wrap {
  max-width: 900px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

/* ---- ACCORDION ITEM ---- */
.acc-item {
  background: #fff;
  border-radius: 12px;
  border: 1px solid #e4eaf5;
  box-shadow: 0 2px 12px rgba(11,58,117,0.05);
  overflow: hidden;
  transition: box-shadow 0.3s ease;
}

.acc-item.open {
  box-shadow: 0 8px 32px rgba(11,58,117,0.1);
}

/* ---- HEADER ROW ---- */
.acc-header {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 18px 22px;
  cursor: pointer;
  user-select: none;
  transition: background 0.2s;
}

.acc-header:hover {
  background: #f7faff;
}

.acc-item.open .acc-header {
  border-bottom: 1px solid #e8edf5;
}

/* Category icon */
.acc-cat-icon {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background: #eef2fb;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  color: #0b3a75;
  flex-shrink: 0;
  transition: background 0.25s, color 0.25s;
}

.acc-item.open .acc-cat-icon {
  background: #0b3a75;
  color: #fff;
}

.acc-header-text {
  flex: 1;
}

.acc-header-text h3 {
  font-size: 15px;
  font-weight: 700;
  color: #0d2a52;
  margin-bottom: 3px;
}

.acc-header-text span {
  font-size: 12.5px;
  color: #8a9ab5;
  font-weight: 400;
}

/* Toggle button */
.acc-toggle-btn {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #eef2fb;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  flex-shrink: 0;
  transition: background 0.25s, transform 0.35s ease;
}

.acc-toggle-btn i {
  font-size: 14px;
  color: #0b3a75;
  transition: transform 0.35s ease;
}

.acc-item.open .acc-toggle-btn {
  background: #0b3a75;
}

.acc-item.open .acc-toggle-btn i {
  color: #fff;
  transform: rotate(180deg);
}

/* ---- BODY ---- */
.acc-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.42s cubic-bezier(0.4,0,0.2,1);
}

.acc-body-inner {
  padding: 16px 22px 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

/* ---- SERVICE ROW ---- */
.svc-row {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 14px 16px;
  background: #f7faff;
  border: 1px solid #e4eaf5;
  border-radius: 10px;
  text-decoration: none;
  transition: background 0.22s, border-color 0.22s, transform 0.22s, box-shadow 0.22s;
}

.svc-row:hover {
  background: #eaf1ff;
  border-color: #c5d8f5;
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(11,58,117,0.08);
}



.svc-row-text {
  flex: 1;
}

.svc-row-text strong {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: #0d2a52;
  margin-bottom: 3px;
  line-height: 1.3;
}


.svc-row-right {
  display: flex;
  align-items: center;
  gap: 10px;
  flex-shrink: 0;
}

.svc-code {
  font-size: 11px;
  font-weight: 600;
  color: #0b3a75;
  background: #eef2fb;
  border-radius: 4px;
  padding: 4px 8px;
  letter-spacing: 0.3px;
  white-space: nowrap;
}

.svc-arrow {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  border: 1.5px solid #c5d8f5;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  color: #0b3a75;
  transition: background 0.2s, border-color 0.2s;
}

.svc-row:hover .svc-arrow {
  background: #0b3a75;
  border-color: #0b3a75;
  color: #fff;
}

/* ============================================================
   TRUST BAR (5 badges below accordion)
   ============================================================ */
.trust-bar {
  max-width: 1100px;
  margin: -38px auto 0;

  background:#ffffff;
  border: 1px solid #e4eaf5;
  border-radius: 12px;
  padding: 20px 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 0px;
  box-shadow: 0 2px 12px rgba(11,58,117,0.05);
}

.trust-item {
  display: flex;
  align-items: center;
  gap: 8px;
}

.trust-item-icon {
  width: 42px;
  height: 42px;
  border-radius: 10px;

  background: #EEF4FF;
  color: #2563EB;

  display: flex;
  align-items: center;
  justify-content: center;

  font-size: 17px;
  flex-shrink: 0;

  box-shadow: none;
}

.trust-item-text strong {
  display: block;
  font-size: 13px;
  font-weight: 700;
  color: #0d2a52;
  line-height: 1.3;
}

.trust-item-text span {
  font-size: 11px;
  color: #8A94A6;
  line-height: 1.4;
}


/* ============================================================
   RESPONSIVE
   ============================================================ */

@media (max-width: 992px) {
  .hero-inner {
    padding: 50px 40px;
    grid-template-columns: 1fr;
    gap: 28px;
  }
  .hero-card {
    max-width: 100%;
    display: flex;
    align-items: center;
    gap: 20px;
    text-align: left;
    padding: 24px 28px;
  }
  .hero-card-icon {
    margin: 0;
    flex-shrink: 0;
  }
  .breadcrumb-bar { padding: 10px 40px; }
}

@media (max-width: 768px) {
  .breadcrumb-bar { padding: 10px 20px; }
.hero{
        background-image:none; /* desktop background hide */
        display:flex;
        flex-direction:column;
        align-items:flex-start;
              padding:20px 0px !important;
               background-color:#dae6f5;

    }
    

    .hero-left{
        width:100%;
        order:1;
    }

    .hero-mobile-banner{
        display:block;
        width:100%;
        margin-top:2px;
        order:2;
    }

    .hero-mobile-banner img{
        display:block;
        width:100%;
        height:auto;
    }
    
.breadcrumb {
     
     
          padding:18px 20px -30px;
        

    }
  .hero-inner {
    padding: 40px 20px 2px;
  }

  .hero-heading {
    font-size: 28px;
  }

 
  .services-section {
    padding: 22px 14px 10px;
  }

  .services-header h2 {
    font-size: 1.6rem;
  }
  .services-header {
    margin-bottom: 30px;
  }

  .acc-header {
    padding: 15px 16px;
    gap: 12px;
  }

  .acc-cat-icon {
    width: 38px;
    height: 38px;
    font-size: 16px;
  }

  .acc-header-text h3 {
    font-size: 14px;
  }

  .acc-body-inner {
    padding: 12px 14px 16px;
  }

  .svc-row {
    padding: 12px 12px;
    gap: 10px;
  }

 

  .svc-row-text strong {
    font-size: 13px;
  }

  .svc-code {
    display: none;
  }

  .trust-bar {
     padding: 26px 30px;
    gap: 14px;
    justify-content: flex-start;
    position: relative;
    z-index: 4;
  }

  .trust-item {
    width: calc(50% - 8px);
  }

  .cta-banner {
    padding: 22px 20px;
    flex-direction: column;
    align-items: flex-start;
    gap: 18px;
  }

  .cta-banner-btns {
    width: 100%;
    flex-direction: column;
  }

  .cta-btn-primary,
  .cta-btn-whatsapp {
    justify-content: center;
    width: 100%;
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
    .hero-desc {
      margin-bottom: -20px;
      position: relative;
    }





}

@media (max-width: 540px) {
  .hero-heading { font-size: 24px; }
  .hero-card { flex-direction: column; text-align: center; }
  .hero-card-icon { margin: 0 auto; }

  .trust-item { width: 100%; }
}

@media (max-width: 400px) {
  .hero-heading { font-size: 21px; }
  .acc-toggle-btn { width: 30px; height: 30px; }
  .services-header h2 { font-size: 1.4rem; }
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
    margin-top:28px !important;
    box-shadow:0 4px 12px rgba(15,23,42,.05);
    position:relative;
    overflow:hidden;
      max-width: 1100px;
    width: 100%;
        margin: 0 auto; /* Center the section */

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
    background:#1a5bb8 ;
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



</style>
</head>

<body>

<?php include "navbar.php" ?>

<!-- ============================================================
     BREADCRUMB
     ============================================================ -->


<!-- ============================================================
     HERO
     Background image path: images/background.jpeg
     Replace with your own image — the ::before overlay keeps
     text readable over any bg photo.
     ============================================================ -->
<section class="hero">
  <div class="hero-inner">

    <!-- LEFT -->
    <div class="hero-left">


      <p class="hero-tag">New Business Setup &amp; Registration Services</p>

      <h1 class="hero-heading">
        Start Your Business<br>
        <span>with Confidence</span>
      </h1>

      <p class="hero-desc">
From NTN registration and company incorporation to digital business setup and compliance documentation — everything required to launch your business professionally.      </p>

     
   <div class="hero-mobile-banner">
    <img src="images/Start_Business_Mobile.jpg" alt="">
</div>

  </div>
</section>

  <!-- TRUST BAR -->
  <div class="trust-bar">

 <div class="trust-item">
  <div class="trust-item-icon">
    <i class="fas fa-user-tie"></i>
  </div>
  <div class="trust-item-text">
    <strong>Expert Guidance</strong>
    <span>Professional Business Advisors</span>
  </div>
</div>

<div class="trust-item">
  <div class="trust-item-icon">
    <i class="fas fa-shield-alt"></i>
  </div>
  <div class="trust-item-text">
    <strong>FBR &amp; SECP Compliant</strong>
    <span>Regulatory Compliance</span>
  </div>
</div>

<div class="trust-item">
  <div class="trust-item-icon">
    <i class="fas fa-bolt"></i>
  </div>
  <div class="trust-item-text">
    <strong>Fast Processing</strong>
    <span>Timely Service Delivery</span>
  </div>
</div>

<div class="trust-item">
  <div class="trust-item-icon">
    <i class="fas fa-lock"></i>
  </div>
  <div class="trust-item-text">
    <strong>Secure &amp; Private</strong>
    <span>100% Data Protection</span>
  </div>
</div>

<div class="trust-item">
  <div class="trust-item-icon">
    <i class="fas fa-users"></i>
  </div>
  <div class="trust-item-text">
    <strong>All Services in One Place</strong>
    <span>Complete Business Setup</span>
  </div>
</div>
  </div>

<!-- ============================================================
     EXPLORE SERVICES
     ============================================================ -->
<section class="services-section">

  <div class="services-header"> 
    <h2>Explore Start Business Services</h2>
    <p>Choose a category to view all related services</p>
    <div class="services-divider">
      <div class="services-divider-line"></div>
      <div class="services-divider-dot"></div>
      <div class="services-divider-line"></div>
    </div>
  </div>

 <div class="accordion-wrap">

<!-- =========================
1. BUSINESS REGISTRATION & NTN
========================= -->
<div class="acc-item open" data-acc id="BUSINESS-REGISTRATION-&-NTN">
    <div class="acc-header" role="button" tabindex="0" aria-expanded="true">
        <div class="acc-cat-icon"><i class="fas fa-building"></i></div>
        <div class="acc-header-text">
            <h3>Business Registration &amp; NTN</h3>
            <span>6 Services </span>
        </div>
        <button class="acc-toggle-btn">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>

    <div class="acc-body">
        <div class="acc-body-inner">

            <a class="svc-row" href="Start Business/Business Registration & NTN_SB-REG/simpleservicecard.html" >
                <div class="svc-row-text">
                    <strong>NTN Registration — Individual / Salaried / Pensioner / Freelancer</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-NTN-001</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>NTN Registration — AOP / Partnership</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-NTN-002</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>NTN Registration — Company NTN</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-NTN-003</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>NTN Registration — NGO / NPO NTN</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-NTN-004</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Business NTN Modification — Address / Activity Update</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-NTN-005</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>FBR IRIS Account Recovery / Password Reset / E-Enrollment</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-NTN-006</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

        </div>
    </div>
</div>

<!-- =========================
2. FILER REGISTRATION & ATL STATUS RESTORATION
========================= -->
<div class="acc-item" data-acc>
    <div class="acc-header" role="button" tabindex="0" aria-expanded="false">
        <div class="acc-cat-icon"><i class="fas fa-file-invoice"></i></div>
        <div class="acc-header-text">
            <h3>Filer Registration &amp; ATL Status Restoration</h3>
            <span>7 Services </span>
        </div>
        <button class="acc-toggle-btn">
            <i class="fas fa-chevron-down"></i>
        </button>
    </div>

    <div class="acc-body">
        <div class="acc-body-inner">

            <a class="svc-row" href="Start Business/Business Registration & NTN_SB-REG/NTN_Registration_(Individual,_Business, AOP, Company & NPO)_SB-REG-001.html">
                <div class="svc-row-text">
                    <strong>Filer Registration — Individual / Salaried / Pensioner / Freelancer</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-FLR-001</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Filer Registration — Sole Proprietor / Freelancer Business</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-FLR-002</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Filer Registration — Overseas Pakistani / Foreign Income</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-FLR-003</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>ATL Status Restoration — Individual / Salaried / Freelancer</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-ATL-001</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>ATL Status Restoration — Sole Proprietor / Freelancer Business</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-ATL-002</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>ATL Status Restoration — AOP / Partnership / NGO-NPO (FBR AOP)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-ATL-003</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>ATL Status Restoration — Company / Section 42 NGO-NPO</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-ATL-004</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

        </div>
    </div>
</div>

<!-- =========================
3. COMPANY REGISTRATION & SECP
========================= -->
<div class="acc-item" data-acc>
    <div class="acc-header" role="button" tabindex="0" aria-expanded="false">
        <div class="acc-cat-icon"><i class="fas fa-users"></i></div>
        <div class="acc-header-text">
            <h3>Company Registration &amp; SECP</h3>
            <span>4 Services </span>
        </div>
        <button class="acc-toggle-btn">
            <i class="fas fa-chevron-down"></i>
        </button>
    </div>

    <div class="acc-body">
        <div class="acc-body-inner">

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Private Limited Company Registration</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-SECP-001</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Single Member Company (SMC) Registration</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-SECP-002</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>NPO Registration with SECP u/s 42</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-SECP-003</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>LLP Registration (Limited Liability Partnership)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-SECP-004</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

        </div>
    </div>
</div><!-- =========================
4. DIGITAL BUSINESS SETUP
========================= -->
<div class="acc-item" data-acc>
    <div class="acc-header" role="button" tabindex="0" aria-expanded="false">
        <div class="acc-cat-icon"><i class="fas fa-desktop"></i></div>
        <div class="acc-header-text">
            <h3>Digital Business Setup</h3>
            <span>5 Services </span>
        </div>
        <button class="acc-toggle-btn">
            <i class="fas fa-chevron-down"></i>
        </button>
    </div>

    <div class="acc-body">
        <div class="acc-body-inner">

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Logo Design (Brand Identity Setup)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-DIG-001</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Business Email Setup (Professional Email)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-DIG-002</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Website Setup (Starter Business Website)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-DIG-003</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Social Media Setup (FB, Instagram, LinkedIn)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-DIG-004</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Google Business Profile Setup (GMB Verification)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-DIG-005</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

        </div>
    </div>
</div>

<!-- =========================
5. CORPORATE BRANDING & IDENTITY SETUP
========================= -->
<div class="acc-item" data-acc>
    <div class="acc-header" role="button" tabindex="0" aria-expanded="false">
        <div class="acc-cat-icon"><i class="fas fa-palette"></i></div>
        <div class="acc-header-text">
            <h3>Corporate Branding &amp; Identity Setup</h3>
            <span>6 Services </span>
        </div>
        <button class="acc-toggle-btn">
            <i class="fas fa-chevron-down"></i>
        </button>
    </div>

    <div class="acc-body">
        <div class="acc-body-inner">

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Corporate ID Card Design (Employee / Authority)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-BRN-001</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Business Identity Design (Letterhead, Envelope, Branding Kit)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-BRN-002</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Company Stationery Design (Letterhead, Files, Documents)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-BRN-003</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Corporate Branding Kit (Print + Digital Assets)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-BRN-004</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Complete Branding &amp; Identity System (Recommended for NGO/NPO/Company)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-BRN-005</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>ID Card Record &amp; Tracking System Setup</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-BRN-006</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

        </div>
    </div>
</div>

<!-- =========================
6. LEGAL SETUP & DOCUMENTATION
========================= -->
<div class="acc-item" data-acc>
    <div class="acc-header" role="button" tabindex="0" aria-expanded="false">
        <div class="acc-cat-icon"><i class="fas fa-gavel"></i></div>
        <div class="acc-header-text">
            <h3>Legal Setup &amp; Documentation</h3>
            <span>4 Services </span>
        </div>
        <button class="acc-toggle-btn">
            <i class="fas fa-chevron-down"></i>
        </button>
    </div>

    <div class="acc-body">
        <div class="acc-body-inner">

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Business Name Advisory &amp; Trademark Screening</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-LEG-001</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Bank Account Opening Assistance (Optional Support)</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-LEG-002</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Legal Drafting &amp; Corporate Resolutions</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-LEG-003</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

            <a class="svc-row" href="#">
                <div class="svc-row-text">
                    <strong>Corporate Documentation Setup</strong>
                </div>
                <div class="svc-row-right">
                    <span class="svc-code">SB-LEG-004</span>
                    <div class="svc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
            </a>

        </div>
    </div>
</div>

</div><!-- /.accordion-wrap -->

  
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

<!-- ============================================================
     JAVASCRIPT — Accordion
     ============================================================ -->
<script>
(function () {
  const items = document.querySelectorAll('[data-acc]');

  function openItem(item) {
    const body   = item.querySelector('.acc-body');
    const icon   = item.querySelector('.acc-toggle-btn i');
    const header = item.querySelector('.acc-header');
    item.classList.add('open');
    header.setAttribute('aria-expanded', 'true');
    icon.className = 'fas fa-chevron-up';
    body.style.maxHeight = body.scrollHeight + 'px';
  }

  function closeItem(item) {
    const body   = item.querySelector('.acc-body');
    const icon   = item.querySelector('.acc-toggle-btn i');
    const header = item.querySelector('.acc-header');
    item.classList.remove('open');
    header.setAttribute('aria-expanded', 'false');
    icon.className = 'fas fa-chevron-down';
    body.style.maxHeight = '0';
  }

  // Set initial open state (first item)
  items.forEach(function (item) {
    if (item.classList.contains('open')) {
      const body = item.querySelector('.acc-body');
      body.style.maxHeight = body.scrollHeight + 'px';
    } else {
      const body = item.querySelector('.acc-body');
      body.style.maxHeight = '0';
    }
  });

  items.forEach(function (item) {
    const header = item.querySelector('.acc-header');

    function toggle() {
      const isOpen = item.classList.contains('open');
      // Close all
      items.forEach(closeItem);
      // Open clicked if it was closed
      if (!isOpen) openItem(item);
    }

    header.addEventListener('click', toggle);
    header.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggle(); }
    });
  });
})();
</script>

</body>
</html>