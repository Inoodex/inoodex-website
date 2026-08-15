<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body class="tt-magic-cursor">
    @include('layout.page_transition')

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
     @include('frontend.components.about') 
    <!-- About Section End -->
    
    <!-- Our Work Section Start -->
    {{-- @include('frontend.components.our_products')--}}
    <!-- Our Work Section End -->

    <!-- Our Services Section Start -->
    @include('frontend.components.services')
    <!-- Our Services Section End -->

    <!-- Our Work Section Start -->
    <!-- @include('frontend.components.our_work') -->
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
</body>

</html>
