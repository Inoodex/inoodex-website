<style>
.our-services {
  background: #0f172a;
  padding: 80px 0;
  position: relative;
}

.services-label {
  font-size: 14px;
  color: #22c55e;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-weight: 600;
  margin-bottom: 10px;
}

.services-heading {
  font-size: 36px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 20px;
  line-height: 1.2;
}

.services-heading span {
  background: linear-gradient(135deg, #22c55e, #4ade80, #3b82f6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-top: 40px;
}

.service-card {
  background: #1e293b;
  border-radius: 20px;
  padding: 32px;
  transition: all 0.4s ease;
  border: 1px solid rgba(255, 255, 255, 0.05);
  position: relative;
  overflow: hidden;
  cursor: default;
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, #22c55e, #4ade80, #3b82f6);
  transform: scaleX(0);
  transition: transform 0.4s ease;
  transform-origin: left;
}

.service-card:hover::before {
  transform: scaleX(1);
}

.service-card:hover {
  transform: translateY(-6px);
  border-color: rgba(34, 197, 94, 0.2);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.service-card-icon {
  width: 56px;
  height: 56px;
  background: rgba(34, 197, 94, 0.1);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  transition: all 0.4s ease;
  position: relative;
}

.service-card:hover .service-card-icon {
  background: linear-gradient(135deg, rgba(34, 197, 94, 0.2), rgba(59, 130, 246, 0.2));
}

.service-card-icon svg {
  width: 28px;
  height: 28px;
  transition: all 0.4s ease;
}

/* Gradient icons with different color stops per card */
.service-card:nth-child(1) .service-card-icon svg {
  color: #22c55e;
}

.service-card:nth-child(1):hover .service-card-icon svg {
  color: #4ade80;
}

.service-card:nth-child(2) .service-card-icon svg {
  color: #3b82f6;
}

.service-card:nth-child(2):hover .service-card-icon svg {
  color: #60a5fa;
}

.service-card:nth-child(3) .service-card-icon svg {
  color: #a78bfa;
}

.service-card:nth-child(3):hover .service-card-icon svg {
  color: #c4b5fd;
}

.service-card:nth-child(4) .service-card-icon svg {
  color: #f59e0b;
}

.service-card:nth-child(4):hover .service-card-icon svg {
  color: #fbbf24;
}

.service-card:nth-child(5) .service-card-icon svg {
  color: #ec4899;
}

.service-card:nth-child(5):hover .service-card-icon svg {
  color: #f472b6;
}

.service-card:nth-child(6) .service-card-icon svg {
  color: #06b6d4;
}

.service-card:nth-child(6):hover .service-card-icon svg {
  color: #22d3ee;
}

.service-card h3 {
  font-size: 20px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 12px;
  transition: color 0.3s ease;
}

.service-card:hover h3 {
  background: linear-gradient(135deg, #22c55e, #4ade80);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.service-card p {
  color: #94a3b8;
  line-height: 1.7;
  font-size: 14px;
  margin-bottom: 20px;
}

.service-card-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #22c55e, #16a34a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  position: relative;
}

.service-card-link::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: linear-gradient(90deg, #22c55e, #4ade80);
  transition: width 0.3s ease;
  border-radius: 2px;
}

.service-card-link:hover::after {
  width: 100%;
}

.service-card-link:hover {
  gap: 14px;
}

.service-card-link svg {
  transition: transform 0.3s ease;
  -webkit-text-fill-color: #22c55e;
  color: #22c55e;
}

.service-card-link:hover svg {
  transform: translateX(4px);
}

.services-btn {
  display: inline-block;
  padding: 14px 36px;
  background: linear-gradient(135deg, #22c55e, #16a34a);
  color: #ffffff;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  border-radius: 50px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.services-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);
  color: #ffffff;
}

@media (max-width: 1024px) {
  .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .services-heading {
    font-size: 28px;
  }
}

@media (max-width: 640px) {
  .services-grid {
    grid-template-columns: 1fr;
  }

  .services-heading {
    font-size: 24px;
  }

  .our-services {
    padding: 50px 0;
  }
}
</style>

<div class="our-services">
  <div style="max-width:1200px;margin:0 auto;padding:0 20px;">
    <div style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;margin-bottom:10px;">
      <div>
        <div class="services-label wow fadeInUp">Our Services</div>
        <h2 class="services-heading wow fadeInUp" data-wow-delay="0.1s">What <span>We Can Offer</span> Today</h2>
      </div>
      <div>
        <a href="{{ url('/services') }}" class="services-btn wow fadeInUp" data-wow-delay="0.15s">View All Services</a>
      </div>
    </div>

    <div class="services-grid">
      <!-- Software Development -->
      <div class="service-card wow fadeInUp" data-wow-delay="0.2s">
        <div class="service-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
          </svg>
        </div>
        <h3>Software Development</h3>
        <p>Custom software solutions tailored to meet the unique needs of businesses across all industries. From
          enterprise applications to specialized tools.</p>
        <a href="{{ url('/software-development') }}" class="service-card-link">
          Learn More
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

      <!-- Apps Development -->
      <div class="service-card wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
        </div>
        <h3>Apps Development</h3>
        <p>Custom mobile app development for iOS and Android. Creating intuitive, high-performance applications that
          enhance user engagement.</p>
        <a href="{{ url('/apps-development') }}" class="service-card-link">
          Learn More
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

      <!-- Web Development -->
      <div class="service-card wow fadeInUp" data-wow-delay="0.4s">
        <div class="service-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
          </svg>
        </div>
        <h3>Web Development</h3>
        <p>Custom websites tailored to your specific requirements. From engaging design to seamless functionality, we
          build your web presence.</p>
        <a href="{{ url('/web-development') }}" class="service-card-link">
          Learn More
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

      <!-- Digital Marketing -->
      <div class="service-card wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
          </svg>
        </div>
        <h3>Digital Marketing</h3>
        <p>Data-driven marketing strategies that drive traffic, increase conversions, and boost brand awareness with
          measurable results.</p>
        <a href="{{ url('/digital-marketing') }}" class="service-card-link">
          Learn More
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

      <!-- SEO Service -->
      <div class="service-card wow fadeInUp" data-wow-delay="0.6s">
        <div class="service-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
        <h3>SEO Service</h3>
        <p>On-page and off-page SEO to fully optimize your website. Improving site structure, content, and building
          high-quality backlinks.</p>
        <a href="{{ url('/seo') }}" class="service-card-link">
          Learn More
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>

      <!-- Graphics Design -->
      <div class="service-card wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-card-icon">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
          </svg>
        </div>
        <h3>Graphics Design</h3>
        <p>Creative visuals that engage and captivate your audience. From stunning illustrations to sleek modern designs
          for your brand.</p>
        <a href="{{ url('/contact') }}" class="service-card-link">
          Learn More
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>