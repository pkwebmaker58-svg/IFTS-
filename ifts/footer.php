<?php
/**
 * Footer.php
 * Scent N Peace — Global Footer
 *
 * All CSS classes are prefixed with "foot-" so this component can be
 * included on any page (index.php, aboutus.php, contactus.php, etc.)
 * without its styles leaking into or being overridden by that page's CSS.
 *
 * REQUIRED IN <head> (once per page — skip if Navbar.php is already
 * included on the same page, since it loads the same font families):
 *
 *   <link rel="preconnect" href="https://fonts.googleapis.com">
 *   <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Great+Vibes&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
 *
 * USAGE:
 *   <?php include 'Footer.php'; ?>
 */
?>
<style>
  /* ===== Footer Design Tokens (scoped) ===== */
  .foot-wrap {
    --foot-primary: #B88746;
    --foot-primary-dark: #9E7137;
    --foot-primary-light: #D8B57A;
    --foot-bg: #181614;
    --foot-text: #F3F0EA;
    --foot-muted: #B9B2A9;
    --foot-border: rgba(243,240,234,.12);
    --foot-container: 1320px;
    --foot-radius: 10px;
    font-family: 'Manrope', sans-serif;
    background: var(--foot-bg);
    color: var(--foot-text);
  }

  .foot-top {
    max-width: var(--foot-container);
    margin: 0 auto;
    padding: 72px 40px 44px;
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr 1.3fr;
    gap: 40px;
  }

  .foot-brand-heading {
    font-family: 'Great Vibes', cursive;
    font-size: 32px;
    color: var(--foot-text);
    margin: 0 0 6px;
  }

  .foot-brand-heading span {
    color: var(--foot-primary-light);
  }

  .foot-brand-tag {
    font-size: 10.5px;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--foot-primary-light);
    margin: 0 0 18px;
  }

  .foot-tagline {
    font-size: 15px;
    line-height: 1.75;
    color: var(--foot-muted);
    margin: 0 0 24px;
    max-width: 320px;
  }

  .foot-social {
    display: flex;
    gap: 12px;
  }

  .foot-social a {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    border: 1px solid var(--foot-border);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--foot-text);
    text-decoration: none;
    transition: background .25s ease, border-color .25s ease, transform .25s ease;
  }

  .foot-social a:hover {
    background: var(--foot-primary);
    border-color: var(--foot-primary);
    transform: translateY(-2px);
  }

  .foot-heading {
    font-family: 'Cormorant Garamond', serif;
    font-size: 21px;
    font-weight: 600;
    color: var(--foot-text);
    margin: 0 0 20px;
  }

  .foot-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 13px;
  }

  .foot-links a {
    font-size: 15px;
    color: var(--foot-muted);
    text-decoration: none;
    transition: color .2s ease, padding-left .2s ease;
  }

  .foot-links a:hover {
    color: var(--foot-primary-light);
    padding-left: 3px;
  }

  .foot-contact-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 14.5px;
    color: var(--foot-muted);
    margin-bottom: 14px;
    line-height: 1.5;
  }

  .foot-contact-item a {
    color: inherit;
    text-decoration: none;
    transition: color .2s ease;
  }

  .foot-contact-item a:hover {
    color: var(--foot-primary-light);
  }

  .foot-contact-item svg {
    flex-shrink: 0;
    margin-top: 3px;
    color: var(--foot-primary-light);
  }

  .foot-newsletter-text {
    font-size: 14px;
    color: var(--foot-muted);
    margin: 0 0 16px;
    line-height: 1.65;
  }

  .foot-newsletter-form {
    display: flex;
    border: 1px solid var(--foot-border);
    border-radius: var(--foot-radius);
    overflow: hidden;
    margin-bottom: 22px;
  }

  .foot-newsletter-form input {
    flex: 1;
    min-width: 0;
    background: transparent;
    border: none;
    outline: none;
    padding: 13px 14px;
    color: var(--foot-text);
    font-size: 14px;
    font-family: 'Manrope', sans-serif;
  }

  .foot-newsletter-form input::placeholder {
    color: var(--foot-muted);
  }

  .foot-newsletter-form button {
    background: var(--foot-primary);
    color: #FFFFFF;
    border: none;
    padding: 0 20px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: background .25s ease;
    flex-shrink: 0;
  }

  .foot-newsletter-form button:hover {
    background: var(--foot-primary-dark);
  }

  .foot-newsletter-note {
    font-size: 12px;
    color: var(--foot-muted);
    opacity: .8;
    margin: -14px 0 22px;
  }

  .foot-bottom {
    border-top: 1px solid var(--foot-border);
  }

  .foot-bottom-inner {
    max-width: var(--foot-container);
    margin: 0 auto;
    padding: 22px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
  }

  .foot-copyright {
    font-size: 13px;
    color: var(--foot-muted);
    margin: 0;
  }

  .foot-legal {
    display: flex;
    gap: 24px;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .foot-legal a {
    font-size: 13px;
    color: var(--foot-muted);
    text-decoration: none;
    transition: color .2s ease;
  }

  .foot-legal a:hover {
    color: var(--foot-primary-light);
  }

  .foot-payments {
    display: flex;
    gap: 8px;
    align-items: center;
  }

  .foot-payments span {
    font-size: 11px;
    color: var(--foot-muted);
    border: 1px solid var(--foot-border);
    border-radius: 4px;
    padding: 3px 7px;
    letter-spacing: .4px;
  }

  /* ===== Tablet ===== */
  @media (max-width: 1080px) {
    .foot-top {
      grid-template-columns: 1fr 1fr;
      padding: 60px 28px 36px;
      gap: 36px 32px;
    }
    .foot-bottom-inner { padding: 20px 28px; }
  }

  /* ===== Mobile ===== */
  @media (max-width: 720px) {
    .foot-top {
      grid-template-columns: 1fr;
      padding: 48px 20px 32px;
      gap: 36px;
    }

    .foot-tagline { max-width: 100%; }

    .foot-bottom-inner {
      flex-direction: column;
      align-items: flex-start;
      padding: 20px 20px;
    }

    .foot-legal { gap: 18px; flex-wrap: wrap; }
  }
</style>

<footer class="foot-wrap">
  <div class="foot-top">

    <div class="foot-brand">
      <p class="foot-brand-heading">Scent <span>N</span> Peace</p>
      <p class="foot-brand-tag">Fragrance for the Soul</p>
      <p class="foot-tagline">
        Crafted fragrances for those who find luxury in stillness —
        ivory, gold and calm, in every bottle.
      </p>
      <div class="foot-social">
        <a href="#" aria-label="Instagram" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="2" width="20" height="20" rx="5"/>
            <circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/>
          </svg>
        </a>
        <a href="#" aria-label="Facebook" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
          </svg>
        </a>
        <a href="#" aria-label="TikTok" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M16 3v10.5a3.5 3.5 0 1 1-3-3.46V7a6.5 6.5 0 1 0 6.5 6.5V9.5a6 6 0 0 0 3.5 1.2V7.3A4 4 0 0 1 19 7a4 4 0 0 1-3-3.7V3h-3z"/>
          </svg>
        </a>
        <a href="#" aria-label="WhatsApp" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 11.5a8.5 8.5 0 0 1-12.4 7.5L3 20l1.1-5.4A8.5 8.5 0 1 1 21 11.5Z"/>
            <path d="M8.5 9.5c0 4 3 6.5 6.5 6.5"/>
          </svg>
        </a>
      </div>
    </div>

    <div class="foot-quicklinks">
      <p class="foot-heading">Quick Links</p>
      <ul class="foot-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </div>

    <div class="foot-support">
      <p class="foot-heading">Support</p>
      <ul class="foot-links">
        <li><a href="faq.php">FAQs</a></li>
        <li><a href="shipping-returns.php">Shipping &amp; Returns</a></li>
        <li><a href="privacy-policy.php">Privacy Policy</a></li>
        <li><a href="terms.php">Terms of Service</a></li>
      </ul>
    </div>

    <div class="foot-newsletter">
      <p class="foot-heading">Stay Connected</p>
      <p class="foot-newsletter-text">
        Subscribe for early access to new scents and exclusive offers.
      </p>
      <form class="foot-newsletter-form" onsubmit="return false;" aria-label="Newsletter signup">
        <label for="footNewsletterEmail" class="sr-only" style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);">Email address</label>
        <input id="footNewsletterEmail" type="email" placeholder="Your email address" required>
        <button type="submit">Join</button>
      </form>

      <div class="foot-contact-item">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2.5 1.5a11 11 0 0 0 5 5L14 12l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5z"/>
        </svg>
        <a href="tel:+923001234567">+92 300 1234567</a>
      </div>
      <div class="foot-contact-item">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M4 4h16v16H4z"/><path d="m4 4 8 9 8-9"/>
        </svg>
        <a href="mailto:hello@scentnpeace.com">hello@scentnpeace.com</a>
      </div>
    </div>

  </div>

  <div class="foot-bottom">
    <div class="foot-bottom-inner">
      <p class="foot-copyright">&copy; <?php echo date('Y'); ?> Scent N Peace. All rights reserved.</p>
      <ul class="foot-legal">
        <li><a href="privacy-policy.php">Privacy Policy</a></li>
        <li><a href="terms.php">Terms &amp; Conditions</a></li>
      </ul>
    </div>
  </div>
</footer>