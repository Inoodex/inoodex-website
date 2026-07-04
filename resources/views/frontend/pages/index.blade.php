<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body class="tt-magic-cursor">
    <!-- Preloader Start -->
    <div id="inoodex-preloader" style="position: fixed; inset: 0; z-index: 9999; background: #0f172a; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <div id="preloader-logo" style="font-size: 80px; font-weight: 900; color: #22c55e; letter-spacing: 4px; animation: preloaderBounce 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;">
            Inoodex
        </div>
        <div style="margin-top: 24px; width: 60px; height: 4px; background: rgba(34,197,94,0.2); border-radius: 4px; overflow: hidden;">
            <div style="width: 100%; height: 100%; background: #22c55e; border-radius: 4px; animation: preloaderBar 1.2s ease-in-out infinite;"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <style>
    @keyframes preloaderBounce {
        0% { transform: scale(0.3); opacity: 0; }
        20% { transform: scale(1.3); opacity: 1; }
        40% { transform: scale(0.7); opacity: 0.8; }
        55% { transform: scale(1.1); opacity: 1; }
        70% { transform: scale(0.85); }
        85% { transform: scale(1.05); }
        100% { transform: scale(1); opacity: 1; }
    }
    @keyframes preloaderBar {
        0% { transform: translateX(-100%); }
        50% { transform: translateX(0); }
        100% { transform: translateX(100%); }
    }
    </style>

    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- Magic Cursor End -->

    <!-- Header Start -->
    @include('layout.headerNav')
    <!-- Header End -->

    <!-- Hero Section Start -->
    @include('layout.hero2')
    <!-- Hero Section End -->

    <!-- Scrolling Ticker Section Start -->
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
    <!-- Scrolling Ticker Section End -->

    <!-- About Section Start -->
     @include('frontend.components.about') 
    <!-- About Section End -->
    
    <!-- Our Work Section Start -->
    {{-- @include('frontend.components.our_products')--}}
    <!-- Our Work Section End -->

    <!-- Our Services Section Start -->
    @include('frontend.components.services')
    <!-- Our Services Section End -->

    <!-- Our Work Section Start -->
    @include('frontend.components.our_work')
    <!-- Our Work Section End -->

    <!-- Why Choose Us Section Start -->
    @include('frontend.components.why_choose_us')
    <!-- Why Choose Us Section End -->
     <!-- Exclusive Partners Section Start -->
    @include('frontend.components.exclusive_partners')
    <!-- Exclusive Partners Section End -->
    <!-- industry  area start  -->
    @include('frontend.components.industry')
    <!-- industry  area end -->

    <!-- Clients Testimonials Section Start -->
    {{-- @include('frontend.components.testimonial') --}}
    <!-- Clients Testimonials Section End -->

    <!-- Latest News Section Start -->
    @include('frontend.components.blog', ['blogs' => $blogs])
    <!-- Latest News Section End -->

    <!-- Footer Start -->
    @include('layout.footer')
    <script>
    window.addEventListener('load', function() {
        setTimeout(function() {
            var preloader = document.getElementById('inoodex-preloader');
            preloader.style.transition = 'all 0.8s ease';
            preloader.style.opacity = '0';
            preloader.style.transform = 'scale(1.2)';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 800);
        }, 300);
    });
    </script>
</body>

</html>
