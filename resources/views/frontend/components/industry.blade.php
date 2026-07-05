<style>
.industry {
  padding: 100px 0;
  background: #0f172a;
}

.ind-box {
  background: linear-gradient(180deg, rgba(30, 41, 59, 0.5), rgba(15, 23, 42, 0.5));
  border: 1px solid #1e293b;
  border-radius: 16px;
  padding: 32px 16px 24px;
  text-align: center;
  transition: all 0.4s ease;
  cursor: default;
  position: relative;
  overflow: hidden;
}

.ind-box::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 3px;
  background: linear-gradient(90deg, transparent, #22c55e, transparent);
  border-radius: 0 0 3px 3px;
  transition: width 0.4s ease;
}

.ind-box:hover::before {
  width: 80%;
}

.ind-box:hover {
  border-color: #22c55e !important;
  transform: translateY(-8px) !important;
  box-shadow: 0 20px 40px rgba(34, 197, 94, 0.12) !important;
  background: linear-gradient(180deg, rgba(30, 41, 59, 0.8), rgba(15, 23, 42, 0.8)) !important;
}

.ind-icon-wrap {
  width: 72px;
  height: 72px;
  margin: 0 auto 16px;
  background: rgba(34, 197, 94, 0.08);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid rgba(34, 197, 94, 0.12);
  transition: all 0.4s ease;
}

.ind-box:hover .ind-icon-wrap {
  background: #22c55e;
  border-color: #22c55e;
}

.ind-box:hover .ind-icon-wrap svg {
  stroke: #ffffff !important;
}

/* --- GREEN HIGHLIGHT FOR "SERVE" --- */
.industry .highlight-green {
  color: #22c55e;
  position: relative;
}

.industry .highlight-green::after {
  content: '';
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, #22c55e, transparent);
  border-radius: 4px;
}

@media (max-width: 1024px) {
  .industry .ind-grid {
    grid-template-columns: repeat(4, 1fr) !important;
  }
}

@media (max-width: 640px) {
  .industry .ind-grid {
    grid-template-columns: repeat(3, 1fr) !important;
  }

  .industry {
    padding: 60px 0;
  }
}

@media (max-width: 420px) {
  .industry .ind-grid {
    grid-template-columns: repeat(2, 1fr) !important;
  }
}
</style>

<div class="industry">
  <div style="max-width:1280px;margin:0 auto;padding:0 24px;">
    <div style="text-align:center;margin-bottom:60px;">
      <span
        style="display:inline-block;background:rgba(34,197,94,0.1);color:#22c55e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;padding:6px 16px;border-radius:50px;margin-bottom:16px;">Industries</span>
      <h2 style="font-size:36px;font-weight:800;color:#f1f5f9;margin:0;letter-spacing:-0.5px;">
        Industry <span class="highlight-green"> We Serve</span>
      </h2>
      <p style="font-size:16px;color:#64748b;max-width:500px;margin:16px auto 0;line-height:1.7;">Delivering tailored
        solutions across diverse sectors with expertise and precision.</p>
    </div>

    <svg style="position: absolute; width: 0; height: 0;">
      <defs>
        <linearGradient id="iconGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#22c55e;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#10b981;stop-opacity:1" />
        </linearGradient>
      </defs>
    </svg>

    <div class="ind-grid" style="display:grid;grid-template-columns:repeat(6,1fr);gap:20px;">
      <!-- FinTech -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">FinTech</h5>
      </div>

      <!-- Healthcare -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Healthcare</h5>
      </div>

      <!-- E-Commerce -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">E-Commerce</h5>
      </div>

      <!-- Automotive -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Automotive</h5>
      </div>

      <!-- Education -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Education</h5>
      </div>

      <!-- Real Estate -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Real Estate</h5>
      </div>

      <!-- Hospitality -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Hospitality</h5>
      </div>

      <!-- RMG -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">RMG</h5>
      </div>

      <!-- Pharmacy -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M9 3h6v2H9V3zm4 6h2v6h-2V9zm-4 0h2v6H9V9zm0 8h6v2H9v-2zm-4-3a7 7 0 1114 0H5z" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Pharmacy</h5>
      </div>

      <!-- Aviation -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Aviation</h5>
      </div>

      <!-- UI/UX -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">UI/UX</h5>
      </div>

      <!-- Many More -->
      <div class="ind-box">
        <div class="ind-icon-wrap">
          <svg style="width:32px;height:32px;" fill="none" stroke="url(#iconGradient)" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
          </svg>
        </div>
        <h5 style="font-size:14px;font-weight:700;color:#e2e8f0;margin:0;">Many More</h5>
      </div>
    </div>
  </div>
</div>