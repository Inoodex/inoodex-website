<style>
.main-footer .footer-about img {
    filter: none !important;
    -webkit-filter: none !important;
}
.main-footer {
    position: relative;
    overflow: hidden;
    background: #080a0e;
    padding: 80px 0 0;
    color: #94a3b8;
}
.footer-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1fr;
    gap: 40px;
    margin-bottom: 50px;
}
.footer-about img {
    margin-bottom: 24px;
    width: 147px;
    height: auto;
}
.footer-about p {
    font-size: 15px;
    line-height: 1.7;
    color: #94a3b8;
    margin-bottom: 20px;
    max-width: 400px;
}
.footer-about-address {
    display: flex;
    font-size: 14px;
    color: #94a3b8;
    margin-bottom: 4px;
    line-height: 1.5;
}
.footer-about-address p {
    margin: 0;
}
.footer-contact-info {
    display: flex;
    flex-direction: column;
    gap: 0px;
    margin-bottom: 14px;
}
.footer-contact-info a {
    color: #94a3b8;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s;
}
.footer-contact-info a:hover {
    color: #f4a637;
}
.footer-social {
    display: flex;
    gap: 12px;
}
.footer-social .social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(255,255,255,0.06);
    color: #94a3b8;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
}
.footer-social .social-icon:hover {
    background: #f4a637;
    color: #ffffff;
    transform: translateY(-3px);
}
.footer-links-col {
    min-width: 0;
}
.footer-links h2 {
    font-size: 18px;
    font-weight: 700;
    color: #f1f5f9;
    text-transform: capitalize;
    margin-bottom: 24px;
    position: relative;
    padding-bottom: 12px;
}
.footer-links h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 2px;
    background: #f4a637;
    border-radius: 2px;
}
.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.footer-links ul li {
    margin-bottom: 12px;
    text-transform: capitalize;
    transition: all 0.3s ease-in-out;
}
.footer-links ul li a {
    color: #94a3b8;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.footer-links ul li a::before {
    content: '\f105';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    font-size: 12px;
    color: #f4a637;
    opacity: 0;
    transform: translateX(-4px);
    transition: all 0.3s ease;
}
.footer-links ul li:hover a::before {
    opacity: 1;
    transform: translateX(0);
}
.footer-links ul li:hover a {
    color: #f4a637;
    transform: translateX(4px);
}
.footer-copyright {
    padding: 24px 0;
    border-top: 1px solid rgba(255,255,255,0.08);
    position: relative;
}
.footer-copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #64748b;
}
.footer-copyright-text p strong {
    color: #e2e8f0;
}
.footer-policy-links ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
}
.footer-policy-links ul li {
    text-transform: capitalize;
}
.footer-policy-links ul li a {
    color: #64748b;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.3s;
}
.footer-policy-links ul li a:hover {
    color: #f4a637;
}
.footer-policy-links ul li .go-top {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 16px;
    background: rgba(255,255,255,0.06);
    border-radius: 8px;
    color: #94a3b8;
    transition: all 0.3s;
}
.footer-policy-links ul li .go-top:hover {
    background: #f4a637;
    color: #ffffff;
}
.footer-copyright-bar {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 14px;
    position: relative;
    text-align: center;
}
.footer-copyright-bar .footer-copyright-text {
    margin: 0;
}
.footer-copyright-bar .footer-policy-links {
    margin: 0;
}
@media (min-width: 1024px) {
    .footer-copyright-bar {
        justify-content: space-between;
        text-align: left;
    }
    .footer-copyright-bar .footer-copyright-text {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        white-space: nowrap;
    }
}
@media (max-width: 992px) {
    .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }
}
@media (max-width: 640px) {
    .footer-grid {
        grid-template-columns: 1fr;
        gap: 28px;
    }
    .main-footer {
        padding: 40px 0 0;
    }
    .footer-about {
        margin-bottom: 30px;
    }
    .footer-links h2 {
        font-size: 20px;
    }
    .footer-links ul li {
        margin-bottom: 10px;
    }
}
.main-footer::before {
    content: 'Inoodex';
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: clamp(120px, 20vw, 300px);
    font-weight: 900;
    color: rgba(244,166,55,0.025);
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
                        <img src="<?php echo e(asset('frontend/assets/images/logo.png')); ?>" alt="Logo" style="filter:none !important; -webkit-filter:none !important;" />
                    </figure>
                    <p>
                        Your trusted partner in digital innovation. We specialize
                        in delivering customized web design, software development,
                        SEO, and e-commerce solutions to help businesses grow and
                        thrive in today's competitive landscape.
                    </p>
                 
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
                        <li><a href="<?php echo e(url('/software-development')); ?>">software development</a></li>
                        <li><a href="<?php echo e(url('/apps-development')); ?>">mobile app development</a></li>
                        <li><a href="<?php echo e(url('/web-development')); ?>">web development</a></li>
                        <li><a href="#">digital marketing</a></li>
                        <li><a href="#">complete seo</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-links-col">
                <div class="footer-links">
                    <h2>address</h2>
                    <div class="footer-about-address">
                        <?php echo $contacts->address; ?>

                    </div>
                    <div class="footer-contact-info">
                        <a href="#"><?php echo e($contacts->email); ?></a>
                        <a href="#"><?php echo e($contacts->phone); ?></a>
                    </div>
                       <div class="footer-social">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="footer-copyright-bar">
                <div class="footer-copyright-text">
                    <p>&copy; <?php echo e(date('Y')); ?> <strong>Inoodex</strong>. All rights reserved.</p>
                </div>
                <div class="footer-policy-links">
                    <ul>
                        <!-- <li><a href="#">privacy policy</a></li>
                        <li><a href="#">terms of service</a></li> -->
                        <li><a href="#top" class="go-top" aria-label="Go to top"><i class="fa-solid fa-arrow-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo e(asset('frontend/assets/js/jquery-3.7.1.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/validator.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/jquery.slicknav.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/swiper-bundle.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/jquery.waypoints.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/jquery.counterup.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/isotope.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/jquery.magnific-popup.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/SmoothScroll.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/gsap.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/magiccursor.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/SplitText.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/ScrollTrigger.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/wow.js')); ?>" defer></script>
<script src="<?php echo e(asset('frontend/assets/js/function.js')); ?>" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

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
});
</script><?php /**PATH C:\laragon\www\inoodex_latest\resources\views/frontend/layout/footer.blade.php ENDPATH**/ ?>