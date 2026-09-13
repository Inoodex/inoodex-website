<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

  .industry {
    padding: 100px 0;
    background: #ffffff;
    font-family: 'Inter', sans-serif;
    display: flex;
    justify-content: center;
    position: relative;
    overflow: hidden;
  }

  .industry::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(to right, rgba(0, 0, 0, 0.04) 1px, transparent 1px),
      linear-gradient(to bottom, rgba(0, 0, 0, 0.04) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
    z-index: 0;
  }

  .industry-container {
    width: 100%;
    max-width: 1200px;
    padding: 0 24px;
    position: relative;
    z-index: 1;
  }

  .ind-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .ind-badge {
    display: inline-block;
    background: rgba(0, 0, 0, 0.05);
    color: rgba(0, 0, 0, 0.5);
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 6px 16px;
    border-radius: 50px;
    margin-bottom: 16px;
  }

  .ind-heading {
    font-size: clamp(28px, 4vw, 42px);
    font-weight: 700;
    color: #111827;
    margin: 0 0 16px;
  }

  .ind-subtitle {
    font-size: 15px;
    color: rgba(0, 0, 0, 0.55);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
  }

  /* =========================================
     CSS GRID লেআউট (ডেস্কটপে প্রতি রো-তে ৬টি কার্ড)
     ========================================= */
  .ind-grid {
    display: grid;
    /* ডেস্কটপে ৬টি কলাম */
    grid-template-columns: repeat(6, 1fr); 
    gap: 16px; /* কার্ডগুলোর মাঝে দূরত্ব */
    justify-items: center;
  }

  /* কার্ডের মূল ডিজাইন */
  .ind-box {
    width: 100%;
    height: 105px; /* কার্ডের উচ্চতা একটু কম */
    /* ছবির ডিজাইন: উপরের-বাম এবং নিচের-ডান রাউন্ডেড */
    border-radius: 24px 0 24px 0; 
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
    box-sizing: border-box;
  }

  .ind-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
  }

  .ind-icon-wrap {
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .ind-icon-wrap svg {
    width: 24px;
    height: 24px;
    stroke: #1e293b;
    stroke-width: 1.8;
    fill: none;
  }

  .ind-box h5 {
    font-family: 'Inter', sans-serif;
    font-size: 11px; /* টেক্সট ছোট করা হয়েছে যাতে ৬টি কার্ডে ফিট করে */
    font-weight: 600;
    color: #1e293b;
    margin: 0;
    line-height: 1.2;
    padding: 0 2px;
  }

  /* =========================================
     রেস্পন্সিভ ডিজাইন
     ========================================= */
  /* মাঝারি স্ক্রিনে ৪টি কলাম */
  @media (max-width: 1024px) {
    .ind-grid {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  /* ট্যাবলেটে ৩টি কলাম */
  @media (max-width: 768px) {
    .industry { padding: 60px 0; }
    .ind-grid {
      grid-template-columns: repeat(3, 1fr);
    }
    .ind-box h5 {
      font-size: 11px;
    }
  }

  /* মোবাইলে ২টি কলাম */
  @media (max-width: 480px) {
    .ind-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
</style>

<div class="industry">
  <div class="industry-container">
    <div class="ind-header">
      <div class="ind-badge">Industries</div>
      <h2 class="ind-heading">Our Industry Expertises</h2>
      <p class="ind-subtitle">Our deep understanding of diverse industries empowers us to design customized software solutions. Let our expertise be the catalyst for your next triumph</p>
    </div>

    <div class="ind-grid">
      <!-- ১ম রো (৬টি কার্ড) -->
      <div class="ind-box" style="background:#fbd0dc;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 14v3M12 14v3M16 14v3"/></svg>
        </div>
        <h5>Finance & Banking</h5>
      </div>
      <div class="ind-box" style="background:#cbf3d8;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
        </div>
        <h5>E-commerce</h5>
      </div>
      <div class="ind-box" style="background:#d6d1f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
        </div>
        <h5>Telecom</h5>
      </div>
      <div class="ind-box" style="background:#cce6f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
        </div>
        <h5>Real Estate</h5>
      </div>
      <div class="ind-box" style="background:#fce6c9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><path d="M8 21h8M12 17v4"/></svg>
        </div>
        <h5>Software</h5>
      </div>
      <div class="ind-box" style="background:#cbf3d8;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg>
        </div>
        <h5>Health & Fitness</h5>
      </div>

      <!-- ২য় রো (৬টি কার্ড) -->
      <div class="ind-box" style="background:#d6d1f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M14 16H9m10 0h3v-3.15a1 1 0 00-.84-.99L16 11l-2.7-3.6a1 1 0 00-.8-.4H5.24a2 2 0 00-1.8 1.1l-.8 1.63A6 6 0 002 12.42V16h2M7 19a4 4 0 100-8 4 4 0 000 8z"/></svg>
        </div>
        <h5>Automotive</h5>
      </div>
      <div class="ind-box" style="background:#fce6c9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/><circle cx="12" cy="13" r="4"/></svg>
        </div>
        <h5>Photo & Video</h5>
      </div>
      <div class="ind-box" style="background:#fce6c9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
        </div>
        <h5>Business</h5>
      </div>
      <div class="ind-box" style="background:#cce6f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <h5>Startup</h5>
      </div>
      <div class="ind-box" style="background:#d6d1f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <h5>AR/VR</h5>
      </div>
      <div class="ind-box" style="background:#cce6f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
        </div>
        <h5>Legal Services</h5>
      </div>

      <!-- ৩য় রো (৬টি কার্ড) -->
      <div class="ind-box" style="background:#fce6c9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 000-7.78z"/></svg>
        </div>
        <h5>Non-profit</h5>
      </div>
      <div class="ind-box" style="background:#cce6f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M3 21h18M9 8h1M9 12h1M9 16h1M14 8h1M14 12h1M14 16h1M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16"/></svg>
        </div>
        <h5>Govt. & Public Sector</h5>
      </div>
      <div class="ind-box" style="background:#d6d1f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 01-6 6M12 2v2M12 16v2M4.93 4.93l1.41 1.41M16.24 16.24l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M16.24 7.76l1.41-1.41"/></svg>
        </div>
        <h5>Sports & Fitness</h5>
      </div>
      <div class="ind-box" style="background:#cce6f9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><rect x="2" y="6" width="20" height="12" rx="2"/><path d="M6 12h4M14 12h4M10 10v4M14 10v4"/></svg>
        </div>
        <h5>Gaming</h5>
      </div>
      <div class="ind-box" style="background:#fce6c9;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M20.38 3.46L16 2 12 5 8 2 3.62 3.46a2 2 0 00-1.34 1.89v12.3a2 2 0 002.66 1.89L8 18l4-3 4 3 4.38-1.46a2 2 0 001.34-1.89V5.35a2 2 0 00-1.34-1.89z"/></svg>
        </div>
        <h5>Fashion & Apparel</h5>
      </div>
      <div class="ind-box" style="background:#cbf3d8;">
        <div class="ind-icon-wrap">
          <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        </div>
        <h5>Energy & Utilities</h5>
      </div>
    </div>
  </div>
</div>