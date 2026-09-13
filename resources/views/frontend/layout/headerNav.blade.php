<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  /* ===== NAVBAR ===== */
  .inx-nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 9999;
    background: linear-gradient(135deg, rgba(100,180,230,0.15) 0%, rgba(180,210,240,0.1) 50%, rgba(230,240,250,0.12) 100%);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(100,180,230,0.1);
    transition: all 0.4s ease;
  }
  body.no-hero .inx-nav {
    background: #ffffff !important;
    backdrop-filter: none;
    -webkit-backdrop-filter: none;
    border-bottom: 1px solid #e5e7eb !important;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06) !important;
  }
  .inx-nav.scrolled {
    background: #ffffff !important;
    border-bottom-color: #e5e7eb !important;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06) !important;
  }
  .inx-nav.scrolled .inx-nav-links {
    background: none !important;
    border-color: transparent !important;
  }
  .inx-nav.scrolled .inx-nav-links a,
  .inx-nav.scrolled .inx-nav-links .inx-nav-btn {
    color: #374151 !important;
  }
  .inx-nav.scrolled .inx-nav-links a:hover,
  .inx-nav.scrolled .inx-nav-links .inx-nav-btn:hover {
    color: #111827 !important;
  }
  .inx-nav.scrolled .inx-nav-links a.active {
    color: #111827 !important;
    font-weight: 600;
  }
  .inx-nav.scrolled .inx-nav-cta {
    background: #f4a637 !important;
    color: #111827 !important;
  }
  .inx-nav.scrolled .inx-nav-cta:hover {
    background: #2563eb !important;
    color: #ffffff !important;
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.3) !important;
  }
  .inx-nav.scrolled .inx-nav-logo img {
    filter: none !important;
  }
  .inx-nav.scrolled .inx-hamburger {
    background: #f3f4f6 !important;
    border-color: #e5e7eb !important;
  }
  .inx-nav.scrolled .inx-hamburger svg {
    color: #374151 !important;
  }
  .inx-nav.scrolled .inx-dropdown {
    background: #ffffff !important;
    border-color: #e5e7eb !important;
    box-shadow: 0 12px 40px rgba(0,0,0,0.1);
    backdrop-filter: blur(16px);
  }
  .inx-nav.scrolled .inx-dropdown a {
    color: #374151 !important;
    padding: 12px 16px !important;
  }
  .inx-nav.scrolled .inx-dropdown a:hover {
    color: #111827 !important;
    background: #f9fafb !important;
  }
  .inx-nav.scrolled .inx-dropdown a::before {
    display: none !important;
  }
  .inx-nav.scrolled .inx-nav-links .arrow {
    color: #9ca3af !important;
  }
  .inx-nav-inner {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 72px;
  }

  /* Logo */
  .inx-nav-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    flex-shrink: 0;
  }
  .inx-nav-logo img {
    height: 32px;
    width: auto;
    transition: all 0.3s;
  }
  .inx-nav:not(.scrolled) .inx-nav-logo img {
    filter: none;
  }

  /* Desktop Menu */
  .inx-nav-links {
    display: flex;
    align-items: center;
    gap: 0;
    list-style: none;
    margin: 0;
    padding: 0;
    background: none;
    border: none;
    border-radius: 0;
    transition: all 0.4s ease;
  }
  .inx-nav:not(.scrolled) .inx-nav-links {
    background: none;
    border-color: transparent;
  }
  .inx-nav-links li {
    position: relative;
  }
  .inx-nav-links a,
  .inx-nav-links .inx-nav-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 8px 18px;
    font-family: 'Playfair Display', serif;
    font-size: 15px;
    font-weight: 500;
    color: #374151;
    text-decoration: none;
    border-radius: 0;
    transition: all 0.25s ease;
    cursor: pointer;
    background: none;
    border: none;
    white-space: nowrap;
  }
  .inx-nav:not(.scrolled) .inx-nav-links a,
  .inx-nav:not(.scrolled) .inx-nav-links .inx-nav-btn {
    color: #374151;
  }
  .inx-nav:not(.scrolled) .inx-nav-links a:hover,
  .inx-nav:not(.scrolled) .inx-nav-links .inx-nav-btn:hover {
    color: #111827;
  }
  .inx-nav-links a:hover,
  .inx-nav-links .inx-nav-btn:hover {
    color: #111827;
  }
  .inx-nav:not(.scrolled) .inx-nav-links a.active {
    color: #111827;
  }
  .inx-nav-links a.active {
    color: #111827;
    font-weight: 600;
  }

  /* ===== DARK NAVBAR (now white) ===== */
  .inx-nav-dark {
    background: #ffffff !important;
    border-bottom: 1px solid #e5e7eb !important;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06) !important;
  }
  .inx-nav-dark.scrolled {
    background: #ffffff !important;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06) !important;
  }
  .inx-nav-dark .inx-nav-links {
    background: none;
    border-color: transparent;
  }
  .inx-nav-dark .inx-nav-links a,
  .inx-nav-dark .inx-nav-links .inx-nav-btn {
    color: #374151;
  }
  .inx-nav-dark .inx-nav-links a:hover,
  .inx-nav-dark .inx-nav-links .inx-nav-btn:hover {
    color: #111827;
  }
  .inx-nav-dark .inx-nav-links a.active {
    color: #111827;
    font-weight: 600;
  }
  .inx-nav-dark .inx-nav-cta {
    background: #f4a637;
    color: #111827;
  }
  .inx-nav-dark .inx-nav-cta:hover {
    background: #2563eb;
    color: #ffffff;
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.3);
  }
  .inx-nav-dark .inx-nav-logo img {
    filter: none;
  }
  .inx-nav-dark .inx-hamburger {
    background: #f3f4f6;
    border-color: #e5e7eb;
  }
  .inx-nav-dark .inx-hamburger svg {
    color: #374151;
  }
  .inx-nav-dark .inx-dropdown {
    background: #ffffff;
    border-color: #e5e7eb;
    box-shadow: 0 12px 40px rgba(0,0,0,0.1);
    backdrop-filter: blur(16px);
  }
  .inx-nav-dark .inx-dropdown a {
    color: #374151;
  }
  .inx-nav-dark .inx-dropdown a:hover {
    color: #111827;
    background: #f9fafb;
  }
  .inx-nav-dark .inx-dropdown a::before {
    display: none !important;
  }
  .inx-nav-links .arrow {
    font-size: 12px;
    opacity: 0.6;
    transition: transform 0.3s ease;
    margin-left: 2px;
  }
  .inx-nav-links li:hover > .inx-nav-links .arrow,
  .inx-nav-links .inx-nav-btn:hover .arrow {
    transform: rotate(180deg);
  }

  /* Desktop Dropdown */
  .inx-dropdown {
    position: absolute;
    top: calc(100% + 14px);
    left: 50%;
    transform: translateX(-50%) translateY(8px);
    min-width: 260px;
    background: #ffffff;
    border: 1px solid rgba(0, 0, 0, 0.08);
    border-radius: 16px;
    padding: 14px 10px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12), 0 4px 12px rgba(0, 0, 0, 0.05);
  }
  .inx-nav-links li:hover > .inx-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
  }
  .inx-dropdown a {
    display: flex !important;
    align-items: center !important;
    padding: 12px 16px !important;
    font-size: 14px !important;
    color: #1f2937 !important;
    border-radius: 10px !important;
    transition: all 0.15s ease !important;
    gap: 10px !important;
    text-decoration: none !important;
    position: relative !important;
    font-weight: 400 !important;
    font-family: 'Playfair Display', serif !important;
    letter-spacing: 0.01em !important;
    line-height: 1.5 !important;
    margin: 0 !important;
  }
  .inx-dropdown a::before {
    display: none !important;
    content: none !important;
  }
  .inx-dropdown a:hover {
    background: #f3f4f6 !important;
    color: #111827 !important;
  }
  .inx-dropdown a .dd-icon {
    display: none;
  }

  /* CTA Button */
  .inx-nav-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 10px 10px 20px;
    background: #f4a637;
    color: #111827;
    font-family: 'Playfair Display', serif;
    font-size: 14px;
    font-weight: 600;
    border-radius: 100px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
  }
  .inx-nav-cta:hover {
    background: #2563eb;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
  }
  .inx-nav-cta .cta-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: #111827;
    border-radius: 50%;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  .inx-nav-cta .cta-icon i {
    font-size: 11px;
    color: #ffffff;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  .inx-nav-cta:hover .cta-icon {
    background: #111827;
    transform: rotate(-45deg) scale(1.1);
  }
  .inx-nav-cta:hover .cta-icon i {
    transform: translate(1px, -1px);
  }
  .inx-nav:not(.scrolled) .inx-nav-cta {
    background: #f4a637;
  }
  .inx-nav:not(.scrolled) .inx-nav-cta:hover {
    background: #2563eb;
    color: #ffffff;
    box-shadow: 0 8px 24px rgba(37, 99, 235, 0.35);
  }

  /* Hamburger */
  .inx-hamburger {
    display: none;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #f3f4f6;
    border: 1px solid rgba(0, 0, 0, 0.06);
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .inx-hamburger:hover {
    background: #e5e7eb;
  }
  .inx-nav:not(.scrolled) .inx-hamburger {
    background: rgba(0, 0, 0, 0.05);
    border-color: rgba(0, 0, 0, 0.08);
  }
  .inx-nav:not(.scrolled) .inx-hamburger:hover {
    background: rgba(0, 0, 0, 0.1);
  }
  .inx-hamburger svg {
    width: 20px;
    height: 20px;
    color: #374151;
  }
  .inx-nav:not(.scrolled) .inx-hamburger svg {
    color: #374151;
  }
  .inx-hamburger .close-icon {
    display: none;
  }
  .inx-hamburger.open {
    background: transparent;
    border-color: transparent;
  }
  .inx-hamburger.open svg {
    color: #374151;
  }
  .inx-hamburger.open .menu-icon {
    display: none;
  }
  .inx-hamburger.open .close-icon {
    display: block;
  }

  /* Mobile Menu */
  .inx-mobile {
    display: none;
    position: fixed;
    top: 72px;
    left: 0; right: 0; bottom: 0;
    background: #ffffff;
    z-index: 9998;
    overflow-y: auto;
  }
  .inx-mobile.open {
    display: block;
  }
  .inx-mobile-inner {
    padding: 0 28px 40px;
  }
  .inx-mobile-header {
    display: none;
  }
  .inx-mobile-header .inx-nav-logo {
    display: none;
  }
  .inx-mobile-header .inx-nav-logo img {
    height: 28px;
  }
  .inx-mobile-close {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: transparent;
    border: 1.5px solid #d1d5db;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #374151;
    transition: all 0.3s ease;
  }
  .inx-mobile-close:hover {
    background: #f3f4f6;
    color: #111827;
  }
  .inx-mobile a,
  .inx-mobile .inx-mobile-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 0;
    font-size: 16px;
    font-weight: 500;
    color: #111827;
    text-decoration: none;
    border-bottom: 1px solid #e5e7eb;
    transition: color 0.2s;
    background: none;
    border-left: none;
    border-right: none;
    border-top: none;
    cursor: pointer;
    width: 100%;
    text-align: left;
    font-family: 'Playfair Display', serif;
  }
  .inx-mobile a:hover,
  .inx-mobile .inx-mobile-btn:hover {
    color: #111827;
  }
  .inx-mobile .mobile-arrow {
    font-size: 14px;
    color: #9ca3af;
    transition: transform 0.3s;
    font-weight: 700;
  }
  .inx-mobile .plus-icon {
    font-size: 20px;
    color: #374151;
    transition: transform 0.3s;
    font-weight: 700;
    line-height: 1;
  }
  .inx-mobile .inx-mobile-btn.open .plus-icon {
    transform: rotate(45deg);
  }
  .inx-mobile .mobile-sub {
    display: none;
    padding-left: 0;
  }
  .inx-mobile .mobile-sub a {
    font-size: 14px;
    font-weight: 400;
    color: #6b7280;
    padding: 14px 0;
    border-bottom: 1px solid #f3f4f6;
  }
  .inx-mobile .mobile-sub a:hover {
    color: #111827;
  }
  .inx-mobile-cta {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: 32px;
    padding: 14px 14px 14px 24px;
    background: #f4a637;
    color: #111827;
    font-family: 'Playfair Display', serif;
    font-size: 15px;
    font-weight: 600;
    border-radius: 100px;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  .inx-mobile-getintouch {
    display: inline-flex !important;
    margin-top: 32px;
    border-bottom: none !important;
    background: #f4a637 !important;
    color: #111827 !important;
    padding: 10px 10px 10px 20px !important;
    border-radius: 100px !important;
    font-size: 14px !important;
  }
  .inx-mobile-getintouch .cta-icon {
    display: inline-flex !important;
    align-items: center;
    justify-content: center;
    width: 32px !important;
    height: 32px !important;
    background: #111827 !important;
    border-radius: 50% !important;
  }
  .inx-mobile-getintouch .cta-icon i {
    font-size: 11px !important;
    color: #ffffff !important;
  }
  .inx-mobile-cta:hover {
    background: #e89a2e;
  }
  .inx-mobile-cta .cta-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    background: #111827;
    border-radius: 50%;
  }
  .inx-mobile-cta .cta-icon i {
    font-size: 11px;
    color: #ffffff;
  }

  @media (max-width: 1023px) {
    .inx-nav-inner .inx-nav-cta,
    .inx-nav-links {
      display: none !important;
    }
    .inx-hamburger {
      display: flex;
    }
    .inx-mobile-getintouch {
      display: inline-flex !important;
    }
  }
</style>

<header class="inx-nav {{ Request::is('products*') || Request::is('themes*') || Request::is('theme*') || Request::is('contact*') ? 'inx-nav-dark' : '' }}" id="inxNav">
  <div class="inx-nav-inner">
    <!-- Logo -->
    <a class="inx-nav-logo" href="{{ url('/') }}">
      <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="InooDex">
    </a>

    <!-- Desktop Menu -->
    <ul class="inx-nav-links" id="inxNavLinks">
      <li>
        <a href="{{ url('/') }}">Home</a>
      </li>
      <li>
        <a href="{{ url('/about') }}">About</a>
      </li>
      <li>
        <a href="{{ url('/services') }}">Services <span class="arrow">▾</span></a>
        <div class="inx-dropdown">
          <a href="{{ url('/software-development') }}">
            <span class="dd-icon"><i class="fa-solid fa-code"></i></span>
            Software Development
          </a>
          <a href="{{ url('/apps-development') }}">
            <span class="dd-icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
            Apps Development
          </a>
          <a href="{{ url('/web-development') }}">
            <span class="dd-icon"><i class="fa-solid fa-globe"></i></span>
            Web Development
          </a>
          <a href="{{ url('/digital-marketing') }}">
            <span class="dd-icon"><i class="fa-solid fa-bullhorn"></i></span>
            Digital Marketing
          </a>
          <a href="{{ url('/seo') }}">
            <span class="dd-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
            SEO
          </a>
          <a href="{{ url('/data-analysis') }}">
            <span class="dd-icon"><i class="fa-solid fa-chart-line"></i></span>
            Data Analysis
          </a>
        </div>
      </li>
      <li>
        <a href="{{ url('/products') }}" class="{{ Request::is('products*') ? 'active' : '' }}">Products <span class="arrow">▾</span></a>
        <div class="inx-dropdown">
          <a href="{{ url('/construction.inoodex.com') }}">
            <span class="dd-icon"><i class="fa-solid fa-building"></i></span>
            Construction ERP
          </a>
          <a href="{{ url('/crm.inoodex.com') }}">
            <span class="dd-icon"><i class="fa-solid fa-graduation-cap"></i></span>
            Education Consultancy CRM
          </a>
          <a href="{{ url('/inventory.inoodex.com') }}">
            <span class="dd-icon"><i class="fa-solid fa-boxes-stacked"></i></span>
            Inventory Management
          </a>
          <a href="{{ url('/sms.inoodex.com') }}">
            <span class="dd-icon"><i class="fa-solid fa-cash-register"></i></span>
            POS Software
          </a>
          <a href="{{ url('/ecom.inoodex.com') }}">
            <span class="dd-icon"><i class="fa-solid fa-cart-shopping"></i></span>
            E-Commerce
          </a>
          <a href="{{ url('/education.inoodex.com') }}">
            <span class="dd-icon"><i class="fa-solid fa-school"></i></span>
            School Management
          </a>
        </div>
      </li>
      <li>
        <a href="{{ url('/themes') }}">Themes</a>
      </li>
      <li>
        <a href="{{ url('/contact') }}">Contact</a>
      </li>
    </ul>

    <!-- Right: CTA + Hamburger -->
    <div style="display: flex; align-items: center; gap: 16px;">
      <a class="inx-nav-cta" href="{{ url('/contact') }}">
        Get In Touch <span class="cta-icon"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
      </a>
      <button class="inx-hamburger" id="inxHamburger" aria-label="Menu">
        <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg class="close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" opacity="0.3"/>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 8L16 16M8 16L16 8"/>
        </svg>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Menu -->
<div class="inx-mobile" id="inxMobile">
  <div class="inx-mobile-inner">
    <!-- Mobile header with logo + close -->
    <div class="inx-mobile-header">
      <a class="inx-nav-logo" href="{{ url('/') }}">
        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="InooDex">
      </a>
      <button class="inx-mobile-close" id="inxMobileClose" aria-label="Close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <circle cx="12" cy="12" r="10" opacity="0.25"/>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 8L16 16M8 16L16 8"/>
        </svg>
      </button>
    </div>

    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about') }}">About Us</a>

    <button class="inx-mobile-btn" data-sub="svc-sub">
      Service <span class="plus-icon">+</span>
    </button>
    <div class="mobile-sub" id="svc-sub">
      <a href="{{ url('/software-development') }}">Software Development</a>
      <a href="{{ url('/apps-development') }}">Apps Development</a>
      <a href="{{ url('/web-development') }}">Web Development</a>
      <a href="{{ url('/digital-marketing') }}">Digital Marketing</a>
      <a href="{{ url('/seo') }}">SEO</a>
      <a href="{{ url('/data-analysis') }}">Data Analysis</a>
    </div>

    <button class="inx-mobile-btn" data-sub="prod-sub">
      Products <span class="plus-icon">+</span>
    </button>
    <div class="mobile-sub" id="prod-sub">
      <a href="{{ url('/construction.inoodex.com') }}">Construction ERP</a>
      <a href="{{ url('/crm.inoodex.com') }}">Education Consultancy CRM</a>
      <a href="{{ url('/inventory.inoodex.com') }}">Inventory Management</a>
      <a href="{{ url('/sms.inoodex.com') }}">POS Software</a>
      <a href="{{ url('/ecom.inoodex.com') }}">E-Commerce</a>
      <a href="{{ url('/education.inoodex.com') }}">School Management</a>
    </div>

    <a href="{{ url('/themes') }}">Themes</a>
    <a href="{{ url('/contact') }}">Contact Us</a>

    <a href="{{ url('/contact') }}" class="inx-nav-cta inx-mobile-getintouch">
      Get In Touch <span class="cta-icon"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
    </a>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var nav = document.getElementById('inxNav');
  var hamburger = document.getElementById('inxHamburger');
  var mobile = document.getElementById('inxMobile');

  // Scroll effect — transparent on hero, colorful on white sections
  function updateNav() {
    if (window.scrollY > 100 || document.body.classList.contains('no-hero')) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', updateNav);
  updateNav();

  // Hamburger toggle
  if (hamburger && mobile) {
    hamburger.addEventListener('click', function() {
      var isOpen = mobile.classList.contains('open');
      if (isOpen) {
        mobile.classList.remove('open');
        hamburger.classList.remove('open');
        document.body.style.overflow = '';
      } else {
        mobile.classList.add('open');
        hamburger.classList.add('open');
        document.body.style.overflow = 'hidden';
      }
    });
  }

  // Close button inside mobile menu
  var mobileClose = document.getElementById('inxMobileClose');
  if (mobileClose) {
    mobileClose.addEventListener('click', function() {
      mobile.classList.remove('open');
      hamburger.classList.remove('open');
      document.body.style.overflow = '';
    });
  }

  // Mobile submenu toggle
  document.querySelectorAll('.inx-mobile-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var subId = this.getAttribute('data-sub');
      var sub = document.getElementById(subId);
      var arrow = this.querySelector('.mobile-arrow');
      if (!sub) return;
      var isOpen = sub.style.display === 'block';
      sub.style.display = isOpen ? 'none' : 'block';
      if (arrow) arrow.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    });
  });

  // Close mobile on resize to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 1024 && mobile) {
      mobile.classList.remove('open');
      hamburger.classList.remove('open');
      document.body.style.overflow = '';
    }
  });
});
</script>
