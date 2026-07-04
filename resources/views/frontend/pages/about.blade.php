<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body class="tt-magic-cursor" style="background:#020617;color:#e2e8f0;">

  <!-- Magic Cursor Start -->
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <!-- Magic Cursor End -->

  <!-- Header Start -->
  @include('layout.headerNav')
  <!-- Header End -->

  <!-- Hero Section Start -->
  <!-- Hero Section End -->

  <!-- Main body content start -->

  <!-- Page About Section Start -->
  @include('frontend.components.about')
  <!-- Page About Section End -->

  <!-- Scrolling Ticker Section Start -->
  {{-- <div class="scrolling-ticker"
    style="background:#0f172a;padding:40px 0;border-top:1px solid rgba(255,255,255,0.05);border-bottom:1px solid rgba(255,255,255,0.05);">
    <div class="scrolling-ticker-box flex" style="display:flex;overflow:hidden;white-space:nowrap;">
      <div class="scrolling-content flex"
        style="display:flex;gap:80px;animation:scrollTicker 25s linear infinite;flex-shrink:0;">

        <!-- 1: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Web Development
        </span>
        <!-- 2: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Software Development
        </span>
        <!-- 3: GRAY -->
        <span
          style="color:#94a3b8;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>App Development
        </span>
        <!-- 4: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Digital Marketing
        </span>
        <!-- 5: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>SEO Optimization
        </span>
        <!-- 6: GRAY -->
        <span
          style="color:#94a3b8;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Data Analysis
        </span>
        <!-- 7: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Digital Marketing
        </span>

      </div>

      <!-- SECOND ROW (mirror) -->
      <div class="scrolling-content flex"
        style="display:flex;gap:80px;animation:scrollTicker 25s linear infinite;flex-shrink:0;">

        <!-- 1: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Web Development
        </span>
        <!-- 2: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Software Development
        </span>
        <!-- 3: GRAY -->
        <span
          style="color:#94a3b8;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>App Development
        </span>
        <!-- 4: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Digital Marketing
        </span>
        <!-- 5: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>SEO Optimization
        </span>
        <!-- 6: GRAY -->
        <span
          style="color:#94a3b8;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Data Analysis
        </span>
        <!-- 7: GREEN -->
        <span
          style="color:#22c55e;font-weight:900;font-size:32px;display:flex;align-items:center;gap:16px;text-transform:uppercase;letter-spacing:3px;">
          <i class="fa-solid fa-circle" style="font-size:12px;color:#22c55e;"></i>Digital Marketing
        </span>

      </div>
    </div>
  </div> --}}

  <div class="scrolling-ticker" style="background:#111827 !important;">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content" style="color:#22c55e !important;">
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Web Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Software Development</span>
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> App Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Digital Marketing</span>
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> SEO Optimization</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Data Analysis</span>
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Digital Marketing</span>
            </div>

            <div class="scrolling-content" style="color:#22c55e !important;">
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Web Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Software Development</span>
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> App Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Digital Marketing</span>
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> SEO Optimization</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Data Analysis</span>
                <span style="color:#22c55e !important;"><i class="fa-solid fa-circle" style="color:#22c55e !important;font-size:6px;"></i> Digital Marketing</span>
            </div>
        </div>
    </div> 

  <style>
  @keyframes scrollTicker {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  .scrolling-ticker-box {
    display: flex;
    overflow: hidden;
    white-space: nowrap;
  }

  .scrolling-content {
    display: flex;
    gap: 80px;
    animation: scrollTicker 25s linear infinite;
    flex-shrink: 0;
  }

  .scrolling-ticker-box:hover .scrolling-content {
    animation-play-state: paused;
  }
  </style>
  <!-- Scrolling Ticker Section End -->

  <!-- Why Choose Us Section Start -->
  @include('frontend.components.why_choose_us')
  <!-- Why Choose us Section End -->

  <!-- industry  area start  -->
  @include('frontend.components.industry')
  <!-- industry  area end -->

  <!-- Exclusive Partners Section Start -->
  @include('frontend.components.exclusive_partners')
  <!-- Exclusive Partners Section End -->

  <!-- Our Team Section Start -->
  {{-- @include('frontend.components.our_team')--}}
  <!-- Our Team Section End -->

  <!-- Main body content End -->

  <!-- Footer Start -->
  @include('layout.footer')
</body>

</html>