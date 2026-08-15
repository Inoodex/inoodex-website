<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.header')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <style>
  /* ===== TECHNICAL STUDIO — CONTACT ===== */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  :root {
    --bg: #0a0e1a;
    --surface: #131829;
    --surface-2: #171d31;
    --surface-3: #1b2236;
    --surface-focus: #1a2030;
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
      radial-gradient(ellipse 900px 560px at 100% 5%, rgba(80, 100, 160, 0.09), transparent 55%),
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
    opacity: 0.3;
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

  .hero-meta {
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    color: var(--muted-2);
    letter-spacing: 1px;
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
    font-size: clamp(20px, 3.8vw, 48px);
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
    width: clamp(30px, 3.4vw, 46px);
    height: clamp(30px, 3.4vw, 46px);
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .hero-title .t-slash svg {
    width: 100%;
    height: 100%;
  }

  .hero-title .t-slash line {
    stroke: var(--accent);
    stroke-width: 3;
    stroke-linecap: round;
    filter: drop-shadow(0 0 10px var(--accent-dim));
  }

  .hero-title .t-slash circle {
    fill: var(--accent);
    filter: drop-shadow(0 0 8px var(--accent-dim));
  }

  .hero-title .t-slash .pulse-ring {
    position: absolute;
    inset: -12%;
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

  .hero-subtitle {
    font-size: 15px;
    color: var(--muted);
    max-width: 340px;
    padding-bottom: 6px;
    border-left: 2px solid var(--accent);
    padding-left: 18px;
    line-height: 1.75;
  }

  /* ===== INFO PLATES ===== */
  .info-section {
    padding: 0 0 28px;
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
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--ink);
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .section-head .lbl::before {
    content: '';
    width: 22px;
    height: 2px;
    background: var(--accent);
  }

  .section-head .idx {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10.5px;
    letter-spacing: 2px;
    color: var(--muted-2);
  }

  .info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }

  .info-card {
    background: var(--surface);
    border: 1px solid var(--line);
    position: relative;
    padding: 18px 18px 16px;
    transition: border-color 0.35s ease, transform 0.4s var(--transition-smooth), box-shadow 0.4s var(--transition-smooth);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    gap: 8px;
  }

  .info-card::before {
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

  .info-card:hover {
    transform: translateY(-4px);
    border-color: var(--line-strong);
    box-shadow: 0 16px 56px -12px rgba(0, 0, 0, 0.6), 0 0 60px -12px var(--accent-glow);
  }

  .info-card:hover::before {
    opacity: 1;
  }

  .info-card .corner {
    position: absolute;
    width: 13px;
    height: 13px;
    z-index: 2;
    opacity: 0;
    transition: opacity 0.35s ease;
    pointer-events: none;
  }

  .info-card:hover .corner {
    opacity: 1;
  }

  .info-card .corner.tl { top: 8px; left: 8px; border-top: 1.5px solid var(--accent); border-left: 1.5px solid var(--accent); }
  .info-card .corner.tr { top: 8px; right: 8px; border-top: 1.5px solid var(--accent); border-right: 1.5px solid var(--accent); }
  .info-card .corner.bl { bottom: 8px; left: 8px; border-bottom: 1.5px solid var(--accent); border-left: 1.5px solid var(--accent); }
  .info-card .corner.br { bottom: 8px; right: 8px; border-bottom: 1.5px solid var(--accent); border-right: 1.5px solid var(--accent); }

  .info-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .info-icon {
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--line-strong);
    background: var(--accent-subtle);
    color: var(--accent);
    font-size: 13px;
    transition: all 0.35s ease;
  }

  .info-card:hover .info-icon {
    border-color: var(--accent);
    box-shadow: 0 0 24px -6px var(--accent-dim);
  }

  .info-plate {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10px;
    letter-spacing: 2px;
    color: var(--muted-2);
  }

  .info-card h3 {
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--muted);
  }

  .info-value {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: var(--ink);
    word-break: break-word;
    line-height: 1.5;
    margin-top: auto;
  }

  .info-value a {
    color: inherit;
    text-decoration: none;
    transition: color 0.25s ease;
    border-bottom: 1px solid var(--line-strong);
    padding-bottom: 2px;
  }

  .info-value a:hover {
    color: var(--accent);
    border-color: var(--accent);
  }

  /* ===== MAP + FORM ===== */
  .contact-grid {
    position: relative;
    z-index: 1;
    padding-bottom: 110px;
  }

  .map-card {
    background: var(--surface);
    border: 1px solid var(--line);
    position: relative;
    overflow: hidden;
    min-height: 560px;
    display: flex;
    flex-direction: column;
  }

  .map-form-grid {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 24px;
    align-items: stretch;
  }

  .map-card .map-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 14px 18px;
    border-bottom: 1px solid var(--line);
    background: var(--surface-2);
  }

  .map-card .map-head .lbl {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10.5px;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--muted);
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .map-card .map-head .lbl i {
    color: var(--accent);
  }

  .map-card .map-head .live {
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 9.5px;
    letter-spacing: 2px;
    color: var(--accent);
    text-transform: uppercase;
  }

  .map-card .map-head .live .b {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--accent);
    box-shadow: 0 0 10px 1px var(--accent-dim);
    animation: pulseDot 2s ease-in-out infinite;
  }

  .map-frame {
    flex: 1;
    position: relative;
    min-height: 480px;
    background: var(--surface-2);
  }

  .map-frame iframe {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    border: 0;
    display: block;
    filter: grayscale(0.35) invert(0.92) contrast(0.9);
    transition: filter 0.4s ease;
  }

  .map-card:hover .map-frame iframe {
    filter: grayscale(0.1) invert(0.92) contrast(0.95);
  }

  .map-frame::after {
    content: '';
    position: absolute;
    inset: 0;
    border: 1px solid rgba(244, 166, 55, 0);
    pointer-events: none;
    transition: border-color 0.35s ease;
  }

  .map-card:hover .map-frame::after {
    border-color: rgba(244, 166, 55, 0.28);
  }

  .form-card {
    background: var(--surface);
    border: 1px solid var(--line);
    position: relative;
    padding: clamp(22px, 3vw, 34px);
    display: flex;
    flex-direction: column;
  }

  .form-card::after {
    content: '';
    position: absolute;
    inset: 0;
    border: 1px solid transparent;
    pointer-events: none;
    transition: border-color 0.35s ease;
  }

  .form-card:hover::after {
    border-color: rgba(244, 166, 55, 0.18);
  }

  .form-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 24px;
    padding-bottom: 18px;
    border-bottom: 1px solid var(--line);
  }

  .form-title h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 22px;
    font-weight: 700;
    letter-spacing: -0.5px;
    color: var(--ink);
  }

  .form-title h3 span {
    color: var(--accent);
  }

  .form-title .ref {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10px;
    letter-spacing: 2px;
    color: var(--muted-2);
  }

  .form-card form {
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-bottom: 14px;
  }

  .field {
    display: flex;
    flex-direction: column;
    gap: 6px;
  }

  .field label {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--muted);
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .field label i {
    color: var(--accent);
    font-size: 8px;
  }

  .field input,
  .field textarea {
    width: 100%;
    background: var(--surface-2);
    border: 1px solid var(--line-strong);
    color: var(--ink);
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    padding: 12px 14px;
    outline: none;
    transition: border-color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
    resize: vertical;
  }

  .field input::placeholder,
  .field textarea::placeholder {
    color: var(--muted-2);
  }

  .field input:hover,
  .field textarea:hover {
    border-color: rgba(244, 245, 247, 0.28);
  }

  .field input:focus,
  .field textarea:focus {
    border-color: var(--accent);
    background: var(--surface-focus);
    box-shadow: 0 0 22px -8px var(--accent-dim);
  }

  .field textarea {
    min-height: 110px;
    flex: 1;
  }

  .form-bottom {
    margin-top: 20px;
    padding-top: 18px;
    border-top: 1px solid var(--line);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    flex-wrap: wrap;
  }

  .social-row {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .social-row .slbl {
    font-family: 'JetBrains Mono', monospace;
    font-size: 9.5px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--muted-2);
    margin-right: 2px;
  }

  .social-row a {
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--line-strong);
    color: var(--muted);
    text-decoration: none;
    font-size: 13px;
    transition: all 0.3s ease;
  }

  .social-row a:hover {
    border-color: var(--accent);
    color: var(--accent);
    background: var(--accent-subtle);
    box-shadow: 0 0 20px -8px var(--accent-dim);
    transform: translateY(-2px);
  }

  .btn-send {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: var(--accent);
    color: #0a0e1a;
    border: 1px solid var(--accent);
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 13px 26px;
    cursor: pointer;
    transition: all 0.35s ease;
  }

  .btn-send .arrow-ring {
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 1px solid rgba(10, 14, 26, 0.45);
    font-size: 11px;
    transition: transform 0.4s var(--transition-smooth), background 0.3s ease, border-color 0.3s ease;
  }

  .btn-send:hover {
    background: #f7c873;
    border-color: #f7c873;
    box-shadow: 0 12px 40px -10px var(--accent-dim);
    transform: translateY(-2px);
  }

  .btn-send:hover .arrow-ring {
    transform: translate(3px, -3px);
    background: rgba(10, 14, 26, 0.1);
  }

  .form-status {
    margin-top: 14px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 11px;
    letter-spacing: 1px;
  }

  /* ===== SCROLLBAR ===== */
  ::-webkit-scrollbar { width: 8px; height: 8px; }
  ::-webkit-scrollbar-track { background: var(--bg); }
  ::-webkit-scrollbar-thumb { background: var(--surface-2); border: 1px solid var(--line-strong); transition: background 0.3s ease; }
  ::-webkit-scrollbar-thumb:hover { background: var(--accent-dim); border-color: var(--accent); }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1080px) {
    .hero-title {
      font-size: 36px;
    }

    .contact-grid .map-form-grid {
      grid-template-columns: 1fr !important;
    }

    .map-card {
      min-height: auto;
    }

    .map-frame {
      min-height: 340px;
    }
  }

  @media (max-width: 960px) {
    .info-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
  }

  @media (max-width: 768px) {
    .hero-title {
      font-size: 28px;
    }

    .hero-bottom {
      align-items: flex-start;
    }

    .form-row {
      grid-template-columns: 1fr;
      gap: 14px;
    }
  }

  @media (max-width: 520px) {
    .info-grid {
      grid-template-columns: 1fr;
      gap: 14px;
    }
  }

  @media (max-width: 480px) {
    .hero-title {
      font-size: 20px;
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

    .form-bottom {
      flex-direction: column;
      align-items: stretch;
    }

    .btn-send {
      justify-content: center;
      width: 100%;
    }
  }

  @media (hover: none) {
    .info-card:hover,
    .btn-send:hover,
    .social-row a:hover {
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
        <div class="hero-eyebrow"><span class="dot"></span> Contact / Reach Us</div>

      </div>
      <div class="hero-bottom">
        <div class="hero-title-wrap">
          <div class="hero-title-row">

       
          </div>
          <h1 class="hero-title">
            <span class="t-word">Contact</span>
            <span class="t-row">
              <span class="t-grad">Us</span>
              <span class="t-slash">
             
           
              </span>
            </span>
          </h1>
        </div>
        <p class="hero-subtitle">Have a project in mind? We'd love to hear from you — drop us a line and our team will respond shortly.</p>
      </div>
    </div>
  </section>

  @php $c = $contacts->first(); @endphp

  <!-- ===== INFO PLATES ===== -->
  <section class="info-section">
    <div class="container">
    
      <div class="info-grid">

        <div class="info-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="info-top">
            <span class="info-icon"><i class="fa-solid fa-location-dot"></i></span>
            <span class="info-plate">// 01</span>
          </div>
          <h3>Address</h3>
          <p class="info-value">{!! $c->address ?? '' !!}</p>
        </div>

        <div class="info-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="info-top">
            <span class="info-icon"><i class="fa-solid fa-phone"></i></span>
            <span class="info-plate">// 02</span>
          </div>
          <h3>Phone</h3>
          <p class="info-value"><a href="tel:{{ $c->phone ?? '' }}">{{ $c->phone ?? '' }}</a></p>
        </div>

        <div class="info-card">
          <span class="corner tl"></span><span class="corner tr"></span><span class="corner bl"></span><span class="corner br"></span>
          <div class="info-top">
            <span class="info-icon"><i class="fa-solid fa-envelope"></i></span>
            <span class="info-plate">// 03</span>
          </div>
          <h3>Email</h3>
          <p class="info-value"><a href="mailto:{{ $c->email ?? '' }}">{{ $c->email ?? '' }}</a></p>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== MAP + FORM ===== -->
  <section class="contact-grid">
    <div class="container">
      <div class="section-head">
        <span class="lbl">Map / Get Directions</span>
        <span class="idx">VISIT OR MESSAGE — 02/02</span>
      </div>
      <div class="map-form-grid">

      <!-- LEFT: MAP -->
      <div class="map-card">
        <div class="map-head">
          <span class="lbl"><i class="fa-solid fa-map-location-dot"></i> Location / Headquarter</span>
          <span class="live"><span class="b"></span> Live</span>
        </div>
        <div class="map-frame">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8596995503444!2d90.35103507608738!3d23.823587585961263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1006cb54f2d%3A0x970526e9c2b197c6!2sInoodex!5e0!3m2!1sen!2sbd!4v1751177416023!5m2!1sen!2sbd"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <!-- RIGHT: FORM -->
      <div class="form-card">
        <div class="form-title">
          <h3>Send a <span>Message</span></h3>
          <span class="ref">[ INQ-{{ date('Y') }} ]</span>
        </div>
        <form action="{{ route('contact.store') }}" method="POST">
          @csrf
          <div class="form-row">
            <div class="field">
              <label><i class="fa-solid fa-circle"></i> Name *</label>
              <input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" required>
            </div>
            <div class="field">
              <label><i class="fa-solid fa-circle"></i> Email *</label>
              <input type="email" name="email" value="{{ old('email') }}" placeholder="you@domain.com" required>
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label><i class="fa-regular fa-circle"></i> Phone</label>
              <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+880 ...">
            </div>
            <div class="field">
              <label><i class="fa-regular fa-circle"></i> Subject</label>
              <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Project inquiry">
            </div>
          </div>
          <div class="field" style="flex:1;margin-bottom:16px;">
            <label><i class="fa-solid fa-circle"></i> Message *</label>
            <textarea name="message" placeholder="Tell us about your project..." required>{{ old('message') }}</textarea>
          </div>

          <div class="form-bottom">
            <div class="social-row">
              <span class="slbl">Follow</span>
              <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <button type="submit" class="btn-send">Send Message <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span></button>
          </div>
        </form>
      </div>

    </div>
    </div>
  </section>

  @include('layout.footer')

  @if (session('success'))
  <script>
  Swal.fire({
    icon: 'success',
    title: 'Thank you!',
    text: '{{ session('success') }}',
    confirmButtonColor: '#f4a637',
    background: '#131829',
    color: '#f4f5f7'
  })
  </script>
  @endif

  @if ($errors->any())
  <script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    html: `{!! implode('<br>', $errors->all()) !!}`,
    confirmButtonColor: '#d33',
    background: '#131829',
    color: '#f4f5f7'
  })
  </script>
  @endif
</body>

</html>