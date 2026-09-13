<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.layout.header')
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { background: #fff; color: #111827; font-family: 'Playfair Display', serif; line-height: 1.6; }

    /* ===== HERO ===== */
    .svc-hero {
      position: relative; height: 380px; overflow: hidden;
      display: flex; align-items: center; justify-content: center;       background: linear-gradient(135deg, #0c1a3d 0%, #0a0f1e 100%);
      margin-top: -72px; padding-top: 72px;
    }
    .svc-hero-bg { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.12; }
    .svc-hero-overlay { position: absolute; inset: 0; background: linear-gradient(180deg, rgba(10,15,30,0.3) 0%, rgba(10,15,30,0.5) 100%); }
    .svc-hero-content { position: relative; z-index: 2; text-align: center; padding: 0 24px; }
    .svc-hero-content h1 { font-family: 'Playfair Display', serif; font-size: clamp(36px, 5vw, 56px); font-weight: 800; color: #fff; margin-bottom: 16px; letter-spacing: -0.5px; }
    .svc-hero-content h1 span { color: #f4a637; }
    .svc-breadcrumb { list-style: none; padding: 0; margin: 0; display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 14px; }
    .svc-breadcrumb li { color: rgba(255,255,255,0.55); }
    .svc-breadcrumb li a { color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s; }
    .svc-breadcrumb li a:hover { color: #f4a637; }
    .svc-breadcrumb li.active { color: #fff; font-weight: 500; }
    .svc-breadcrumb .sep { color: rgba(255,255,255,0.3); }

    /* ===== SERVICES TOP ===== */
    .svc-top { display: grid; grid-template-columns: 1fr 1fr; min-height: 300px; }
    .svc-top-left { background: #f4a637; padding: 60px 60px 60px 80px; display: flex; flex-direction: column; justify-content: center; clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%); }
    .svc-label { font-size: 12px; color: #fff; text-transform: uppercase; letter-spacing: 3px; font-weight: 700; margin-bottom: 16px; display: flex; align-items: center; gap: 10px; }
    .svc-label::before { content: ''; width: 30px; height: 2px; background: #fff; }
    .svc-heading { font-family: 'Playfair Display', serif; font-size: clamp(30px, 3.5vw, 44px); font-weight: 700; color: #fff; line-height: 1.15; }
    .svc-top-right { padding: 60px 80px 60px 60px; display: flex; flex-direction: column; justify-content: center; position: relative; background: radial-gradient(circle at 70% 30%, rgba(244,166,55,0.05) 0%, transparent 50%); }
    .svc-top-right::before { content: ''; position: absolute; top: 0; right: 0; width: 200px; height: 200px; background: linear-gradient(60deg, transparent 40%, rgba(244,166,55,0.06) 40%, rgba(244,166,55,0.06) 42%, transparent 42%), linear-gradient(-60deg, transparent 40%, rgba(244,166,55,0.06) 40%, rgba(244,166,55,0.06) 42%, transparent 42%); pointer-events: none; }
    .svc-desc { color: #111827; font-size: 15px; line-height: 1.8; margin-bottom: 20px; max-width: 460px; }

    /* ===== CONTENT SECTION ===== */
    .svc-content { max-width: 1200px; margin: 0 auto; padding: 80px 24px; }
    .svc-content-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 50px; }
    .svc-content-main h2 { font-family: 'Playfair Display', serif; font-size: 32px; font-weight: 700; color: #111827; margin-bottom: 20px; }
    .svc-content-main p { color: #111827; line-height: 1.9; margin-bottom: 16px; font-size: 15px; }
    .svc-content-main h3 { font-family: 'Playfair Display', serif; font-size: 24px; font-weight: 700; color: #111827; margin: 40px 0 20px; }
    .svc-check { display: flex; align-items: flex-start; gap: 14px; background: rgba(244,166,55,0.04); border: 1px solid rgba(244,166,55,0.1); border-radius: 14px; padding: 20px; margin-bottom: 14px; }
    .svc-check-icon { width: 36px; height: 36px; min-width: 36px; background: #f4a637; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; }
    .svc-check h4 { font-size: 16px; font-weight: 700; color: #111827; margin-bottom: 6px; }
    .svc-check p { color: #111827; font-size: 14px; line-height: 1.7; margin: 0; }

    /* ===== SIDEBAR ===== */
    .svc-sidebar-card { background: #f8f9fa; border: 1px solid rgba(0,0,0,0.06); border-radius: 20px; padding: 32px; margin-bottom: 24px; }
    .svc-sidebar-card h4 { font-family: 'Playfair Display', serif; font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 16px; }
    .svc-sidebar-card ul { list-style: none; padding: 0; }
    .svc-sidebar-card ul li { padding: 10px 0; border-bottom: 1px solid rgba(0,0,0,0.06); color: #111827; font-size: 14px; display: flex; align-items: center; gap: 10px; }
    .svc-sidebar-card ul li:last-child { border-bottom: none; }
    .svc-sidebar-card ul li::before { content: '→'; color: #f4a637; font-weight: 700; }

    /* ===== WHY CHOOSE US ===== */
    .svc-why { background: #ffffff; padding: 80px 0; }
    .svc-why-header { text-align: center; margin-bottom: 50px; }
    .svc-why-badge { display: inline-block; padding: 8px 24px; background: rgba(244,166,55,0.06); border: 1px solid rgba(244,166,55,0.1); border-radius: 50px; margin-bottom: 16px; color: #f4a637; font-size: 13px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; }
    .svc-why h2 { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3.5vw, 40px); font-weight: 700; color: #111827; }
    .svc-why-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .svc-why-card { background: #fff; border: 1px solid rgba(0,0,0,0.06); border-radius: 20px; padding: 36px 28px; text-align: center; transition: all 0.4s ease; position: relative; overflow: hidden; }
    .svc-why-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: #f4a637; }
    .svc-why-card:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(0,0,0,0.08); }
    .svc-why-card-icon { width: 72px; height: 72px; margin: 0 auto 20px; background: rgba(244,166,55,0.06); border-radius: 16px; display: flex; align-items: center; justify-content: center; }
    .svc-why-card-icon svg { width: 32px; height: 32px; color: #f4a637; }
    .svc-why-card h3 { font-family: 'Playfair Display', serif; font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 10px; }
    .svc-why-card p { color: #111827; font-size: 14px; line-height: 1.7; }

    /* ===== FAQ ===== */
    .svc-faq { background: #f8f9fa; padding: 80px 0; }
    .svc-faq-header { text-align: center; margin-bottom: 50px; }
    .svc-faq h2 { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3.5vw, 40px); font-weight: 700; color: #111827; }
    .svc-faq-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 50px; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .svc-faq-item { background: #fff; border: 1px solid rgba(0,0,0,0.06); border-radius: 16px; margin-bottom: 16px; overflow: hidden; transition: all 0.3s ease; }
    .svc-faq-item[open] { box-shadow: 0 4px 20px rgba(0,0,0,0.06); }
    .svc-faq-item summary { padding: 20px 24px; cursor: pointer; display: flex; align-items: center; justify-content: space-between; font-weight: 600; color: #111827; font-size: 16px; list-style: none; }
    .svc-faq-item summary::-webkit-details-marker { display: none; }
    .svc-faq-item summary::after { content: '+'; width: 32px; height: 32px; min-width: 32px; background: rgba(244,166,55,0.08); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f4a637; font-size: 18px; font-weight: 700; transition: all 0.3s; }
    .svc-faq-item[open] summary::after { content: '−'; background: #f4a637; color: #fff; }
    .svc-faq-answer { padding: 0 24px 20px; color: #111827; font-size: 15px; line-height: 1.8; }
    .svc-faq-answer ul { padding-left: 20px; }
    .svc-faq-answer ul li { margin-bottom: 8px; }
    .svc-faq-contact { background: #fff; border: 1px solid rgba(0,0,0,0.06); border-radius: 20px; padding: 32px; }
    .svc-faq-contact h4 { font-family: 'Playfair Display', serif; font-size: 20px; font-weight: 700; color: #111827; margin-bottom: 12px; }
    .svc-faq-contact p { color: #111827; font-size: 14px; line-height: 1.7; margin-bottom: 20px; }
    .svc-faq-contact-item { display: flex; align-items: center; gap: 14px; padding: 14px 0; border-bottom: 1px solid rgba(0,0,0,0.06); }
    .svc-faq-contact-item:last-child { border-bottom: none; }
    .svc-faq-contact-icon { width: 44px; height: 44px; min-width: 44px; background: rgba(244,166,55,0.08); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f4a637; font-size: 16px; }
    .svc-faq-contact-item span { font-size: 13px; color: #6b7280; display: block; }
    .svc-faq-contact-item a { font-size: 15px; color: #111827; font-weight: 600; text-decoration: none; transition: color 0.3s; }
    .svc-faq-contact-item a:hover { color: #f4a637; }
    .svc-faq-contact-btn { display: block; text-align: center; background: #f4a637; color: #fff; padding: 14px; border-radius: 12px; font-weight: 600; text-decoration: none; margin-top: 20px; transition: all 0.3s; }
    .svc-faq-contact-btn:hover { background: #e0952d; }

    /* ===== CTA ===== */
    .svc-cta { background: linear-gradient(135deg, #0c1a3d 0%, #0a0f1e 100%); padding: 70px 24px; text-align: center; position: relative; overflow: hidden; }
    .svc-cta::before { content: ''; position: absolute; inset: 0; background-image: url("{{ asset('frontend/assets/images/about.png') }}"); background-size: cover; background-position: center; opacity: 0.12; }
    .svc-cta-inner { position: relative; z-index: 1; max-width: 650px; margin: 0 auto; }
    .svc-cta h2 { font-family: 'Playfair Display', serif; font-size: clamp(26px, 3.5vw, 38px); font-weight: 800; color: #fff; margin-bottom: 16px; }
    .svc-cta h2 span { color: #f4a637; }
    .svc-cta p { font-size: 16px; color: rgba(255,255,255,0.8); margin-bottom: 32px; line-height: 1.7; }
    .svc-cta-btn { display: inline-flex; align-items: center; gap: 10px; background: #f4a637; color: #fff; border: none; padding: 15px 32px; border-radius: 8px; font-size: 15px; font-weight: 600; text-decoration: none; transition: all 0.35s ease; }
    .svc-cta-btn:hover { background: #e0952d; transform: translateY(-2px); box-shadow: 0 12px 30px -8px rgba(244,166,55,0.4); }
    .svc-cta-btn i { font-size: 13px; }

    @media (max-width: 1024px) {
      .svc-top { grid-template-columns: 1fr; }
      .svc-top-left { clip-path: none; padding: 40px; }
      .svc-top-right { padding: 40px; }
      .svc-content-grid, .svc-faq-grid { grid-template-columns: 1fr; }
      .svc-why-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
      .svc-hero { height: 280px; }
      .svc-why-grid { grid-template-columns: 1fr; }
      .svc-top-left, .svc-top-right { padding: 30px; }
    }
  </style>
</head>

<body>
  @include('frontend.layout.headerNav')

  <section class="svc-hero">
    <img src="{{ asset('frontend/assets/images/about.png') }}" alt="Software Development" class="svc-hero-bg">
    <div class="svc-hero-overlay"></div>
    <div class="svc-hero-content">
      <h1>Software <span>Development</span></h1>
      <ul class="svc-breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="sep">/</li>
        <li><a href="{{ url('/services') }}">Services</a></li>
        <li class="sep">/</li>
        <li class="active">Software Development</li>
      </ul>
    </div>
  </section>

  <section class="svc-top">
    <div class="svc-top-left">
      <div class="svc-label">Services</div>
      <h2 class="svc-heading">Custom Software Solutions</h2>
    </div>
    <div class="svc-top-right">
      <p class="svc-desc">We specialize in delivering custom software solutions tailored to meet the unique needs of businesses across all industries. Whether you need an enterprise application, mobile app, or a specialized platform to streamline operations, our experienced development team is ready to bring your vision to life.</p>
    </div>
  </section>

  <section class="svc-content">
    <div class="svc-content-grid">
      <div class="svc-content-main">
        <p>We specialize in delivering custom software solutions tailored to meet the unique needs of businesses across all industries. Whether you need an enterprise application, mobile app, or a specialized platform to streamline operations, our experienced development team is ready to bring your vision to life.</p>
        <p>Transform your ideas into powerful software solutions with InooDex. Let's build scalable systems that drive growth, improve efficiency, and give your business a competitive advantage.</p>

        <h3>Why Our Clients Trust Us</h3>

        <div class="svc-check">
          <div class="svc-check-icon"><i class="fas fa-check"></i></div>
          <div>
            <h4>Experienced Team</h4>
            <p>Skilled developers delivering reliable and high-performance software solutions that meet modern standards.</p>
          </div>
        </div>
        <div class="svc-check">
          <div class="svc-check-icon"><i class="fas fa-check"></i></div>
          <div>
            <h4>Quality-Focused</h4>
            <p>Every solution undergoes rigorous testing and quality assurance to ensure top-tier performance.</p>
          </div>
        </div>
        <div class="svc-check">
          <div class="svc-check-icon"><i class="fas fa-check"></i></div>
          <div>
            <h4>Value for Money</h4>
            <p>Transparent pricing with no hidden costs. We deliver maximum value within your budget.</p>
          </div>
        </div>
        <div class="svc-check">
          <div class="svc-check-icon"><i class="fas fa-check"></i></div>
          <div>
            <h4>24/7 Support</h4>
            <p>Round-the-clock support to ensure your software runs smoothly at all times.</p>
          </div>
        </div>
      </div>

      <div>
        <div class="svc-sidebar-card">
          <h4>Our Services</h4>
          <ul>
            <li>Software Development</li>
            <li>Apps Development</li>
            <li>Web Development</li>
            <li>Digital Marketing</li>
            <li>SEO Service</li>
            <li>Graphics Design</li>
          </ul>
        </div>
        <div class="svc-sidebar-card">
          <h4>Need Help?</h4>
          <p style="color:#111827;font-size:14px;line-height:1.7;margin-bottom:16px;">Have a project in mind? Let's discuss how we can help you achieve your goals.</p>
          <a href="{{ url('/contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:#f4a637;color:#fff;padding:12px 24px;border-radius:8px;font-weight:600;text-decoration:none;font-size:14px;transition:all 0.3s;">Get In Touch <i class="fas fa-arrow-right" style="font-size:12px;"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="svc-why">
    <div class="svc-why-header">
      <div class="svc-why-badge">Why Choose Us</div>
      <h2>Why Choose InooDex?</h2>
    </div>
    <div class="svc-why-grid">
      <div class="svc-why-card">
        <div class="svc-why-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
        </div>
        <h3>Innovation</h3>
        <p> cutting-edge technology and creative problem-solving to deliver software that stands out.</p>
      </div>
      <div class="svc-why-card">
        <div class="svc-why-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        </div>
        <h3>Quality-Focused</h3>
        <p>Every solution undergoes rigorous testing and quality assurance to ensure top-tier performance.</p>
      </div>
      <div class="svc-why-card">
        <div class="svc-why-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3>Value for Money</h3>
        <p>Transparent pricing with no hidden costs. We deliver maximum value within your budget.</p>
      </div>
    </div>
  </section>

  <section class="svc-faq">
    <div class="svc-faq-header">
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="svc-faq-grid">
      <div>
        <details class="svc-faq-item" open>
          <summary>What types of software development services do you offer?</summary>
          <div class="svc-faq-answer">
            <ul>
              <li>Custom software development</li>
              <li>Web application development</li>
              <li>API & backend development</li>
              <li>Software maintenance and support</li>
              <li>Cloud-based solutions</li>
              <li>Enterprise software solutions</li>
            </ul>
          </div>
        </details>
        <details class="svc-faq-item">
          <summary>How do you ensure the quality of the software you deliver?</summary>
          <div class="svc-faq-answer">
            <ul>
              <li>Rigorous requirement analysis</li>
              <li>Agile development methodologies</li>
              <li>Code reviews and testing (manual and automated)</li>
              <li>Continuous integration / deployment (CI/CD)</li>
              <li>Regular client feedback loops</li>
            </ul>
          </div>
        </details>
        <details class="svc-faq-item">
          <summary>What is your software development process?</summary>
          <div class="svc-faq-answer">
            <ul>
              <li>Discovery & requirement gathering</li>
              <li>Planning & architecture design</li>
              <li>Development (Agile sprints or milestones)</li>
              <li>Quality Assurance & Testing</li>
              <li>Deployment</li>
              <li>Maintenance & support</li>
            </ul>
          </div>
        </details>
        <details class="svc-faq-item">
          <summary>Can you work with my existing development team?</summary>
          <div class="svc-faq-answer">
            <p>Absolutely. We can collaborate with your in-house team or other vendors as an extension of your technical team, using shared tools and workflows.</p>
          </div>
        </details>
        <details class="svc-faq-item">
          <summary>How much does custom software development cost?</summary>
          <div class="svc-faq-answer">
            <p>Cost varies based on project scope, complexity, and technology stack. We offer flexible pricing models including fixed-cost, hourly rates, or dedicated teams.</p>
          </div>
        </details>
      </div>

      <div>
        <div class="svc-faq-contact">
          <h4>You Still Have Questions?</h4>
          <p>Feel free to contact us anytime. Our team is always ready to help and answer your questions.</p>
          <div class="svc-faq-contact-item">
            <div class="svc-faq-contact-icon"><i class="fas fa-phone"></i></div>
            <div>
              <span>Phone</span>
              <a href="tel:+8801531385988">+880 1531 385988</a>
            </div>
          </div>
          <div class="svc-faq-contact-item">
            <div class="svc-faq-contact-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <span>Email</span>
              <a href="mailto:hello@inoodex.com">hello@inoodex.com</a>
            </div>
          </div>
          <a href="{{ url('/contact') }}" class="svc-faq-contact-btn">Contact Now <i class="fas fa-arrow-right" style="font-size:12px;"></i></a>
        </div>
      </div>
    </div>
  </section>

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
