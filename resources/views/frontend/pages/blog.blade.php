<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<head>
  <!-- GSAP & Lenis -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
  <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js" defer></script>

  <style>
  /* ========== PAGE HEADER ========== */
  .page-header {
    position: relative;
    background: #0a0e1a;
    padding: 120px 0 80px;
    overflow: hidden;
  }

  .page-header::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 70% 30%, rgba(16, 185, 129, 0.08) 0%, transparent 50%),
      radial-gradient(circle at 30% 70%, rgba(59, 130, 246, 0.05) 0%, transparent 50%);
    pointer-events: none;
  }

  .page-header .orb1 {
    position: absolute;
    top: -20%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatOrb1 12s ease-in-out infinite;
  }

  .page-header .orb2 {
    position: absolute;
    bottom: -20%;
    left: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.03) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatOrb2 16s ease-in-out infinite;
  }

  @keyframes floatOrb1 {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(40px, -30px) scale(1.1);
    }
  }

  @keyframes floatOrb2 {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(-40px, 30px) scale(1.15);
    }
  }

  .page-header-box {
    position: relative;
    z-index: 2;
    text-align: center;
  }

  .page-header-box h1 {
    font-size: 52px;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 15px;
    letter-spacing: -1px;
  }

  .page-header-box h1 span {
    background: linear-gradient(135deg, #10b981, #34d399, #3b82f6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 300% 300%;
    animation: gradientMove 5s ease-in-out infinite;
  }

  @keyframes gradientMove {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  .page-header-box .breadcrumb {
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
    list-style: none;
    padding: 2;
    margin: 0;
    white-space: nowrap;
  }

  .page-header-box .breadcrumb li {
    display: inline-flex;
    align-items: center;
    font-size: 14px;
    color: #9ca3af;
    margin: 0;
  }

  .page-header-box .breadcrumb li+li {
    margin-left: 8px;
  }

  .page-header-box .breadcrumb li a {
    color: #10b981;
    text-decoration: none;
    transition: color 0.3s;
  }

  .page-header-box .breadcrumb li a:hover {
    color: #34d399;
  }

  .page-header-box .breadcrumb li.active {
    color: #ffffff;
  }

  .page-header-box .breadcrumb li+li::before {
    content: '/';
    margin-right: 8px;
    color: #374151;
  }

  /* ========== BLOG SECTION ========== */
  .latest-news {
    position: relative;
    background: #0a0e1a;
    padding: 80px 0 100px;
    overflow: hidden;
  }

  .latest-news .bg-orb1 {
    position: absolute;
    top: -10%;
    right: -5%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(139, 92, 246, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatOrb3 18s ease-in-out infinite;
  }

  .latest-news .bg-orb2 {
    position: absolute;
    bottom: -10%;
    left: -5%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(236, 72, 153, 0.03) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatOrb4 14s ease-in-out infinite;
  }

  @keyframes floatOrb3 {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(-30px, 20px) scale(1.1);
    }
  }

  @keyframes floatOrb4 {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(30px, -20px) scale(1.15);
    }
  }

  /* Blog Grid */
  .blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    position: relative;
    z-index: 2;
  }

  /* Blog Item */
  .blog-item {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    opacity: 0;
    transform: translateY(40px) scale(0.95);
    cursor: pointer;
  }

  .blog-item:hover {
    transform: translateY(-10px) scale(1.02) !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4) !important;
  }

  /* Featured Image */
  .post-featured-image {
    position: relative;
    overflow: hidden;
    height: 220px;
  }

  .post-featured-image figure {
    margin: 0;
    height: 100%;
    overflow: hidden;
  }

  .post-featured-image figure img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .blog-item:hover .post-featured-image figure img {
    transform: scale(1.08);
  }

  /* Image Overlay */
  .post-featured-image .overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(10, 14, 26, 0.8));
    z-index: 1;
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .blog-item:hover .post-featured-image .overlay {
    opacity: 1;
  }

  /* Category Badge */
  .post-featured-image .category-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 2;
    padding: 5px 16px;
    background: rgba(10, 14, 26, 0.8);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 50px;
    color: #10b981;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
  }

  .blog-item:hover .post-featured-image .category-badge {
    background: rgba(16, 185, 129, 0.15);
    border-color: rgba(16, 185, 129, 0.2);
  }

  /* Read More Icon */
  .post-featured-image .read-icon {
    position: absolute;
    bottom: 20px;
    right: 20px;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    background: rgba(16, 185, 129, 0.15);
    border: 1px solid rgba(16, 185, 129, 0.2);
    border-radius: 50%;
    color: #10b981;
    font-size: 18px;
    opacity: 0;
    transform: translateX(-20px);
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    text-decoration: none;
  }

  .blog-item:hover .post-featured-image .read-icon {
    opacity: 1;
    transform: translateX(0);
  }

  .post-featured-image .read-icon:hover {
    background: #10b981;
    color: #ffffff;
    transform: rotate(45deg);
  }

  /* Post Body */
  .post-item-body {
    padding: 22px 25px 25px;
  }

  .post-item-body .date {
    color: #6b7280;
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
  }

  .post-item-body .date i {
    color: #10b981;
  }

  .post-item-body h2 {
    font-size: 18px;
    font-weight: 700;
    margin: 0;
    line-height: 1.3;
  }

  .post-item-body h2 a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .post-item-body h2 a:hover {
    color: #10b981;
  }

  /* Responsive */
  @media (max-width: 1024px) {
    .blog-grid {
      grid-template-columns: repeat(2, 1fr) !important;
    }

    .page-header-box h1 {
      font-size: 40px !important;
    }
  }

  @media (max-width: 640px) {
    .page-header {
      padding: 100px 0 60px !important;
    }

    .page-header-box h1 {
      font-size: 30px !important;
    }

    .blog-grid {
      grid-template-columns: 1fr !important;
      gap: 20px !important;
    }

    .post-featured-image {
      height: 200px !important;
    }

    .post-item-body h2 {
      font-size: 16px !important;
    }
  }
  </style>
</head>

<body class="tt-magic-cursor" style="background:#0f172a;color:#e2e8f0;">
  <!-- Magic Cursor Start -->
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <!-- Magic Cursor End -->
  <!-- Header Start -->
  @include('layout.headerNav')

  <!-- ========== PAGE HEADER ========== -->
  <div class="page-header">
    <div class="orb1"></div>
    <div class="orb2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-wrap">
        <div class="w-full">
          <div class="page-header-box">
            <h1>Our <span>Blog</span></h1>
            <nav>
              <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== BLOG SECTION ========== -->
  <div class="latest-news">
    <div class="bg-orb1"></div>
    <div class="bg-orb2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="blog-grid" id="blogGrid">
        @php
        $colors = ['#10b981', '#3b82f6', '#8b5cf6', '#ec4899', '#f59e0b', '#06b6d4'];
        $bgColors = ['rgba(16,185,129,0.03)', 'rgba(59,130,246,0.03)', 'rgba(139,92,246,0.03)', 'rgba(236,72,153,0.03)',
        'rgba(245,158,11,0.03)', 'rgba(6,182,212,0.03)'];
        @endphp
        @foreach ($blogs as $index => $blog)
        <div class="blog-item" data-delay="{{ $index * 0.1 }}"
          style="border-bottom: 3px solid {{ $colors[$index % count($colors)] }}; background: {{ $bgColors[$index % count($bgColors)] }};">
          <div class="post-featured-image">
            <figure>
              <a href="{{ route('blogs.show', $blog->id) }}">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
              </a>
            </figure>
            <div class="overlay"></div>
            <span class="category-badge">{{ $blog->category ?? 'Article' }}</span>
            <a href="{{ route('blogs.show', $blog->id) }}" class="read-icon">
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="post-item-body">
            <div class="date">
              <i class="fa-regular fa-calendar"></i>
              {{ $blog->created_at->format('d M Y') }}
            </div>
            <h2>
              <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
            </h2>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  @include('layout.footer')

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // ========== LENIS SMOOTH SCROLL ==========
    const lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      orientation: 'vertical',
      smoothWheel: true,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // ========== GSAP ANIMATIONS ==========
    gsap.registerPlugin(ScrollTrigger);

    // Page Header Animation
    gsap.from('.page-header-box h1', {
      opacity: 0,
      y: 30,
      duration: 0.8,
      ease: "power3.out"
    });

    gsap.from('.page-header-box .breadcrumb', {
      opacity: 0,
      y: 20,
      duration: 0.6,
      delay: 0.2,
      ease: "power3.out"
    });

    // Blog Items Animation
    const items = document.querySelectorAll('.blog-item');

    items.forEach((item, index) => {
      const delay = parseFloat(item.dataset.delay) || index * 0.1;
      const img = item.querySelector('.post-featured-image img');

      // Item fade up
      gsap.to(item, {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 0.8,
        delay: delay,
        ease: "power3.out",
        scrollTrigger: {
          trigger: item,
          start: "top 85%",
          toggleActions: "play none none none"
        }
      });

      // Image zoom on scroll
      gsap.from(img, {
        scale: 1.1,
        duration: 1.2,
        delay: delay + 0.1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: item,
          start: "top 85%",
          toggleActions: "play none none none"
        }
      });
    });

    // ========== HOVER BOUNCE EFFECT ==========
    items.forEach(item => {
      item.addEventListener('mouseenter', function() {
        gsap.to(this, {
          y: -10,
          scale: 1.02,
          duration: 0.4,
          ease: "back.out(1.7)",
          boxShadow: '0 30px 60px rgba(0,0,0,0.4)',
          borderColor: 'rgba(255,255,255,0.08)'
        });
        const img = this.querySelector('.post-featured-image img');
        gsap.to(img, {
          scale: 1.08,
          duration: 0.6,
          ease: "power2.out"
        });
      });

      item.addEventListener('mouseleave', function() {
        gsap.to(this, {
          y: 0,
          scale: 1,
          duration: 0.4,
          ease: "power2.out",
          boxShadow: 'none',
          borderColor: 'rgba(255,255,255,0.04)'
        });
        const img = this.querySelector('.post-featured-image img');
        gsap.to(img, {
          scale: 1,
          duration: 0.6,
          ease: "power2.out"
        });
      });
    });

    // ========== READ ICON HOVER ==========
    document.querySelectorAll('.read-icon').forEach(icon => {
      icon.addEventListener('mouseenter', function() {
        gsap.to(this, {
          rotation: 45,
          scale: 1.1,
          duration: 0.3,
          ease: "back.out(1.7)",
          backgroundColor: '#10b981',
          color: '#ffffff'
        });
      });

      icon.addEventListener('mouseleave', function() {
        gsap.to(this, {
          rotation: 0,
          scale: 1,
          duration: 0.3,
          ease: "power2.out",
          backgroundColor: 'rgba(16,185,129,0.15)',
          color: '#10b981'
        });
      });
    });

    // ========== TITLE HOVER ==========
    document.querySelectorAll('.post-item-body h2 a').forEach(link => {
      link.addEventListener('mouseenter', function() {
        gsap.to(this, {
          color: '#10b981',
          x: 4,
          duration: 0.3,
          ease: "power2.out"
        });
      });

      link.addEventListener('mouseleave', function() {
        gsap.to(this, {
          color: '#ffffff',
          x: 0,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    });
  });
  </script>
</body>

</html>