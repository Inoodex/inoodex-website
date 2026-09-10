<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('frontend.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <style>
  /* ===== TECHNICAL STUDIO — THEMES ARCHIVE ===== */
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
      radial-gradient(ellipse 900px 520px at 10% -8%, rgba(244, 166, 55, 0.10), transparent 62%),
      radial-gradient(ellipse 760px 480px at 92% 6%, rgba(124, 92, 255, 0.10), transparent 60%),
      radial-gradient(ellipse 820px 540px at 70% 55%, rgba(56, 189, 248, 0.07), transparent 62%),
      radial-gradient(ellipse 700px 460px at 20% 70%, rgba(236, 72, 153, 0.05), transparent 60%),
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

  .mono {
    font-family: 'JetBrains Mono', monospace;
  }

  .container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
    z-index: 1;
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

  /* ===== EDITORIAL HEADLINE ===== */
  .hero-title {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: clamp(22px, 4vw, 52px);
    line-height: 0.85;
    letter-spacing: -0.04em;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    position: relative;
    z-index: 1;
  }

  .hero-title .t-word {
    display: inline;
    color: transparent;
    -webkit-text-stroke: 2px rgba(244, 245, 247, 0.5);
    text-transform: uppercase;
  }

  .hero-title .t-row {
    display: flex;
    align-items: flex-end;
    gap: clamp(14px, 2vw, 28px);
    position: relative;
  }

  .hero-title .t-theme-mark {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0.04em;
  }

  .hero-title .t-theme-mark svg {
    width: clamp(32px, 4vw, 50px);
    height: clamp(32px, 4vw, 50px);
    display: block;
    filter: drop-shadow(0 12px 32px var(--accent-dim));
  }

  .hero-title .t-theme-mark .t-mark-ring {
    position: absolute;
    inset: -14px;
    border: 1px solid var(--accent-dim);
    border-radius: 50%;
    pointer-events: none;
  }

  .hero-title .t-slash {
    position: relative;
    align-self: flex-end;
    margin-bottom: 0.04em;
    width: clamp(20px, 2.4vw, 32px);
    height: clamp(20px, 2.4vw, 32px);
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
    filter: drop-shadow(0 0 10px var(--accent-dim));
  }

  .t-slash-dot {
    fill: var(--accent);
    filter: drop-shadow(0 0 8px var(--accent-dim));
  }

  .t-slash-cut {
    stroke: var(--accent);
    stroke-width: 2.2;
    stroke-linecap: round;
    opacity: 0.85;
  }

  .hero-title .t-slash .pulse-ring {
    position: absolute;
    inset: -14%;
    border: 1px solid var(--accent-dim);
    border-radius: 50%;
    animation: ringPulse 2.6s ease-in-out infinite;
  }

  @keyframes ringPulse {
    0%, 100% { opacity: 0.8; transform: scale(1); }
    50% { opacity: 0.25; transform: scale(1.3); }
  }

  @keyframes pulseDash {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.3; transform: scale(1.1); }
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

  /* ===== FILTER BAR ===== */
  .filter-section {
    padding: 0 0 34px;
    position: relative;
    z-index: 1;
  }

  .filter-wrapper {
    display: flex !important;
    justify-content: flex-start !important;
    align-items: flex-start !important;
    margin-left: 0 !important;
    margin-right: auto !important;
    padding-left: 0 !important;
    text-align: left !important;
    flex-direction: column;
    gap: 14px;
    padding-bottom: 6px;
  }

  .filter-controls {
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    gap: 14px;
    width: 100%;
  }

  .filter-pills {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
  }

  .filter-actions {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .filter-pill {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 8px 16px;
    background: var(--surface);
    color: var(--muted);
    border: 1px solid var(--line-strong);
    border-radius: 8px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    user-select: none;
    white-space: nowrap;
  }

  .filter-pill:hover {
    color: var(--ink);
    border-color: var(--accent-dim);
    background: var(--accent-subtle);
  }

  .filter-pill.active {
    background: var(--accent);
    color: #0a0a0a;
    border-color: var(--accent);
    box-shadow: 0 0 24px -6px var(--accent-dim);
  }

  .filter-pill .pill-count {
    font-size: 9.5px;
    opacity: 0.6;
  }

  .filter-pill.active .pill-count {
    opacity: 0.7;
  }

  .filter-actions select {
    padding: 9px 18px;
    background: var(--surface);
    color: var(--accent);
    border: 1px solid var(--accent);
    border-radius: 50px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    letter-spacing: 0.5px;
    cursor: pointer;
    outline: none;
    transition: border-color 0.25s ease, color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
  }

  .filter-actions select:hover,
  .filter-actions select:focus {
    border-color: var(--accent);
    color: var(--accent);
    background: var(--accent-glow);
    box-shadow: 0 0 20px -4px var(--accent-dim);
  }

  .filter-actions select option {
    background: var(--surface);
    color: var(--ink);
  }

  /* ===== SHOP SIDEBAR LAYOUT ===== */
  .shop-section {
    padding: 0 0 110px;
    position: relative;
    z-index: 1;
  }

  .shop-layout {
    display: block;
  }

  .shop-sidebar {
    position: sticky;
    top: 110px;
    background: var(--surface);
    border: 1px solid var(--line);
    border-radius: 18px;
    padding: 26px 24px;
    display: flex;
    flex-direction: column;
    gap: 26px;
  }

  .sidebar-head {
    border-bottom: 1px solid var(--line);
    padding-bottom: 18px;
  }

  .sidebar-label {
    display: block;
    font-size: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 6px;
  }

  .sidebar-head h4 {
    margin: 0;
    font-size: 20px;
    font-weight: 700;
    color: var(--ink);
    letter-spacing: -0.02em;
  }

  .sidebar-block {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .sidebar-title {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--muted);
  }

  .shop-sidebar .filter-actions select {
    width: 100%;
  }

  .shop-sidebar .filter-pills {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 8px;
  }

  .shop-sidebar .filter-pill {
    width: 100%;
    justify-content: flex-start;
    border-radius: 10px;
    padding: 10px 14px;
  }

  .shop-main {
    min-width: 0;
  }

  /* ===== GRID ===== */
  .themes-section {
    padding: 0 0 110px;
    position: relative;
    z-index: 1;
  }

  .themes-section::before {
    content: '';
    position: absolute;
    left: 50%;
    top: -80px;
    transform: translateX(-50%);
    width: 1200px;
    height: 640px;
    background:
      radial-gradient(ellipse 420px 300px at 18% 40%, rgba(244, 166, 55, 0.16), transparent 65%),
      radial-gradient(ellipse 460px 320px at 55% 55%, rgba(124, 92, 255, 0.13), transparent 65%),
      radial-gradient(ellipse 400px 280px at 82% 30%, rgba(56, 189, 248, 0.12), transparent 65%);
    pointer-events: none;
    z-index: 0;
  }

  .theme-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
    position: relative;
    z-index: 1;
    transition: opacity 0.25s ease;
  }

  .theme-grid.is-filtering {
    opacity: 0.4;
  }

  /* ===== GLASS CARD ===== */
  .theme-card {
    background: linear-gradient(160deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.05) 45%);
    -webkit-backdrop-filter: blur(16px);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.09);
    border-radius: 16px;
    position: relative;
    overflow: hidden;
    box-shadow: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background 0.3s ease;
    opacity: 0;
    animation: cardFadeIn 0.7s ease forwards;
    animation-delay: calc(0.06s * var(--i, 0));
    aspect-ratio: 3 / 4;
  }

  .theme-card.is-hidden {
    display: none;
  }

  @keyframes cardFadeIn {
    0% { opacity: 0; transform: translateY(24px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  .theme-card:hover {
    transform: translateY(-8px);
    border-color: rgba(255, 255, 255, 0.18);
    box-shadow: none;
  }

  /* ===== IMAGE (vertical pan on hover) ===== */
  .thumb-wrap {
    position: absolute;
    inset: 0;
    background: var(--surface-2);
    overflow: hidden;
    border-radius: 16px;
  }

  .thumb-wrap img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    transition: transform 0.8s ease;
  }

  .thumb-wrap a {
    display: block;
    width: 100%;
    height: 100%;
  }

  .theme-card:hover .thumb-wrap img {
    transform: scale(1.06);
  }

  .thumb-wrap::after {
    content: '';
    position: absolute;
    inset: 0;
    background: none;
    pointer-events: none;
  }

  .thumb-wrap::before {
    content: '';
    position: absolute;
    top: 0;
    left: -60%;
    width: 45%;
    height: 100%;
    z-index: 2;
    background: linear-gradient(100deg, transparent, rgba(255, 255, 255, 0.10), transparent);
    transform: skewX(-20deg);
    transition: left 0.7s var(--transition-smooth);
    pointer-events: none;
  }

  .theme-card:hover .thumb-wrap::before {
    left: 130%;
  }

  .plate-index {
    display: none;
  }

  .category-tag {
    display: none;
  }

  .category-tag::before {
    content: '';
    width: 16px;
    height: 2px;
    background: var(--accent);
    border-radius: 2px;
    transition: width 0.4s var(--transition-smooth);
  }

  .theme-card:hover .category-tag::before {
    width: 20px;
  }

  /* ===== CARD BODY ===== */
  .card-body {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 40px 14px 14px;
    background: linear-gradient(0deg, rgba(8,10,14,0.95) 0%, rgba(8,10,14,0.6) 60%, transparent 100%);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    gap: 8px;
    z-index: 2;
  }

  .card-body h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: -0.3px;
    color: var(--accent);
    line-height: 1.2;
  }

  .card-body h2 a {
    color: var(--accent);
    text-decoration: none;
    transition: color 0.25s ease;
  }

  .card-body h2 a:hover {
    color: #fcd34d;
  }

  .card-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
  }

  /* CTA button with sliding arrow */
  .btn-demo {
    display: inline-flex;.
    
    align-items: center;
    gap: 9px;
    padding: 11px 18px;
    border-radius: 999px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 1px;
    color: #ffffff;
    text-decoration: none;
    text-transform: uppercase;
    background: rgba(244, 166, 55, 0.1);
    border: 1px solid rgba(244, 166, 55, 0.3);
    transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease, gap 0.35s var(--transition-smooth);
  }

  .btn-demo .arrow-ring {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: var(--accent);
    color: #0a0a0a;
    font-size: 10px;
    transition: transform 0.35s var(--transition-smooth), background 0.3s ease;
  }

  .btn-demo:hover {
    color: #000000;
    background: var(--accent);
    border-color: var(--accent);
    gap: 13px;
    box-shadow: 0 10px 30px -8px var(--accent-dim);
  }

  .btn-demo:hover .arrow-ring {
    background: #0a0a0a;
    color: var(--accent);
    transform: translateX(2px) rotate(-8deg);
  }

  /* ===== EMPTY STATE ===== */
  .empty-state {
    text-align: center;
    padding: 110px 24px;
    grid-column: 1 / -1;
    background: var(--bg);
    border: 1px dashed var(--line-strong);
    display: none;
  }

  .empty-state.is-show {
    display: block;
  }

  .empty-state .icon-wrap {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 62px;
    height: 62px;
    border: 1px solid var(--line-strong);
    margin-bottom: 20px;
    transition: border-color 0.3s ease, transform 0.4s var(--transition-smooth);
  }

  .empty-state .icon-wrap i {
    font-size: 22px;
    color: var(--muted-2);
  }

  .empty-state h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 19px;
    color: var(--ink);
    margin-bottom: 6px;
  }

  .empty-state p {
    color: var(--muted);
    font-size: 14px;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1024px) {
    .theme-grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .shop-layout {
      grid-template-columns: 1fr;
      gap: 24px;
    }

    .shop-sidebar {
      position: static;
    }

    .hero-title {
      font-size: 34px;
    }
  }

  @media (max-width: 768px) {
    .hero-section {
      padding: 90px 0 0;
    }

    .hero-title {
      font-size: 26px;
    }

    .hero-title .t-slash {
      width: 26px;
      height: 26px;
    }

    .hero-bottom {
      flex-direction: column;
      align-items: flex-start;
      gap: 20px;
    }

    .filter-wrapper {
      align-items: flex-start;
      flex-direction: column;
    }

    .thumb-wrap {
      height: 100%;
    }
  }

  @media (max-width: 640px) {
    .theme-grid {
      grid-template-columns: 1fr;
    }

    .hero-title {
      font-size: 22px;
      gap: 0 8px;
    }

    .hero-top {
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
    }

    .thumb-wrap {
      height: 100%;
    }
  }

  /* ===== SCROLLBAR ===== */
  ::-webkit-scrollbar {
    width: 8px;
    height: 8px;
  }

  ::-webkit-scrollbar-track {
    background: var(--bg);
  }

  ::-webkit-scrollbar-thumb {
    background: var(--surface-2);
    border: 1px solid var(--line-strong);
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #262d38;
  }
  </style>
</head>

<body>
  <?php echo $__env->make('frontend.layout.headerNav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- ===== HERO ===== -->
  <section class="hero-section">
    <div class="hero-grid-overlay"></div>
    <div class="container">
      <div class="hero-top">
        <div class="hero-eyebrow"><span class="dot"></span> Catalog / All Themes</div>
      </div>
      <div class="hero-bottom">
        <div class="hero-title-wrap">
          <h1 class="hero-title">
            <span class="t-word">Theme </span>
            <span class="t-row">
              <span class="t-theme-mark" aria-hidden="true">
                <svg viewBox="0 0 100 100" fill="none">
                  <rect x="4" y="4" width="46" height="46" rx="8" stroke="rgba(244,245,247,0.22)" stroke-width="2.5" />
                  <rect x="28" y="28" width="46" height="46" rx="8" stroke="rgba(244,166,55,0.5)" stroke-width="2.5" />
                  <rect x="52" y="52" width="42" height="42" rx="8" fill="url(#themeMarkGrad)" stroke="#f4a637" stroke-width="2.5" />
                  <circle cx="73" cy="73" r="2.2" fill="#0a0a0a" />
                  <defs>
                    <!-- <linearGradient id="themeMarkGrad" x1="0" y1="0" x2="1" y2="1">
                      <stop stop-color="#f4a637" />
                      <stop offset="1" stop-color="#f7c873" />
                    </linearGradient> -->
                  </defs>
                </svg>
              </span>
              <span class="t-slash">
                <svg viewBox="0 0 34 34" fill="none">
                  <line class="t-slash-echo" x1="12" y1="30" x2="31" y2="11" />
                  <line class="t-slash-main" x1="7" y1="27" x2="27" y2="7" />
                  <circle class="t-slash-dot" cx="27" cy="7" r="2.6" />
                  <path class="t-slash-cut" d="M5 22h7" />
                </svg>
                <span class="pulse-ring"></span>
              </span>
            </span>
          </h1>
        </div>
        <p class="hero-subtitle">Handcrafted, responsive, and performance-optimized themes — engineered with precision, ready to deploy.</p>
      </div>
    </div>
  </section>

  <!-- ===== FILTER + THEMES (shared Alpine root) ===== -->
  <div x-data="{
    themes: <?php echo \Illuminate\Support\Js::from(isset($themes) ? $themes->map(fn($t) => ['id'=>$t->id,'title'=>$t->title,'image'=>$t->image,'demo_url'=>$t->demo_url,'category_id'=>(int)$t->category_id,'category_name'=>$t->category->name ?? 'Uncategorized','price'=>(float)$t->price]) : [])->toHtml() ?>,
    selectedCategories: [],
    sortType: 'newest',
    get filtered() {
      let result = this.themes.filter(t => {
        if (this.selectedCategories.length > 0 && !this.selectedCategories.includes(t.category_id)) return false;
        return true;
      });
      if (this.sortType === 'oldest') return [...result].reverse();
      if (this.sortType === 'price_low') return [...result].sort((a, b) => a.price - b.price);
      if (this.sortType === 'price_high') return [...result].sort((a, b) => b.price - a.price);
      if (this.sortType === 'az') return [...result].sort((a, b) => a.title.localeCompare(b.title));
      if (this.sortType === 'za') return [...result].sort((a, b) => b.title.localeCompare(a.title));
      return result;
    }
  }">

<!-- ===== FILTER + THEMES ===== -->
    <section class="shop-section">
      <div class="container">
        <div class="shop-layout">

          <!-- ===== THEMES GRID ===== -->
          <div class="shop-main">
            <div class="theme-grid">

              <template x-for="(theme, index) in filtered" :key="theme.id">
                <div class="theme-card" :style="{ '--i': index }">

                  <div class="thumb-wrap">

                    <a :href="theme.demo_url" target="_blank">
                      <img :src="'<?php echo e(asset('storage')); ?>/' + theme.image" :alt="theme.title" loading="lazy" onerror="this.parentElement.style.display='none'">
                    </a>
                  </div>

                  <div class="card-body">
                    <h2><a :href="theme.demo_url" target="_blank" x-text="theme.title"></a></h2>
                    <div class="card-footer">
                      <a :href="theme.demo_url" target="_blank" class="btn-demo">
                        View demo <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span>
                      </a>
                    </div>
                  </div>

                </div>
              </template>

              <div class="empty-state" x-show="filtered.length === 0">
                <div class="icon-wrap">
                  <i class="fa-regular fa-layer-group"></i>
                </div>
                <h3>No themes found</h3>
                <p>No themes match the selected filters.</p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section> -->

  </div>

  <?php echo $__env->make('frontend.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\inoodex_latest\resources\views/frontend/pages/theme.blade.php ENDPATH**/ ?>