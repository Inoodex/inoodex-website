<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Expertise | Premium Design</title>
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
    width: 600px;
    height: 600px;
    top: -20%;
    right: -10%;
    background: rgba(34, 197, 94, 0.04);
    animation: orbFloat 14s ease-in-out infinite;
  }

  .glow-orb-2 {
    width: 500px;
    height: 500px;
    bottom: -20%;
    left: -10%;
    background: rgba(59, 130, 246, 0.03);
    animation: orbFloat 18s ease-in-out infinite reverse;
  }

  .glow-orb-3 {
    width: 400px;
    height: 400px;
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
  .services-container {
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }

  /* ===== SECTION TITLE ===== */
  .section-header {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 48px;
    gap: 20px;
  }

  .section-title .badge {
    display: inline-block;
    background: rgba(34, 197, 94, 0.08);
    color: #22c55e;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 6px 18px;
    border-radius: 50px;
    border: 1px solid rgba(34, 197, 94, 0.05);
    margin-bottom: 12px;
  }

  .section-title h2 {
    font-size: 38px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -1px;
    line-height: 1.1;
  }

  .section-title h2 span {
    background: linear-gradient(135deg, #22c55e, #3b82f6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .section-btn .btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 28px;
    background: rgba(255, 255, 255, 0.03);
    color: #ffffff;
    font-weight: 600;
    font-size: 14px;
    border-radius: 14px;
    text-decoration: none;
    border: 1px solid rgba(255, 255, 255, 0.06);
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .section-btn .btn-outline:hover {
    background: rgba(34, 197, 94, 0.08);
    border-color: rgba(34, 197, 94, 0.15);
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 8px 30px rgba(34, 197, 94, 0.05);
  }

  .section-btn .btn-outline i {
    transition: transform 0.3s ease;
  }

  .section-btn .btn-outline:hover i {
    transform: translateX(4px);
  }

  /* ===== SERVICE GRID ===== */
  .service-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }

  /* ===== SERVICE CARD ===== */
  .service-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 24px;
    overflow: hidden;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    position: relative;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
  }

  .service-card::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 24px;
    padding: 1.5px;
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.12), rgba(59, 130, 246, 0.08), transparent);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.6s ease;
  }

  .service-card:hover::before {
    opacity: 1;
  }

  .service-card:hover {
    transform: translateY(-10px) scale(1.01);
    border-color: rgba(34, 197, 94, 0.06);
    background: rgba(255, 255, 255, 0.04);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
  }

  .service-card .card-content {
    padding: 28px 28px 20px;
    position: relative;
  }

  .service-card .card-content .icon-wrap {
    width: 52px;
    height: 52px;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.08), rgba(59, 130, 246, 0.04));
    border: 1px solid rgba(34, 197, 94, 0.04);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #22c55e;
    margin-bottom: 16px;
    transition: all 0.4s ease;
  }

  .service-card:hover .card-content .icon-wrap {
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.15), rgba(59, 130, 246, 0.08));
    border-color: rgba(34, 197, 94, 0.08);
    transform: scale(1.05);
  }

  .service-card .card-content h3 {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 10px;
    line-height: 1.3;
  }

  .service-card .card-content p {
    font-size: 14px;
    color: #94a3b8;
    line-height: 1.7;
    margin-bottom: 16px;
  }

  .service-card .card-content .learn-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #22c55e;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .service-card .card-content .learn-more:hover {
    gap: 14px;
    color: #4ade80;
  }

  .service-card .card-image {
    overflow: hidden;
    position: relative;
    height: 180px;
  }

  .service-card .card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .service-card:hover .card-image img {
    transform: scale(1.08);
  }

  .service-card .card-image::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(0deg, rgba(5, 8, 15, 0.6), transparent 50%);
    pointer-events: none;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1024px) {
    .service-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {
    .section-header {
      flex-direction: column;
      align-items: flex-start;
    }

    .section-title h2 {
      font-size: 30px;
    }

    .service-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }

    .service-card .card-image {
      height: 160px;
    }

    .service-card .card-content {
      padding: 24px 24px 16px;
    }

    .service-card .card-content h3 {
      font-size: 17px;
    }
  }

  @media (max-width: 480px) {
    .section-title h2 {
      font-size: 26px;
    }

    .service-card .card-content {
      padding: 20px 20px 14px;
    }

    .service-card .card-content h3 {
      font-size: 16px;
    }

    .service-card .card-content p {
      font-size: 13px;
    }

    .service-card .card-image {
      height: 140px;
    }

    .section-btn .btn-outline {
      padding: 10px 20px;
      font-size: 13px;
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
    transform: translateX(-50px);
  }

  .reveal-right {
    opacity: 0;
    transform: translateX(50px);
  }

  .service-card.reveal-up {
    opacity: 0;
    transform: translateY(50px);
  }
  </style>
</head>

<body>

  <!-- Glow Orbs -->
  <div class="glow-orb glow-orb-1"></div>
  <div class="glow-orb glow-orb-2"></div>
  <div class="glow-orb glow-orb-3"></div>

  <!-- ===== SERVICES SECTION ===== -->
  <div class="services-container">

    <!-- Section Header -->
    <div class="section-header">
      <div class="section-title">
        <div class="badge reveal-scale">
          <i class="fa-regular fa-star" style="margin-right:8px;"></i> Our Expertise
        </div>
        <h2 class="reveal-up">
          Explore Our <span>Expertise</span> Includes
        </h2>
      </div>
      <div class="section-btn">
        <a href="#" class="btn-outline reveal-right">
          View All Services
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <!-- Service Grid -->
    <div class="service-grid">

      <!-- Service 1 -->
      <div class="service-card reveal-up" data-delay="0.05s">
        <div class="card-content">
          <div class="icon-wrap">
            <i class="fa-brands fa-android"></i>
          </div>
          <h3>Android App Development</h3>
          <p>Reach millions of Android users with apps optimized for a wide range of Android devices. Built with
            scalability and security in mind.</p>
          <a href="#" class="learn-more">
            Learn More <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
        <div class="card-image">
          <img
            src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=200&fit=crop&crop=center&auto=format"
            alt="Android Development" />
        </div>
      </div>

      <!-- Service 2 -->
      <div class="service-card reveal-up" data-delay="0.10s">
        <div class="card-content">
          <div class="icon-wrap">
            <i class="fa-brands fa-apple"></i>
          </div>
          <h3>iOS App Development</h3>
          <p>Feature-rich iOS apps tailored to provide an excellent user experience on Apple devices. Outstanding
            performance and reliability.</p>
          <a href="#" class="learn-more">
            Learn More <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
        <div class="card-image">
          <img
            src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=400&h=200&fit=crop&crop=center&auto=format"
            alt="iOS Development" />
        </div>
      </div>

      <!-- Service 3 -->
      <div class="service-card reveal-up" data-delay="0.15s">
        <div class="card-content">
          <div class="icon-wrap">
            <i class="fa-regular fa-building"></i>
          </div>
          <h3>Enterprise Mobile Apps</h3>
          <p>Increase operational efficiency with enterprise-level mobile applications that automate workflows and
            improve communication.</p>
          <a href="#" class="learn-more">
            Learn More <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
        <div class="card-image">
          <img
            src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=400&h=200&fit=crop&crop=center&auto=format"
            alt="Enterprise Apps" />
        </div>
      </div>

    </div>

    <!-- Bottom CTA -->
    <div style="text-align:center;margin-top:48px;" class="reveal-up">
      <p style="color:#64748b;font-size:15px;margin-bottom:16px;">Need a custom solution? Let's build something amazing
        together.</p>
      <a href="#"
        style="display:inline-flex;align-items:center;gap:10px;padding:14px 36px;background:linear-gradient(135deg,#22c55e,#16a34a);color:#ffffff;font-weight:600;font-size:15px;border-radius:14px;text-decoration:none;box-shadow:0 4px 24px rgba(34,197,94,0.15);transition:all 0.4s cubic-bezier(0.34,1.56,0.64,1);"
        onmouseover="this.style.transform='translateY(-3px) scale(1.04)';this.style.boxShadow='0 12px 40px rgba(34,197,94,0.30)';"
        onmouseout="this.style.transform='translateY(0) scale(1)';this.style.boxShadow='0 4px 24px rgba(34,197,94,0.15)';">
        <i class="fa-regular fa-comment-dots"></i>
        Start Your Project
        <i class="fa-solid fa-arrow-right"></i>
      </a>
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
        scale: 0.85
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
        x: -50
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
        x: 50
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

    // Service cards with stagger
    gsap.utils.toArray('.service-card').forEach((card, i) => {
      const delay = parseFloat(card.dataset.delay) || i * 0.08;
      gsap.fromTo(card, {
        opacity: 0,
        y: 50,
        scale: 0.95
      }, {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 1,
        delay: delay,
        ease: 'power4.out',
        scrollTrigger: {
          trigger: card,
          start: 'top 92%',
          toggleActions: 'play none none none',
          once: true
        }
      });
    });

    console.log('✨ Premium Services Design Active!');
  });
  </script>

</body>

</html>