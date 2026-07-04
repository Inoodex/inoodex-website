<style>
.about-us {
  background: #0f172a;
  padding: 80px 0;
  position: relative;
  overflow: hidden;
}

.about-us::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(34, 197, 94, 0.06) 0%, transparent 70%);
  border-radius: 50%;
  pointer-events: none;
}

.about-title {
  font-size: 14px;
  color: #22c55e;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-weight: 600;
  margin-bottom: 10px;
}

.about-heading {
  font-size: 36px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 30px;
  line-height: 1.2;
}

.about-heading span {
  color: #22c55e;
}

.about-text {
  color: #94a3b8;
  line-height: 1.8;
  margin-bottom: 20px;
  font-size: 15px;
}

.about-features {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
  margin-bottom: 30px;
  padding: 0;
  list-style: none;
}

.about-features li {
  color: #cbd5e1;
  font-size: 14px;
  padding: 8px 0 8px 28px;
  position: relative;
  transition: all 0.3s ease;
}

.about-features li::before {
  content: '✓';
  position: absolute;
  left: 0;
  top: 8px;
  color: #22c55e;
  font-weight: 700;
  font-size: 16px;
}

.about-features li:hover {
  color: #ffffff;
  transform: translateX(5px);
}

.about-btn {
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
  border: none;
  cursor: pointer;
}

.about-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);
  color: #ffffff;
}

/* Image wrapper */
.about-image-wrap {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
}

.about-image-wrap img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 16px;
  transition: transform 0.6s ease;
}

.about-image-wrap:hover img {
  transform: scale(1.05);
}

.about-image-wrap::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(34, 197, 94, 0.15), transparent);
  border-radius: 16px;
  pointer-events: none;
}

.about-exp-badge {
  position: absolute;
  bottom: -20px;
  right: -20px;
  width: 120px;
  height: 120px;
  background: linear-gradient(135deg, #22c55e, #16a34a);
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-weight: 700;
  box-shadow: 0 10px 40px rgba(34, 197, 94, 0.3);
  z-index: 2;
}

.about-exp-badge .number {
  font-size: 32px;
  line-height: 1;
}

.about-exp-badge .label {
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 1px;
  opacity: 0.9;
}

/* Animation classes */
.anim-reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.anim-reveal.visible {
  opacity: 1;
  transform: translateY(0);
}

.anim-reveal-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.anim-reveal-left.visible {
  opacity: 1;
  transform: translateX(0);
}

.anim-reveal-right {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.anim-reveal-right.visible {
  opacity: 1;
  transform: translateX(0);
}

.anim-stagger>* {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.anim-stagger.visible>*:nth-child(1) {
  transition-delay: 0s;
}

.anim-stagger.visible>*:nth-child(2) {
  transition-delay: 0.05s;
}

.anim-stagger.visible>*:nth-child(3) {
  transition-delay: 0.1s;
}

.anim-stagger.visible>*:nth-child(4) {
  transition-delay: 0.15s;
}

.anim-stagger.visible>*:nth-child(5) {
  transition-delay: 0.2s;
}

.anim-stagger.visible>*:nth-child(6) {
  transition-delay: 0.25s;
}

.anim-stagger.visible>* {
  opacity: 1;
  transform: translateY(0);
}

/* Fullscreen mode */
.about-us.fullscreen {
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  width: 100vw !important;
  height: 100vh !important;
  z-index: 99999 !important;
  padding: 60px 0 !important;
  overflow-y: auto !important;
  display: flex !important;
  align-items: center !important;
  transform: scale(1);
  transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.about-us.fullscreen .about-inner {
  width: 100%;
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 20px;
}

.about-us .fs-close {
  position: fixed;
  top: 20px;
  right: 30px;
  width: 44px;
  height: 44px;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 100000;
  transition: all 0.3s ease;
  line-height: 1;
}

.about-us .fs-close:hover {
  background: #22c55e;
  border-color: #22c55e;
  transform: rotate(90deg);
}

.about-us.fullscreen .fs-close {
  display: flex;
}

.about-us.fs-animating {
  pointer-events: none;
}

/* Cursor indicator */
.about-us .fs-hint {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  color: rgba(255, 255, 255, 0.25);
  font-size: 12px;
  letter-spacing: 2px;
  text-transform: uppercase;
  transition: opacity 0.3s ease;
  pointer-events: none;
}

.about-us:hover .fs-hint {
  color: rgba(255, 255, 255, 0.5);
}

.about-us.fullscreen .fs-hint {
  display: none;
}

@media (min-width: 1025px) {
  .about-img-col {
    flex: 0 0 50% !important;
    max-width: 50% !important;
    margin-bottom: 0 !important;
  }

  .about-content-col {
    flex: 0 0 50% !important;
    max-width: 50% !important;
  }
}

@media (max-width: 1024px) {
  .about-heading {
    font-size: 28px;
  }

  .about-exp-badge {
    width: 100px;
    height: 100px;
    bottom: -15px;
    right: -15px;
  }

  .about-exp-badge .number {
    font-size: 26px;
  }
}

@media (max-width: 768px) {
  .about-us {
    padding: 50px 0;
  }

  .about-heading {
    font-size: 24px;
  }

  .about-features {
    grid-template-columns: 1fr;
  }

  .about-exp-badge {
    width: 90px;
    height: 90px;
    bottom: -10px;
    right: -10px;
  }

  .about-exp-badge .number {
    font-size: 22px;
  }
}
</style>

<div class="about-us" style="cursor:pointer;">


  <div class="about-inner" style="max-width:1200px;margin:0 auto;padding:0 20px;">
    <div style="display:flex;flex-wrap:wrap;margin:0 -15px;align-items:center;">
      <!-- Image Column -->
      <div style="flex:0 0 100%;max-width:100%;padding:0 15px;margin-bottom:40px;" class="about-img-col">
        <div class="about-image-wrap anim-reveal-left" style="max-width:540px;margin:0 auto;">
          <img src="{{ asset('frontend/assets/images/about-us-img.jpg') }}" alt="About Inoodex" />

        </div>
      </div>

      <!-- Content Column -->
      <div class="about-content-col" style="flex:0 0 100%;max-width:100%;padding:0 15px;">
        <div style="max-width:600px;">

          <!-- Section Label -->
          <div class="about-title anim-reveal">About Us</div>

          <!-- Heading -->
          <h2 class="about-heading anim-reveal" style="transition-delay:0.1s;">
            Who <span>We Are</span>
          </h2>

          <!-- Description -->
          <p class="about-text anim-reveal" style="transition-delay:0.2s;">
            Welcome to Inoodex, your trusted partner in digital innovation.
            We specialize in delivering customized web design, software
            development, SEO, and e-commerce solutions to help businesses
            grow and thrive in today's competitive landscape. Our mission is
            simple: to empower businesses by providing reliable,
            cutting-edge technology services tailored to meet their unique
            needs.
          </p>

          <p class="about-text anim-reveal" style="transition-delay:0.3s;">
            At Inoodex, we view every project as a partnership. We are
            dedicated to understanding your vision and working closely with
            you to bring it to life. Our agile approach ensures that we
            adapt to changing needs, providing solutions that are scalable
            and future-proof.
          </p>

          <!-- Features List -->
          <ul class="about-features anim-stagger anim-reveal" style="transition-delay:0.35s;">
            <li>Ease of Scalability</li>
            <li>Instant Impact</li>
            <li>Expertise and Experience</li>
            <li>Time Zone Aligned</li>
            <li>Full Flexibility</li>
            <li>Proactive Support</li>
          </ul>

          <!-- Button -->
          <a href="{{ url('/contact') }}" class="about-btn anim-reveal" style="transition-delay:0.45s;">
            Free Consultation
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var about = document.querySelector('.about-us');
  if (!about) return;

  // Scroll animations
  var animateItems = about.querySelectorAll('.anim-reveal, .anim-reveal-left, .anim-reveal-right, .anim-stagger');
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15
  });
  animateItems.forEach(function(item) {
    observer.observe(item);
  });

  // Fullscreen toggle
  var fsClose = document.getElementById('aboutFsClose');
  var isFullscreen = false;

  function enterFullscreen() {
    if (isFullscreen) return;
    isFullscreen = true;
    about.classList.add('fullscreen');
    setTimeout(function() {
      about.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }, 100);
  }

  function exitFullscreen() {
    if (!isFullscreen) return;
    isFullscreen = false;
    about.classList.remove('fullscreen');
    about.scrollIntoView({
      behavior: 'smooth',
      block: 'center'
    });
  }

  about.addEventListener('click', function(e) {
    if (e.target === fsClose || fsClose.contains(e.target)) return;
    if (isFullscreen) return;
    enterFullscreen();
  });

  fsClose.addEventListener('click', function(e) {
    e.stopPropagation();
    exitFullscreen();
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && isFullscreen) {
      exitFullscreen();
    }
  });
});
</script>