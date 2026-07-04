<div class="hero">
    <!-- Swiper -->
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 (আপনার অরিজিনাল কন্টেন্ট) -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <!-- Hero Content Start -->
                            <div class="hero-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Welcome To Inoodex</h3>
                                    <h1 class="text-anime-style-3">
                                        Professional Software Development Company In Bangladesh
                                    </h1>
                                </div>
                                <!-- Section Title End -->
                                <!-- Hero Body Start -->
                                <div class="hero-body">
                                    <p class="wow fadeInUp" data-wow-delay="0.5s">
                                        We are dedicated to understanding your vision and working
                                        closely with you to bring it to life. Our agile approach
                                        ensures that we adapt to changing needs, providing solutions
                                        that are scalable and future-proof.
                                    </p>
                                </div>
                                <!-- Hero Body End -->
                                <!-- Hero Footer Start -->
                                <div class="hero-footer">
                                    <a href="{{ url('/contact') }}" class="btn-default wow fadeInUp" data-wow-delay="0.75s">
                                        let's talk
                                    </a>
                                </div>
                                <!-- Hero Footer End -->
                            </div>
                            <!-- Hero Left Content End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Hero Video Image Start -->
                            <div class="hero-video-image">
                                <div class="hero-image">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('frontend/assets/images/hero-img.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Hero Video Image End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 (উদাহরণ – আপনি এখানে নতুন কন্টেন্ট/ইমেজ যোগ করুন) -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Another Great Service</h3>
                                    <h1 class="text-anime-style-3">We Build Amazing Web Apps</h1>
                                </div>
                                <div class="hero-body">
                                    <p class="wow fadeInUp" data-wow-delay="0.5s">
                                        Our expert team delivers custom solutions with modern technologies.
                                    </p>
                                </div>
                                <div class="hero-footer">
                                    <a href="{{ url('/contact') }}" class="btn-default wow fadeInUp" data-wow-delay="0.75s">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="hero-video-image">
                                <div class="hero-image">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('frontend/assets/images/another-img.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- আরও স্লাইড যোগ করতে চাইলে এখানে কপি করে নতুন কন্টেন্ট দিন -->

        </div>

        <!-- Pagination & Navigation -->
        <!--<div class="swiper-pagination"></div>-->
        <!--<div class="swiper-button-next"></div>-->
        <!--<div class="swiper-button-prev"></div>-->
    </div>
</div>