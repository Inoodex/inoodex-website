<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apps Development | Inoodex</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer>
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer>
  </script>
  <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js" defer>
  </script>

  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background: #05080f;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: #e2e8f0;
    min-height: 100vh;
    padding: 60px 20px;
    overflow-x: hidden;
  }

  /* ===== GLOW ORBS ===== */
  .glow-orb {
    position: fixed;
    border-radius: 50%;
    filter: blur(150px);
    pointer-events: none;
    z-index: 0;
  }

  .glow-orb-1 {
    width: 700px;
    height: 700px;
    top: -20%;
    right: -10%;
    background: rgba(34, 197, 94, 0.04);
    animation: orbFloat 14s ease-in-out infinite;
  }

  .glow-orb-2 {
    width: 600px;
    height: 600px;
    bottom: -20%;
    left: -10%;
    background: rgba(59, 130, 246, 0.03);
    animation: orbFloat 18s ease-in-out infinite reverse;
  }

  .glow-orb-3 {
    width: 500px;
    height: 500px;
    top: 40%;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(124, 58, 237, 0.02);
    animation: orbFloat 16s ease-in-out infinite;
  }

  @keyframes orbFloat {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    33% {
      transform: translate(40px, -50px) scale(1.1);
    }

    66% {
      transform: translate(-30px, 40px) scale(0.9);
    }
  }

  /* ===== CONTAINER ===== */
  .service-single-container {
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }

  /* ===== BREADCRUMB ===== */
  .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: #64748b;
    margin-bottom: 24px;
  }

  .breadcrumb a {
    color: #64748b;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .breadcrumb a:hover {
    color: #22c55e;
  }

  .breadcrumb .separator {
    color: #334155;
  }

  .breadcrumb .current {
    color: #e2e8f0;
    font-weight: 600;
  }

  /* ===== LAYOUT ===== */
  .service-layout {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    align-items: start;
  }

  /* ===== MAIN CONTENT ===== */
  .service-main {
    display: flex;
    flex-direction: column;
    gap: 32px;
  }

  /* ===== FEATURED IMAGE ===== */
  .featured-image {
    border-radius: 24px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.04);
    position: relative;
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.02), rgba(59, 130, 246, 0.02));
  }

  .featured-image img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .featured-image:hover img {
    transform: scale(1.02);
  }

  .featured-image .image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(0deg, rgba(5, 8, 15, 0.6), transparent 50%);
    pointer-events: none;
  }

  .featured-image .floating-badge {
    position: absolute;
    top: 24px;
    right: 24px;
    background: rgba(5, 8, 15, 0.7);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 12px;
    padding: 12px 18px;
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 2;
    animation: floatBadge 4s ease-in-out infinite;
  }

  @keyframes floatBadge {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-6px);
    }
  }

  .featured-image .floating-badge .icon-wrap {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.15), rgba(59, 130, 246, 0.08));
    border: 1px solid rgba(34, 197, 94, 0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #22c55e;
  }

  .featured-image .floating-badge .text h4 {
    font-size: 13px;
    font-weight: 700;
    color: #ffffff;
  }

  .featured-image .floating-badge .text p {
    font-size: 11px;
    color: #94a3b8;
  }

  /* ===== ENTRY CONTENT ===== */
  .entry-content {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .entry-content .badge {
    display: inline-block;
    background: rgba(34, 197, 94, 0.08);
    color: #22c55e;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 5px 16px;
    border-radius: 50px;
    border: 1px solid rgba(34, 197, 94, 0.05);
    width: fit-content;
  }

  .entry-content h2 {
    font-size: 32px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -0.5px;
    line-height: 1.2;
  }

  .entry-content h2 span {
    background: linear-gradient(135deg, #22c55e, #3b82f6, #a78bfa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 200% 200%;
    animation: gradientMove 6s ease-in-out infinite;
  }

  @keyframes gradientMove {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  .entry-content p {
    font-size: 15px;
    color: #94a3b8;
    line-height: 1.8;
  }

  .entry-content .highlight-box {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 16px;
    padding: 28px 32px;
    margin: 8px 0;
    transition: all 0.4s ease;
  }

  .entry-content .highlight-box:hover {
    border-color: rgba(34, 197, 94, 0.06);
    background: rgba(255, 255, 255, 0.03);
  }

  .entry-content .highlight-box h4 {
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .entry-content .highlight-box h4 i {
    color: #22c55e;
  }

  .entry-content .highlight-box ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .entry-content .highlight-box ul li {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    font-size: 14px;
    color: #cbd5e1;
    line-height: 1.6;
    padding: 8px 12px;
    border-radius: 10px;
    transition: all 0.3s ease;
  }

  .entry-content .highlight-box ul li:hover {
    background: rgba(255, 255, 255, 0.02);
  }

  .entry-content .highlight-box ul li::before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    color: #22c55e;
    font-size: 13px;
    margin-top: 2px;
    flex-shrink: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: rgba(34, 197, 94, 0.06);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .entry-content .highlight-box ul li strong {
    color: #ffffff;
    font-weight: 600;
  }

  /* ===== SIDEBAR ===== */
  .service-sidebar {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  /* ===== SIDEBAR CARD ===== */
  .sidebar-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 24px;
    padding: 32px 28px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: all 0.4s ease;
  }

  .sidebar-card:hover {
    border-color: rgba(34, 197, 94, 0.06);
    background: rgba(255, 255, 255, 0.03);
    transform: translateY(-4px);
  }

  .sidebar-card .icon-wrap {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.08), rgba(59, 130, 246, 0.04));
    border: 1px solid rgba(34, 197, 94, 0.04);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #22c55e;
    margin-bottom: 16px;
  }

  .sidebar-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 16px;
  }

  .sidebar-card ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 24px;
  }

  .sidebar-card ul li {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    color: #94a3b8;
    padding: 6px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.02);
    transition: all 0.3s ease;
  }

  .sidebar-card ul li:last-child {
    border-bottom: none;
  }

  .sidebar-card ul li::before {
    content: '\f111';
    font-family: 'Font Awesome 6 Free';
    font-weight: 400;
    color: #22c55e;
    font-size: 7px;
    flex-shrink: 0;
    opacity: 0.5;
  }

  .sidebar-card ul li:hover {
    color: #e2e8f0;
    padding-left: 4px;
  }

  .btn-primary-glow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 14px 24px;
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: #ffffff;
    font-weight: 600;
    font-size: 15px;
    border-radius: 14px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 24px rgba(34, 197, 94, 0.15);
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .btn-primary-glow:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 12px 40px rgba(34, 197, 94, 0.30);
  }

  /* ===== QUICK CONTACT ===== */
  .quick-contact {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px 20px;
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    transition: all 0.3s ease;
  }

  .quick-contact:hover {
    background: rgba(255, 255, 255, 0.03);
    border-color: rgba(34, 197, 94, 0.06);
  }

  .quick-contact .icon-box {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(34, 197, 94, 0.06);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #22c55e;
    font-size: 18px;
    flex-shrink: 0;
  }

  .quick-contact .text h4 {
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
  }

  .quick-contact .text p {
    font-size: 12px;
    color: #64748b;
  }

  .quick-contact .text a {
    color: #22c55e;
    text-decoration: none;
    font-weight: 500;
    font-size: 13px;
    transition: color 0.3s ease;
  }

  .quick-contact .text a:hover {
    color: #4ade80;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1024px) {
    .service-layout {
      grid-template-columns: 1fr;
      gap: 32px;
    }
  }

  @media (max-width: 768px) {
    .entry-content h2 {
      font-size: 26px;
    }

    .entry-content .highlight-box {
      padding: 20px;
    }

    .sidebar-card {
      padding: 24px 20px;
    }

    .featured-image .floating-badge {
      top: 16px;
      right: 16px;
      padding: 10px 14px;
    }

    .featured-image .floating-badge .text h4 {
      font-size: 12px;
    }

    .featured-image .floating-badge .text p {
      font-size: 10px;
    }
  }

  @media (max-width: 480px) {
    .entry-content h2 {
      font-size: 22px;
    }

    .entry-content p {
      font-size: 14px;
    }

    .entry-content .highlight-box ul li {
      font-size: 13px;
      padding: 6px 8px;
    }

    .sidebar-card {
      padding: 20px 16px;
    }

    .sidebar-card h3 {
      font-size: 16px;
    }

    .sidebar-card ul li {
      font-size: 13px;
    }

    .btn-primary-glow {
      font-size: 14px;
      padding: 12px 20px;
    }

    .breadcrumb {
      font-size: 12px;
      flex-wrap: wrap;
    }

    .featured-image .floating-badge {
      top: 12px;
      right: 12px;
      padding: 8px 12px;
      gap: 8px;
    }

    .featured-image .floating-badge .icon-wrap {
      width: 30px;
      height: 30px;
      font-size: 13px;
    }

    .quick-contact {
      flex-direction: column;
      text-align: center;
    }
  }

  /* ===== SCROLLBAR ===== */
  ::-webkit-scrollbar {
    width: 5px;
  }

  ::-webkit-scrollbar-track {
    background: #05080f;
  }

  ::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg, #22c55e, #3b82f6);
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg, #16a34a, #2563eb);
  }

  /* ===== REVEAL CLASSES ===== */
  .reveal-up {
    opacity: 0;
    transform: translateY(40px);
  }

  .reveal-scale {
    opacity: 0;
    transform: scale(0.9);
  }

  .reveal-left {
    opacity: 0;
    transform: translateX(-40px);
  }

  .reveal-right {
    opacity: 0;
    transform: translateX(40px);
  }
  </style>
</head>

<body>

  <!-- Glow Orbs -->
  <div class="glow-orb glow-orb-1"></div>
  <div class="glow-orb glow-orb-2"></div>
  <div class="glow-orb glow-orb-3"></div>

  <!-- ===== SERVICE SINGLE ===== -->
  <div class="service-single-container">

    <!-- Breadcrumb -->
    <div class="breadcrumb reveal-up">
      <a href="#"><i class="fa-solid fa-house" style="font-size:12px;"></i></a>
      <span class="separator">/</span>
      <a href="#">Services</a>
      <span class="separator">/</span>
      <span class="current">Apps Development</span>
    </div>

    <!-- Layout -->
    <div class="service-layout">

      <!-- ===== MAIN CONTENT ===== -->
      <div class="service-main">

        <!-- Featured Image - Using Unsplash Image -->
        <div class="featured-image reveal-scale">
          <img
            src="https://images.unsplash.com/photo-1526498460520-4c246339dccb?w=1200&h=600&fit=crop&crop=center&auto=format"
            alt="Apps Development" />
          <div class="image-overlay"></div>

          <!-- Floating Badge -->

        </div>

        <!-- Entry Content -->
        <div class="entry-content">

          <div class="badge reveal-left">
            <i class="fa-regular fa-star" style="margin-right:6px;"></i> Premium Service
          </div>

          <h2 class="reveal-up">
            Apps <span>Development</span> Services
          </h2>

          <p class="reveal-up">
            At Inoodex, we offer custom app development services that are designed to meet the specific needs of your
            business. Whether you need a mobile app for iOS or Android, we specialize in creating intuitive,
            high-performance applications that enhance user engagement and streamline business operations.
          </p>

          <p class="reveal-up">
            Bring your app idea to life with Inoodex. Whether you're starting from scratch or need improvements on an
            existing app, we're here to help you create a product that delivers value to your users and your business.
          </p>

          <!-- Highlight Box -->
          <div class="highlight-box reveal-up">
            <h4><i class="fa-regular fa-circle-check"></i> Why Our Clients Trust Us</h4>
            <ul>
              <li><strong>Proven Track Record</strong> — Our developers have successfully built hundreds of apps across
                various industries, delivering top-quality, high-performance solutions.</li>
              <li><strong>Full-Cycle Development</strong> — From ideation to deployment and ongoing support, we handle
                every aspect of the app development process.</li>
              <li><strong>Agile Development</strong> — We follow agile methodologies, ensuring that your app is
                delivered on time, within budget, and meets all of your business requirements.</li>
            </ul>
          </div>

          <p class="reveal-up" style="font-style:italic;color:#64748b;border-left:3px solid #22c55e;padding-left:16px;">
            <i class="fa-solid fa-quote-left" style="color:#22c55e;margin-right:8px;"></i>
            Contact us today to discuss your app development project and get started!
          </p>

        </div>

      </div>

      <!-- ===== SIDEBAR ===== -->
      <div class="service-sidebar">

        <!-- Sidebar Card -->
        <div class="sidebar-card reveal-right">
          <div class="icon-wrap">
            <i class="fa-solid fa-mobile-screen-button"></i>
          </div>
          <h3>Apps Development</h3>
          <ul>
            <li>24/7 Support &amp; Maintenance</li>
            <li>1,000+ Completed Projects</li>
            <li>Content Migration</li>
            <li>Installation and Customization</li>
            <li>Fast Load Time</li>
            <li>Easy Back-End Admin Panel</li>
          </ul>
          <a href="#" class="btn-primary-glow">
            <i class="fa-regular fa-comment-dots"></i>
            Contact Now
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <!-- Quick Contact -->
        <div class="quick-contact reveal-right">
          <div class="icon-box">
            <i class="fa-regular fa-clock"></i>
          </div>
          <div class="text">
            <h4>Quick Response</h4>
            <p>Within 24 hours</p>
            <a href="#">Schedule a Call <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <!-- Quick Contact 2 -->
        <div class="quick-contact reveal-right">
          <div class="icon-box">
            <i class="fa-regular fa-envelope"></i>
          </div>
          <div class="text">
            <h4>Email Us</h4>
            <p>We'll reply instantly</p>
            <a href="#">hello@inoodex.com</a>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- ===== GSAP ===== -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    // Lenis smooth scroll
    if (typeof Lenis !== 'undefined') {
      const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true
      });

      function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
      }
      requestAnimationFrame(raf);
    }

    // Reveal animations
    gsap.utils.toArray('.reveal-up').forEach((el, i) => {
      gsap.fromTo(el, {
        opacity: 0,
        y: 40
      }, {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: i * 0.06,
        ease: 'power4.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 92%',
          toggleActions: 'play none none none',
          once: true
        }
      });
    });

    gsap.utils.toArray('.reveal-scale').forEach((el, i) => {
      gsap.fromTo(el, {
        opacity: 0,
        scale: 0.9
      }, {
        opacity: 1,
        scale: 1,
        duration: 1,
        delay: i * 0.06,
        ease: 'power4.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 92%',
          toggleActions: 'play none none none',
          once: true
        }
      });
    });

    gsap.utils.toArray('.reveal-left').forEach((el, i) => {
      gsap.fromTo(el, {
        opacity: 0,
        x: -40
      }, {
        opacity: 1,
        x: 0,
        duration: 1,
        delay: i * 0.06,
        ease: 'power4.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 92%',
          toggleActions: 'play none none none',
          once: true
        }
      });
    });

    gsap.utils.toArray('.reveal-right').forEach((el, i) => {
      gsap.fromTo(el, {
        opacity: 0,
        x: 40
      }, {
        opacity: 1,
        x: 0,
        duration: 1,
        delay: i * 0.06,
        ease: 'power4.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 92%',
          toggleActions: 'play none none none',
          once: true
        }
      });
    });

    // Stagger sidebar items
    const sidebarItems = document.querySelectorAll('.sidebar-card ul li');
    sidebarItems.forEach((item, i) => {
      gsap.fromTo(item, {
        opacity: 0,
        x: 20
      }, {
        opacity: 1,
        x: 0,
        duration: 0.6,
        delay: 0.4 + i * 0.06,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: item,
          start: 'top 95%',
          toggleActions: 'play none none none',
          once: true
        }
      });
    });

    // Floating badge animation
    gsap.to('.floating-badge', {
      y: -8,
      duration: 2.5,
      ease: 'sine.inOut',
      yoyo: true,
      repeat: -1
    });

    console.log('✨ Premium Service Single Design Active!');
  });
  </script>

</body>

</html>