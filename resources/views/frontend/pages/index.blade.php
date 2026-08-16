<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body class="tt-magic-cursor">
    @include('layout.page_transition')

    <style>
    html {
        scroll-behavior: smooth;
    }
    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
    }
    .tt-magic-cursor #ball {
        will-change: transform;
    }
    .home-section {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        will-change: opacity, transform;
    }
    .home-section.home-visible {
        opacity: 1;
        transform: translateY(0);
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
    <div class="scrolling-ticker" style="background:#0a0a0a !important;">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content" style="color:#f4a637 !important;">
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Web Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Software Development</span>
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> App Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Digital Marketing</span>
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> SEO Optimization</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Data Analysis</span>
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Digital Marketing</span>
            </div>

            <div class="scrolling-content" style="color:#f4a637 !important;">
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Web Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Software Development</span>
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> App Development</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Digital Marketing</span>
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> SEO Optimization</span>
                <span style="color:#94a3b8 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Data Analysis</span>
                <span style="color:#f4a637 !important;"><i class="fa-solid fa-circle" style="color:#f4a637 !important;font-size:6px;"></i> Digital Marketing</span>
            </div>
        </div>
    </div> 
    <!-- Scrolling Ticker Section End -->

    <!-- About Section Start -->
     <section class="home-section">@include('frontend.components.about')</section> 
    <!-- About Section End -->
    
    <!-- Our Work Section Start -->
    {{-- @include('frontend.components.our_products')--}}
    <!-- Our Work Section End -->

    <!-- Our Services Section Start -->
    <section class="home-section">@include('frontend.components.services')</section>
    <!-- Our Services Section End -->

    <!-- Our Work Section Start -->
    <!-- @include('frontend.components.our_work') -->
    <!-- Our Work Section End -->

    <!-- Why Choose Us Section Start -->
    <section class="home-section">@include('frontend.components.why_choose_us')</section>
    <!-- Why Choose Us Section End -->
     <!-- Exclusive Partners Section Start -->
    <section class="home-section">@include('frontend.components.exclusive_partners')</section>
    <!-- Exclusive Partners Section End -->
    <!-- industry  area start  -->
    <section class="home-section">@include('frontend.components.industry')</section>
    <!-- industry  area end -->

    <!-- Clients Testimonials Section Start -->
    {{-- @include('frontend.components.testimonial') --}}
    <!-- Clients Testimonials Section End -->

    <!-- Latest News Section Start -->
    <section class="home-section">@include('frontend.components.blog', ['blogs' => $blogs])</section>
    <!-- Latest News Section End -->

    <!-- Footer Start -->
    @include('layout.footer')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var sections = document.querySelectorAll('.home-section');
        if (!('IntersectionObserver' in window)) {
            sections.forEach(function(s) { s.classList.add('home-visible'); });
            return;
        }
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('home-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
        sections.forEach(function(s) { observer.observe(s); });
    });
    </script>
</body>

</html>
