<style>
.our-services {
  background: #f8f9fb;
  padding: 80px 0 100px;
  position: relative;
}

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

.services-view-all {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 15px 36px;
  background: #111827;
  color: #f4a637;
  font-family: 'Playfair Display', serif;
  font-size: 14px;
  font-weight: 700;
  border-radius: 8px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  white-space: nowrap;
}

.services-view-all:hover {
  background: #1e3a8a;
  transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(0,0,0,0.15);
}

.services-view-all i {
  font-size: 11px;
  transition: transform 0.3s ease;
}

.services-view-all:hover i {
  transform: translateX(4px);
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.service-card {
  background: #ffffff;
  border-radius: 12px;
  border: 1px solid #e5e7eb;
  padding: 32px 24px 24px;
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
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

.service-card-divider {
  display: none;
}

.service-card-features {
  display: none;
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
}

.service-card-btn:hover {
  border-color: #2563eb;
  color: #2563eb;
  background: rgba(37, 99, 235, 0.04);
}

.service-card-btn i {
  font-size: 11px;
  transition: transform 0.3s ease;
}

.service-card-btn:hover i {
  transform: translateX(3px);
}

@media (max-width: 1024px) {
  .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 640px) {
  .services-grid {
    grid-template-columns: 1fr;
  }
  .services-top {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
  }
}
</style>

<div class="our-services">
  <div class="container">

    <div class="services-top">
      <div>
        <div class="services-section-label">Our Services</div>
        <h2 class="services-section-title">What We Can Offer Today</h2>
      </div>
      <a href="{{ url('/services') }}" class="services-view-all">View All Services <i class="fas fa-chevron-right"></i></a>
    </div>

    <div class="services-spacer">
    <div class="services-grid">

      <div class="service-card">
        <div class="service-card-icon">
          <svg viewBox="0 0 48 48" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 36l8-28m8 8l8-8-8-8M18 28l-8 8 8 8"/>
          </svg>
        </div>
        <h3>Software Development</h3>
        <p class="service-card-desc">Custom software solutions tailored to meet the unique needs of businesses across all industries. From enterprise applications to specialized tools.</p>
        <div class="service-card-divider"></div>
        <ul class="service-card-features">
          <li>Responsive Design</li>
          <li>User-Friendly Interface</li>
          <li>Cross-Browser Compatibility</li>
        </ul>
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
        <div class="service-card-divider"></div>
        <ul class="service-card-features">
          <li>Responsive Design</li>
          <li>User-Friendly Interface</li>
          <li>Cross-Browser Compatibility</li>
        </ul>
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
        <div class="service-card-divider"></div>
        <ul class="service-card-features">
          <li>Responsive Design</li>
          <li>User-Friendly Interface</li>
          <li>Cross-Browser Compatibility</li>
        </ul>
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
        <div class="service-card-divider"></div>
        <ul class="service-card-features">
          <li>Responsive Design</li>
          <li>User-Friendly Interface</li>
          <li>Cross-Browser Compatibility</li>
        </ul>
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
        <div class="service-card-divider"></div>
        <ul class="service-card-features">
          <li>Responsive Design</li>
          <li>User-Friendly Interface</li>
          <li>Cross-Browser Compatibility</li>
        </ul>
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
        <div class="service-card-divider"></div>
        <ul class="service-card-features">
          <li>Responsive Design</li>
          <li>User-Friendly Interface</li>
          <li>Cross-Browser Compatibility</li>
        </ul>
        <a href="{{ url('/contact') }}" class="service-card-btn">Service Details <i class="fas fa-chevron-right"></i></a>
      </div>

    </div>
    </div>
  </div>
</div>
