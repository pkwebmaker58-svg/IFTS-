<?php
/**
 * Navbar.php
 * Scent N Peace — Global Navigation
 *
 * All CSS classes are prefixed with "nav-" so this component can be
 * included on any page (index.php, aboutus.php, contactus.php, etc.)
 * without its styles leaking into or being overridden by that page's CSS.
 *
 * REQUIRED IN <head> (once per page, not inside this file, to avoid
 * loading the same font family multiple times if Navbar + Footer are
 * both included on the same page):
 *
 *   <link rel="preconnect" href="https://fonts.googleapis.com">
 *   <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Great+Vibes&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
 *
 * USAGE:
 *   <?php $activePage = 'home'; include 'Navbar.php'; ?>
 *   Set $activePage before including this file to 'home' | 'shop' | 'about' | 'contact'
 *   to automatically highlight the current menu item. Defaults to 'home'.
 */
$activePage = $activePage ?? 'home';
$navLink = function ($key) use ($activePage) {
    return $key === $activePage ? 'nav-link nav-active' : 'nav-link';
};
?>
<style>
  /* ===== Navbar Design Tokens (scoped) ===== */
  .nav-wrap {
    --nav-primary: #B88746;
    --nav-primary-dark: #9E7137;
    --nav-primary-light: #D8B57A;
    --nav-bg: #FFFDFC;
    --nav-heading: #1F1B18;
    --nav-text: #5F5A55;
    --nav-border: #DDD3C7;
    --nav-radius: 8px;
    --nav-shadow: 0 10px 40px rgba(0,0,0,.08);
    --nav-container: 1320px;
    font-family: 'Manrope', sans-serif;
  }

  .nav-wrap {
    position: sticky;
    top: 0;
    z-index: 999;
    background: var(--nav-bg);
    border-bottom: 1px solid var(--nav-border);
    box-shadow: var(--nav-shadow);
  }

  .nav-container {
    max-width: var(--nav-container);
    margin: 0 auto;
    padding: 18px 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
  }

  .nav-logo {
    display: flex;
    flex-direction: column;
    line-height: 1;
    text-decoration: none;
    flex-shrink: 0;
  }

  .nav-logo-mark {
    font-family: 'Great Vibes', cursive;
    font-size: 32px;
    color: var(--nav-heading);
    letter-spacing: .5px;
  }

  .nav-logo-mark span {
    color: var(--nav-primary);
  }

  .nav-logo-tag {
    font-family: 'Manrope', sans-serif;
    font-size: 10.5px;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--nav-primary-dark);
    margin-top: 2px;
  }

  .nav-menu {
    display: flex;
    align-items: center;
    gap: 36px;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .nav-link {
    font-size: 15.5px;
    font-weight: 500;
    color: var(--nav-heading);
    text-decoration: none;
    position: relative;
    padding-bottom: 4px;
    transition: color .25s ease;
    white-space: nowrap;
  }

  .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0%;
    height: 1.5px;
    background: var(--nav-primary);
    transition: width .25s ease;
  }

  .nav-link:hover,
  .nav-link.nav-active {
    color: var(--nav-primary-dark);
  }

  .nav-link:hover::after,
  .nav-link.nav-active::after {
    width: 100%;
  }

  .nav-actions {
    display: flex;
    align-items: center;
    gap: 22px;
    flex-shrink: 0;
  }

  .nav-icon-btn {
    background: none;
    border: none;
    cursor: pointer;
    color: var(--nav-heading);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    padding: 0;
    position: relative;
    transition: color .2s ease;
  }

  .nav-icon-btn:hover {
    color: var(--nav-primary);
  }

  .nav-cart-count {
    position: absolute;
    top: -8px;
    right: -10px;
    min-width: 16px;
    height: 16px;
    padding: 0 3px;
    border-radius: 50%;
    background: var(--nav-primary);
    color: #fff;
    font-size: 10px;
    font-weight: 700;
    line-height: 16px;
    text-align: center;
  }

  .nav-cta {
    background: var(--nav-primary);
    color: #FFFFFF;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    padding: 11px 24px;
    border-radius: var(--nav-radius);
    transition: background .25s ease, box-shadow .25s ease;
    white-space: nowrap;
  }

  .nav-cta:hover {
    background: var(--nav-primary-dark);
    box-shadow: 0 8px 24px rgba(184,135,70,.28);
  }

  /* Mobile toggle (hidden on desktop) */
  .nav-mobile-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    width: 32px;
    height: 32px;
    padding: 4px;
  }

  .nav-mobile-toggle span {
    display: block;
    width: 24px;
    height: 2px;
    background: var(--nav-heading);
    transition: transform .25s ease, opacity .25s ease;
  }

  .nav-mobile-toggle.nav-open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
  .nav-mobile-toggle.nav-open span:nth-child(2) { opacity: 0; }
  .nav-mobile-toggle.nav-open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

  .nav-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(24,22,20,.4);
    z-index: 998;
    opacity: 0;
    transition: opacity .3s ease;
  }

  .nav-overlay.nav-overlay-active {
    display: block;
    opacity: 1;
  }

  /* ===== Tablet ===== */
  @media (max-width: 1080px) {
    .nav-container { padding: 16px 28px; }
    .nav-menu { gap: 26px; }
  }

  /* ===== Mobile / Hamburger breakpoint ===== */
  @media (max-width: 900px) {
    .nav-container {
      padding: 14px 20px;
    }

    .nav-mobile-toggle {
      display: flex;
    }

    .nav-menu {
      position: fixed;
      top: 0;
      right: -100%;
      height: 100vh;
      width: 80%;
      max-width: 320px;
      background: var(--nav-bg);
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
      gap: 0;
      padding: 96px 32px 32px;
      box-shadow: -10px 0 40px rgba(0,0,0,.12);
      transition: right .35s cubic-bezier(.2,.7,.2,1);
      z-index: 999;
    }

    .nav-menu.nav-menu-open {
      right: 0;
    }

    .nav-menu li {
      width: 100%;
      border-bottom: 1px solid var(--nav-border);
    }

    .nav-link {
      display: block;
      padding: 16px 0;
      font-size: 17px;
    }

    .nav-actions .nav-cta {
      display: none;
    }

    .nav-actions {
      gap: 16px;
    }
  }

  @media (max-width: 380px) {
    .nav-logo-mark { font-size: 27px; }
    .nav-logo-tag { font-size: 9.5px; letter-spacing: 2px; }
  }
</style>

<nav class="nav-wrap" aria-label="Primary">
  <div class="nav-container">

    <a href="index.php" class="nav-logo" aria-label="Scent N Peace — Home">
      <span class="nav-logo-mark">Scent <span>N</span> Peace</span>
      <span class="nav-logo-tag">Fragrance for the Soul</span>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="index.php" class="<?php echo $navLink('home'); ?>">Home</a></li>
      <li><a href="shop.php" class="<?php echo $navLink('shop'); ?>">Shop</a></li>
      <li><a href="aboutus.php" class="<?php echo $navLink('about'); ?>">About Us</a></li>
      <li><a href="contactus.php" class="<?php echo $navLink('contact'); ?>">Contact Us</a></li>
    </ul>

    <div class="nav-actions">
      <button class="nav-icon-btn" aria-label="Search">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
        </svg>
      </button>

      <a href="account.php" class="nav-icon-btn" aria-label="My Account">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/>
        </svg>
      </a>

      <a href="cart.php" class="nav-icon-btn" aria-label="Cart, 0 items">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
        </svg>
        <span class="nav-cart-count">0</span>
      </a>

      <a href="shop.php" class="nav-cta">Shop Now</a>

      <button class="nav-mobile-toggle"
              id="navToggle"
              aria-label="Toggle menu"
              aria-expanded="false"
              aria-controls="navMenu">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>

  <div class="nav-overlay" id="navOverlay"></div>
</nav>

<script>
  (function () {
    var toggle  = document.getElementById('navToggle');
    var menu    = document.getElementById('navMenu');
    var overlay = document.getElementById('navOverlay');
    if (!toggle || !menu || !overlay) return;

    function openMenu() {
      menu.classList.add('nav-menu-open');
      toggle.classList.add('nav-open');
      overlay.classList.add('nav-overlay-active');
      toggle.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      menu.classList.remove('nav-menu-open');
      toggle.classList.remove('nav-open');
      overlay.classList.remove('nav-overlay-active');
      toggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }

    toggle.addEventListener('click', function () {
      menu.classList.contains('nav-menu-open') ? closeMenu() : openMenu();
    });

    overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeMenu();
    });

    // Close the drawer automatically if the viewport is resized back to desktop
    window.addEventListener('resize', function () {
      if (window.innerWidth > 900) closeMenu();
    });
  })();
</script>