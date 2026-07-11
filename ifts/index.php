<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IFTS - Business Infrastructure Platform</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #F7F8FA;
    }

    svg.lucide {
      width: 1em;
      height: 1em;
      stroke-width: 2;
      vertical-align: middle;
      flex-shrink: 0;
    }

    .banner {
      position: relative;
      min-height: 520px;
      overflow: hidden;
      background: #EAF1FB;
    }

    .banner img {
      width: 100%;
      display: block;
      min-height: 520px;
      object-fit: cover;
      object-position: center right;
    }
    .mobile-hero-image{
    display:none;
}

.mobile-hero-image img{
    width:100%;
    display:block;
}

    .banner-content {
      position: absolute;
      top: 50%;
      left: 5%;
      transform: translateY(-50%);
      width: 50%;
      max-width: 580px;
    }

    .banner-label {
      display: inline-block;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #1a5bb8;
  
      border-radius: 30px;
      padding: 15px 6px;
      margin-bottom: 1px;
    }

    .banner-heading {
      font-family: 'Montserrat', sans-serif;
      font-size: 46px;
      font-weight: 700;
      color: #0B234A;
      line-height: 1.15;
      margin-bottom: 10px;
    }

    .banner-heading .highlight {
      color: #3F67D8;
        font-family: 'Montserrat', sans-serif;
    }

    .banner-desc {
      font-size: 14px;
      font-weight: 400;
      color: #6E7B93;
      line-height: 1.75;
      margin-bottom: 18px;
      max-width: 480px;
      font-family:'Poppins';
    }

    .banner-cta {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
      margin-bottom: 26px;
    }

    .btn-primary-banner {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: linear-gradient(135deg, #0b3a75, #1f5a9e);
      color: #fff;
      font-size: 14px;
      font-weight: 600;
      padding: 13px 26px;
      border-radius: 8px;
      text-decoration: none;
      box-shadow: 0 8px 24px rgba(11, 58, 117, 0.28);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .btn-primary-banner:hover {
      transform: translateY(-3px);
      box-shadow: 0 14px 32px rgba(11, 58, 117, 0.38);
    }

    .btn-outline-banner {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: transparent;
      color: #0b3a75;
      font-size: 14px;
      font-weight: 600;
      padding: 12px 24px;
      border-radius: 8px;
      text-decoration: none;
      border: 2px solid rgba(11, 58, 117, 0.35);
      transition: transform 0.25s ease, border-color 0.25s ease, background 0.25s ease;
    }

    .btn-outline-banner:hover {
      transform: translateY(-3px);
      border-color: #0b3a75;
      background: rgba(11, 58, 117, 0.04);
    }

    .trust-badges-wrapper {
      position: relative;
      z-index: 10;
      margin-top: -28px;
      padding: 0 40px 0;
    }

    .trust-badges-grid {
      max-width: 1180px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .trust-badge-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 22px 20px;
      display: flex;
      align-items: center;
      gap: 16px;
      box-shadow: 0 8px 30px rgba(11, 58, 117, 0.1);
      border: 1px solid #E5EAF2;
      transition: transform 0.28s ease, box-shadow 0.28s ease;
    }

    .trust-badge-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 40px rgba(11, 58, 117, 0.16);
    }

    .trust-badge-icon {
      flex-shrink: 0;
      width: 54px;
      height: 54px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 34px;
    }

    .trust-badge-card.badge-blue .trust-badge-icon {
      background: #e4edf7;
      color: #1a5bb8 ;
    }

    .trust-badge-card.badge-green .trust-badge-icon {
      background: #12a59653;
      color: #12a596;
    }

    .trust-badge-card.badge-purple .trust-badge-icon {
      background: #8d44ad4f;
      color: #8e44ad;
    }

    .trust-badge-card.badge-gold .trust-badge-icon {
      background: #f39d1244;
      color: #f39c12;
    }

    .trust-badge-text h4 {
      font-size: 15px;
      font-weight: 700;
      color: #00357A;
      margin-bottom: 4px;
      line-height: 1.3;
    }

    .trust-badge-text p {
      font-size: 12.5px;
      font-weight: 400;
      color: #6E7B93;
      line-height: 1.5;
    }

    .stages-section {
      padding: 60px 20px 50px;
      background: linear-gradient(150deg, #eaeffa 0%, #e4ecf8 35%, #edf1fb 70%, #f0f4fd 100%);
      text-align: center;
    }

    .stages-label {
      display: block;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #1a5bb8;
      margin-bottom: 10px;
    }

    .stages-heading {
           font-family: 'Montserrat', sans-serif;
     font-size: 38px;
     font-weight: 700;
     color: #0B234A;

      margin-bottom: 12px;
    }

    .stages-subtitle {
      font-size: 14.5px;
      color: #6E7B93;
      max-width: 640px;
      margin: 0 auto 22px;
      line-height: 1.7;
    }

    .stages-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 40px;
    }

    .stages-divider-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #0b3a75;
    }

    .stages-grid {
      max-width: 1180px;
      margin: -10px auto 36px;
      display: flex;
      gap: 22px;
      align-items: stretch;
    }

    .stage-card {
      flex: 1;
      background: #ffffff;
      border-radius: 18px;
      padding: 28px 26px 26px;
      box-shadow: 0 8px 30px rgba(11, 58, 117, 0.08);
      display: grid;
      grid-template-columns: 64px 1fr;
      grid-template-rows: auto auto auto auto auto 1fr auto;
      grid-template-areas:
        "icon title"
        "icon underline"
        "desc desc"
        "divider divider"
        "list list"
        "spacer spacer"
        "button button";
      column-gap: 16px;
      text-align: left;
      transition: transform 0.26s ease, box-shadow 0.26s ease;
    }

    .stage-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 38px rgba(11, 58, 117, 0.14);
    }

    .stage-icon-wrap {
      grid-area: icon;
      align-self: start;
      width: 64px;
      height: 64px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 38px;
    }

    .stage-icon-wrap.blue { background: #F2F5FA; color: #3F67D8; }
    .stage-icon-wrap.green { background: #F2F5FA; color: #12a596; }
    .stage-icon-wrap.orange { background: #F2F5FA; color: #f39c12; }

    .stage-title {
      grid-area: title;
      align-self: end;
      font-family: 'Montserrat', sans-serif;
      font-size: 19px;
      font-weight: 500;
      color: #00357A;
      margin: 0;
    }

    .stage-title-underline {
      grid-area: underline;
      align-self: start;
      width: 30px;
      height: 3px;
      border-radius: 3px;
      margin: 8px 0 20px;
    }

    .stage-title-underline.blue { background: #3F67D8; }
    .stage-title-underline.green { background: #12a596; }
    .stage-title-underline.orange { background: #f39c12; }

    .stage-desc {
      grid-area: desc;
      font-size: 14px;
      color: #6E7B93;
      line-height: 1.65;
      margin: 0 0 20px;
    }

    .stage-divider-dashed {
      grid-area: divider;
      width: 100%;
      border-top: 1px dashed #dde5f2;
      margin-bottom: 18px;
    }

    .stage-list {
      grid-area: list;
      list-style: none;
      padding: 0;
      margin: 0 0 24px;
      width: 100%;
    }

    .stage-list li {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14px;
      font-weight: 500;
      color: #2a3a55;
      margin-bottom: 14px;
      line-height: 1.4;
    }

   .stage-list li svg,
    .stage-list li i {
      font-size: 20px;
      width: 20px;
      height: 20px;
      text-align: center;
      flex-shrink: 0;
    }

    .stage-list li .blue { color: #3F67D8; }
    .stage-list li .green { color: #12a596; }
    .stage-list li .orange { color: #f39c12; }

    .stage-btn {
      grid-area: button;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 14px 20px;
      border-radius: 10px;
      color: #fff;
      font-weight: 700;
      font-size: 15px;
      text-decoration: none;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .stage-btn.blue { background: linear-gradient(135deg, #3F67D8, #5b82e6); }
    .stage-btn.green { background: linear-gradient(135deg, #0f8f7f, #12a596); }
    .stage-btn.orange { background: linear-gradient(135deg, #e08e00, #f39c12); }

    .stage-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 24px rgba(11, 58, 117, 0.22);
    }

    .stage-chevron {
      display: none;
    }

    .stages-mobile-cta {
      display: none;
    }

    .stages-footer {
      max-width: 1180px;
      margin: 0 auto;
      background: #eef1fb;
      border-radius: 16px;
      padding: 22px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      box-shadow: 0 4px 20px rgba(11, 58, 117, 0.06);
      border: 1px solid #E5EAF2;
    }

    .stages-footer-item {
      display: flex;
      align-items: center;
      gap: 12px;
      flex: 1;
      text-align: left;
      position: relative;
    }

    .stages-footer-item:not(:last-child)::after {
      content: '';
      position: absolute;
      right: -10px;
      top: 2px;
      bottom: 2px;
      width: 1px;
      background: #E5EAF2;
    }

    .stages-footer-icon {
      flex-shrink: 0;
      width: 46px;
      height: 46px;
      border-radius: 12px;
      background:  #e4edf7;
      color: #1a5bb8 ;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 25px;
    }

    .stages-footer-text h5 {
      font-size: 13.5px;
      font-weight: 700;
      color: #00357A;
      margin-bottom: 2px;
    }

    .stages-footer-text p {
      font-size: 11.5px;
      color: #6E7B93;
    }

    .stages-footer-short {
      display: none;
    }

    .why-ifts-section {
      padding: 60px 20px 50px;
      background: linear-gradient(150deg, #eaeffa 0%, #e4ecf8 35%, #edf1fb 70%, #f0f4fd 100%);
      position: relative;
      overflow: hidden;
      text-align: center;
    }

    .why-ifts-section::before {
      content: '';
      position: absolute;
      top: 10px;
      left: 10px;
      width: 200px;
      height: 200px;
      background-image: radial-gradient(circle, #9ab0d4 1.6px, transparent 1.6px);
      background-size: 18px 18px;
      opacity: 0.4;
      pointer-events: none;
    }

    .why-ifts-section::after {
      content: '';
      position: absolute;
      top: -80px;
      right: -80px;
      width: 340px;
      height: 340px;
      border-radius: 50%;
      border: 55px solid rgba(255, 255, 255, 0.5);
      pointer-events: none;
    }

    .why-label {
      display: block;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #1a5bb8;
      margin-bottom: 8px;
      position: relative;
      z-index: 1;
    }

    .why-main-heading {
      font-family: 'Montserrat', sans-serif;
      
      line-height: 1.25;
      margin-bottom: 14px;
      position: relative;
      z-index: 1;
      font-size: 38px; font-weight: 700; color: #0B234A;
    }

    .why-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 36px;
      position: relative;
      z-index: 1;
    }

    .why-divider-line {
      width: 52px;
      height: 2px;
      background: #1a4a8a;
      border-radius: 10px;
      opacity: 0.45;
    }

    .why-subheading {
      font-size: 15px;
      font-weight: 400;
      color: #6E7B93;
      max-width: 640px;
      margin: 0 auto 12px;
      line-height: 1.7;
      position: relative;
      z-index: 1;
    }

    .why-grid {
      max-width: 1180px;
      margin: 0 auto 32px;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
      position: relative;
      z-index: 1;
    }

    .why-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 26px 22px;
      display: grid;
      grid-template-columns: 56px 1fr;
      grid-template-areas:
        "icon title"
        "desc desc";
      column-gap: 14px;
      align-items: center;
      text-align: left;
      box-shadow: 0 4px 20px rgba(11, 58, 117, 0.06);
      border: 1px solid #E5EAF2;
      transition: transform 0.28s ease, box-shadow 0.28s ease;
    }

    .why-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 36px rgba(11, 58, 117, 0.13);
    }

    .why-card-icon {
      grid-area: icon;
      flex-shrink: 0;
      width: 56px;
      height: 56px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
    }


    .why-card-icon.blue { background: #F2F5FA; color: #1a5bb8 ;background-color: #e4edf7 ; }
    .why-card-icon.green { background: #F2F5FA; color: #12a596;background-color:#12a59653 ; }
    .why-card-icon.purple { background: #F2F5FA; color: #8e44ad;background-color: #8d44ad4f; }
    .why-card-icon.orange { background: #F2F5FA; color: #f39c12;background-color: #f39d1244; }

    .why-card-title {
      grid-area: title;
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      font-weight: 500;
      color: #00357A;
      line-height: 1.3;
      margin: 0;
    }

    .why-card-desc {
      grid-area: desc;
      font-size: 13.5px;
      font-weight: 400;
      color: #6E7B93;
      line-height: 1.65;
      margin-top: 14px;
    }

    .why-cta-banner {
      max-width: 1180px;
      margin: 0 auto;
      background: #e9eefb;
      border-radius: 18px;
      padding: 30px 34px 26px;
      position: relative;
      z-index: 1;
      text-align: left;
    }

    .why-cta-top {
      display: flex;
      align-items: center;
      gap: 22px;
      flex-wrap: wrap;
      margin-bottom: 22px;
    }

  .why-cta-icon {
      flex-shrink: 0;
      position: relative;
      width: 82px;
      height: 82px;
      border-radius: 50%;
      background: #DCE8FB;
      color: #2F5FD0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 50px;
    }

    .why-cta-icon .sparkle {
      position: absolute;
      color: #2F5FD0;
      display: flex;
    }

    .why-cta-icon .sparkle-1 {
      top: -4px;
      right: 6px;
      font-size: 18px;
    }

    .why-cta-icon .sparkle-2 {
      top: -5px;
      right: -10px;
      font-size: 12px;
    }

    .why-cta-text {
      flex: 1;
      min-width: 240px;
    }

    .why-cta-text h3 {
      font-family: 'Montserrat', sans-serif;
      font-size: 20px;
      font-weight: 600;
      color: #00357A;
      margin-bottom: 6px;
    }

    .why-cta-text p {
      font-size: 14px;
      color: #6E7B93;
      line-height: 1.6;
    }

    .why-cta-buttons {
      flex-shrink: 0;
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    .why-cta-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 14px 24px;
      border-radius: 10px;
      font-weight: 700;
      font-size: 14.5px;
      text-decoration: none;
      white-space: nowrap;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .why-cta-btn.filled {
      background: linear-gradient(135deg, #0b3a75, #1f5a9e);
      color: #fff;
    }

    .why-cta-btn.outline {
      background: #ffffff;
      color: #0b3a75;
      border: 2px solid #0b3a75;
    }

    .why-cta-btn:hover {
      transform: translateY(-3px);
    }

    .why-trust-row {
      border-top: 1px solid rgba(11, 58, 117, 0.12);
      padding-top: 20px;
      display: flex;
      align-items: stretch;
      gap: 20px;
    }

    .why-trust-item {
      flex: 1;
      display: flex;
      align-items: flex-start;
      gap: 12px;
      position: relative;
    }

    .why-trust-item:not(:last-child)::after {
      content: '';
      position: absolute;
      right: -10px;
      top: 0;
      bottom: 0;
      width: 1px;
      background: rgba(11, 58, 117, 0.15);
    }

    .why-trust-icon {
         grid-area: icon;
      flex-shrink: 0;
      width: 56px !important;
      height: 56px !important;
      border-radius: 50% !important;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
      background: #F2F5FA; color: #1a5bb8 ;background-color: #DCE8FB ; 
    }

    .why-trust-text h6 {
      font-size: 13px;
      font-weight: 700;
      color: #00357A;
      margin-bottom: 2px;
    }

    .why-trust-text p {
      font-size: 11.5px;
      color: #6E7B93;
      line-height: 1.4;
    }

    .popular-services-section {
      padding: 60px 20px 50px;
      background: #ffffff;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .popular-services-section::before {
      content: '';
      position: absolute;
      bottom: -60px;
      left: -60px;
      width: 260px;
      height: 260px;
      border-radius: 50%;
      border: 50px solid rgba(11, 58, 117, 0.04);
      pointer-events: none;
    }

    .popular-services-section::after {
      content: '';
      position: absolute;
      top: -40px;
      right: -40px;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(11, 58, 117, 0.04) 0%, transparent 70%);
      pointer-events: none;
    }

    .ps-heading {
      font-family: 'Montserrat', sans-serif;
    font-size: 38px; font-weight: 700; color: #0B234A;
      margin-bottom: 14px;
      line-height: 1.2;
      position: relative;
      z-index: 1;
    }

    .ps-underline {
      width: 50px;
      height: 3px;
      background: #0b3a75;
      border-radius: 3px;
      margin: 0 auto 20px;
      position: relative;
      z-index: 1;
    }

    .ps-subtitle {
      font-size: 14.5px;
      font-weight: 400;
      color: #6E7B93;
      max-width: 620px;
      margin: 0 auto 40px;
      line-height: 1.6;
      position: relative;
      z-index: 1;
    }

    .ps-grid {
      max-width: 1180px;
      margin: 0 auto 30px;
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 18px;
      align-items: stretch;
      position: relative;
      z-index: 1;
    }

    .ps-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 30px 18px 26px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      border: 1px solid #E5EAF2;
      box-shadow: 0 4px 20px rgba(11, 58, 117, 0.06);
      text-decoration: none;
      transition: transform 0.26s ease, box-shadow 0.26s ease, border-color 0.26s ease;
    }

    .ps-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 34px rgba(11, 58, 117, 0.12);
      border-color: rgba(11, 58, 117, 0.16);
    }

    .ps-icon-wrap {
      width: 94px;
      height: 94px;
      border-radius: 50%;
      background: #F2F5FA;
      color: #0b3a75;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size:50px;
      margin-bottom: 16px;
      flex-shrink: 0;
    }

    .ps-card-title {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      font-weight: 600;
      color: #00357A;
      line-height: 1.3;
      margin: 0 0 8px;
    }

    .ps-card-underline {
      width: 26px;
      height: 3px;
      background: #0b3a75;
      border-radius: 3px;
      margin-bottom: 14px;
    }

    .ps-card-desc {
      font-size: 13px;
      color: #6E7B93;
      line-height: 1.55;
      margin: 0 0 20px;
    }

    .ps-card-badge {
      display: inline-block;
      background: #3f67d8;
      color: #ffffff;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.4px;
      padding: 7px 16px;
      border-radius: 20px;
      margin-top: auto;
    }

    .ps-view-all-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: linear-gradient(135deg, #0b3a75, #1f5a9e);
      color: #ffffff;
      font-weight: 700;
      font-size: 13.5px;
      padding: 11px 20px;
      border-radius: 8px;
      margin-top: auto;
      text-decoration: none;
    }

    .ps-view-all-mobile {
      display: none;
    }

    .ps-trust-row {
      max-width: 1180px;
      margin: 0 auto;
      background: #F2F5FA;
      border-radius: 16px;
      padding: 26px 30px;
      display: flex;
      align-items: flex-start;
      gap: 20px;
      position: relative;
      z-index: 1;
    }

    .ps-trust-item {
      flex: 1;
      display: flex;
      align-items: flex-start;
      gap: 12px;
      position: relative;
      text-align: left;
    }

    .ps-trust-item:not(:last-child)::after {
      content: '';
      position: absolute;
      right: -10px;
      top: 0;
      bottom: 0;
      width: 1px;
      background: rgba(11, 58, 117, 0.15);
    }

    .ps-trust-icon {
      flex-shrink: 0;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #F2F5FA;
      color: #0b3a75;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
    }

    .ps-trust-text h6 {
      font-size: 13.5px;
      font-weight: 700;
      color: #00357A;
      margin-bottom: 2px;
    }

    .ps-trust-text p {
      font-size: 11.5px;
      color: #6E7B93;
      line-height: 1.4;
    }

    .how-works-section {
      padding: 60px 20px 50px;
      background: linear-gradient(135deg, #ffffff 0%, #f7faff 100%);
      text-align: center;
    }

    .how-works-heading {
      font-family: 'Montserrat', sans-serif;
      font-size: 38px;
      font-weight: 700;
      color: #0B234A;
      margin-bottom: 12px;
    }

    .how-works-divider {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 34px;
      position: relative;
      z-index: 1;
    }

    .how-works-divider-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #0b3a75;
    }

    .how-works-label {
      display: block;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #1a5bb8;
      margin-bottom: 10px;
    }

    .how-works-subtitle {
      font-size: 14.5px;
      color: #6E7B93;
      max-width: 640px;
      margin: 0 auto 22px;
      line-height: 1.7;
    }

    .how-works-steps {
      max-width: 1180px;
      margin: 0 auto;
      display: flex;
      align-items: stretch;
      justify-content: center;
  gap:29px;  
  }

    .hw-step {
      display: flex;
      flex: 1;
      max-width: 210px;
    }

    .how-works-arrow{
    display:flex;
    align-items:center;
    justify-content:center;
  width:0;
    overflow:visible;
    z-index:20;    margin:0 -12px;
    position:relative;
    flex-shrink:0;
}

.arrow-line{
    position:absolute;
    left:-50px;
    right:-50px;
    top:50%;
    transform:translateY(-50%);
    border-top:2px dashed #D8E4F7;
    z-index:1;
}

.arrow-circle{
      position:relative;
  
    width:44px;
    height:44px;
    border-radius:50%;
    background:#fff;
    border:1px solid #E5EAF2;
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 8px 20px rgba(11,58,117,.12);
    flex-shrink:0;
    z-index:2;
}

.arrow-circle svg{
    width:22px;
    height:22px;
    color:#1D4ED8;
}

    .hw-marker {
      display: none;
    }

    .hw-card {
      flex: 1;
      background: #ffffff;
      border-radius: 16px;
      padding: 30px 16px 24px;
      box-shadow: 0 4px 20px rgba(11, 58, 117, 0.07);
      border: 1px solid #E5EAF2;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: 8px;
      transition: transform 0.26s ease, box-shadow 0.26s ease, border-color 0.26s ease;
      cursor: default;
    }

    .hw-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 42px rgba(11, 58, 117, 0.13);
      border-color: rgba(11, 58, 117, 0.2);
    }

    .hw-icon {
      width: 68px;
      height: 68px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 42px;
      margin-bottom: 4px;
    }

    .hw-icon.blue { background: #F2F5FA; color: #3F67D8; }
    .hw-icon.green { background: #F2F5FA; color: #12a596; }
    .hw-icon.purple { background: #F2F5FA; color: #8e44ad; }

    .hw-number-inline {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-weight: 700;
      font-size: 13px;
      margin-top: -2px;
    }

    .hw-number-inline.blue,
    .hw-number.blue { background: #3F67D8; }

    .hw-number-inline.green,
    .hw-number.green { background: #12a596; }

    .hw-number-inline.purple,
    .hw-number.purple { background: #8e44ad; }

    .hw-title {
      font-family: 'Montserrat', sans-serif;
      font-size: 16px;
      font-weight: 600;
      color: #00357A;
      line-height: 1.3;
    }

    .hw-desc {
      font-size: 12.5px;
      color: #6E7B93;
      line-height: 1.55;
    }

    .hw-underline {
      width: 32px;
      height: 3px;
      border-radius: 3px;
      margin-top: 4px;
    }

    .hw-underline.blue { background: #0b3a75; }
    .hw-underline.green { background: #12a596; }
    .hw-underline.purple { background: #8e44ad; }

   .how-works-arrow{
    position:relative;
    width:0;
    overflow:visible;
    z-index:20;
    flex-shrink:0;
}

    .how-works-cta {
      max-width: 1180px;
      margin: 40px auto 0;
      background: #eef1fb;
      border-radius: 18px;
      padding: 26px 32px;
      display: flex;
      align-items: center;
      gap: 22px;
      text-align: left;
    }

    .how-works-cta-icon {
      flex-shrink: 0;
      width: 62px;
      height: 62px;
      border-radius: 50%;
      background: #dbe6f8;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 38px;
      color: #0b3a75;
    }

    .how-works-cta-text {
      flex: 1;
      min-width: 0;
    }

    .how-works-cta-text h4 {
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
      font-weight: 600;
      color: #00357A;
      margin-bottom: 6px;
    }

    .how-works-cta-text p {
      font-size: 13.5px;
      color: #6E7B93;
      line-height: 1.6;
    }

    .how-works-cta-btn {
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #ffffff;
      color: #0b3a75;
      font-size: 14px;
      font-weight: 700;
      padding: 13px 22px;
      border-radius: 10px;
      border: 2px solid #0b3a75;
      text-decoration: none;
      white-space: nowrap;
      transition: transform 0.25s ease, background 0.25s ease;
    }

    .how-works-cta-btn:hover {
      transform: translateY(-3px);
      background: #f4f8ff;
    }

 .moniter{
      font-size: 20px;
 }

    @media(max-width:1100px) {
      .trust-badges-wrapper {
        padding: 0 20px;
      }

      .hw-card {
        padding: 24px 12px 18px;
      }

      .hw-icon {
        width: 58px;
        height: 58px;
        font-size: 22px;
      }
    }

    @media(max-width:900px) {
      .trust-badges-wrapper {
        margin-top: -10px;
        padding: 0 16px;
      }

      .trust-badges-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
      }

     
/* HOW WORKS – MOBILE (numbered stepper) */
.how-works-steps {
  flex-direction: column;
  align-items: stretch;
  gap: 0;
  width: 100%;
  max-width: 480px;
  margin: 0 auto;
}

.hw-step {
  max-width: 100%;
  align-items: stretch;
  gap: 14px;
}

.hw-marker {
  display: flex;
  flex-direction: column;
  align-items: center;
  flex-shrink: 0;
  width: 30px;
}

.hw-number {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: 700;
  font-size: 13px;
  flex-shrink: 0;
}

.hw-marker::after {
  content: '';
  flex: 1;
  width: 2px;
  background: #d7e2f2;
  margin-top: 4px;
  min-height: 24px;
}

.hw-step:last-child .hw-marker::after {
  display: none;
}

.hw-card {
  flex-direction: row;
  align-items: center;
  gap: 16px;
  padding: 18px 16px;
  margin-bottom: 18px;
  border-radius: 14px;
  text-align: left;
  min-height: 96px;
}

.hw-number-inline,
.hw-underline {
  display: none;
}

.hw-icon {
  flex-shrink: 0;
  width: 64px;
  height: 64px;
  font-size: 36px;
  margin-bottom: 0;
}

.hw-title,
.hw-desc {
  text-align: left;
}

.how-works-arrow {
  display: none;
}

.how-works-cta {
  flex-wrap: wrap;
  padding: 22px 20px;
}

.how-works-cta-icon {
  width: 70px;
  height: 70px;
  font-size: 42px;
}

.how-works-cta-btn {
  width: 100%;
  justify-content: center;
  margin-top: 6px;
}
    }

    @media(max-width:992px) {
      .why-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media(max-width:768px) {
.ps-card.ps-view-all {
  grid-column: 1 / -1;
  max-width: 220px;
  margin: 0 auto;
}
    
      .banner{
    min-height:auto;
    background:none;
}
.mobile-hero-image{
    display:block;
}
.banner > img{
    display:none;
}
.why-ifts-section{
  
 padding: 32px 20px 60px;
}
.popular-services-section{
   padding: 32px 20px 60px;
}

.banner-content{
    position:relative;
    top:auto;
    left:auto;
    transform:none;
    width:100%;
    text-align:start;
    padding:20px 20px 10px;
    background-color:#EAF1FB;
}

    .how-works-section{
    padding: 22px 20px 20px;  }

      .banner-heading {
        font-size: 26px;
        padding-bottom:0px;
      }

      .banner-keywords {
        justify-content: left;
      }

      .banner-desc {
        font-size: 13px;
      }

      .banner-cta {
        justify-content: left;

      }

      .stages-heading {
        font-size: 26px;
      }

      .stages-section {
        padding: 40px 16px 34px;
      }

      .stages-grid {
        flex-direction: column;
        gap: 14px;
        margin-bottom: 18px;
      }

      .stage-card {
        grid-template-columns: 52px 1fr 20px;
        grid-template-rows: auto auto;
        grid-template-areas:
          "icon title chevron"
          "icon desc chevron";
        column-gap: 14px;
        row-gap: 2px;
        padding: 18px 16px;
        align-items: center;
      }

      .stage-icon-wrap {
        width: 52px;
        height: 52px;
        font-size: 15px;
        align-self: center;
      }

      .stage-icon-img {
        width: 42px !important;
        height: 42px !important;
      }

      .stage-title {
        font-size: 17px;
        font-weight: 700;
        align-self: center;
      }

      .stage-desc {
        font-size: 12.5px;
        align-self: center;
        margin: 0;
      }

      .stage-title-underline,
      .stage-divider-dashed,
      .stage-list,
      .stage-btn {
        display: none;
      }

      .stage-chevron {
        grid-area: chevron;
        display: flex;
        align-self: center;
        justify-content: center;
        color: #b9c6dc;
        font-size: 15px;
      }

      .stages-mobile-cta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        max-width: 1180px;
        margin: 0 auto 24px;
        background: linear-gradient(135deg, #0b3a75, #1f5a9e);
        color: #fff;
        font-weight: 700;
        font-size: 15px;
        padding: 16px 20px;
        border-radius: 12px;
        text-decoration: none;
        box-shadow: 0 10px 26px rgba(11, 58, 117, 0.25);
      }

      .stages-footer {
        flex-direction: row;
        flex-wrap: nowrap;
        align-items: flex-start;
        justify-content: space-between;
        gap: 4px;
        padding: 18px 10px;
      }

      .stages-footer-item {
        flex: 1;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 8px;
        position: relative;
      }

      .stages-footer-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: 0;
        top: 4px;
        height: 34px;
        width: 1px;
        background: #e3e9f3;
      }

      .stages-footer-icon {
        width: 48px;
        height: 48px;
        font-size: 28px;
      }

      .stages-footer-text h5,
      .stages-footer-text p {
        display: none;
      }

      .stages-footer-short {
        display: block;
        font-size: 11.5px;
        font-weight: 600;
        color: #00357A;
      }

      .why-label {
        display: none;
      }

      .why-main-heading {
        font-size: 26px;
       
       
      }
     
      .why-subheading{
          margin-bottom: 16px;
      }

      .why-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
      }

      .why-ifts-section::after {
        display: none;
      }

      .why-card {
        grid-template-columns: 1fr;
        grid-template-areas:
          "icon"
          "title"
          "desc";
        justify-items: center;
        text-align: center;
        padding: 22px 14px 20px;
        min-height: 210px;
      }

      .why-card-icon {
        width: 60px;
        height: 60px;
        font-size: 28px;
        margin-bottom: 12px;
      }

      .why-card-title {
        font-size: 14px;
      }

      .why-card-desc {
        font-size: 12.5px;
        margin-top: 8px;
      }

      .why-cta-banner {
        padding: 24px 20px 20px;
      }

      .why-cta-top {
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        gap: 14px;
      }

      .why-cta-icon {
        width: 64px;
        height: 64px;
        font-size: 30px;
      }

      .why-cta-icon .sparkle-1 {
        top: -4px;
        right: 2px;
        font-size: 14px;
      }

      .why-cta-icon .sparkle-2 {
        top: -4px;
        right: -8px;
        font-size: 9px;
      }

      .why-cta-text {
        flex: 1;
        min-width: 0;
      }

      .why-cta-buttons {
        flex: 1 1 100%;
        width: 100%;
        flex-direction: row;
      }

      .why-cta-btn {
        flex: 1;
        padding: 13px 12px;
      }
       .head-icon{
        font-size: 21px !important;
       }

      .why-trust-row {
        gap: 4px;
      }

      .why-trust-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 8px;
      }

      .why-trust-item:not(:last-child)::after {
        right: 0;
        top: 4px;
        height: 34px;
        width: 1px;
        background: #e3e9f3;
      }

      .why-trust-icon {
        width: 40px !important;
        height: 40px !important;
        font-size: 18px !important;
      }

      .why-trust-text p {
        display: none;
      }

      .why-trust-text h6 {
        font-size: 11px;
        line-height: 1.3;
      }

      .ps-heading {
        font-size: 26px;
      }

      .ps-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-bottom: 18px;
      }

      .ps-view-all {
        display: none;
      }

      .ps-card {
        padding: 22px 14px 20px;
      }

      .ps-icon-wrap {
        width: 66px;
        height: 66px;
        font-size: 30px;
        margin-bottom: 12px;
      }

      .ps-card-title {
        font-size: 15px;
      }

      .ps-card-desc {
        font-size: 12px;
        margin-bottom: 16px;
      }

      .ps-card-badge {
        font-size: 10px;
        padding: 6px 12px;
      }

      .ps-view-all-mobile {
        display: flex;
        align-items: center;
        gap: 14px;
        max-width: 1180px;
        margin: 0 auto 24px;
        background: #ffffff;
        border: 1px solid #E5EAF2;
        border-radius: 16px;
        padding: 18px 16px;
        text-decoration: none;
        box-shadow: 0 4px 20px rgba(11, 58, 117, 0.06);
      }

      .ps-view-all-mobile-icon {
        flex-shrink: 0;
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: #F2F5FA;
        color: #0b3a75;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 33px;
      }

      .ps-view-all-mobile-text {
        flex: 1;
        min-width: 0;
        text-align: left;
      }

      .ps-view-all-mobile-text h4 {
        font-size: 15px;
        font-weight: 700;
        color: #00357A;
        margin: 0 0 6px;
      }

      .ps-view-all-mobile-text p {
        font-size: 12px;
        color: #6E7B93;
        line-height: 1.5;
        margin: 0;
      }

      .ps-view-all-mobile-arrow {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: linear-gradient(135deg, #0b3a75, #1f5a9e);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
      }

      .ps-trust-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px 14px;
        padding: 20px 18px;
      }

      .ps-trust-item {
        align-items: flex-start;
      }

      .ps-trust-item::after {
        display: none;
      }

      .ps-trust-item:nth-child(odd)::after {
        display: block;
        right: -8px;
      }

      .ps-trust-item:nth-child(n+3) {
        border-top: 1px solid rgba(11, 58, 117, 0.15);
        padding-top: 16px;
      }

      .ps-trust-icon {
        width: 36px;
        height: 36px;
        font-size: 14px;
      }

      .ps-trust-text h6 {
        font-size: 12.5px;
      }

      .ps-trust-text p {
        font-size: 11px;
      }

      .how-works-heading {
        font-size: 24px;
      }

      .hw-card {
        max-width: 100%;
      }
        .ps-subtitle {
     
      margin-bottom: 22px;
     
    }
    }

    @media(max-width:540px) {

      .trust-badges-grid {
        gap: 10px;
      }

      .trust-badge-card {
        padding: 14px 12px;
        gap: 10px;
        border-radius: 12px;
      }

      .trust-badge-icon {
        width: 48px;
        height: 48px;
        font-size: 32px;
        border-radius: 10px;
      }

      .trust-badge-text h4 {
        font-size: 12px;
        margin-bottom: 2px;
      }

      .trust-badge-text p {
        font-size: 10px;
        line-height: 1.35;
      }

      .ps-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
      }

      .ps-card {
        padding: 22px 10px 18px;
      }

      .ps-icon-wrap {
        width: 58px;
        height: 58px;
        font-size: 37px !important;
      }

      .ps-card-title {
        font-size: 13px;
      }

      .banner-heading {
        font-size: 22px;
      }

      .btn-primary-banner,
      .btn-outline-banner {
        font-size: 13px;
        padding: 11px 18px;
      }
    }

    .stage-icon-img {
      width: 54px;
      height: 54px;
      object-fit: contain;
    }
  </style>
</head>

<body>

  <?php include "navbar.php" ?>

  <div class="banner">

    <img src="images/Business_Infrastructure_Platform.png" alt="IFTS Banner">

    <div class="banner-content">

      <div class="banner-label">Business Infrastructure Platform</div>

      <h1 class="banner-heading">
        Start, Manage &amp; Grow<br>
        Your Business —<br>
        <span class="highlight">All in One Business <br>Infrastructure Platform</span>
      </h1>

      <p class="banner-desc">
        Pakistan's all-in-one digital platform for business registration, compliance, taxation, financial
        infrastructure, and business growth solutions.
      </p>

      <div class="banner-cta">
        <a href="all_services.php" class="btn-primary-banner">
          Ask an Expert &nbsp;→
        </a>
        <a href="all_services.php" class="btn-outline-banner">
          Explore Services &nbsp;→
        </a>
      </div>

    </div>

  </div>
  <div class="mobile-hero-image">
    <img src="images/Business_Infrastructure_Platform_m.png" alt="IFTS Mobile Hero">
</div>

  <div class="trust-badges-wrapper">
    <div class="trust-badges-grid">

      <div class="trust-badge-card badge-blue">
        <div class="trust-badge-icon"><i data-lucide="landmark"></i></div>
        <div class="trust-badge-text">
          <h4>Government Compliant</h4>
          <p>FBR &bull; SECP &bull; PSW</p>
        </div>
      </div>

      <div class="trust-badge-card badge-green">
        <div class="trust-badge-icon"><i data-lucide="users-round"></i></div>
        <div class="trust-badge-text">
          <h4>2,000+ Businesses</h4>
          <p>Trusted Across Pakistan</p>
        </div>
      </div>

      <div class="trust-badge-card badge-purple">
        <div class="trust-badge-icon"><i data-lucide="shield-check"></i></div>
        <div class="trust-badge-text">
          <h4>Secure Client Portal</h4>
          <p>Orders &bull; Documents &bull; Tracking</p>
        </div>
      </div>

      <div class="trust-badge-card badge-gold">
        <div class="trust-badge-icon"><i data-lucide="star"></i></div>
        <div class="trust-badge-text">
          <h4>98% Satisfaction</h4>
          <p>Professional Business Solutions</p>
        </div>
      </div>

    </div>
  </div>

  <div class="how-works-section">

    <span class="how-works-label">Simple, Transparent &amp; Efficient</span>
    <h2 class="how-works-heading">How IFTS Works</h2>
    <p class="how-works-subtitle">Our streamlined process makes it easy to start, manage and grow your business with complete transparency and professional support.</p>

    <div class="how-works-divider">
      <div class="why-divider-line"></div>
      <div class="how-works-divider-dot"></div>
      <div class="why-divider-line"></div>
    </div>

    <div class="how-works-steps">

      <div class="hw-step">
        <div class="hw-marker"><div class="hw-number blue">1</div></div>
        <div class="hw-card">
          <div class="hw-icon blue"><i data-lucide="search"></i></div>
          <div class="hw-number-inline blue">1</div>
          <div class="hw-title">Select Service</div>
          <div class="hw-desc">Choose your required service.</div>
          <div class="hw-underline blue"></div>
        </div>
      </div>

<div class="how-works-arrow">
    <span class="arrow-line"></span>

    <div class="arrow-circle">
        <i data-lucide="arrow-right"></i>
    </div>

    <span class="arrow-line"></span>
</div>
      <div class="hw-step">
        <div class="hw-marker"><div class="hw-number green">2</div></div>
        <div class="hw-card">
          <div class="hw-icon green"><i data-lucide="package"></i></div>
          <div class="hw-number-inline green">2</div>
          <div class="hw-title">Choose Package</div>
          <div class="hw-desc">Select the best package.</div>
          <div class="hw-underline green"></div>
        </div>
      </div>

<div class="how-works-arrow">
    <span class="arrow-line"></span>

    <div class="arrow-circle">
        <i data-lucide="arrow-right"></i>
    </div>

    <span class="arrow-line"></span>
</div>
      <div class="hw-step">
        <div class="hw-marker"><div class="hw-number purple">3</div></div>
        <div class="hw-card">
          <div class="hw-icon purple"><i data-lucide="credit-card"></i></div>
          <div class="hw-number-inline purple">3</div>
          <div class="hw-title">Secure Checkout</div>
          <div class="hw-desc">Complete your payment securely.</div>
          <div class="hw-underline purple"></div>
        </div>
      </div>

<div class="how-works-arrow">
    <span class="arrow-line"></span>

    <div class="arrow-circle">
        <i data-lucide="arrow-right"></i>
    </div>

    <span class="arrow-line"></span>
</div>
      <div class="hw-step">
        <div class="hw-marker"><div class="hw-number blue">4</div></div>
        <div class="hw-card">
          <div class="hw-icon blue"><i data-lucide="monitor"></i></div>
          <div class="hw-number-inline blue">4</div>
          <div class="hw-title">Client Portal</div>
          <div class="hw-desc">Verify, upload and track progress.</div>
          <div class="hw-underline blue"></div>
        </div>
      </div>

<div class="how-works-arrow">
    <span class="arrow-line"></span>

    <div class="arrow-circle">
        <i data-lucide="arrow-right"></i>
    </div>

    <span class="arrow-line"></span>
</div>
      <div class="hw-step">
        <div class="hw-marker"><div class="hw-number green">5</div></div>
        <div class="hw-card">
          <div class="hw-icon green"><i data-lucide="check-circle"></i></div>
          <div class="hw-number-inline green">5</div>
          <div class="hw-title">Service Delivered</div>
          <div class="hw-desc">Receive documents and invoice.</div>
          <div class="hw-underline green"></div>
        </div>
      </div>

    </div>

    <div class="how-works-cta">
      <div class="how-works-cta-icon"><i data-lucide="shield-check"></i></div>
      <div class="how-works-cta-text">
        <h4>Track Your Service Anytime</h4>
        <p>Monitor progress, upload documents and receive updates from your secure Client Portal.</p>
      </div>
      <a href="#" class="how-works-cta-btn"><i data-lucide="monitor" class="moniter"> </i>&nbsp;Open Client Portal&nbsp;→</a>
    </div>

  </div>

  <section class="stages-section">

    <span class="stages-label">Everything You Need, All In One Place</span>
    <h2 class="stages-heading">Start, Manage &amp; Grow Your Business</h2>
    <p class="stages-subtitle">Comprehensive services and tools to help you build a strong foundation, stay compliant and scale your business with confidence.</p>

    <div class="stages-divider">
      <div class="why-divider-line"></div>
      <div class="stages-divider-dot"></div>
      <div class="why-divider-line"></div>
    </div>

    <div class="stages-grid">

      <div class="stage-card">
        <div class="stage-icon-wrap blue"><img src="images/start-business.png" alt="Start Business" class="stage-icon-img"></div>      
     <h3 class="stage-title blue">Start Business</h3>
        <div class="stage-title-underline blue"></div>
        <p class="stage-desc">Everything you need to register and legally launch your business.</p>
        <i data-lucide="chevron-right" class="stage-chevron"></i>
        <div class="stage-divider-dashed"></div>
        <ul class="stage-list">
          <li><i data-lucide="check" class="blue"></i> NTN &amp; Tax Registrations</li>
          <li><i data-lucide="check" class="blue"></i> Company Incorporation</li>
          <li><i data-lucide="check" class="blue"></i> Import / Export Registrations</li>
        </ul>
        <a href="startbusiness.php" class="stage-btn blue">Explore Services <i data-lucide="arrow-right"></i></a>
      </div>

      <div class="stage-card">
<div class="stage-icon-wrap blue"><img src="images/manage-business.png" alt="Start Business" class="stage-icon-img"></div>           <h3 class="stage-title green">Manage Business</h3>
        <div class="stage-title-underline green"></div>
        <p class="stage-desc">Stay compliant and organized with our tax and financial services.</p>
        <i data-lucide="chevron-right" class="stage-chevron"></i>
        <div class="stage-divider-dashed"></div>
      <ul class="stage-list">
          <li><i data-lucide="check" class="green"></i> Tax Filing &amp; Compliance</li>
          <li><i data-lucide="check" class="green"></i> Accounting &amp; Bookkeeping</li>
          <li><i data-lucide="check" class="green"></i> Auditing &amp; Assurance</li>
        </ul>
        <a href="#" class="stage-btn green">Explore Services <i data-lucide="arrow-right"></i></a>
      </div>

      <div class="stage-card">
        <div class="stage-icon-wrap orange"><img src="images/grow-business.png" alt="Grow Business" class="stage-icon-img"></div>
        <h3 class="stage-title orange">Grow Business</h3>
        <div class="stage-title-underline orange"></div>
        <p class="stage-desc">Scale your brand and reach more customers with digital solutions.</p>
        <i data-lucide="chevron-right" class="stage-chevron"></i>
        <div class="stage-divider-dashed"></div>
        <ul class="stage-list">
          <li><i data-lucide="check" class="orange"></i> Digital Marketing</li>
          <li><i data-lucide="check" class="orange"></i> Website &amp; E-commerce</li>
          <li><i data-lucide="check" class="orange"></i> Branding &amp; Design</li>
        </ul>
        <a href="#" class="stage-btn orange">Explore Services <i data-lucide="arrow-right"></i></a>
      </div>

    </div>

    <a href="all_services.php" class="stages-mobile-cta">Explore All Services <i data-lucide="arrow-right"></i></a>

    <div class="stages-footer">
      <div class="stages-footer-item">
        <div class="stages-footer-icon"><i data-lucide="shield-check"></i></div>
        <div class="stages-footer-text">
          <h5>Government Compliant</h5>
          <span class="stages-footer-short">Compliant</span>
          <p>FBR &bull; SECP &bull; PSW</p>
        </div>
      </div>
      <div class="stages-footer-item">
        <div class="stages-footer-icon"><i data-lucide="lock"></i></div>
        <div class="stages-footer-text">
          <h5>Secure &amp; Trusted</h5>
          <span class="stages-footer-short">Secure</span>
          <p>Your data is safe with us</p>
        </div>
      </div>
      <div class="stages-footer-item">
        <div class="stages-footer-icon"><i data-lucide="users"></i></div>
        <div class="stages-footer-text">
          <h5>2,000+ Businesses</h5>
          <span class="stages-footer-short">2,000+</span>
          <p>Trusted across Pakistan</p>
        </div>
      </div>
      <div class="stages-footer-item">
        <div class="stages-footer-icon"><i data-lucide="headphones"></i></div>
        <div class="stages-footer-text">
          <h5>Expert Support</h5>
          <span class="stages-footer-short">Support</span>
          <p>We're here to help</p>
        </div>
      </div>
    </div>

  </section>

  <section class="why-ifts-section">

    <h2 class="why-main-heading">Why Choose IFTS?</h2>
    <p class="why-subheading">Everything you need to Start, Manage &amp; Grow your business from one trusted platform.</p>

    <div class="why-divider">
      <div class="why-divider-line"></div>
      <div class="how-works-divider-dot"></div>
      <div class="why-divider-line"></div>
    </div>

    <div class="why-grid">

      <div class="why-card">
        <div class="why-card-icon blue"><i data-lucide="building-2"></i></div>
        <h4 class="why-card-title">All-in-One Platform</h4>
        <p class="why-card-desc">Everything your business needs in one platform.</p>
      </div>

      <div class="why-card">
        <div class="why-card-icon green"><i data-lucide="shield-check"></i></div>
        <h4 class="why-card-title">Government Compliant</h4>
        <p class="why-card-desc">FBR, SECP, PRA, PSW and regulatory compliance.</p>
      </div>

      <div class="why-card">
        <div class="why-card-icon purple"><i data-lucide="users-round"></i></div>
        <h4 class="why-card-title">Expert Business Advisors</h4>
        <p class="why-card-desc">Professional guidance for every business stage.</p>
      </div>

      <div class="why-card">
        <div class="why-card-icon blue"><i data-lucide="monitor"></i></div>
        <h4 class="why-card-title">Secure Client Portal</h4>
        <p class="why-card-desc">Track orders, documents and progress.</p>
      </div>

      <div class="why-card">
        <div class="why-card-icon orange"><i data-lucide="clock"></i></div>
        <h4 class="why-card-title">Fast Turnaround</h4>
        <p class="why-card-desc">Efficient processes with timely delivery.</p>
      </div>

      <div class="why-card">
        <div class="why-card-icon blue"><img src="images/rsicon.png" alt="" width="140%"></div>
        <h4 class="why-card-title">Transparent Pricing</h4>
        <p class="why-card-desc">Fixed pricing with no hidden charges.</p>
      </div>

      <div class="why-card">
        <div class="why-card-icon green"><i data-lucide="file-text"></i></div>
        <h4 class="why-card-title">Digital Document Delivery</h4>
        <p class="why-card-desc">Receive documents securely online via Portal, Email &amp; WhatsApp.</p>
      </div>

      <div class="why-card">
        <div class="why-card-icon orange"><img src="images/grow-business.png" alt="" width="80%"></div>
        <h4 class="why-card-title">Growth Ready</h4>
        <p class="why-card-desc">Built to support your business growth from startup to expansion.</p>
      </div>

    </div>

    <div class="why-cta-banner">

      <div class="why-cta-top">
<div class="why-cta-icon">
          <i data-lucide="rocket"></i> 
          <i data-lucide="sparkle" class="sparkle sparkle-1"></i>
          <i data-lucide="sparkle" class="sparkle sparkle-2"></i>
        </div>        <div class="why-cta-text">
          <h3>Ready to Build Your Business with IFTS?</h3>
          <p>Start today with Pakistan's Business Infrastructure Platform.</p>
        </div>
        <div class="why-cta-buttons">
          <a href="all_services.php" class="why-cta-btn filled">Explore Services <i data-lucide="arrow-right"></i></a>
          <a href="#" class="why-cta-btn outline"><i data-lucide="headphones" class="head-icon"></i> Ask an Expert</a>
        </div>
      </div>

      <div class="why-trust-row">
        <div class="why-trust-item">
          <div class="why-trust-icon"><i data-lucide="shield-check"></i></div>
          <div class="why-trust-text">
            <h6>100% Secure</h6>
            <p>Your data is always safe</p>
          </div>
        </div>
        <div class="why-trust-item">
          <div class="why-trust-icon"><i data-lucide="lock"></i></div>
          <div class="why-trust-text">
            <h6>Trusted &amp; Compliant</h6>
            <p>FBR, SECP, PRA, PSW</p>
          </div>
        </div>
        <div class="why-trust-item">
          <div class="why-trust-icon"><i data-lucide="users"></i></div>
          <div class="why-trust-text">
            <h6>2,000+ Businesses</h6>
            <p>Trust IFTS across Pakistan</p>
          </div>
        </div>
        <div class="why-trust-item">
          <div class="why-trust-icon"><i data-lucide="headphones"></i></div>
          <div class="why-trust-text">
            <h6>Expert Support</h6>
            <p>We're here to help</p>
          </div>
        </div>
      </div>

    </div>

  </section>

  <section class="popular-services-section">

    <h2 class="ps-heading">Popular Services</h2>
    <div class="ps-underline"></div>
    <p class="ps-subtitle">Our most requested services to help you Start, Manage &amp; Grow your business.</p>

    <div class="ps-grid">

      <a href="Start Business/Business Registration & NTN_SB-REG/simpleservicecard.html" class="ps-card">
        <div class="ps-icon-wrap"> <img src="images/SB-FIL-001.png" alt="" width="60%"></div>
        <h4 class="ps-card-title">Filer Registration</h4>
        <div class="ps-card-underline"></div>
        <p class="ps-card-desc">Individual / Salaried / Pensioner / Freelancer</p>
        <span class="ps-card-badge">SB-FLR-001</span>
      </a>

      <a href="#" class="ps-card">
        <div class="ps-icon-wrap"><i data-lucide="receipt"></i></div>
        <h4 class="ps-card-title">Income Tax Return Filing</h4>
        <div class="ps-card-underline"></div>
        <p class="ps-card-desc">File your annual tax return.</p>
        <span class="ps-card-badge">MB-ITR-002</span>
      </a>

      <a href="#" class="ps-card">
        <div class="ps-icon-wrap"><i data-lucide="building-2"></i></div>
        <h4 class="ps-card-title">Company Registration</h4>
        <div class="ps-card-underline"></div>
        <p class="ps-card-desc">Register your business with SECP.</p>
        <span class="ps-card-badge">SB-COI-003</span>
      </a>

      <a href="#" class="ps-card">
        <div class="ps-icon-wrap"><i data-lucide="megaphone"></i></div>
        <h4 class="ps-card-title">Digital Marketing</h4>
        <div class="ps-card-underline"></div>
        <p class="ps-card-desc">Grow your business online.</p>
        <span class="ps-card-badge">GB-DGM-004</span>
      </a>

      <a href="all_services.php" class="ps-card ps-view-all">
        <div class="ps-icon-wrap"><i data-lucide="layout-grid"></i></div>
        <h4 class="ps-card-title">View All Services</h4>
        <div class="ps-card-underline"></div>
        <p class="ps-card-desc">Explore 150+ services for your business.</p>
        <span class="ps-view-all-btn">View All Services <i data-lucide="arrow-right"></i></span>
      </a>

    </div>

    <a href="all_services.php" class="ps-view-all-mobile">
      <div class="ps-view-all-mobile-icon"><i data-lucide="layout-grid"></i></div>
      <div class="ps-view-all-mobile-text">
        <h4>View All Services</h4>
        <p>Explore 150+ services for your business.</p>
      </div>
      <div class="ps-view-all-mobile-arrow"><i data-lucide="arrow-right"></i></div>
    </a>

   

  </section>

  <?php include "footer.php" ?>

  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
  <script>
    lucide.createIcons();
  </script>

</body>

</html>