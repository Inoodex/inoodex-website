<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('frontend.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <style>
  /* ===== TECHNICAL STUDIO — PRODUCTS ARCHIVE ===== */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  :root {
    --bg: #080a0e;
    --surface: #12161d;
    --surface-2: #171c24;
    --surface-3: #1a2029;
    --ink: #f4f5f7;
    --muted: #868c99;
    --muted-2: #4d525d;
    --accent: #f4a637;
    --accent-dim: rgba(244, 166, 55, 0.14);
    --accent-glow: rgba(244, 166, 55, 0.08);
    --accent-subtle: rgba(244, 166, 55, 0.04);
    --line: rgba(244, 245, 247, 0.07);
    --line-strong: rgba(244, 245, 247, 0.16);
    --card-radius: 0px;
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

  /* fine grain texture */
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

  /* ===== EDITORIAL HEADLINE ===== */
  .hero-title {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: clamp(22px, 4vw, 52px);
    line-height: 0.85;
    letter-spacing: -0.04em;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: relative;
    z-index: 1;
  }

  .hero-title .t-word {
    display: block;
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

  .hero-title .t-grad {
    position: relative;
    background: linear-gradient(120deg, #f4a637 0%, #f7c873 45%, #f4a637 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    filter: drop-shadow(0 12px 32px var(--accent-dim));
    animation: floatWord 5s ease-in-out infinite;
  }

  .hero-title .t-grad::after {
    content: '';
    position: absolute;
    left: 0.04em;
    bottom: -0.08em;
    width: 62%;
    height: 0.05em;
    background: linear-gradient(90deg, var(--accent), transparent);
    border-radius: 2px;
  }

  @keyframes floatWord {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
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

  .hero-title-row {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 18px;
  }

  .hero-title-index {
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 2px;
    color: var(--accent);
    border: 1px solid var(--accent-dim);
    background: var(--accent-subtle);
    padding: 4px 12px;
  }

  .hero-title-pre {
    font-family: 'JetBrains Mono', monospace;
    font-size: 13px;
    letter-spacing: 6px;
    text-transform: uppercase;
    color: var(--ink);
  }

  .hero-title-pre i {
    color: var(--muted-2);
    font-style: normal;
    margin: 0 4px;
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
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
    user-select: none;
    white-space: nowrap;
  }

  .filter-pill:hover {
    color: var(--ink);
    border-color: var(--accent-dim);
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
    transition: border-color 0.25s ease, color 0.25s ease, box-shadow 0.25s ease;
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

  /* sidebar removed */

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
  .products-section {
    padding: 0 0 110px;
    position: relative;
    z-index: 1;
  }

  .products-section::before {
    content: '';
    position: absolute;
    left: 50%;
    top: -80px;
    transform: translateX(-50%);
    width: 1200px;
    height: 640px;
    background:
      radial-gradient(ellipse 420px 300px at 18% 40%, rgba(244,166,55,0.16), transparent 65%),
      radial-gradient(ellipse 460px 320px at 55% 55%, rgba(124,92,255,0.13), transparent 65%),
      radial-gradient(ellipse 400px 280px at 82% 30%, rgba(56,189,248,0.12), transparent 65%);
    pointer-events: none;
  }

  .product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: 1fr;
    gap: 16px;
    transition: opacity 0.25s ease;
  }

  .product-grid.is-filtering {
    opacity: 0.4;
  }

  /* ===== CARD ===== */
  .product-card {
    position: relative;
    aspect-ratio: 3/4;
    border-radius: 16px;
    overflow: hidden;
    background: linear-gradient(160deg, rgba(255,255,255,0.12), rgba(255,255,255,0.05) 45%);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,0.09);
    transition: transform 0.4s var(--transition-smooth), box-shadow 0.4s var(--transition-smooth), border-color 0.35s ease;
    opacity: 0;
    animation: cardFadeIn 0.7s ease forwards;
    animation-delay: calc(0.06s * var(--i, 0));
  }

  .product-card.is-hidden {
    display: none;
  }

  .product-card.is-reshow {
    animation: none;
    opacity: 0;
  }

  @keyframes cardFadeIn {
    0% { opacity: 0; transform: translateY(24px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  .product-card:hover {
    transform: translateY(-8px);
    border-color: rgba(255, 255, 255, 0.18);
    box-shadow: none;
  }

  .product-card .corner,
  .product-card .plate-index,
  .product-card .ext-badge,
  .product-card .category-tag {
    display: none;
  }

  /* ===== IMAGE (full cover) ===== */
  .product-card .image-wrap {
    position: absolute;
    inset: 0;
    background: var(--surface-2);
    overflow: hidden;
    border-radius: 16px;
  }

  .product-card .image-wrap img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    transition: transform 0.8s ease;
  }

  .product-card .image-wrap a {
    display: block;
    width: 100%;
    height: 100%;
  }

  .product-card:hover .image-wrap img {
    transform: scale(1.06);
  }

  .product-card .image-wrap::after {
    content: '';
    position: absolute;
    inset: 0;
    background: none;
    pointer-events: none;
  }

  .product-card .image-wrap::before {
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

  .product-card:hover .image-wrap::before {
    left: 130%;
  }

  /* ===== CARD BODY (overlay at bottom) ===== */
  .product-card .card-body {
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

  .product-card .card-body h2 {
    font-family: 'Space Grotesk', sans-serif;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: -0.3px;
    color: var(--accent);
    line-height: 1.2;
    margin-bottom: 0;
  }

  .product-card .card-body h2 a {
    color: var(--accent);
    text-decoration: none;
    transition: color 0.25s ease;
  }

  .product-card .card-body h2 a:hover {
    color: #fcd34d;
  }

  .product-card .card-body p {
    font-size: 12px;
    color: var(--muted);
    line-height: 1.5;
    margin-bottom: 0;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  /* ===== CARD FOOTER (inside overlay) ===== */
  .product-card .card-footer {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
    padding-top: 0;
    border-top: none;
  }

  .product-card .btn-demo {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 11px 18px;
    border-radius: 999px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    background: rgba(244,166,55,0.1);
    border: 1px solid rgba(244,166,55,0.3);
    color: #ffffff;
    transition: background 0.3s, border-color 0.3s, color 0.3s, box-shadow 0.3s, gap 0.35s;
    white-space: nowrap;
  }

  .product-card .btn-demo:hover {
    background: var(--accent);
    border-color: var(--accent);
    color: #000000;
    gap: 13px;
    box-shadow: 0 6px 18px -4px rgba(244,166,55,0.45);
  }

  .product-card .btn-demo .arrow-ring {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 26px;
    height: 26px;
    border-radius: 50%;
    border: 1px solid rgba(244,166,55,0.3);
    color: var(--accent);
    font-size: 10px;
    transition: border-color 0.25s ease, transform 0.4s var(--transition-smooth),
                background 0.25s ease, box-shadow 0.25s ease;
  }

  .product-card .btn-demo:hover .arrow-ring {
    border-color: var(--accent);
    background: var(--accent-dim);
    transform: translateX(4px) rotate(-8deg);
    box-shadow: 0 0 24px -4px var(--accent-dim);
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

  /* ===== VIEW ALL ===== */
  .viewall-wrap {
    display: flex;
    justify-content: center;
    margin-top: 44px;
  }

  .viewall-wrap.is-hidden {
    display: none;
  }

  .btn-viewall {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 14px 32px;
    background: var(--surface);
    color: var(--ink);
    border: 1px solid var(--line-strong);
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.35s ease;
  }

  .btn-viewall .viewall-count {
    color: var(--accent);
  }

  .btn-viewall i {
    font-size: 11px;
    color: var(--accent);
    transition: transform 0.4s var(--transition-smooth);
  }

  .btn-viewall:hover {
    border-color: var(--accent);
    background: var(--accent-subtle);
    box-shadow: 0 0 40px -10px var(--accent-dim);
  }

  .btn-viewall:hover i {
    transform: translateY(4px);
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1024px) {
    .product-grid {
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
  }

  @media (max-width: 640px) {
    .product-grid {
      grid-template-columns: 1fr;
    }

    .hero-title {
      font-size: 22px;
      gap: 0 8px;
    }

    .hero-title-pre {
      font-size: 11px;
      letter-spacing: 4px;
    }

    .hero-title-index {
      font-size: 10px;
    }

    .hero-top {
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
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
    transition: background 0.3s ease;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: var(--accent-dim);
    border-color: var(--accent);
  }

  /* ===== SELECTION ===== */
  ::selection {
    background: var(--accent-dim);
    color: var(--accent);
  }

  ::-moz-selection {
    background: var(--accent-dim);
    color: var(--accent);
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
        <div class="hero-eyebrow"><span class="dot"></span> Catalog / All Products</div>
      </div>
      <div class="hero-bottom">
        <div class="hero-title-wrap">
          <div class="hero-title-row">
            <span class="hero-title-index">01</span>
            <span class="hero-title-pre">Our <i>·</i> Archive</span>
          </div>
          <h1 class="hero-title">
            <span class="t-word">Product</span>
            <span class="t-row">
              <span class="t-grad">s</span>
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
        <p class="hero-subtitle">A collection of digital products, web applications and solutions — engineered with precision, shown as they ship.</p>
      </div>
    </div>
  </section>

  <!-- ===== FILTER + PRODUCTS (shop layout) ===== -->
  <section class="shop-section">
    <div class="container">
      <div class="shop-layout">

        <!-- ===== RIGHT GRID ===== -->
        <div class="shop-main">
          <div class="product-grid" id="productGrid">

            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="product-card" style="--i: <?php echo e($loop->index); ?>" data-cat="<?php echo e($product->category_id); ?>" data-name="<?php echo e(strtolower($product->name)); ?>" data-created="<?php echo e($product->created_at->timestamp); ?>" data-index="<?php echo e($loop->index); ?>">

              <div class="image-wrap">
                <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" loading="lazy" onerror="this.parentElement.style.display='none'">
              </div>

              <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>

              <div class="card-body">
                <h2>
                  <a href="<?php echo e($product->product_url); ?>" target="_blank">
                    <?php echo e($product->name); ?>

                  </a>
                </h2>
                <p><?php echo e(Str::limit(strip_tags($product->description), 80)); ?></p>

                <div class="card-footer">
                  <a href="<?php echo e($product->product_url); ?>" target="_blank" class="btn-demo">
                    View demo <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span>
                  </a>
                </div>
              </div>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <div class="empty-state is-show">
              <div class="icon-wrap">
                <i class="fa-regular fa-box-open"></i>
              </div>
              <h3>No items yet</h3>
              <p>Check back later for new work in the catalog.</p>
            </div>

            <?php endif; ?>

          </div>

          <div class="viewall-wrap" id="viewAllWrap">
            <button class="btn-viewall" id="btnViewAll">
              <span id="viewAllLabel">View All</span> <span class="viewall-count" id="viewAllCount"></span>
              <i class="fa-solid fa-angles-down" id="viewAllIcon"></i>
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php echo $__env->make('frontend.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <script>
  (function() {
    var grid = document.getElementById('productGrid');
    var pills = document.getElementById('filterPills');
    var sortSel = document.getElementById('sortSelect');
    var emptyState = grid.querySelector('.empty-state');
    var cards = Array.prototype.slice.call(grid.querySelectorAll('.product-card'));

    var LIMIT = 4;
    var expanded = false;
    var viewAllWrap = document.getElementById('viewAllWrap');
    var btnViewAll = document.getElementById('btnViewAll');
    var viewAllCount = document.getElementById('viewAllCount');

    if (cards.length > LIMIT) {
      viewAllCount.textContent = '(' + (cards.length - LIMIT) + ' more)';
    } else {
      viewAllCount.textContent = '(' + cards.length + ')';
    }

    function currentCat() {
      return pills.querySelector('.filter-pill.active').dataset.cat;
    }

    function getVisible() {
      var cat = currentCat();
      return cards.filter(function(c) {
        return cat === 'all' || c.dataset.cat === cat;
      });
    }

    function applySort(list) {
      var mode = sortSel.value;
      list.sort(function(a, b) {
        switch (mode) {
          case 'az': return a.dataset.name.localeCompare(b.dataset.name);
          case 'za': return b.dataset.name.localeCompare(a.dataset.name);
          case 'oldest': return +a.dataset.created - +b.dataset.created;
          default: return +b.dataset.created - +a.dataset.created; /* newest */
        }
      });
    }

    function render() {
      grid.classList.add('is-filtering');
      setTimeout(function() {
        var visible = getVisible();
        applySort(visible);

        cards.forEach(function(c) {
          c.classList.add('is-hidden');
          c.style.order = '';
        });

        var showCount = (expanded || currentCat() !== 'all') ? visible.length : Math.min(LIMIT, visible.length);

        visible.slice(0, showCount).forEach(function(c, i) {
          c.classList.remove('is-hidden');
          c.style.order = i;
          c.style.animationDelay = (0.06 * i) + 's';
          c.style.animation = 'none';
          void c.offsetWidth;
          c.style.animation = '';
        });

        /* toggle view all button */
        var inAllCat = currentCat() === 'all';
        var hasMore = visible.length > LIMIT;
        if (viewAllWrap) {
          if (inAllCat) {
            viewAllWrap.classList.remove('is-hidden');
            document.getElementById('viewAllLabel').textContent = expanded ? 'Show Less' : 'View All';
            document.getElementById('viewAllIcon').className = expanded ? 'fa-solid fa-angles-up' : 'fa-solid fa-angles-down';
            if (expanded) {
              viewAllCount.textContent = '(' + visible.length + ')';
            } else {
              viewAllCount.textContent = hasMore ? '(' + (visible.length - LIMIT) + ' more)' : '(' + visible.length + ')';
            }
          } else {
            viewAllWrap.classList.add('is-hidden');
          }
        }

        if (emptyState) {
          if (visible.length === 0) {
            emptyState.classList.add('is-show');
          } else {
            emptyState.classList.remove('is-show');
          }
        }

        grid.classList.remove('is-filtering');
      }, 120);
    }

    pills.addEventListener('click', function(e) {
      var pill = e.target.closest('.filter-pill');
      if (!pill) return;
      pills.querySelectorAll('.filter-pill').forEach(function(p) { p.classList.remove('active'); });
      pill.classList.add('active');
      render();
    });

    sortSel.addEventListener('change', render);

    if (btnViewAll) {
      btnViewAll.addEventListener('click', function() {
        expanded = !expanded;
        render();
      });
    }

    render();
  })();
  </script>

</body>

</html>
<?php /**PATH C:\laragon\www\inoodex_latest\resources\views/frontend/pages/product.blade.php ENDPATH**/ ?>