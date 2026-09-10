<style>
  /* ================= GLOBAL PRESENCE SECTION ================= */
  .gp-section {
    position: relative;
    background: #0a0e1a;
    padding: 100px 20px 0px;
    overflow: hidden;
    font-family: 'Inter', sans-serif;
  }

  .gp-bg-glow {
    position: absolute;
    width: 850px;
    height: 850px;
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -46%);
    background: radial-gradient(circle, rgba(14, 165, 233, 0.18) 0%, rgba(244, 166, 55, 0.08) 38%, transparent 70%);
    filter: blur(90px);
    pointer-events: none;
    z-index: 0;
  }

  .gp-bg-glow-secondary {
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    bottom: 5%;
    right: 10%;
    background: radial-gradient(circle, rgba(244, 166, 55, 0.09) 0%, transparent 70%);
    filter: blur(70px);
    pointer-events: none;
    z-index: 0;
  }

  .gp-grid-overlay {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(to right, rgba(255, 255, 255, 0.015) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(255, 255, 255, 0.015) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
    z-index: 1;
    mask-image: radial-gradient(circle at center, black 40%, transparent 80%);
    -webkit-mask-image: radial-gradient(circle at center, black 40%, transparent 80%);
  }

  /* Section Header */
  .gp-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 35px;
    position: relative;
    z-index: 3;
  }

  .gp-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 22px;
    background: rgba(244, 166, 55, 0.08);
    border: 1px solid rgba(244, 166, 55, 0.3);
    border-radius: 50px;
    margin-bottom: 18px;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 20px rgba(244, 166, 55, 0.12);
  }

  .gp-badge-pill span {
    font-family: 'JetBrains Mono', monospace, sans-serif;
    font-size: 11.5px;
    font-weight: 700;
    letter-spacing: 2.2px;
    text-transform: uppercase;
    color: #f4a637;
  }

  .gp-title {
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(30px, 4.4vw, 48px);
    font-weight: 800;
    color: #f8fafc;
    line-height: 1.2;
    margin: 0;
    letter-spacing: -0.5px;
  }

  .gp-title .gp-highlight {
    background: linear-gradient(135deg, #f4a637 0%, #fcd34d 50%, #e69522 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  /* Main Globe Container */
  .gp-globe-wrapper {
    position: relative;
    max-width: 1240px;
    margin: 0 auto;
    z-index: 3;
    background: transparent;
    border: none;
  }

  .gp-globe-stage {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 9;
    max-height: 720px;
    background: transparent;
    border: none;
    box-shadow: none;
    overflow: visible;
  }

  .gp-globe-stage img.gp-main-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
    display: block;
    border: none;
    outline: none;
    mix-blend-mode: screen;
    mask-image: radial-gradient(circle at 50% 50%, #000 48%, rgba(0, 0, 0, 0.6) 58%, transparent 68%);
    -webkit-mask-image: radial-gradient(circle at 50% 50%, #000 48%, rgba(0, 0, 0, 0.6) 58%, transparent 68%);
    filter: drop-shadow(0 0 50px rgba(14, 165, 233, 0.3));
    transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    animation: gpGlobeFloat 8s ease-in-out infinite alternate;
  }

  @keyframes gpGlobeFloat {
    0% { transform: translateY(0px) scale(1); }
    100% { transform: translateY(-10px) scale(1.015); }
  }

  /* SVG Flight/Connection Tracks */
  .gp-connections-svg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 6;
    overflow: visible;
  }

  .gp-connections-svg path {
    fill: none;
    stroke-width: 1.6;
    stroke-dasharray: 6 6;
    animation: gpLineDash 16s linear infinite;
  }

  .gp-connections-svg path.arc-gold {
    stroke: rgba(244, 166, 55, 0.75);
    filter: drop-shadow(0 0 6px rgba(244, 166, 55, 0.95));
  }

  .gp-connections-svg path.arc-cyan {
    stroke: rgba(56, 189, 248, 0.7);
    filter: drop-shadow(0 0 6px rgba(56, 189, 248, 0.95));
  }

  @keyframes gpLineDash {
    to { stroke-dashoffset: -300; }
  }

  /* Interactive Hotspots */
  .gp-hotspot {
    position: absolute;
    transform: translate(-50%, -50%);
    z-index: 15;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 9px;
    transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .gp-hotspot:hover {
    transform: translate(-50%, -50%) scale(1.2);
    z-index: 30;
  }

  .gp-hotspot:hover .gp-marker-dot {
    transform: scale(1.3);
  }

  .gp-hotspot:hover .gp-loc-badge {
    transform: translateX(4px);
  }

  /* Radar Pulse */
  .gp-radar {
    position: absolute;
    top: 50%;
    left: 8px;
    transform: translate(-50%, -50%);
    pointer-events: none;
  }

  .gp-radar-ring {
    position: absolute;
    top: 50%;
    left: 50%;
    border-radius: 50%;
    border: 1.8px solid rgba(244, 166, 55, 0.85);
    transform: translate(-50%, -50%);
    animation: gpRadarPulse 3.2s cubic-bezier(0.1, 0.6, 0.35, 1) infinite;
  }

  .gp-radar-ring:nth-child(1) { width: 34px; height: 34px; animation-delay: 0s; }
  .gp-radar-ring:nth-child(2) { width: 62px; height: 62px; animation-delay: 1s; }
  .gp-radar-ring:nth-child(3) { width: 94px; height: 94px; animation-delay: 2s; }

  @keyframes gpRadarPulse {
    0% {
      transform: translate(-50%, -50%) scale(0.35);
      opacity: 1;
      border-color: rgba(244, 166, 55, 1);
    }
    100% {
      transform: translate(-50%, -50%) scale(2.4);
      opacity: 0;
      border-color: rgba(244, 166, 55, 0);
    }
  }

  /* Marker Pin Points */
  .gp-marker-dot {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #f4a637;
    border: 2px solid #ffffff;
    box-shadow: 0 0 16px #f4a637, 0 0 28px rgba(244, 166, 55, 0.85);
    position: relative;
    z-index: 2;
    flex-shrink: 0;
    transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .gp-hotspot:hover .gp-marker-dot {
    background: #ffc369;
    box-shadow: 0 0 22px #ffc369, 0 0 40px rgba(244, 166, 55, 1);
  }

  /* Location Badges */
  .gp-loc-badge {
    background: rgba(8, 14, 28, 0.94);
    border: 1.5px solid rgba(244, 166, 55, 0.55);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    padding: 7px 16px;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.65), 0 0 14px rgba(244, 166, 55, 0.18);
    pointer-events: none;
    transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .gp-hotspot:hover .gp-loc-badge {
    background: rgba(15, 23, 42, 0.98);
    border-color: #f4a637;
    box-shadow: 0 12px 35px rgba(244, 166, 55, 0.45), 0 0 22px rgba(244, 166, 55, 0.35);
  }

  .gp-loc-badge .gp-loc-icon {
    font-size: 13px;
    color: #f4a637;
    display: inline-flex;
    align-items: center;
  }

  .gp-loc-badge .gp-loc-name {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: 0.3px;
    text-shadow: 0 1px 4px rgba(0, 0, 0, 0.9);
  }

  /* Bangladesh HQ Badge */
  .gp-hotspot.gp-spot-hq .gp-marker-dot {
    width: 20px;
    height: 20px;
    background: radial-gradient(circle, #fff0c7 20%, #f4a637 80%);
    border: 2.5px solid #ffffff;
    box-shadow: 0 0 24px #f4a637, 0 0 45px rgba(244, 166, 55, 1);
  }

  .gp-hotspot.gp-spot-hq .gp-loc-badge {
    background: linear-gradient(135deg, rgba(244, 166, 55, 0.25) 0%, rgba(10, 16, 32, 0.96) 100%);
    border: 2px solid #f4a637;
    padding: 8px 18px;
    box-shadow: 0 12px 35px rgba(244, 166, 55, 0.4), 0 0 25px rgba(244, 166, 55, 0.25);
  }

  .gp-hotspot.gp-spot-hq .gp-loc-badge .gp-loc-name {
    font-size: 14px;
    font-weight: 800;
    color: #ffffff;
  }

  .gp-hotspot.gp-spot-hq .gp-loc-badge .gp-hq-tag {
    font-family: 'JetBrains Mono', monospace;
    font-size: 10px;
    font-weight: 800;
    background: #f4a637;
    color: #05060a;
    padding: 2px 7px;
    border-radius: 4px;
    letter-spacing: 0.8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
  }

  /* Mobile Ribbon */
  .gp-mobile-ribbon {
    display: none !important;
  }

  /* ===== CONTINUOUS FLOATING ANIMATIONS ===== */

  /* Header badge float */
  .gp-badge-pill {
    animation: gpBadgeFloat 4s ease-in-out infinite alternate;
  }
  @keyframes gpBadgeFloat {
    0% { transform: translateY(0); }
    100% { transform: translateY(-5px); }
  }

  /* Title glow pulse */
  .gp-title .gp-highlight {
    animation: gpHighlightGlow 3s ease-in-out infinite alternate;
  }
  @keyframes gpHighlightGlow {
    0% { filter: brightness(1) drop-shadow(0 0 0px rgba(244,166,55,0)); }
    100% { filter: brightness(1.15) drop-shadow(0 0 12px rgba(244,166,55,0.35)); }
  }

  /* Hotspot badges staggered float */
  .gp-hotspot:nth-child(1) { animation: gpSpotFloat 5s ease-in-out 0s infinite alternate; }
  .gp-hotspot:nth-child(2) { animation: gpSpotFloat 5.5s ease-in-out 0.4s infinite alternate; }
  .gp-hotspot:nth-child(3) { animation: gpSpotFloat 4.8s ease-in-out 0.8s infinite alternate; }
  .gp-hotspot:nth-child(4) { animation: gpSpotFloat 5.2s ease-in-out 1.2s infinite alternate; }
  .gp-hotspot:nth-child(5) { animation: gpSpotFloat 5.8s ease-in-out 0.6s infinite alternate; }
  .gp-hotspot:nth-child(6) { animation: gpSpotFloat 4.5s ease-in-out 1.0s infinite alternate; }
  .gp-hotspot:nth-child(7) { animation: gpSpotFloat 5s ease-in-out 1.4s infinite alternate; }

  @keyframes gpSpotFloat {
    0% { transform: translate(-50%, -50%) translateY(0px); }
    100% { transform: translate(-50%, -50%) translateY(-6px); }
  }

  .gp-hotspot:hover {
    animation-play-state: paused;
  }

  /* Marker dot breathe */
  .gp-marker-dot {
    animation: gpDotBreathe 2.5s ease-in-out infinite alternate;
  }
  @keyframes gpDotBreathe {
    0% { box-shadow: 0 0 16px #f4a637, 0 0 28px rgba(244,166,55,0.85); }
    100% { box-shadow: 0 0 22px #f4a637, 0 0 40px rgba(244,166,55,1); }
  }

  .gp-hotspot.gp-spot-hq .gp-marker-dot {
    animation: gpHQDotBreathe 2s ease-in-out infinite alternate;
  }
  @keyframes gpHQDotBreathe {
    0% { box-shadow: 0 0 24px #f4a637, 0 0 45px rgba(244,166,55,1); }
    100% { box-shadow: 0 0 32px #f4a637, 0 0 60px rgba(244,166,55,0.9); }
  }

  /* Background glow slow pulse */
  .gp-bg-glow {
    animation: gpGlowPulse 8s ease-in-out infinite alternate;
  }
  @keyframes gpGlowPulse {
    0% { opacity: 0.8; transform: translate(-50%, -46%) scale(1); }
    100% { opacity: 1; transform: translate(-50%, -46%) scale(1.08); }
  }

  .gp-bg-glow-secondary {
    animation: gpGlowPulse2 10s ease-in-out 2s infinite alternate;
  }
  @keyframes gpGlowPulse2 {
    0% { opacity: 0.7; transform: scale(1); }
    100% { opacity: 1; transform: scale(1.12); }
  }

  /* Responsive */
  @media (max-width: 860px) {
    .gp-connections-svg { display: none; }
  }

  @media (max-width: 768px) {
    .gp-section { padding: 60px 16px 0px; }
    .gp-header { margin-bottom: 20px; }
    .gp-globe-stage {
      width: 100%;
      height: clamp(400px, 94vw, 480px);
      aspect-ratio: auto;
      overflow: visible;
    }
    .gp-globe-stage img.gp-main-img {
      transform: scale(1.38);
      object-fit: contain;
      animation: gpGlobeFloatMobile 6s ease-in-out infinite alternate;
    }
    @keyframes gpGlobeFloatMobile {
      0% { transform: scale(1.38) translateY(0px); }
      100% { transform: scale(1.40) translateY(-6px); }
    }
    .gp-loc-badge { padding: 4px 10px; gap: 5px; }
    .gp-loc-badge .gp-loc-name { font-size: 11px; }
    .gp-loc-badge .gp-loc-icon { font-size: 10px; }
    .gp-marker-dot { width: 12px; height: 12px; }
    .gp-hotspot.gp-spot-hq .gp-marker-dot { width: 16px; height: 16px; }
    .gp-hotspot.gp-spot-hq .gp-loc-badge { padding: 5px 12px; }
    .gp-hotspot.gp-spot-hq .gp-loc-badge .gp-loc-name { font-size: 12px; }
    .gp-hotspot[title="Denmark"] { left: 25%; top: 10%; }
    .gp-hotspot[title="Romania"] { left: 55%; top: 15%; }
    .gp-hotspot[title="USA"] { left: 8%; top: 48%; }
    .gp-hotspot[title="Saudi Arabia"] { left: 30%; top: 60%; }
    .gp-hotspot[title="Dubai (UAE)"] { left: 68%; top: 55%; }
    .gp-hotspot.gp-spot-hq { left: 80%; top: 38%; }
    .gp-hotspot[title="Australia"] { left: 80%; top: 80%; }
    .gp-hotspot[title="Denmark"] .gp-loc-badge,
    .gp-hotspot[title="Romania"] .gp-loc-badge,
    .gp-hotspot[title="USA"] .gp-loc-badge,
    .gp-hotspot[title="Saudi Arabia"] .gp-loc-badge { transform: translateX(-80%); }
  }

  @media (max-width: 480px) {
    .gp-section { padding: 50px 12px 0px; }
    .gp-globe-stage { height: clamp(380px, 96vw, 440px); }
    .gp-globe-stage img.gp-main-img { transform: scale(1.44); }
    @keyframes gpGlobeFloatMobile {
      0% { transform: scale(1.44) translateY(0px); }
      100% { transform: scale(1.46) translateY(-5px); }
    }
    .gp-loc-badge { padding: 3.5px 8px; }
    .gp-loc-badge .gp-loc-name { font-size: 10px; }
    .gp-hotspot.gp-spot-hq .gp-loc-badge .gp-loc-name { font-size: 11px; }
    .gp-hotspot[title="Denmark"] { left: 22%; top: 8%; }
    .gp-hotspot[title="Romania"] { left: 58%; top: 12%; }
    .gp-hotspot[title="USA"] { left: 5%; top: 45%; }
    .gp-hotspot[title="Saudi Arabia"] { left: 28%; top: 62%; }
    .gp-hotspot[title="Dubai (UAE)"] { left: 72%; top: 52%; }
    .gp-hotspot.gp-spot-hq { left: 82%; top: 35%; }
    .gp-hotspot[title="Australia"] { left: 82%; top: 82%; }
    .gp-hotspot[title="Denmark"] .gp-loc-badge,
    .gp-hotspot[title="Romania"] .gp-loc-badge,
    .gp-hotspot[title="USA"] .gp-loc-badge,
    .gp-hotspot[title="Saudi Arabia"] .gp-loc-badge { transform: translateX(-80%); }
  }
</style>

<div class="gp-section">
  <div class="gp-bg-glow"></div>
  <div class="gp-bg-glow-secondary"></div>
  <div class="gp-grid-overlay"></div>

  <div class="gp-header">
    <div class="gp-badge-pill">
      <span>✦ Global Presence</span>
    </div>
    <h2 class="gp-title">
      Connecting Worldwide <span class="gp-highlight">From Bangladesh</span>
    </h2>
  </div>

  <div class="gp-globe-wrapper">
    <div class="gp-globe-stage">
      <img
        src="<?php echo e(asset('frontend/assets/images/global-presence-earth.jpg')); ?>"
        alt="Inoodex Global Presence Network"
        class="gp-main-img"
        loading="lazy"
      >

      <svg class="gp-connections-svg" viewBox="0 0 1000 562.5" preserveAspectRatio="none">
        <path d="M 700 242 C 520 70, 320 160, 220 281" class="arc-gold" />
        <path d="M 700 242 C 610 140, 520 110, 450 124" class="arc-gold" />
        <path d="M 700 242 C 630 170, 570 150, 510 180" class="arc-cyan" />
        <path d="M 700 242 C 640 250, 590 270, 540 292" class="arc-gold" />
        <path d="M 700 242 C 660 235, 635 240, 610 248" class="arc-cyan" />
        <path d="M 700 242 C 750 260, 800 320, 820 382" class="arc-cyan" />
      </svg>

      <!-- USA -->
      <div class="gp-hotspot" style="left: 22%; top: 50%;" title="USA">
        <div class="gp-marker-dot"></div>
        <div class="gp-loc-badge">
          <span class="gp-loc-icon"><i class="fa-solid fa-location-dot"></i></span>
          <span class="gp-loc-name">USA</span>
        </div>
      </div>

      <!-- Denmark -->
      <div class="gp-hotspot" style="left: 45%; top: 22%;" title="Denmark">
        <div class="gp-marker-dot"></div>
        <div class="gp-loc-badge">
          <span class="gp-loc-icon"><i class="fa-solid fa-location-dot"></i></span>
          <span class="gp-loc-name">Denmark</span>
        </div>
      </div>

      <!-- Romania -->
      <div class="gp-hotspot" style="left: 51%; top: 32%;" title="Romania">
        <div class="gp-marker-dot"></div>
        <div class="gp-loc-badge">
          <span class="gp-loc-icon"><i class="fa-solid fa-location-dot"></i></span>
          <span class="gp-loc-name">Romania</span>
        </div>
      </div>

      <!-- Saudi Arabia -->
      <div class="gp-hotspot" style="left: 54%; top: 52%;" title="Saudi Arabia">
        <div class="gp-marker-dot"></div>
        <div class="gp-loc-badge">
          <span class="gp-loc-icon"><i class="fa-solid fa-location-dot"></i></span>
          <span class="gp-loc-name">Saudi Arabia</span>
        </div>
      </div>

      <!-- Dubai -->
      <div class="gp-hotspot" style="left: 65%; top: 52%;" title="Dubai (UAE)">
        <div class="gp-marker-dot"></div>
        <div class="gp-loc-badge">
          <span class="gp-loc-icon"><i class="fa-solid fa-location-dot"></i></span>
          <span class="gp-loc-name">Dubai</span>
        </div>
      </div>

      <!-- Bangladesh HQ -->
      <div class="gp-hotspot gp-spot-hq" style="left: 70%; top: 43%;" title="Inoodex Global HQ - Bangladesh">
        <div class="gp-radar">
          <div class="gp-radar-ring"></div>
          <div class="gp-radar-ring"></div>
          <div class="gp-radar-ring"></div>
        </div>
        <div class="gp-marker-dot"></div>
        <div class="gp-loc-badge">
          <span class="gp-loc-icon"><i class="fa-solid fa-building-flag"></i></span>
          <span class="gp-loc-name">Bangladesh</span>
          <span class="gp-hq-tag">HQ</span>
        </div>
      </div>

      <!-- Australia -->
      <div class="gp-hotspot" style="left: 82%; top: 68%;" title="Australia">
        <div class="gp-marker-dot"></div>
        <div class="gp-loc-badge">
          <span class="gp-loc-icon"><i class="fa-solid fa-location-dot"></i></span>
          <span class="gp-loc-name">Australia</span>
        </div>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\laragon\www\inoodex_latest\resources\views/frontend/components/global_presence.blade.php ENDPATH**/ ?>