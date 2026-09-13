<style>
.why-choose-us {
  position: relative;
  background: #ffffff;
  padding: 100px 20px;
  overflow: hidden;
}

.why-shape {
  position: absolute;
  pointer-events: none;
  z-index: 0;
}

.why-shape-1 {
  top: 60px;
  left: 40px;
  width: 80px;
  height: 80px;
  background: rgba(244, 166, 55, 0.18);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}

.why-shape-2 {
  top: 40px;
  right: 80px;
  width: 60px;
  height: 120px;
  background: rgba(244, 166, 55, 0.15);
  border-radius: 30px 30px 0 0;
}

.why-shape-3 {
  bottom: 80px;
  right: 60px;
  width: 50px;
  height: 50px;
  background: rgba(17, 24, 39, 0.12);
  border-radius: 0 25px 25px 25px;
  transform: rotate(45deg);
}

.why-shape-4 {
  bottom: 100px;
  left: 80px;
  width: 40px;
  height: 100px;
  background: rgba(244, 166, 55, 0.16);
  border-radius: 20px;
}

.why-shape-5 {
  top: 50%;
  left: 20px;
  width: 70px;
  height: 70px;
  border: 3px solid rgba(244, 166, 55, 0.28);
  border-radius: 50%;
}

.why-shape-6 {
  top: 30%;
  right: 30px;
  width: 45px;
  height: 45px;
  background: rgba(17, 24, 39, 0.10);
  clip-path: polygon(50% 0%, 100% 100%, 0% 100%);
}

.why-shape-7 {
  bottom: 40px;
  left: 30%;
  width: 90px;
  height: 30px;
  background: rgba(244, 166, 55, 0.14);
  border-radius: 15px;
}

.why-shape-wave {
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  line-height: 0;
  pointer-events: none;
}

.why-shape-wave svg {
  width: 100%;
  height: 100px;
  display: block;
}

.why-choose-us .max-w-7xl {
  max-width: 1280px;
  margin: 0 auto;
  position: relative;
  z-index: 10;
}

.why-header {
  text-align: center;
  margin-bottom: 60px;
}

.why-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 7px 22px;
  background: rgba(244, 166, 55, 0.1);
  border: 1px solid rgba(244, 166, 55, 0.3);
  border-radius: 50px;
  margin-bottom: 18px;
  transition: all 0.3s ease;
}

.why-badge:hover {
  background: rgba(244, 166, 55, 0.18);
  transform: translateY(-2px);
}

.why-badge span {
  color: #f4a637;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.8px;
  text-transform: uppercase;
}

.why-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(28px, 4vw, 42px);
  font-weight: 800;
  color: #111827;
  line-height: 1.25;
  margin: 0;
}

.why-title .why-highlight {
  color: #f4a637;
}

.why-items {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
  margin-top: 20px;
}

.why-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.why-item:hover {
  transform: translateY(-8px);
}

.why-item-circle {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 4px solid #f4a637;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  background: #ffffff;
}

.why-item-circle::before {
  content: '';
  position: absolute;
  inset: -10px;
  border-radius: 50%;
  border: 2px dashed rgba(244, 166, 55, 0.3);
  opacity: 0;
  transition: all 0.4s ease;
}

.why-item:hover .why-item-circle::before {
  opacity: 1;
  inset: -14px;
}

.why-item:nth-child(2n) .why-item-circle {
  border-color: #111827;
}

.why-item:nth-child(2n) .why-item-circle::before {
  border-color: rgba(17, 24, 39, 0.2);
}

.why-item:hover .why-item-circle {
  transform: scale(1.1);
  box-shadow: 0 12px 36px rgba(244, 166, 55, 0.25);
}

.why-item:nth-child(2n):hover .why-item-circle {
  box-shadow: 0 12px 36px rgba(0, 0, 0, 0.12);
}

.why-item-circle svg {
  width: 58px;
  height: 58px;
  fill: #111827;
  transition: all 0.4s ease;
}

.why-item:hover .why-item-circle svg {
  transform: scale(1.1);
}

.why-item-line {
  width: 3px;
  height: 30px;
  background: #f4a637;
  margin: 0;
  position: relative;
  transition: height 0.3s ease;
}

.why-item:hover .why-item-line {
  height: 36px;
}

.why-item-line::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 50%;
  transform: translateX(-50%);
  width: 12px;
  height: 3px;
  background: #f4a637;
  transition: width 0.3s ease;
}

.why-item:hover .why-item-line::after {
  width: 18px;
}

.why-item:nth-child(2n) .why-item-line {
  background: #111827;
}

.why-item:nth-child(2n) .why-item-line::after {
  background: #111827;
}

.why-item h3 {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  font-weight: 700;
  color: #111827;
  margin: 16px 0 8px;
  line-height: 1.3;
  transition: color 0.3s ease;
}

.why-item:hover h3 {
  color: #f4a637;
}

.why-item:nth-child(2n):hover h3 {
  color: #111827;
}

.why-item p {
  color: #6b7280;
  font-size: 14px;
  line-height: 1.8;
  max-width: 260px;
  margin: 0;
  transition: color 0.3s ease;
}

.why-item:hover p {
  color: #374151;
}

@media (max-width: 1024px) {
  .why-items {
    grid-template-columns: repeat(2, 1fr);
    gap: 40px 30px;
  }
}

@media (max-width: 640px) {
  .why-choose-us { padding: 60px 16px; }
  .why-items {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .why-shape {
    display: none;
  }
}
</style>

<div class="why-choose-us">
  <div class="why-shape why-shape-1"></div>
  <div class="why-shape why-shape-2"></div>
  <div class="why-shape why-shape-3"></div>
  <div class="why-shape why-shape-4"></div>
  <div class="why-shape why-shape-5"></div>
  <div class="why-shape why-shape-6"></div>
  <div class="why-shape why-shape-7"></div>
  <div class="max-w-7xl">
    <div class="why-header">
      <div class="why-badge">
        <span>Why Choose Us</span>
      </div>
      <h2 class="why-title">
        Why Choose <span class="why-highlight">InooDex</span>?
      </h2>
    </div>

    <div class="why-items">

      <div class="why-item">
        <div class="why-item-circle">
          <svg viewBox="0 0 64 64"><path d="M32 4l-8 14h16L32 4zm-16 20l-8 14h16L16 24zm32 0l-8 14h16L48 24zM32 20l-8 14h16L32 20z"/></svg>
        </div>
        <div class="why-item-line"></div>
        <h3>Innovation</h3>
        <p>Driving digital transformation through cutting-edge technology, creative architecture, and futuristic software craftsmanship.</p>
      </div>

      <div class="why-item">
        <div class="why-item-circle">
          <svg viewBox="0 0 64 64"><path d="M6 36h52v6H6v-6zm6-10h6v10h-6V26zm12-8h6v18h-6V18zm12-8h6v26h-6V10zm12-4h6v30h-6V6z"/></svg>
        </div>
        <div class="why-item-line"></div>
        <h3>Quality-Focused</h3>
        <p>Ensuring rock-solid stability, enterprise-grade security standards, and high-performance user experiences on every build.</p>
      </div>

      <div class="why-item">
        <div class="why-item-circle">
          <svg viewBox="0 0 64 64"><path d="M32 8C18.7 8 8 18.7 8 32s10.7 24 24 24 24-10.7 24-24S45.3 8 32 8zm4 32h-4v4c0 1.1-.9 2-2 2s-2-.9-2-2v-4h-4c-1.1 0-2-.9-2-2s.9-2 2-2h4v-4c0-1.1.9-2 2-2s2 .9 2 2v4h4c1.1 0 2 .9 2 2s-.9 2-2 2z"/></svg>
        </div>
        <div class="why-item-line"></div>
        <h3>Value for Money</h3>
        <p>Maximizing ROI with transparent milestones, dedicated engineering teams, and cost-efficient scalable solutions tailored to your scale.</p>
      </div>

      <div class="why-item">
        <div class="why-item-circle">
          <svg viewBox="0 0 64 64"><path d="M32 20c4.4 0 8-3.6 8-8s-3.6-8-8-8-8 3.6-8 8 3.6 8 8 8zm-16 8c-2.2 0-4 1.8-4 4v4c0 5.5 4.5 10 10 10h12c5.5 0 10-4.5 10-10v-4c0-2.2-1.8-4-4-4H16zm28 20H20c-4.4 0-8-3.6-8-8v-4h48v4c0 4.4-3.6 8-8 8z"/></svg>
        </div>
        <div class="why-item-line"></div>
        <h3>Expert Team</h3>
        <p>A dedicated team of skilled engineers and designers committed to delivering excellence on every project we undertake.</p>
      </div>

    </div>
  </div>
  <div class="why-shape-wave">
    <svg viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,50 C360,90 720,10 1080,50 C1260,70 1380,65 1440,50 L1440,100 L0,100 Z" fill="#f8f9fb"/>
    </svg>
  </div>
</div>
