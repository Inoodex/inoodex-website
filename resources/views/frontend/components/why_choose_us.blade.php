<style>
  /* ================= WHY CHOOSE US SECTION ================= */
  .why-choose-us {
    position: relative;
    background: #0a0e1a;
    padding: 100px 20px;
    overflow: hidden;
    font-family: 'Inter', sans-serif;
  }

  .why-choose-us .max-w-7xl {
    max-width: 1280px;
    margin: 0 auto;
    position: relative;
    z-index: 10;
  }

  .why-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .why-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 22px;
    background: rgba(244, 166, 55, 0.08);
    border: 1px solid rgba(244, 166, 55, 0.25);
    border-radius: 50px;
    margin-bottom: 18px;
    backdrop-filter: blur(8px);
  }

  .why-badge span {
    color: #f4a637;
    font-family: 'JetBrains Mono', monospace;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.8px;
    text-transform: uppercase;
  }

  .why-title {
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    margin: 0;
    letter-spacing: -0.5px;
  }

  .why-title .why-highlight {
    background: linear-gradient(135deg, #f4a637 0%, #fcd34d 50%, #d18f2b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  /* Responsive Cards Grid */
  .why-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
  }

  .why-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    backdrop-filter: blur(10px);
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .why-card:hover {
    border-color: rgba(244, 166, 55, 0.45);
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5), 0 0 20px rgba(244, 166, 55, 0.1);
    background: linear-gradient(180deg, rgba(30, 41, 59, 0.4) 0%, rgba(15, 23, 42, 0.5) 100%);
  }

  .why-card-top-bar {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3.5px;
    background: linear-gradient(90deg, #f4a637, #fcd34d, #d18f2b);
    opacity: 0.8;
    transition: opacity 0.3s ease;
  }

  .why-card:hover .why-card-top-bar {
    opacity: 1;
    height: 4px;
  }

  .why-icon-box {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    margin: 0 auto 22px;
    background: linear-gradient(135deg, rgba(244, 166, 55, 0.12), rgba(244, 166, 55, 0.03));
    border-radius: 20px;
    border: 1px solid rgba(244, 166, 55, 0.2);
    transition: all 0.4s ease;
  }

  .why-card:hover .why-icon-box {
    transform: scale(1.08);
    background: #f4a637;
    border-color: #f4a637;
    box-shadow: 0 10px 25px rgba(244, 166, 55, 0.35);
  }

  .why-card:hover .why-icon-box img {
    filter: brightness(0);
  }

  .why-card h3 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 21px;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 12px 0;
  }

  .why-card p {
    color: #94a3b8;
    font-size: 14.5px;
    line-height: 1.8;
    margin: 0;
    flex-grow: 1;
  }

  .why-learn-more {
    margin-top: 26px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 24px;
    background: linear-gradient(135deg, #f4a637, #d18f2b);
    color: #ffffff;
    font-size: 12.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    border-radius: 50px;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.35s ease;
    box-shadow: 0 4px 15px rgba(244, 166, 55, 0.25);
  }

  .why-learn-more:hover {
    background: linear-gradient(135deg, #ffb648, #e0972b);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(244, 166, 55, 0.4);
    color: #ffffff;
  }

  .why-learn-more i {
    transition: transform 0.3s ease;
    font-size: 11px;
  }

  .why-learn-more:hover i {
    transform: translateX(4px);
  }

  /* Responsive Breakpoints */
  @media (max-width: 1024px) {
    .why-cards-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
    }
  }

  @media (max-width: 768px) {
    .why-choose-us {
      padding: 60px 16px;
    }
    .why-header {
      margin-bottom: 35px;
    }
    .why-cards-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    .why-card {
      padding: 32px 22px;
    }
  }
</style>

<div class="why-choose-us">
  <div class="max-w-7xl">
    <!-- Section Header -->
    <div class="why-header">
      <div class="why-badge">
        <span>✦ Why Choose Us</span>
      </div>
      <h2 class="why-title">
        Why Choose <span class="why-highlight">InooDex</span>?
      </h2>
    </div>

    <!-- Responsive Cards Grid -->
    <div class="why-cards-grid">
      <!-- Card 1 - Innovation -->
      <div class="why-card">
        <div class="why-card-top-bar"></div>
        <div class="why-icon-box">
          <img src="{{ asset('frontend/assets/images/icon-whyus-1.svg') }}" alt="Innovation" style="width: 38px; height: 38px; filter: brightness(0) invert(1);">
        </div>
        <h3>Innovation</h3>
        <p>Driving digital transformation through cutting-edge technology, creative architecture, and futuristic software craftsmanship.</p>
        <a href="#services" class="why-learn-more">
          <span>Learn More</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- Card 2 - Quality-Focused -->
      <div class="why-card">
        <div class="why-card-top-bar"></div>
        <div class="why-icon-box">
          <img src="{{ asset('frontend/assets/images/icon-whyus-2.svg') }}" alt="Quality-Focused" style="width: 38px; height: 38px; filter: brightness(0) invert(1);">
        </div>
        <h3>Quality-Focused</h3>
        <p>Ensuring rock-solid stability, enterprise-grade security standards, and high-performance user experiences on every build.</p>
        <a href="#services" class="why-learn-more">
          <span>Learn More</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- Card 3 - Value for Money -->
      <div class="why-card">
        <div class="why-card-top-bar"></div>
        <div class="why-icon-box">
          <img src="{{ asset('frontend/assets/images/icon-whyus-3.svg') }}" alt="Value for Money" style="width: 38px; height: 38px; filter: brightness(0) invert(1);">
        </div>
        <h3>Value for Money</h3>
        <p>Maximizing ROI with transparent milestones, dedicated engineering teams, and cost-efficient scalable solutions tailored to your scale.</p>
        <a href="#services" class="why-learn-more">
          <span>Learn More</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>
