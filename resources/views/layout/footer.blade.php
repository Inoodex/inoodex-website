<style>
.main-footer .footer-about img {
    filter: none !important;
    -webkit-filter: none !important;
}
.main-footer {
    position: relative;
    overflow: hidden;
}
.main-footer::before {
    content: 'Inoodex';
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: clamp(120px, 20vw, 300px);
    font-weight: 900;
    color: rgba(34,197,94,0.025);
    pointer-events: none;
    white-space: nowrap;
    letter-spacing: 20px;
    text-transform: uppercase;
    line-height: 1;
    z-index: 0;
    animation: watermarkFloat 8s ease-in-out infinite;
}
@keyframes watermarkFloat {
    0% { transform: translate(-50%, -50%) scale(1) translateX(0); opacity: 0.3; }
    25% { transform: translate(-45%, -52%) scale(1.02) translateX(20px); opacity: 0.6; }
    50% { transform: translate(-50%, -48%) scale(0.98) translateX(-10px); opacity: 0.3; }
    75% { transform: translate(-55%, -51%) scale(1.01) translateX(15px); opacity: 0.5; }
    100% { transform: translate(-50%, -50%) scale(1) translateX(0); opacity: 0.3; }
}
</style>
<footer class="main-footer">
    <div class="max-w-7xl mx-auto px-4" style="position:relative;z-index:1;">
        <div class="footer-grid">
            <div class="footer-about-col">
                <div class="footer-about">
                    <figure>
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Logo" style="filter:none !important; -webkit-filter:none !important;" />
                    </figure>
                    <p>
                        Your trusted partner in digital innovation. We specialize
                        in delivering customized web design, software development,
                        SEO, and e-commerce solutions to help businesses grow and
                        thrive in today's competitive landscape.
                    </p>
                    <div class="footer-about-address">
                        {!! $contacts->address !!}
                    </div>
                    <div class="footer-contact-info">
                        <a href="#">{{ $contacts->email }}</a>
                        <a href="#">{{ $contacts->phone }}</a>
                    </div>
                    <div class="footer-social">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-links-col">
                <div class="footer-links">
                    <h2>pages</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/career') }}">Career</a></li>
                        <li><a href="{{ url('/blogs') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-links-col">
                <div class="footer-links">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="#">E-commerce</a></li>
                        <li><a href="#">Inventory & Pos</a></li>
                        <li><a href="#">booking software</a></li>
                        <li><a href="#">CRM & ERP</a></li>
                        <li><a href="#">School Management</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-links-col">
                <div class="footer-links">
                    <h2>services</h2>
                    <ul>
                        <li><a href="{{ url('/software-development') }}">software development</a></li>
                        <li><a href="{{ url('/apps-development') }}">mobile app development</a></li>
                        <li><a href="{{ url('/web-development') }}">web development</a></li>
                        <li><a href="#">digital marketing</a></li>
                        <li><a href="#">complete seo</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
                <div class="footer-copyright-text">
                    <p>&copy; 2025 <strong>Inoodex</strong>. All rights reserved.</p>
                </div>
                <div class="footer-policy-links">
                    <ul>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">terms of service</a></li>
                        <li><a href="#top" class="go-top" aria-label="Go to top"><i class="fa-solid fa-arrow-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/validator.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/jquery.slicknav.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/isotope.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/SmoothScroll.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/gsap.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/magiccursor.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/SplitText.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/wow.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/function.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
<script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js" defer></script>

<script defer>
document.addEventListener('DOMContentLoaded', function() {
    var $grid = $('.project-item-boxes');
    if ($grid.length) {
        $grid.isotope({
            itemSelector: '.project-item-box',
            layoutMode: 'fitRows'
        });
        $('.our-projects-nav a').on('click', function(e) {
            e.preventDefault();
            $('.our-projects-nav a').removeClass('active-btn');
            $(this).addClass('active-btn');
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
    }

    if (typeof Lenis !== 'undefined') {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            smoothWheel: true,
        });
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
    }
});
</script>
