<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.header')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <style>
  /* ===== TECHNICAL STUDIO — SERVICES ===== */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  :root {
    --bg: #080a0e;
    --surface: #12161d;
    --surface-2: #171c24;
    --ink: #f4f5f7;
    --muted: #868c99;
    --muted-2: #4d525d;
    --accent: #f4a637;
    --accent-dim: rgba(244, 166, 55, 0.14);
    --accent-glow: rgba(244, 166, 55, 0.08);
    --accent-subtle: rgba(244, 166, 55, 0.04);
    --line: rgba(244, 245, 247, 0.07);
    --line-strong: rgba(244, 245, 247, 0.16);
    --transition-smooth: cubic-bezier(0.2, 0.8, 0.2, 1);
  }

  body {
    background:
      radial-gradient(ellipse 1000px 560px at 12% -8%, rgba(244, 166, 55, 0.07), transparent 60%),
      radial-gradient(ellipse 800px 500px at 100% 10%, rgba(80, 100, 140, 0.06), transparent 55%),
      var(--bg);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: var(--ink);
    line-height: 1.6;
    position: relative;
    min-height: 100vh;
  }

  body::before {
    content: '';
    position: fixed;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    opacity: 0.35;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
    mix-blend-mode: overlay;
  }

  .container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
    z-index: 1;
  }

  ::selection {
    background: var(--accent-dim);
    color: var(--accent);
  }

  ::-moz-selection {
    background: var(--accent-dim);
    color: var(--accent);
  }

  /* ===== HERO ===== */
  .hero-section {
    padding: 110px 0 0;
    position: relative;
    z-index: 1;
    overflow: hidden;
  }

  .hero-grid-overlay {
    position: absolute;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    background-image:
      linear-gradient(rgba(244, 245, 247, 0.028) 1px, transparent 1px),
      linear-gradient(90deg, rgba(244, 245, 247, 0.028) 1px, transparent 1px);
    background-size: 64px 64px;
    -webkit-mask-image: radial-gradient(ellipse 900px 480px at 30% 0%, rgba(0, 0, 0, 0.9), transparent 70%);
    mask-image: radial-gradient(ellipse 900px 480px at 30% 0%, rgba(0, 0, 0, 0.9), transparent 70%);
  }

  .hero-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 26px;
    border-bottom: 1px solid var(--line);
    margin-bottom: 44px;
    position: relative;
    z-index: 1;
  }

  .hero-eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    font-weight: 500;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: 3px;
  }

  .hero-eyebrow .dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--accent);
    box-shadow: 0 0 12px 2px var(--accent-dim);
    animation: pulseDot 2.4s ease-in-out infinite;
  }

  @keyframes pulseDot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.4; transform: scale(0.8); }
  }

  .hero-bottom {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 28px;
    padding-bottom: 40px;
    position: relative;
    z-index: 1;
  }

  /* ===== UNIQUE TITLE COMPOSITION ===== */
  .hero-title-wrap {
    position: relative;
  }

  .hero-title-wrap::before {
    content: '';
    position: absolute;
    top: -26px;
    left: 0;
    width: 56px;
    height: 1px;
    background: var(--accent);
    box-shadow: 0 0 18px 1px var(--accent-dim);
  }

  .hero-title {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: clamp(22px, 4vw, 52px);
    line-height: 0.9;
    letter-spacing: -3px;
    display: flex;
    align-items: baseline;
    flex-wrap: wrap;
    gap: 0 14px;
  }

  .hero-title .t-outline {
    color: transparent;
    -webkit-text-stroke: 2px rgba(244, 245, 247, 0.55);
  }

  .hero-title .t-solid-box {
    position: relative;
    display: inline-block;
    background: linear-gradient(120deg, #f4a637 0%, #f7c873 40%, #f4a637 80%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    padding: 0 4px;
    margin-left: -4px;
    animation: floatS 5s ease-in-out infinite;
  }

  .hero-title .t-solid-box::before {
    content: '';
    position: absolute;
    inset: -8px -10px;
    border: 1.5px solid var(--accent);
    background: linear-gradient(140deg, rgba(244, 166, 55, 0.08), transparent 60%);
    box-shadow: 0 0 34px -6px var(--accent-dim);
    transform: rotate(-3deg);
    z-index: -1;
  }

  .hero-title .t-solid-box::after {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -12px;
    width: 26px;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--accent), transparent);
  }

  @keyframes floatS {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-5px) rotate(2deg); }
  }

  .hero-title .t-slash {
    position: relative;
    align-self: flex-end;
    margin-bottom: 6px;
    width: 34px;
    height: 34px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .hero-title .t-slash svg {
    width: 100%;
    height: 100%;
    overflow: visible;
  }

  .t-slash-echo {
    stroke: var(--accent);
    stroke-width: 1.5;
    stroke-linecap: round;
    opacity: 0.35;
    stroke-dasharray: 2 3;
  }

  .t-slash-main {
    stroke: var(--accent);
    stroke-width: 3.2;
    stroke-linecap: round;
    filter: drop-shadow(0 0 8px var(--accent-dim));
  }

  .t-slash-dot {
    fill: var(--accent);
    filter: drop-shadow(0 0 6px var(--accent-dim));
  }

  .t-slash-cut {
    stroke: var(--accent);
    stroke-width: 2.2;
    stroke-linecap: round;
    opacity: 0.85;
  }

  .hero-title .t-slash .pulse-ring {
    position: absolute;
    inset: -6px;
    border: 1px solid var(--accent-dim);
    border-radius: 50%;
    animation: ringPulse 2.6s ease-in-out infinite;
  }

  @keyframes ringPulse {
    0%, 100% { opacity: 0.8; transform: scale(1); }
    50% { opacity: 0.25; transform: scale(1.25); }
  }

  .hero-subtitle {
    font-size: 15px;
    color: var(--muted);
    max-width: 340px;
    padding-bottom: 6px;
    border-left: 2px solid var(--accent);
    padding-left: 18px;
    line-height: 1.75;
  }

  /* ===== SERVICES ===== */
  .services-section {
    padding: 0 0 110px;
    position: relative;
    z-index: 1;
  }

  .section-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding-bottom: 20px;
    border-bottom: 1px solid var(--line);
    margin-bottom: 24px;
  }

  .section-head .lbl {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: -0.3px;
    text-transform: uppercase;
    color: var(--ink);
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .section-head .lbl::before {
    content: '';
    width: 26px;
    height: 2px;
    background: var(--accent);
    box-shadow: 0 0 12px 1px var(--accent-dim);
  }

  .section-head .lbl i {
    color: var(--accent);
    font-style: normal;
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 0;
  }

  .section-head .idx {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10.5px;
    letter-spacing: 2px;
    color: var(--muted-2);
  }

  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }

  .service-card {
    background: var(--surface);
    border: 1px solid var(--line);
    position: relative;
    padding: 26px 24px 24px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    overflow: hidden;
    text-decoration: none;
    transition: border-color 0.35s ease, transform 0.4s var(--transition-smooth), box-shadow 0.4s var(--transition-smooth);
  }

  .service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1.5px;
    background: linear-gradient(90deg, transparent, var(--accent), transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
  }

  .service-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: -60%;
    width: 45%;
    height: 100%;
    z-index: 0;
    background: linear-gradient(100deg, transparent, rgba(244, 245, 247, 0.05), transparent);
    transform: skewX(-20deg);
    transition: left 0.7s var(--transition-smooth);
    pointer-events: none;
  }

  .service-card:hover::before {
    opacity: 1;
  }

  .service-card:hover::after {
    left: 130%;
  }

  .service-card:hover {
    transform: translateY(-4px);
    border-color: var(--line-strong);
    box-shadow: 0 16px 56px -12px rgba(0, 0, 0, 0.7), 0 0 60px -12px var(--accent-glow);
  }

  .service-card .corner {
    position: absolute;
    width: 13px;
    height: 13px;
    z-index: 2;
    opacity: 0;
    transition: opacity 0.35s ease;
    pointer-events: none;
  }

  .service-card:hover .corner {
    opacity: 1;
  }

  .service-card .corner.tl { top: 8px; left: 8px; border-top: 1.5px solid var(--accent); border-left: 1.5px solid var(--accent); }
  .service-card .corner.tr { top: 8px; right: 8px; border-top: 1.5px solid var(--accent); border-right: 1.5px solid var(--accent); }
  .service-card .corner.bl { bottom: 8px; left: 8px; border-bottom: 1.5px solid var(--accent); border-left: 1.5px solid var(--accent); }
  .service-card .corner.br { bottom: 8px; right: 8px; border-bottom: 1.5px solid var(--accent); border-right: 1.5px solid var(--accent); }

  .card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .svc-icon {
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--line-strong);
    background: var(--accent-subtle);
    color: var(--accent);
    font-size: 17px;
    transition: all 0.35s ease;
    position: relative;
    z-index: 1;
  }

  .service-card:hover .svc-icon {
    border-color: var(--accent);
    box-shadow: 0 0 24px -6px var(--accent-dim);
  }

  .svc-plate {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10px;
    letter-spacing: 2px;
    color: var(--muted-2);
    position: relative;
    z-index: 1;
  }

  .svc-num {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10px;
    letter-spacing: 1px;
    color: var(--accent);
    border: 1px solid var(--accent-dim);
    background: var(--accent-subtle);
    padding: 3px 8px;
    position: relative;
    z-index: 1;
    width: max-content;
  }

  .service-card h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 20px;
    letter-spacing: -0.3px;
    color: var(--ink);
    position: relative;
    z-index: 1;
    transition: color 0.25s ease;
  }

  .service-card p {
    color: var(--muted);
    font-size: 14px;
    line-height: 1.7;
    position: relative;
    z-index: 1;
    flex-grow: 1;
  }

  .card-foot {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-top: 16px;
    border-top: 1px solid var(--line);
    position: relative;
    z-index: 1;
  }

  .svc-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 1.5px;
    color: var(--ink);
    text-decoration: none;
    text-transform: uppercase;
    transition: color 0.25s ease, gap 0.4s var(--transition-smooth);
  }

  .svc-link .arrow-ring {
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 1px solid var(--line-strong);
    color: var(--accent);
    font-size: 12px;
    transition: transform 0.4s var(--transition-smooth), border-color 0.3s ease, background 0.3s ease;
  }

  .service-card:hover .svc-link {
    color: var(--accent);
    gap: 14px;
  }

  .service-card:hover .svc-link .arrow-ring {
    transform: translate(3px, -3px);
    border-color: var(--accent);
    background: var(--accent-subtle);
  }

  /* ===== CTA STRIP ===== */
  .cta-strip {
    margin-top: 44px;
    background: var(--surface);
    border: 1px solid var(--line);
    padding: 30px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    position: relative;
    overflow: hidden;
  }

  .cta-strip::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1.5px;
    background: linear-gradient(90deg, transparent, var(--accent), transparent);
    opacity: 0.5;
  }

  .cta-strip .cta-txt {
    position: relative;
    z-index: 1;
  }

  .cta-strip .cta-txt h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 22px;
    letter-spacing: -0.4px;
    color: var(--ink);
    margin-bottom: 4px;
  }

  .cta-strip .cta-txt h3 span {
    color: var(--accent);
  }

  .cta-strip .cta-txt p {
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--muted);
  }

  .btn-cta {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: var(--accent);
    color: #0a0a0a;
    border: 1px solid var(--accent);
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 13px 26px;
    text-decoration: none;
    position: relative;
    z-index: 1;
    transition: all 0.35s ease;
  }

  .btn-cta:hover {
    background: #f7c873;
    border-color: #f7c873;
    box-shadow: 0 12px 40px -10px var(--accent-dim);
    transform: translateY(-2px);
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1080px) {
    .hero-title {
      font-size: 34px;
    }
  }

  @media (max-width: 960px) {
    .services-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
  }

  @media (max-width: 768px) {
    .hero-title {
      font-size: 26px;
    }

    .hero-bottom {
      align-items: flex-start;
    }
  }

  @media (max-width: 520px) {
    .services-grid {
      grid-template-columns: 1fr;
      gap: 14px;
    }
  }

  @media (max-width: 480px) {
    .hero-title {
      font-size: 22px;
      letter-spacing: -1px;
    }

    .hero-title .t-slash {
      width: 22px;
      height: 22px;
      margin-bottom: 4px;
    }

    .container {
      padding: 0 18px;
    }

    .cta-strip {
      padding: 24px 20px;
      flex-direction: column;
      align-items: stretch;
      text-align: center;
    }

    .btn-cta {
      justify-content: center;
    }
  }

  @media (hover: none) {
    .service-card:hover,
    .btn-cta:hover {
      transform: none;
    }
  }
  </style>
</head>

<body>
  @include('layout.page_transition')
@include('layout.headerNav')

  <!-- ===== HERO ===== -->
  <section class="hero-section">
    <div class="hero-grid-overlay"></div>
    <div class="container">
      <div class="hero-top">
        <div class="hero-eyebrow"><span class="dot"></span> Services / What We Offer</div>
      </div>
      <div class="hero-bottom">
        <div class="hero-title-wrap">
          <h1 class="hero-title">
            <span class="t-outline">Service</span>
            <span class="t-solid-box">s</span>
            <span class="t-slash">
              <svg viewBox="0 0 34 34" fill="none">
                <line class="t-slash-echo" x1="12" y1="30" x2="31" y2="11" />
                <line class="t-slash-main" x1="7" y1="27" x2="27" y2="7" />
                <circle class="t-slash-dot" cx="27" cy="7" r="2.6" />
                <path class="t-slash-cut" d="M5 22h7" />
              </svg>
 
            </span>
          </h1>
        </div>
        <p class="hero-subtitle">Comprehensive digital solutions tailored to your business — engineered, designed, and deployed with precision.</p>
      </div>
    </div>
  </section>

  <!-- ===== SERVICES ===== -->
  <section class="services-section">
    <div class="container">
      <div class="section-head">

    
      </div>
      <div class="services-grid">

        <!-- Software Development -->
        <a href="{{ url('/software-development') }}" class="service-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="card-top">
            <span class="svc-icon"><i class="fa-solid fa-code"></i></span>
            <span class="svc-plate">// 01</span>
          </div>
          <span class="svc-num">SRV-01</span>
          <h3>Software Development</h3>
          <p>Custom software solutions tailored to your business — from enterprise applications to specialized internal tools.</p>
          <div class="card-foot">
            <span class="svc-link">Learn More <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></span>
          </div>
        </a>

        <!-- Apps Development -->
        <a href="{{ url('/apps-development') }}" class="service-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="card-top">
            <span class="svc-icon"><i class="fa-solid fa-mobile-screen-button"></i></span>
            <span class="svc-plate">// 02</span>
          </div>
          <span class="svc-num">SRV-02</span>
          <h3>Apps Development</h3>
          <p>iOS and Android applications built to engage users — intuitive, high-performance, and production-ready.</p>
          <div class="card-foot">
            <span class="svc-link">Learn More <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></span>
          </div>
        </a>

        <!-- Web Development -->
        <a href="{{ url('/web-development') }}" class="service-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="card-top">
            <span class="svc-icon"><i class="fa-solid fa-globe"></i></span>
            <span class="svc-plate">// 03</span>
          </div>
          <span class="svc-num">SRV-03</span>
          <h3>Web Development</h3>
          <p>Fast, responsive websites tailored to your requirements — from engaging design to seamless functionality.</p>
          <div class="card-foot">
            <span class="svc-link">Learn More <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></span>
          </div>
        </a>

        <!-- Digital Marketing -->
        <a href="{{ url('/contact') }}" class="service-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="card-top">
            <span class="svc-icon"><i class="fa-solid fa-chart-line"></i></span>
            <span class="svc-plate">// 04</span>
          </div>
          <span class="svc-num">SRV-04</span>
          <h3>Digital Marketing</h3>
          <p>Data-driven strategies that drive traffic, increase conversions, and boost brand awareness with measurable results.</p>
          <div class="card-foot">
            <span class="svc-link">Learn More <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></span>
          </div>
        </a>

        <!-- SEO -->
        <a href="{{ url('/contact') }}" class="service-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="card-top">
            <span class="svc-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
            <span class="svc-plate">// 05</span>
          </div>
          <span class="svc-num">SRV-05</span>
          <h3>SEO Service</h3>
          <p>On-page and off-page optimization that improves site structure, content, and high-quality backlinks.</p>
          <div class="card-foot">
            <span class="svc-link">Learn More <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></span>
          </div>
        </a>

        <!-- Graphics Design -->
        <a href="{{ url('/contact') }}" class="service-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="card-top">
            <span class="svc-icon"><i class="fa-solid fa-pen-nib"></i></span>
            <span class="svc-plate">// 06</span>
          </div>
          <span class="svc-num">SRV-06</span>
          <h3>Graphics Design</h3>
          <p>Creative visuals that engage and captivate — from illustrations to sleek modern designs for your brand.</p>
          <div class="card-foot">
            <span class="svc-link">Learn More <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></span>
          </div>
        </a>

      </div>

      <div class="cta-strip">
        <div class="cta-txt">
          <h3>Have a project in mind? <span>Let's build it.</span></h3>
          <p>Start the conversation — no commitment required</p>
        </div>
        <a href="{{ url('/contact') }}" class="btn-cta">Start a Project <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  @include('layout.footer')
</body>

</html>
