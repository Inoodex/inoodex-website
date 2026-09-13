<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.layout.header')
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { background: #fff; color: #1a1a2e; font-family: 'Playfair Display', serif; line-height: 1.6; }

    /* ===== SERVICES SECTION (matches homepage component) ===== */
    .our-services {
      background: #ffffff;
      padding: 80px 0 100px;
      position: relative;
      overflow: hidden;
    }
    .bg-shape {
      position: absolute;
      pointer-events: none;
      z-index: 0;
    }
    .blob-top-left {
      top: -40px; left: -60px;
      width: 320px; height: 280px;
      opacity: 0.6;
    }
    .blob-top-right {
      top: -60px; right: -80px;
      width: 350px; height: 300px;
      opacity: 0.45;
    }
    .blob-bottom-left {
      bottom: -50px; left: -40px;
      width: 300px; height: 260px;
      opacity: 0.5;
    }
    .blob-bottom-right {
      bottom: -40px; right: -60px;
      width: 340px; height: 290px;
      opacity: 0.55;
    }
    .decor-circle {
      position: absolute;
      border-radius: 50%;
      border: 2px solid rgba(100,180,220,0.3);
      background: transparent;
      pointer-events: none;
      z-index: 0;
    }
    .decor-circle-1 { width: 30px; height: 30px; top: 80px; left: 28%; }
    .decor-circle-2 { width: 20px; height: 20px; top: 140px; right: 32%; }
    .decor-circle-3 { width: 24px; height: 24px; bottom: 120px; left: 35%; }
    .decor-circle-4 { width: 16px; height: 16px; bottom: 200px; right: 28%; }
    .decor-plus {
      position: absolute;
      color: rgba(100,180,220,0.35);
      font-size: 18px;
      font-weight: 300;
      pointer-events: none;
      z-index: 0;
    }
    .decor-plus-1 { top: 120px; left: 40%; }
    .decor-plus-2 { bottom: 160px; right: 40%; }
    .decor-dots {
      position: absolute;
      pointer-events: none;
      z-index: 0;
    }
    .decor-dots-1 { top: 100px; left: 18%; }
    .decor-dots-2 { bottom: 140px; right: 18%; }
    .our-services .container { position: relative; z-index: 1; }
    .our-services .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }
    .services-top {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 48px;
    }
    .services-section-label {
      font-size: 13px;
      color: #2563eb;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-weight: 600;
      margin-bottom: 12px;
    }
    .services-section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(28px, 3.5vw, 40px);
      font-weight: 700;
      color: #111827;
      line-height: 1.2;
    }
    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      position: relative;
      z-index: 1;
    }
    .service-card {
      background: #ffffff;
      border-radius: 12px;
      border: 1px solid #e5e7eb;
      padding: 32px 24px 24px;
      display: flex;
      flex-direction: column;
      transition: all 0.3s ease;
      text-decoration: none;
      position: relative;
      z-index: 1;
    }
    .service-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
      border-color: #2563eb;
    }
    .service-card-icon {
      width: 56px;
      height: 56px;
      margin-bottom: 20px;
    }
    .service-card-icon svg {
      width: 48px;
      height: 48px;
      stroke: #2563eb;
      stroke-width: 1.2;
      fill: none;
    }
    .service-card:nth-child(1) .service-card-icon svg { stroke: #f4a637; }
    .service-card:nth-child(2) .service-card-icon svg { stroke: #3b82f6; }
    .service-card:nth-child(3) .service-card-icon svg { stroke: #a78bfa; }
    .service-card:nth-child(4) .service-card-icon svg { stroke: #f59e0b; }
    .service-card:nth-child(5) .service-card-icon svg { stroke: #ec4899; }
    .service-card:nth-child(6) .service-card-icon svg { stroke: #06b6d4; }
    .service-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 18px;
      font-weight: 700;
      color: #111827;
      margin-bottom: 12px;
      line-height: 1.3;
    }
    .service-card-desc {
      color: #6b7280;
      font-size: 14px;
      line-height: 1.7;
      margin-bottom: 20px;
    }
    .service-card-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      width: 100%;
      padding: 12px 20px;
      border: 1.5px solid #d1d5db;
      border-radius: 8px;
      background: transparent;
      color: #111827;
      font-family: 'Playfair Display', serif;
      font-size: 14px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
      cursor: pointer;
      margin-top: auto;
    }
    .service-card-btn:hover {
      border-color: #2563eb;
      color: #2563eb;
      background: rgba(37, 99, 235, 0.04);
    }
    .service-card-btn i { font-size: 11px; transition: transform 0.3s ease; }
    .service-card-btn:hover i { transform: translateX(3px); }

    /* ===== CTA ===== */
    .svc-cta {
      background: linear-gradient(135deg, #0c1a3d 0%, #0a0f1e 100%);
      padding: 70px 24px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .svc-cta::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url("{{ asset('frontend/assets/images/about.png') }}");
      background-size: cover;
      background-position: center;
      opacity: 0.12;
    }
    .svc-cta::after {
      content: '';
      position: absolute;
      width: 250px;
      height: 250px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(244,166,55,0.15) 0%, transparent 70%);
      bottom: -60px;
      right: -40px;
      pointer-events: none;
    }
    .svc-cta-inner { position: relative; z-index: 1; max-width: 650px; margin: 0 auto; }
    .svc-cta h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(26px, 3.5vw, 38px);
      font-weight: 800;
      color: #fff;
      margin-bottom: 16px;
    }
    .svc-cta h2 span { color: #f4a637; }
    .svc-cta p { font-size: 16px; color: rgba(255,255,255,0.8); margin-bottom: 32px; line-height: 1.7; }
    .svc-cta-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #f4a637;
      color: #fff;
      border: none;
      padding: 15px 32px;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.35s ease;
    }
    .svc-cta-btn:hover { background: #e0952d; transform: translateY(-2px); box-shadow: 0 12px 30px -8px rgba(244,166,55,0.4); }
    .svc-cta-btn i { font-size: 13px; }

    @media (max-width: 1024px) {
      .services-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
      .services-grid { grid-template-columns: 1fr; }
      .services-top { flex-direction: column; align-items: flex-start; gap: 16px; }
    }
  </style>
</head>

<body class="no-hero">
  @include('frontend.layout.headerNav')

  <!-- SERVICES -->
  <section class="our-services">
    <!-- Blob shapes -->
    <svg class="bg-shape blob-top-left" viewBox="0 0 400 350" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M-20-30C40-40 120-10 160 40C200 90 180 160 140 200C100 240 30 230-10 180C-50 130-60 50-20-30Z" fill="rgba(100,190,230,0.35)"/>
      <path d="M-40-10C20-50 100-30 140 20C180 70 170 140 130 180C90 220 10 210-30 160C-70 110-80 30-40-10Z" fill="rgba(130,200,240,0.25)"/>
    </svg>
    <svg class="bg-shape blob-top-right" viewBox="0 0 400 350" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M420-20C360-40 280-10 240 40C200 90 220 160 260 200C300 240 370 230 410 180C450 130 460 50 420-20Z" fill="rgba(100,190,230,0.3)"/>
      <path d="M440-10C380-40 300-20 260 30C220 80 240 150 280 190C320 230 390 220 430 170C470 120 460 20 440-10Z" fill="rgba(160,210,240,0.2)"/>
    </svg>
    <svg class="bg-shape blob-bottom-left" viewBox="0 0 350 300" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M-20 320C40 330 120 300 160 250C200 200 180 130 140 90C100 50 30 60-10 110C-50 160-60 240-20 320Z" fill="rgba(100,190,230,0.3)"/>
      <path d="M-30 300C30 320 110 290 150 240C190 190 170 120 130 80C90 40 20 50-20 100C-60 150-70 230-30 300Z" fill="rgba(130,200,240,0.2)"/>
    </svg>
    <svg class="bg-shape blob-bottom-right" viewBox="0 0 400 350" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M420 370C360 380 280 350 240 300C200 250 220 180 260 140C300 100 370 110 410 160C450 210 460 290 420 370Z" fill="rgba(100,190,230,0.32)"/>
      <path d="M440 350C380 370 300 340 260 290C220 240 240 170 280 130C320 90 390 100 430 150C470 200 460 280 440 350Z" fill="rgba(160,210,240,0.22)"/>
    </svg>

    <!-- Decorative circles -->
    <div class="decor-circle decor-circle-1"></div>
    <div class="decor-circle decor-circle-2"></div>
    <div class="decor-circle decor-circle-3"></div>
    <div class="decor-circle decor-circle-4"></div>

    <!-- Decorative plus signs -->
    <span class="decor-plus decor-plus-1">+</span>
    <span class="decor-plus decor-plus-2">+</span>

    <!-- Decorative dots -->
    <svg class="decor-dots decor-dots-1" width="40" height="40" viewBox="0 0 40 40">
      <circle cx="5" cy="5" r="3" fill="rgba(100,180,220,0.3)"/>
      <circle cx="20" cy="5" r="3" fill="rgba(100,180,220,0.2)"/>
      <circle cx="35" cy="5" r="3" fill="rgba(100,180,220,0.3)"/>
      <circle cx="5" cy="20" r="3" fill="rgba(100,180,220,0.2)"/>
      <circle cx="20" cy="20" r="3" fill="rgba(100,180,220,0.15)"/>
      <circle cx="35" cy="20" r="3" fill="rgba(100,180,220,0.2)"/>
    </svg>
    <svg class="decor-dots decor-dots-2" width="40" height="40" viewBox="0 0 40 40">
      <circle cx="5" cy="5" r="3" fill="rgba(100,180,220,0.3)"/>
      <circle cx="20" cy="5" r="3" fill="rgba(100,180,220,0.2)"/>
      <circle cx="35" cy="5" r="3" fill="rgba(100,180,220,0.3)"/>
      <circle cx="5" cy="20" r="3" fill="rgba(100,180,220,0.2)"/>
      <circle cx="20" cy="20" r="3" fill="rgba(100,180,220,0.15)"/>
    </svg>

    <div class="container">

      <div class="services-top">
        <div>
          <!-- <div class="services-section-label">Our Services</div> -->
          <h2 class="services-section-title">Services</h2>
        </div>
      </div>

      <div class="services-grid">

        <div class="service-card">
          <div class="service-card-icon">
            <svg viewBox="0 0 48 48" stroke-linecap="round" stroke-linejoin="round">
              <path d="M10 36l8-28m8 8l8-8-8-8M18 28l-8 8 8 8"/>
            </svg>
          </div>
          <h3>Software Development</h3>
          <p class="service-card-desc">Custom software solutions tailored to meet the unique needs of businesses across all industries. From enterprise applications to specialized tools.</p>
          <a href="{{ url('/software-development') }}" class="service-card-btn">Service Details <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="service-card">
          <div class="service-card-icon">
            <svg viewBox="0 0 48 48" stroke-linecap="round" stroke-linejoin="round">
              <path d="M24 36h.02M16 42h16a4 4 0 004-4V10a4 4 0 00-4-4H16a4 4 0 00-4 4v28a4 4 0 004 4z"/>
            </svg>
          </div>
          <h3>Apps Development</h3>
          <p class="service-card-desc">Custom mobile app development for iOS and Android. Creating intuitive, high-performance applications that enhance user engagement.</p>
          <a href="{{ url('/apps-development') }}" class="service-card-btn">Service Details <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="service-card">
          <div class="service-card-icon">
            <svg viewBox="0 0 48 48" stroke-linecap="round" stroke-linejoin="round">
              <path d="M42 24a18 18 0 01-18 18m18-18a18 18 0 00-18-18m18 18H6m18 18a18 18 0 01-18-18m18 18c3.314 0 6-8.06 6-18s-2.686-18-6-18m0 36c-3.314 0-6-8.06-6-18s2.686-18 6-18m-18 18a18 18 0 0118-18"/>
            </svg>
          </div>
          <h3>Web Development</h3>
          <p class="service-card-desc">Custom websites tailored to your specific requirements. From engaging design to seamless functionality, we build your web presence.</p>
          <a href="{{ url('/web-development') }}" class="service-card-btn">Service Details <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="service-card">
          <div class="service-card-icon">
            <svg viewBox="0 0 48 48" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 6.11A18 18 0 1041.89 26H22V6.11z"/>
              <path d="M40.976 18H30V6.96A18.025 18.025 0 0140.976 18z"/>
            </svg>
          </div>
          <h3>Digital Marketing</h3>
          <p class="service-card-desc">Data-driven marketing strategies that drive traffic, increase conversions, and boost brand awareness with measurable results.</p>
          <a href="{{ url('/digital-marketing') }}" class="service-card-btn">Service Details <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="service-card">
          <div class="service-card-icon">
            <svg viewBox="0 0 48 48" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="22" cy="22" r="14"/>
              <path d="M42 42l-12-12"/>
            </svg>
          </div>
          <h3>SEO Service</h3>
          <p class="service-card-desc">On-page and off-page SEO to fully optimize your website. Improving site structure, content, and building high-quality backlinks.</p>
          <a href="{{ url('/seo') }}" class="service-card-btn">Service Details <i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="service-card">
          <div class="service-card-icon">
            <svg viewBox="0 0 48 48" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 42a8 8 0 01-8-8V10a4 4 0 014-4h8a4 4 0 014 4v24a8 8 0 01-8 4zm0 0h24a4 4 0 004-4v-8a4 4 0 00-4-4h-4.686M22 14.686l3.314-3.314a4 4 0 015.656 0l5.656 5.656a4 4 0 010 5.656L30.972 34.658M14 34h.02"/>
            </svg>
          </div>
          <h3>Graphics Design</h3>
          <p class="service-card-desc">Creative visuals that engage and captivate your audience. From stunning illustrations to sleek modern designs for your brand.</p>
          <a href="{{ url('/contact') }}" class="service-card-btn">Service Details <i class="fas fa-chevron-right"></i></a>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="svc-cta">
    <div class="svc-cta-inner">
      <h2>Have a Project in Mind? <span>Let's Build It.</span></h2>
      <p>Start the conversation — no commitment required. We'll help you explore possibilities and find the best path forward.</p>
      <a href="{{ url('/contact') }}" class="svc-cta-btn">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </section>

  @include('frontend.layout.footer')
</body>
</html>
