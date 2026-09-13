<style>
.about-us {
  position: relative !important;
  background: #ffffff !important;
  padding: 120px 0 !important;
  font-family: 'Playfair Display', serif;
  overflow: hidden !important;
}
.about-us::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(rgba(0,0,0,0.06) 1px, transparent 1px),
    linear-gradient(90deg, rgba(0,0,0,0.06) 1px, transparent 1px);
  background-size: 40px 40px;
  pointer-events: none;
  z-index: 0;
}

.about-container {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 48px;
}

.about-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}

/* Left Content */
.about-label {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: #2563eb;
  margin-bottom: 20px;
}

.about-heading {
  font-family: 'Playfair Display', serif;
  font-size: clamp(32px, 3.8vw, 48px);
  font-weight: 800;
  color: #111827;
  line-height: 1.12;
  letter-spacing: -0.02em;
  margin: 0 0 32px;
}
.about-heading span {
  color: #f4a637;
}

.about-divider {
  width: 60px;
  height: 3px;
  background: #f4a637;
  border-radius: 4px;
  margin: 0 0 28px;
}

.about-content {
  position: relative;
}
.about-shape {
  position: absolute;
  pointer-events: none;
}
.about-shape-circle {
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: #f4a637;
  opacity: 0.25;
}
.about-shape-square {
  width: 14px;
  height: 14px;
  background: #2563eb;
  opacity: 0.2;
  transform: rotate(45deg);
}
.about-shape-triangle {
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-bottom: 14px solid #e03e3e;
  opacity: 0.2;
}
.about-shape-ring {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  border: 3px solid #f4a637;
  opacity: 0.25;
}
.about-shape-cross {
  width: 16px;
  height: 16px;
  position: relative;
}
.about-shape-cross::before,
.about-shape-cross::after {
  content: '';
  position: absolute;
  background: #2563eb;
  opacity: 0.2;
}
.about-shape-cross::before {
  width: 100%;
  height: 3px;
  top: 50%;
  transform: translateY(-50%);
}
.about-shape-cross::after {
  width: 3px;
  height: 100%;
  left: 50%;
  transform: translateX(-50%);
}
.about-text {
  color: #4b5563;
  font-size: 15px;
  line-height: 1.85;
  margin: 0 0 12px;
  position: relative;
}
.about-text:last-of-type {
  margin-bottom: 32px;
}

/* Features 2-col */
.about-content ul.about-features {
  display: grid !important;
  grid-template-columns: 1fr 1fr !important;
  gap: 16px 40px !important;
  list-style: none !important;
  padding: 0 !important;
  margin: 0 0 40px !important;
  flex-wrap: unset !important;
}
.about-content ul.about-features li {
  display: flex !important;
  align-items: center !important;
  gap: 10px !important;
  font-size: 15px !important;
  font-weight: 700 !important;
  color: #111827 !important;
  width: auto !important;
  margin-right: 0 !important;
  margin-bottom: 0 !important;
  padding-left: 0 !important;
  position: relative !important;
}
.about-content ul.about-features li:before {
  display: none !important;
}
.about-content ul.about-features li .check {
  color: #f4a637;
  font-size: 15px;
  font-weight: 700;
  flex-shrink: 0;
}

.about-btn {
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
}
.about-btn:hover {
  background: #1e3a8a;
  transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(0,0,0,0.15);
}
.about-btn i {
  font-size: 11px;
  transition: transform 0.3s;
}
.about-btn:hover i {
  transform: translateX(4px);
}

/* Right Image */
.about-visual {
  position: relative;
}

.about-img-wrap {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0,0,0,0.1);
}
.about-img-wrap img {
  width: 100%;
  height: 480px;
  object-fit: cover;
  display: block;
  transition: transform 0.6s ease;
}
.about-img-wrap:hover img {
  transform: scale(1.03);
}

.about-exp-badge {
  position: absolute;
  bottom: -24px;
  right: -24px;
  width: 140px;
  height: 140px;
  background: #f4a637;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #111827;
  box-shadow: 0 16px 40px rgba(244, 166, 55, 0.35);
  z-index: 2;
}
.about-exp-badge .number {
  font-size: 52px;
  font-weight: 800;
  line-height: 1;
}
.about-exp-badge .plus {
  font-size: 22px;
  font-weight: 800;
  position: relative;
  top: -6px;
}
.about-exp-badge .label {
  font-size: 13px;
  font-weight: 600;
  text-align: center;
  line-height: 1.3;
  margin-top: -2px;
}

/* Anim */
.anim-reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.anim-reveal.visible {
  opacity: 1;
  transform: translateY(0);
}

@media (max-width: 900px) {
  .about-us { padding: 80px 0; }
  .about-grid {
    grid-template-columns: 1fr;
    gap: 50px;
  }
  .about-img-wrap img { height: 360px; }
}
</style>

<div class="about-us">
  <div class="about-container">
    <div class="about-grid">

      <div class="about-content">
        <div class="about-shape about-shape-circle" style="top:10px;right:-30px;"></div>
        <div class="about-shape about-shape-square" style="top:40%;right:-18px;"></div>
        <div class="about-shape about-shape-triangle" style="bottom:100px;right:-28px;"></div>
        <div class="about-shape about-shape-ring" style="top:25%;right:-38px;"></div>
        <div class="about-shape about-shape-cross" style="bottom:50px;right:-20px;"></div>
        <div class="about-label anim-reveal">&#10022; Learn About Us</div>
        <h2 class="about-heading anim-reveal" style="transition-delay:0.1s;">Who <span>We Are</span></h2>
        <div class="about-divider anim-reveal" style="transition-delay:0.12s;"></div>

        <p class="about-text shape-1 anim-reveal" style="transition-delay:0.15s;">Welcome to Inoodex, your trusted partner in digital innovation. We specialize in delivering customized web design, software development, SEO, and e-commerce solutions to help businesses grow and thrive in today's competitive landscape. Our mission is simple: to empower businesses by providing reliable, cutting-edge technology services tailored to meet their unique needs.</p>

        <p class="about-text shape-2 anim-reveal" style="transition-delay:0.2s;">At Inoodex, we view every project as a partnership. We are dedicated to understanding your vision and working closely with you to bring it to life. Our agile approach ensures that we adapt to changing needs, providing solutions that are scalable and future-proof.</p>

        <ul class="about-features anim-reveal" style="transition-delay:0.25s;">
          <li><i class="fa-solid fa-check check"></i> Ease of Scalability</li>
          <li><i class="fa-solid fa-check check"></i> Instant Impact</li>
          <li><i class="fa-solid fa-check check"></i> Expertise and Experience</li>
          <li><i class="fa-solid fa-check check"></i> Time Zone Aligned</li>
          <li><i class="fa-solid fa-check check"></i> Full Flexibility</li>
          <li><i class="fa-solid fa-check check"></i> Proactive Support</li>
        </ul>

        <a href="{{ url('/contact') }}" class="about-btn anim-reveal" style="transition-delay:0.3s;">
          Free Consultation <i class="fa-solid fa-chevron-right"></i>
        </a>
      </div>

      <div class="about-visual anim-reveal" style="transition-delay:0.15s;">
        <div class="about-img-wrap">
          @if(!empty($about_image))
            <img src="{{ asset('storage/' . $about_image) }}" alt="About Inoodex" />
          @else
            <img src="{{ asset('frontend/assets/images/about-us-img.jpg') }}" alt="About Inoodex" />
          @endif
        </div>
        <div class="about-exp-badge">
          <div><span class="number">8</span><span class="plus">+</span></div>
          <div class="label">Years of<br>experience</div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var about = document.querySelector('.about-us');
  if (!about) return;
  var items = about.querySelectorAll('.anim-reveal');
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  items.forEach(function(item) { observer.observe(item); });
});
</script>
