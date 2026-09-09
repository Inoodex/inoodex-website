<!DOCTYPE html>
<html lang="zxx">
<?php echo $__env->make('frontend.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<body class="tt-magic-cursor">

    <style>

    html {
        scroll-behavior: auto;
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
    <?php echo $__env->make('frontend.layout.headerNav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <?php echo $__env->make('frontend.layout.hero2', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
     <section class="home-section"><?php echo $__env->make('frontend.components.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></section> 
    <!-- About Section End -->
    
    <!-- Our Work Section Start -->
    
    <!-- Our Work Section End -->

    <!-- Our Services Section Start -->
    <section class="home-section"><?php echo $__env->make('frontend.components.services', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></section>
    <!-- Our Services Section End -->

    <!-- Our Work Section Start -->
    <!-- <?php echo $__env->make('frontend.components.our_work', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> -->
    <!-- Our Work Section End -->

    <!-- Why Choose Us Section Start -->
    <section class="home-section"><?php echo $__env->make('frontend.components.why_choose_us', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></section>
    <!-- Why Choose Us Section End -->
     
     <!-- Exclusive Partners Section Start -->
     
    <!-- Exclusive Partners Section End -->

    <!-- industry  area start  -->
    <section class="home-section"><?php echo $__env->make('frontend.components.industry', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></section>
    <!-- industry  area end -->

    <!-- Global Presence Section Start -->
   <section class="home-section"><?php echo $__env->make('frontend.components.global_presence', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></section> 
    <!-- Global Presence Section End -->

    <!-- Clients Testimonials Section Start -->
    
    <!-- Clients Testimonials Section End -->

    <!-- Latest News Section Start -->
    <section class="home-section"><?php echo $__env->make('frontend.components.blog', ['blogs' => $blogs], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?></section>
    <!-- Latest News Section End -->

    <!-- Footer Start -->
    <?php echo $__env->make('frontend.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
<?php /**PATH C:\laragon\www\inoodex_latest\resources\views/frontend/pages/index.blade.php ENDPATH**/ ?>