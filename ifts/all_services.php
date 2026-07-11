<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Services – IFTS</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --blue: #0b3a75;
      --blue-mid: #1a5bb8;
      --green: #1a7a5e;
      --green-dark: #155f49;
      --orange: #e67e00;
      --orange-light: #f39c12;
      --text-dark: #0d2a52;
      --text-mid: #4a5d78;
      --text-light: #7a8fa8;
      --bg-light: #f5f7fb;
      --border: #e4edf7;
      --white: #ffffff;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--bg-light);
      color: var(--text-dark);
    }



    /* ===== BREADCRUMB ===== */
    .breadcrumb-bar {
      background: var(--border);
      padding: 12px 48px;
    }

    .breadcrumb-bar nav {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: var(--text-light);
    }

    .breadcrumb-bar nav a {
      text-decoration: none;
      color: var(--text-light);
      transition: color .2s;
    }

    .breadcrumb-bar nav a:hover {
      color: var(--blue);
    }

    .breadcrumb-bar nav i {
      font-size: 10px;
      opacity: .6;
    }

    .breadcrumb-bar nav span {
      color: var(--blue);
      font-weight: 600;
    }

    /* ===== HERO ===== */
    .hero {
      background:#e4edf7;

      background-size: cover;
      background-position: bottom;
      padding: 50px 48px 60px;
    }

    .hero-inner {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 40px;
      align-items: start;
    }

    .hero-heading {
      font-family: 'Montserrat', sans-serif;
      font-size: 42px;
      font-weight: 900;
      color: var(--text-dark);
      line-height: 1.15;
      margin-bottom: 14px;
    }

    .hero-heading span {
      color: var(--blue-mid);
    }

    .hero-desc {
      font-size: 14.5px;
      color: var(--text-mid);
      line-height: 1.7;
      margin-bottom: 28px;
      max-width: 440px;
    }

    
    /* Right side category icons in hero */
    .hero-right-cats {
      display: flex;
      gap: 24px;
      align-items: flex-start;
    }

    .hero-cat-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      text-align: center;
    }

    .hero-cat-circle {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: var(--white);
      border: 2px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 16px rgba(11, 58, 117, 0.1);
    }

    .hero-cat-circle i {
      font-size: 30px;
    }

    .hero-cat-item h4 {
      font-size: 13px;
      font-weight: 700;
      color: var(--text-dark);
    }

    .hero-cat-item p {
      font-size: 11px;
      color: var(--text-light);
      line-height: 1.4;
      max-width: 120px;
    }

    .cat-divider {
      width: 1px;
      background: var(--border);
      align-self: stretch;
      margin-top: 10px;
    }

    
    /* ===== SEARCH BAR ===== */
    .search-wrap {
      padding: 0 48px;
      margin-top: 20px;
    }

    .search-box {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 14px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 22px 28px;
      box-shadow: 0 4px 20px rgba(11, 58, 117, 0.07);
    }

    .search-label {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
    }

    .search-label i {
      font-size: 20px;
      color: var(--blue);
    }

    .search-label-text strong {
      display: block;
      font-size: 15px;
      font-weight: 700;
      color: var(--text-dark);
    }

    .search-label-text span {
      font-size: 12px;
      color: var(--text-light);
    }

    .search-row {
      display: flex;
      gap: 12px;
      align-items: center;
    }

    .search-input-wrap {
      position: relative;
      flex: 1;
    }

    .search-input-wrap i {
      position: absolute;
      left: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-light);
      font-size: 14px;
    }

    .search-input {
      width: 100%;
      padding: 13px 16px 13px 40px;
      border: 1.5px solid var(--border);
      border-radius: 9px;
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
      color: var(--text-dark);
      outline: none;
      transition: border-color .2s;
    }

    .search-input:focus {
      border-color: var(--blue-mid);
    }

    .search-btn {
      background: var(--blue);
      color: #fff;
      border: none;
      border-radius: 9px;
      padding: 13px 28px;
      font-size: 14px;
      font-weight: 700;
      font-family: 'Poppins', sans-serif;
      cursor: pointer;
      transition: background .2s;
    }

    .search-btn:hover {
      background: var(--blue-mid);
    }

    .search-popular {
      margin-top: 12px;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .popular-label {
      font-size: 12.5px;
      font-weight: 600;
      color: var(--text-mid);
    }

    .popular-tag {
      background: var(--bg-light);
      border: 1.5px solid var(--border);
      border-radius: 20px;
      padding: 5px 14px;
      font-size: 12px;
      font-weight: 500;
      color: var(--text-dark);
      cursor: pointer;
      text-decoration: none;
      transition: border-color .2s, color .2s;
    }

    .popular-tag:hover {
      border-color: var(--blue-mid);
      color: var(--blue-mid);
    }

    /* ===== CATEGORY CARDS ===== */
    .cats-wrap {
      padding: 28px 48px 60px;
      max-width: 1296px;
      margin: 0 auto;
    }

    .cats-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .cat-card {
      background: var(--white);
      border-radius: 16px;
      border: 1px solid var(--border);
      overflow: hidden;
      box-shadow: 0 4px 18px rgba(11, 58, 117, 0.06);
      display: flex;
      flex-direction: column;
    }

    /* Card Header */
    .cat-card-head {
      padding: 22px 24px 20px;
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .cat-head-icon-wrap {
      width: 58px;
      height: 58px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .cat-head-icon-wrap i {
      font-size: 26px;
      color: #fff;
    }

    .cat-head-text h3 {
      font-size: 18px;
      font-weight: 800;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: .5px;
      line-height: 1.2;
    }

    .cat-head-text p {
      font-size: 12px;
      color: rgba(255, 255, 255, 0.85);
      margin-top: 2px;
    }

    .bg-blue {
      background: linear-gradient(135deg, #0b3a75, #1a5bb8);
    }

    .bg-green {
      background: linear-gradient(135deg, #155f49, #1a7a5e);
    }

    .bg-orange {
      background: linear-gradient(135deg, #c96c00, #e67e00);
    }

    /* Top Modules label */
    .cat-modules-label {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 14px 20px 8px;
    }

    .cat-modules-label strong {
      font-size: 13px;
      font-weight: 700;
      color: var(--text-dark);
    }

    .modules-count {
      font-size: 12px;
      font-weight: 600;
      padding: 3px 10px;
      border-radius: 20px;
    }

    .count-blue {
      background: #e8f0fb;
      color: var(--blue);
    }

    .count-green {
      background: #e5f6f0;
      color: var(--green);
    }

    .count-orange {
      background: #fef3e2;
      color: var(--orange);
    }

    /* Module list — 2 col on desktop */
    .cat-modules-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      padding: 0 8px 8px;
    }

    .cat-mod-row {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 12px;
      text-decoration: none;
      border-radius: 8px;
      transition: background .2s;
    }

    .cat-mod-row:hover {
      background: #f0f5ff;
    }

    .cat-mod-icon {
      width: 28px;
      height: 28px;
      border-radius: 7px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      flex-shrink: 0;
    }

    .mod-icon-blue {
      background: #e8f0fb;
      color: var(--blue);
    }

    .mod-icon-green {
      background: #e5f6f0;
      color: var(--green);
    }

    .mod-icon-orange {
      background: #fef3e2;
      color: var(--orange);
    }

    .cat-mod-row span {
      font-size: 12.5px;
      font-weight: 500;
      color: var(--text-dark);
      line-height: 1.3;
    }

    .cat-mod-chevron {
      margin-left: auto;
      font-size: 10px;
      color: var(--text-light);
      flex-shrink: 0;
    }

    /* Explore button */
    .cat-card-foot {
      padding: 12px 20px 20px;
    }

    .cat-explore-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      width: 100%;
      padding: 13px;
      border-radius: 9px;
      font-size: 14px;
      font-weight: 700;
      text-decoration: none;
      transition: opacity .2s, transform .2s;
    }

    .cat-explore-btn:hover {
      opacity: .88;
      transform: translateY(-1px);
    }

    .btn-blue-fill {
      background: var(--blue);
      color: #fff;
    }

    .btn-green-fill {
      background: var(--green);
      color: #fff;
    }

    .btn-orange-fill {
      background: var(--orange);
      color: #fff;
    }

    
    /* ================= STATS BAR ================= */

.stats-bar-wrapper {
    position: relative;
    z-index: 10;
    padding: 0 40px;
     margin-top: -50px;
}

.stats-bar {
    max-width: 1180px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.96);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    border-radius: 20px;
    box-shadow:
        0 8px 40px rgba(11, 58, 117, 0.13),
        0 2px 8px rgba(11, 58, 117, 0.07),
        inset 0 1px 0 rgba(255, 255, 255, 0.9);
    border: 1px solid rgba(11, 58, 117, 0.08);
    display: flex;
    align-items: stretch;
    overflow: hidden;
}

.stat-item {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 22px 20px;
    position: relative;
    transition: background 0.28s ease;
}

.stat-item:hover {
    background: linear-gradient(
        135deg,
        rgba(11, 58, 117, 0.04) 0%,
        rgba(31, 90, 158, 0.06) 100%
    );
}

.stat-item:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 18%;
    height: 64%;
    width: 1px;
    background: linear-gradient(
        to bottom,
        transparent,
        rgba(11, 58, 117, 0.14),
        transparent
    );
}

.stat-icon-wrap {
    flex-shrink: 0;
    width: 54px;
    height: 54px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: #fff;
    transition: 0.3s;
}

/* Individual Colors */

.stat-item:nth-child(1) .stat-icon-wrap {
    background: linear-gradient(135deg, #0b3a75, #1f5a9e);
}

.stat-item:nth-child(2) .stat-icon-wrap {
    background: linear-gradient(135deg, #1f9d8f, #27c3b2);
}

.stat-item:nth-child(3) .stat-icon-wrap {
    background: linear-gradient(135deg, #f39c12, #f5b942);
}

.stat-item:nth-child(4) .stat-icon-wrap {
    background: linear-gradient(135deg, #8e44ad, #a960c9);
}

.stat-item:nth-child(5) .stat-icon-wrap {
    background: linear-gradient(135deg, #c0392b, #e74c3c);
}

.stat-text {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.stat-number {
   font-family: 'Oswald', sans-serif;
      font-size: 22px;
      font-weight: 700;
      color: #0d2a52;
      line-height: 1;
      letter-spacing: -0.3px;
      transition: color 0.28s ease;
}

.stat-label {
    font-size: 11.5px;
    font-weight: 500;
    color: #7a8fa8;
    line-height: 1.3;
    text-transform: uppercase;
}
/* ==========================
   CTA BANNER
========================== */

.cta-banner {
    background: #ffffff;
    border: 1px solid #E2E8F0;
    border-radius: 20px;
    padding: 30px 36px;
    display: flex;
    align-items: center;
    gap: 24px;
    box-shadow: 0 4px 12px rgba(15, 23, 42, .05);
    position: relative;
    overflow: hidden;
    max-width: 1180px;
    width: 100%;
    margin: 0 auto 28px;
    margin-top: -32px;
}

/* Background waves */
.cta-banner::before {
    content: '';
    position: absolute;
    right: 160px;
    top: 0;
    bottom: 0;
    width: 300px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 80'%3E%3Cpath d='M0 40 Q75 10 150 40 Q225 70 300 40' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3Cpath d='M0 50 Q75 20 150 50 Q225 80 300 50' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3Cpath d='M0 30 Q75 0 150 30 Q225 60 300 30' stroke='%23E2E8F0' stroke-width='1' fill='none'/%3E%3C/svg%3E") center/cover;
    opacity: .5;
    pointer-events: none;
}

/* Left Icon Circle */
.cta-icon-wrap {
    width: 64px;
    height: 64px;
    min-width: 64px;
    border-radius: 50%;
    background: #EAF3FF;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
}

.cta-icon-wrap svg {
    width: 28px;
    height: 28px;
    color: #2563EB;
}

/* Content */
.cta-text {
    flex: 1;
    position: relative;
    z-index: 2;
}

.cta-text h3 {
    margin: 0 0 4px;
    font-size: 19px;
    font-weight: 800;
    color: #0F172A;
    line-height: 1.3;
}

.cta-text p {
    margin: 0;
    font-size: 13.5px;
    color: #64748B;
    line-height: 1.6;
}

/* Buttons */
.cta-buttons {
    display: flex;
    gap: 12px;
    position: relative;
    z-index: 2;
}

.btn {
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 11px 20px;
    border-radius: 9px;
    font-size: 13.5px;
    font-weight: 700;
    transition: .25s ease;
    white-space: nowrap;
}

/* Contact Button */
.btn-primary {
    background: #2563EB;
    color: #ffffff;
}

.btn-primary:hover {
    background: #1D4ED8;
}

/* WhatsApp Button */
.btn-whatsapp {
    background: #ffffff;
    color: #15803D;
    border: 2px solid #22C55E;
}

.btn-whatsapp:hover {
    background: #F0FDF4;
}

/* ==========================
   MOBILE
========================== */
@media (max-width: 768px) {
    .cta-banner {
        flex-direction: column;
        text-align: center;
        padding: 4px 18px;
        gap: 16px;
        max-width: 1100px;
    }


    .cta-banner::before {
        display: none;
    }

    .cta-buttons {
        width: 100%;
        flex-direction: column;
    }

    .btn {
        width: 100%;
    }

    .cta-text h3 {
        font-size: 18px;
    }
}

    /* ============================================================
       MOBILE STYLES  — max-width 900px
    ============================================================ */
    @media (max-width: 900px) {

    

      /* ---- BREADCRUMB ---- */
      .breadcrumb-bar {
        padding: 10px 16px;
      }

      /* ---- HERO ---- */
      .hero {
        padding: 12px 16px 28px;
        background-image: none;
        background: #dce8fb;
      }

      .hero-inner {
        grid-template-columns: 1fr;
        gap: 16px;
      }

      .hero-right-cats {
        display: none;
      }

      .hero-heading {
        font-size: 24px;
        line-height: 1.2;
        margin-bottom: 10px;
      }

      .hero-desc {
        font-size: 13px;
        margin-bottom: 14px;
        max-width: 100%;
      }

     

      /* Mobile hero category icons row */
      .hero-mobile-cats {
        display: flex;
        gap: 0;
       
    
        border-radius: 14px;
        padding: 0px 10px;
    
      }

      .hero-mobile-cat {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        text-align: center;
        padding: 0 6px;
      }

        .stats-bar-wrapper {
        padding: 0 16px;
        margin-top: -7px;
    }

    .stats-bar {
        flex-wrap: wrap;
        border-radius: 16px;
    }

    .stat-item {
        flex: 0 0 50%;
        padding: 18px 20px;
        border-bottom: 1px solid rgba(11, 58, 117, 0.07);
    }

    .stat-item:nth-child(even)::after {
        display: none;
    }

    .stat-item:nth-last-child(-n+2) {
        border-bottom: none;
    }

    .stat-item:last-child:nth-child(odd) {
        flex: 0 0 100%;
        justify-content: center;
    }

      .hero-mobile-cat-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #f0f5ff;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1.5px solid var(--border);
      }

      .hero-mobile-cat-icon i {
        font-size: 20px;
      }

      .hero-mobile-cat h4 {
        font-size: 11px;
        font-weight: 700;
        color: var(--text-dark);
        line-height: 1.2;
      }

      .hero-mobile-cat p {
        font-size: 9.5px;
        color: var(--text-light);
        line-height: 1.3;
      }

      .mobile-cat-sep {
        display: none;
      }

      /* Mobile image from hero */
      .hero-mobile-image {
        display: block;
        margin: 16px -16px -36px;
        overflow: hidden;
      }

      .hero-mobile-image img {
        width: 100%;
        display: block;
      }

 
      /* ---- SEARCH ---- */
      .search-wrap {
        padding: 0 14px;
        margin-top: 12px;
        margin-bottom: 0px !important;
      }

      .search-box {
        padding: 16px 14px;
        border-radius: 12px;
      }

      .search-label {
        margin-bottom: 10px;
      }

      .search-btn {
        padding: 13px 16px;
        font-size: 13px;
      }

      /* ---- CATEGORY CARDS  ---- */
      .cats-wrap {
        padding: 16px 12px 40px;
      }

      .cats-grid {
        grid-template-columns: 1fr;
        gap: 14px;
      }

      /*
       * MOBILE CARD — two-column split layout
       * Left  = colored panel  (cat-card-head)
       * Right = white modules area (modules-label + modules-grid + card-foot)
       *
       * We turn .cat-card into a CSS grid with two columns.
       * .cat-card-head spans all rows in col 1.
       * The three module-area children sit in col 2, rows 1-3.
       */
      .cat-card {
        display: grid;
        grid-template-columns: 130px 1fr;
        grid-template-rows: auto 1fr auto;
        min-height: 220px;
        border-radius: 14px;
        overflow: hidden;
      }

      /* Left colored panel — spans all 3 rows in column 1 */
      .cat-card-head {
        grid-column: 1;
        grid-row: 1 / 4;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px 12px;
        gap: 12px;
        min-height: 100%;
      }

      .cat-head-icon-wrap {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        margin-bottom: 4px;
      }

      .cat-head-icon-wrap i {
        font-size: 24px;
      }

      .cat-head-text h3 {
        font-size: 13px;
        font-weight: 800;
        line-height: 1.25;
        text-transform: uppercase;
      }

      .cat-head-text p {
        font-size: 10.5px;
        margin-top: 4px;
        line-height: 1.4;
        color: rgba(255, 255, 255, 0.85);
      }

      /* Top Modules label — col 2, row 1 */
      .cat-modules-label {
        grid-column: 2;
        grid-row: 1;
        padding: 12px 12px 6px;
        border-bottom: 1px solid var(--border);
      }

      .cat-modules-label strong {
        font-size: 12px;
      }

      .modules-count {
        font-size: 11px;
        padding: 2px 8px;
      }

      /* Module rows grid — col 2, row 2 */
      .cat-modules-grid {
        grid-column: 2;
        grid-row: 2;
        grid-template-columns: 1fr;
        /* single column on mobile */
        padding: 4px 6px 4px;
        gap: 0;
        overflow: hidden;
      }

      .cat-mod-row {
        padding: 7px 8px;
        gap: 8px;
      }

      .cat-mod-icon {
        width: 24px;
        height: 24px;
        border-radius: 6px;
        font-size: 10px;
        flex-shrink: 0;
      }

      .cat-mod-row span {
        font-size: 11.5px;
      }

      .cat-mod-chevron {
        font-size: 9px;
      }

      /* Explore button footer — col 2, row 3 */
      .cat-card-foot {
        grid-column: 2;
        grid-row: 3;
        padding: 8px 12px 12px;
      }

      .cat-explore-btn {
        padding: 10px 12px;
        font-size: 12.5px;
        border-radius: 8px;
      }

      /* ---- CTA BANNER ---- */
      .cta-wrap {
        padding: 0 12px 40px;
      }

      .cta-banner {
        flex-direction: column;
        align-items: flex-start;
        padding: 18px 16px;
        gap: 14px;
        border-radius: 14px;
      }

      .cta-btns {
        width: 100%;
        flex-direction: column;
        gap: 10px;
      }

      .cta-btn {
        width: 100%;
        justify-content: center;
      }
    }

    /* Desktop: hide mobile-only elements */
    @media (min-width: 901px) {
      .hero-mobile-cats {
        display: none;
      }

      .hero-mobile-image {
        display: none;
      }

  
    }

    /* Extra-small phones */
    @media (max-width: 400px) {
      .hero-heading {
        font-size: 20px;
      }

      .cat-card {
        grid-template-columns: 110px 1fr;
        min-height: 200px;
      }

      .cat-head-icon-wrap {
        width: 44px;
        height: 44px;
      }

      .cat-head-icon-wrap i {
        font-size: 20px;
      }

      .cat-head-text h3 {
        font-size: 11.5px;
      }

      .cat-head-text p {
        font-size: 9.5px;
      }

      .cat-mod-row span {
        font-size: 10.5px;
      }
    }
    @media (max-width: 540px) {

    .stats-bar {
        flex-wrap: nowrap;
        border-radius: 14px;
    }

    .stat-item {
        flex: 1;
        min-width: 24%;
        padding: 10px 6px;
        gap: 6px;
        flex-direction: column;
        text-align: center;
        align-items: center;
        justify-content: center;
        border-bottom: none;
    }

    .stat-icon-wrap {
        width: 34px;
        height: 34px;
        font-size: 13px;
        border-radius: 10px;
    }

    .stat-number {
        font-size: 12px;
        line-height: 1.1;
    }

    .stat-label {
        font-size: 7px;
        line-height: 1.2;
        letter-spacing: 0;
    }

    .stat-item::after {
        display: none !important;
    }
}
  </style>
</head>

<body>

<?php include "navbar.php" ?>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <nav>
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>All Services</span>
    </nav>
  </div>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-inner">

      <!-- LEFT -->
      <div class="hero-left">
        <h1 class="hero-heading">
          All Business Services<br>
          <span>in One Platform</span>
        </h1>
        <p class="hero-desc">
          Explore 150+ professional services across business registration, taxation, compliance, legal, digital infrastructure and business growth.
        </p>

    

        <!-- Mobile category icons (shown only on mobile) -->
        <div class="hero-mobile-cats">
          <div class="hero-mobile-cat">
            <div class="hero-mobile-cat-icon"><i class="fas fa-store" style="color:var(--blue)"></i></div>
            <h4>Start Business</h4>
            <p>Launch your business legally and professionally</p>
          </div>
          <div class="mobile-cat-sep"></div>
          <div class="hero-mobile-cat">
            <div class="hero-mobile-cat-icon"><i class="fas fa-cog" style="color:var(--green)"></i></div>
            <h4>Manage Business</h4>
            <p>Stay compliant and manage efficiently</p>
          </div>
          <div class="mobile-cat-sep"></div>
          <div class="hero-mobile-cat">
            <div class="hero-mobile-cat-icon"><i class="fas fa-chart-line" style="color:var(--orange)"></i></div>
            <h4>Grow Business</h4>
            <p>Scale, automate and expand your business</p>
          </div>
        </div>
      </div>

      <!-- RIGHT — category icons (desktop only) -->
      <div class="hero-right-cats">
        <div class="hero-cat-item">
          <div class="hero-cat-circle"><i class="fas fa-store" style="color:var(--blue)"></i></div>
          <h4>Start Business</h4>
          <p>Launch your business legally and professionally</p>
        </div>
        <div class="cat-divider"></div>
        <div class="hero-cat-item">
          <div class="hero-cat-circle"><i class="fas fa-cog" style="color:var(--green)"></i></div>
          <h4>Manage Business</h4>
          <p>Stay compliant and manage efficiently</p>
        </div>
        <div class="cat-divider"></div>
        <div class="hero-cat-item">
          <div class="hero-cat-circle"><i class="fas fa-chart-line" style="color:var(--orange)"></i></div>
          <h4>Grow Business</h4>
          <p>Scale, automate and expand your business</p>
        </div>
      </div>

    </div>
  </section>

<!-- ================= STATS BAR ================= -->

<div class="stats-bar-wrapper">
    <div class="stats-bar">

        <div class="stat-item">
            <div class="stat-icon-wrap">
                <i class="fas fa-briefcase"></i>
            </div>
            <div class="stat-text">
                <div class="stat-number">500+</div>
                <div class="stat-label">Professional Services</div>
            </div>
        </div>

        <div class="stat-item">
            <div class="stat-icon-wrap">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-text">
                <div class="stat-number">2,000+</div>
                <div class="stat-label">Businesses Served</div>
            </div>
        </div>

        <div class="stat-item">
            <div class="stat-icon-wrap">
                <i class="fas fa-award"></i>
            </div>
            <div class="stat-text">
                <div class="stat-number">98%</div>
                <div class="stat-label">Success Rate</div>
            </div>
        </div>

        <div class="stat-item">
            <div class="stat-icon-wrap">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="stat-text">
                <div class="stat-number">15,000+</div>
                <div class="stat-label">Service Requests Processed</div>
            </div>
        </div>

        <div class="stat-item">
            <div class="stat-icon-wrap">
                <i class="fas fa-university"></i>
            </div>
            <div class="stat-text">
                <div class="stat-number">FBR &amp; SECP</div>
                <div class="stat-label">Compliant Experts</div>
            </div>
        </div>

    </div>
</div>

  <!-- SEARCH BAR -->
  <div class="search-wrap" style="margin-bottom:20px;">
    <div class="search-box">
      <div class="search-label">
        <i class="fas fa-search"></i>
        <div class="search-label-text">
          <strong>Find Any Service Instantly</strong>
          <span>Search by service name, code or keyword</span>
        </div>
      </div>
      <div class="search-row">
        <div class="search-input-wrap">
          <i class="fas fa-search"></i>
          <input type="text" class="search-input" placeholder="Search by Service Name, Code or Keyword">
        </div>
        <button class="search-btn">Search</button>
      </div>
      <div class="search-popular">
        <span class="popular-label">Popular:</span>
        <a href="#" class="popular-tag">NTN Registration</a>
        <a href="#" class="popular-tag">Company Registration</a>
        <a href="#" class="popular-tag">Income Tax Return</a>
        <a href="#" class="popular-tag">Trademark Registration</a>
        <a href="#" class="popular-tag">Website Setup</a>
        <a href="#" class="popular-tag">Payroll Management</a>
      </div>
    </div>
  </div>

  <!-- CATEGORY CARDS -->
  <div class="cats-wrap">
    <div class="cats-grid">

      <!-- START BUSINESS -->
      <div class="cat-card">
        <div class="cat-card-head bg-blue">
          <div class="cat-head-icon-wrap"><i class="fas fa-store"></i></div>
          <div class="cat-head-text">
            <h3>Start Business</h3>
            <p>Launch your business the right way</p>
          </div>
        </div>
        <div class="cat-modules-label">
          <strong>Top Modules</strong>
          <span class="modules-count count-blue">5 Modules</span>
        </div>
        <div class="cat-modules-grid">
          <a class="cat-mod-row" href="startbusiness.php">
            <div class="cat-mod-icon mod-icon-blue"><i class="fas fa-id-card"></i></div>
            <span>Business Registration &amp; NTN</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="startbusiness.php">
            <div class="cat-mod-icon mod-icon-blue"><i class="fas fa-building"></i></div>
            <span>Digital Business Setup</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="startbusiness.php">
            <div class="cat-mod-icon mod-icon-blue"><i class="fas fa-file-alt"></i></div>
            <span>Filer Registration &amp; ATL</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="startbusiness.php">
            <div class="cat-mod-icon mod-icon-blue"><i class="fas fa-folder-open"></i></div>
            <span>Legal Setup &amp; Documentation</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="startbusiness.php">
            <div class="cat-mod-icon mod-icon-blue"><i class="fas fa-handshake"></i></div>
            <span>Company Registration &amp; SECP</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
        </div>
        <div class="cat-card-foot">
          <a href="startbusiness.php" class="cat-explore-btn btn-blue-fill">
            Explore Start Business &nbsp;→
          </a>
        </div>
      </div>

      <!-- MANAGE BUSINESS -->
      <div class="cat-card">
        <div class="cat-card-head bg-green">
          <div class="cat-head-icon-wrap"><i class="fas fa-cog"></i></div>
          <div class="cat-head-text">
            <h3>Manage Business</h3>
            <p>Stay compliant &amp; manage efficiently</p>
          </div>
        </div>
        <div class="cat-modules-label">
          <strong>Top Modules</strong>
          <span class="modules-count count-green">8 Modules</span>
        </div>
        <div class="cat-modules-grid">
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-file-signature"></i></div>
            <span>Income Tax Returns</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-university"></i></div>
            <span>Corporate Compliance</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-file-invoice"></i></div>
            <span>Sales Tax Services</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-users"></i></div>
            <span>Payroll &amp; HR Management</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-calculator"></i></div>
            <span>Accounting &amp; Bookkeeping</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-globe"></i></div>
            <span>Import &amp; Export Services</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-shield-alt"></i></div>
            <span>FBR Compliance</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="managebusiness.php">
            <div class="cat-mod-icon mod-icon-green"><i class="fas fa-chart-bar"></i></div>
            <span>CFO &amp; Advisory Services</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
        </div>
        <div class="cat-card-foot">
          <a href="managebusiness.php" class="cat-explore-btn btn-green-fill">
            Explore Manage Business &nbsp;→
          </a>
        </div>
      </div>

      <!-- GROW BUSINESS -->
      <div class="cat-card">
        <div class="cat-card-head bg-orange">
          <div class="cat-head-icon-wrap"><i class="fas fa-chart-line"></i></div>
          <div class="cat-head-text">
            <h3>Grow Business</h3>
            <p>Scale, automate &amp; expand faster</p>
          </div>
        </div>
        <div class="cat-modules-label">
          <strong>Top Modules</strong>
          <span class="modules-count count-orange">8 Modules</span>
        </div>
        <div class="cat-modules-grid">
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-bullhorn"></i></div>
            <span>Digital Marketing</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-paint-brush"></i></div>
            <span>Branding &amp; Positioning</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-desktop"></i></div>
            <span>Website &amp; E-commerce</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-cash-register"></i></div>
            <span>Sales Systems</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-cogs"></i></div>
            <span>Automation Systems</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-chart-pie"></i></div>
            <span>Investment Planning</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-rocket"></i></div>
            <span>Growth Strategy</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
          <a class="cat-mod-row" href="growbusiness.php">
            <div class="cat-mod-icon mod-icon-orange"><i class="fas fa-expand-arrows-alt"></i></div>
            <span>Business Expansion</span>
            <i class="fas fa-chevron-right cat-mod-chevron"></i>
          </a>
        </div>
        <div class="cat-card-foot">
          <a href="growbusiness.php" class="cat-explore-btn btn-orange-fill">
            Explore Grow Business &nbsp;→
          </a>
        </div>
      </div>

    </div>
  </div>

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
  </div>

  
<?php include "footer.php" ?>
</body>

</html>