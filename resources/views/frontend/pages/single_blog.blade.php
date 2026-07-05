<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
  <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js" defer></script>

  <style>
  body {
    background: #05080f;
    color: #e2e8f0;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .single-header {
    position: relative;
    padding: 140px 0 100px;
    overflow: hidden;
    background: #0a0e1a;
  }

  .single-header::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 70% 30%, rgba(16, 185, 129, 0.08) 0%, transparent 50%),
      radial-gradient(circle at 30% 70%, rgba(59, 130, 246, 0.05) 0%, transparent 50%);
    pointer-events: none;
  }

  .single-header .orb1 {
    position: absolute;
    top: -20%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatOrb1 12s ease-in-out infinite;
  }

  .single-header .orb2 {
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
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(40px, -30px) scale(1.1); }
  }

  @keyframes floatOrb2 {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(-40px, 30px) scale(1.15); }
  }

  .single-header-box {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
  }

  .single-header-box .breadcrumb {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
    gap: 8px;
  }

  .single-header-box .breadcrumb li {
    font-size: 14px;
    color: #9ca3af;
  }

  .single-header-box .breadcrumb li a {
    color: #10b981;
    text-decoration: none;
    transition: color 0.3s;
  }

  .single-header-box .breadcrumb li a:hover {
    color: #34d399;
  }

  .single-header-box .breadcrumb li.active {
    color: #ffffff;
  }

  .single-header-box .breadcrumb li+li::before {
    content: '/';
    margin-right: 8px;
    color: #374151;
  }

  .single-header-box .category-badge {
    display: inline-block;
    padding: 6px 20px;
    background: rgba(16, 185, 129, 0.1);
    border: 1px solid rgba(16, 185, 129, 0.2);
    border-radius: 50px;
    color: #10b981;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 20px;
  }

  .single-header-box h1 {
    font-size: 44px;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 16px;
    line-height: 1.2;
  }

  .single-header-box .meta {
    display: flex;
    justify-content: center;
    gap: 24px;
    color: #6b7280;
    font-size: 14px;
  }

  .single-header-box .meta span {
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .single-header-box .meta i {
    color: #10b981;
  }

  .single-body {
    position: relative;
    background: #0a0e1a;
    padding: 60px 0 80px;
  }

  .single-body .bg-orb1 {
    position: absolute;
    top: -10%;
    right: -5%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(139, 92, 246, 0.04) 0%, transparent 70%);
    border-radius: 50%;
    animation: floatOrb3 18s ease-in-out infinite;
  }

  .single-body .bg-orb2 {
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
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(-30px, 20px) scale(1.1); }
  }

  @keyframes floatOrb4 {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(30px, -20px) scale(1.15); }
  }

  .single-content {
    position: relative;
    z-index: 2;
    max-width: 860px;
    margin: 0 auto;
  }

  .single-content .featured-image {
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 40px;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  .single-content .featured-image img {
    width: 100%;
    height: 450px;
    object-fit: cover;
    display: block;
  }

  .single-content .post-body {
    font-size: 16px;
    line-height: 1.8;
    color: #cbd5e1;
  }

  .single-content .post-body h1,
  .single-content .post-body h2,
  .single-content .post-body h3,
  .single-content .post-body h4 {
    color: #ffffff;
    margin-top: 32px;
    margin-bottom: 16px;
  }

  .single-content .post-body p {
    margin-bottom: 20px;
  }

  .single-content .post-body img {
    border-radius: 12px;
    max-width: 100%;
  }

  .single-content .post-body blockquote {
    border-left: 3px solid #10b981;
    padding: 16px 24px;
    margin: 24px 0;
    background: rgba(16, 185, 129, 0.03);
    border-radius: 0 12px 12px 0;
    color: #94a3b8;
    font-style: italic;
  }

  .single-footer {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    gap: 20px;
  }

  .single-footer .tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .single-footer .tags a {
    padding: 6px 18px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 50px;
    color: #94a3b8;
    font-size: 12px;
    font-weight: 500;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.3s;
  }

  .single-footer .tags a:hover {
    background: rgba(16, 185, 129, 0.1);
    border-color: rgba(16, 185, 129, 0.2);
    color: #10b981;
  }

  .single-footer .share {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .single-footer .share span {
    color: #6b7280;
    font-size: 13px;
    font-weight: 500;
  }

  .single-footer .share a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 50%;
    color: #94a3b8;
    text-decoration: none;
    transition: all 0.3s;
    font-size: 14px;
  }

  .single-footer .share a:hover {
    background: #10b981;
    border-color: #10b981;
    color: #ffffff;
    transform: translateY(-2px);
  }

  .related-section {
    position: relative;
    background: #0a0e1a;
    padding: 0 0 100px;
    overflow: hidden;
  }

  .related-section .section-title {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    z-index: 2;
  }

  .related-section .section-title h3 {
    color: #10b981;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 0 0 10px;
  }

  .related-section .section-title h2 {
    font-size: 36px;
    font-weight: 800;
    color: #ffffff;
    margin: 0;
  }

  .related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    position: relative;
    z-index: 2;
  }

  .related-item {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    opacity: 0;
    transform: translateY(40px) scale(0.95);
    cursor: pointer;
    text-decoration: none;
    color: inherit;
    display: block;
  }

  .related-item:hover {
    transform: translateY(-10px) scale(1.02) !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4) !important;
  }

  .related-item .thumb {
    position: relative;
    overflow: hidden;
    height: 200px;
  }

  .related-item .thumb figure {
    margin: 0;
    height: 100%;
    overflow: hidden;
  }

  .related-item .thumb figure img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .related-item:hover .thumb figure img {
    transform: scale(1.08);
  }

  .related-item .thumb .overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(10, 14, 26, 0.8));
    z-index: 1;
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .related-item:hover .thumb .overlay {
    opacity: 1;
  }

  .related-item .thumb .cat-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 2;
    padding: 4px 14px;
    background: rgba(10, 14, 26, 0.8);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 50px;
    color: #10b981;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
  }

  .related-item .body {
    padding: 20px 22px 22px;
  }

  .related-item .body .date {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #6b7280;
    font-size: 12px;
    margin-bottom: 8px;
  }

  .related-item .body .date i {
    color: #10b981;
  }

  .related-item .body h4 {
    font-size: 16px;
    font-weight: 700;
    margin: 0;
    line-height: 1.3;
    color: #ffffff;
  }

  .back-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 50px;
    color: #94a3b8;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s;
    margin-bottom: 30px;
  }

  .back-btn:hover {
    background: rgba(16, 185, 129, 0.08);
    border-color: rgba(16, 185, 129, 0.2);
    color: #10b981;
  }

  @media (max-width: 1024px) {
    .related-grid { grid-template-columns: repeat(2, 1fr) !important; }
    .single-header-box h1 { font-size: 34px !important; }
  }

  @media (max-width: 640px) {
    .single-header { padding: 110px 0 70px !important; }
    .single-header-box h1 { font-size: 26px !important; }
    .single-content .featured-image img { height: 250px !important; }
    .related-grid { grid-template-columns: 1fr !important; gap: 20px !important; }
    .related-item .thumb { height: 180px !important; }
    .single-header-box .meta { flex-wrap: wrap; gap: 12px; }
    .single-footer { flex-direction: column; align-items: flex-start; }
  }
  </style>
</head>

<body class="tt-magic-cursor">
  <!-- Magic Cursor Start -->
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <!-- Magic Cursor End -->
  @include('layout.headerNav')

  <canvas id="blogCanvas" style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:0.3;"></canvas>

  <div style="position:relative;z-index:1;">
    <div class="single-header">
      <div class="orb1"></div>
      <div class="orb2"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="single-header-box">
          <nav>
            <ol class="breadcrumb">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ route('blogs') }}">Blog</a></li>
              <li class="active">{{ $blog->title }}</li>
            </ol>
          </nav>
          <div class="category-badge">{{ $blog->category ?? 'Article' }}</div>
          <h1>{{ $blog->title }}</h1>
          <div class="meta">
            <span><i class="fa-regular fa-calendar"></i> {{ $blog->created_at->format('d M Y') }}</span>
            {{-- <span><i class="fa-regular fa-clock"></i> {{ $blog->created_at->diffInMinutes() > 60 ? round($blog->created_at->diffInHours()) . 'h ago' : $blog->created_at->diffInMinutes() . ' min read' }}</span> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="single-body">
      <div class="bg-orb1"></div>
      <div class="bg-orb2"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="single-content">
          <a href="{{ route('blogs') }}" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Back to Blog</a>

          <div class="featured-image">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
          </div>

          <div class="post-body">
            {!! $blog->body !!}
          </div>

          <div class="single-footer">
            <div class="tags">
              <a href="#">Website</a>
              <a href="#">App Development</a>
              <a href="#">SEO</a>
            </div>
            <div class="share">
              <span>Share:</span>
              <a href="#" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" aria-label="Share on Twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" aria-label="Share on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if ($related->count() > 0)
    <div class="related-section">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-title">
          <h3>Related Articles</h3>
          <h2>You May Also Like</h2>
        </div>
        <div class="related-grid" id="relatedGrid">
          @php
          $colors = ['#10b981', '#3b82f6', '#8b5cf6', '#ec4899', '#f59e0b', '#06b6d4'];
          $bgColors = ['rgba(16,185,129,0.03)', 'rgba(59,130,246,0.03)', 'rgba(139,92,246,0.03)', 'rgba(236,72,153,0.03)', 'rgba(245,158,11,0.03)', 'rgba(6,182,212,0.03)'];
          @endphp
          @foreach ($related as $index => $item)
          <a href="{{ route('blogs.show', $item->id) }}" class="related-item" data-delay="{{ $index * 0.1 }}"
            style="border-bottom: 3px solid {{ $colors[$index % count($colors)] }}; background: {{ $bgColors[$index % count($bgColors)] }};">
            <div class="thumb">
              <figure>
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
              </figure>
              <div class="overlay"></div>
              <span class="cat-badge">{{ $item->category ?? 'Article' }}</span>
            </div>
            <div class="body">
              <div class="date">
                <i class="fa-regular fa-calendar"></i>
                {{ $item->created_at->format('d M Y') }}
              </div>
              <h4>{{ $item->title }}</h4>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
    @endif
  </div>

  @include('layout.footer')

  <script>
  (function() {
    var canvas = document.getElementById('blogCanvas');
    if (!canvas || typeof THREE === 'undefined') return;
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    var renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    var count = 150;
    var positions = new Float32Array(count * 3);
    for (var i = 0; i < count; i++) {
      positions[i*3] = (Math.random() - 0.5) * 30;
      positions[i*3+1] = (Math.random() - 0.5) * 30;
      positions[i*3+2] = (Math.random() - 0.5) * 20 - 5;
    }
    var geom = new THREE.BufferGeometry();
    geom.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    var mat = new THREE.PointsMaterial({ color: 0x10b981, size: 0.04, transparent: true, opacity: 0.35, blending: THREE.AdditiveBlending });
    var particles = new THREE.Points(geom, mat);
    scene.add(particles);

    camera.position.z = 6;

    var mouseX = 0, mouseY = 0;
    document.addEventListener('mousemove', function(e) {
      mouseX = (e.clientX / window.innerWidth) * 2 - 1;
      mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
    });

    function animate() {
      requestAnimationFrame(animate);
      particles.rotation.y += 0.0004;
      camera.position.x += (mouseX * 0.3 - camera.position.x) * 0.02;
      camera.position.y += (-mouseY * 0.3 - camera.position.y) * 0.02;
      camera.lookAt(scene.position);
      renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', function() {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    });
  })();
  </script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var lenis = new Lenis({
      duration: 1.2,
      easing: function(t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
      orientation: 'vertical',
      smoothWheel: true,
    });
    function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
    requestAnimationFrame(raf);

    gsap.registerPlugin(ScrollTrigger);

    gsap.from('.single-header-box .breadcrumb', { opacity: 0, y: 20, duration: 0.6, ease: 'power3.out' });
    gsap.from('.single-header-box .category-badge', { opacity: 0, y: 20, duration: 0.5, delay: 0.1, ease: 'power3.out' });
    gsap.from('.single-header-box h1', { opacity: 0, y: 30, duration: 0.8, delay: 0.2, ease: 'power3.out' });
    gsap.from('.single-header-box .meta', { opacity: 0, y: 20, duration: 0.6, delay: 0.35, ease: 'power3.out' });

    gsap.from('.back-btn', {
      opacity: 0, y: 20, duration: 0.6, ease: 'power3.out',
      scrollTrigger: { trigger: '.back-btn', start: 'top 90%', toggleActions: 'play none none none' }
    });
    gsap.from('.featured-image', {
      opacity: 0, y: 40, scale: 0.95, duration: 0.8, ease: 'power3.out',
      scrollTrigger: { trigger: '.featured-image', start: 'top 85%', toggleActions: 'play none none none' }
    });
    gsap.from('.post-body', {
      opacity: 0, y: 30, duration: 0.8, delay: 0.15, ease: 'power3.out',
      scrollTrigger: { trigger: '.post-body', start: 'top 85%', toggleActions: 'play none none none' }
    });
    gsap.from('.single-footer', {
      opacity: 0, y: 30, duration: 0.6, ease: 'power3.out',
      scrollTrigger: { trigger: '.single-footer', start: 'top 90%', toggleActions: 'play none none none' }
    });

    document.querySelectorAll('.related-item').forEach(function(item) {
      var delay = parseFloat(item.dataset.delay) || 0;
      gsap.to(item, {
        opacity: 1, y: 0, scale: 1, duration: 0.8, delay: delay, ease: 'power3.out',
        scrollTrigger: { trigger: item, start: 'top 85%', toggleActions: 'play none none none' }
      });
      var img = item.querySelector('.thumb img');
      if (img) {
        gsap.from(img, {
          scale: 1.1, duration: 1.2, delay: delay + 0.1, ease: 'power3.out',
          scrollTrigger: { trigger: item, start: 'top 85%', toggleActions: 'play none none none' }
        });
      }
    });

    document.querySelectorAll('.related-item').forEach(function(item) {
      item.addEventListener('mouseenter', function() {
        gsap.to(this, { y: -10, scale: 1.02, duration: 0.4, ease: 'back.out(1.7)', boxShadow: '0 30px 60px rgba(0,0,0,0.4)', borderColor: 'rgba(255,255,255,0.08)' });
        var img = this.querySelector('.thumb img');
        if (img) gsap.to(img, { scale: 1.08, duration: 0.6, ease: 'power2.out' });
      });
      item.addEventListener('mouseleave', function() {
        gsap.to(this, { y: 0, scale: 1, duration: 0.4, ease: 'power2.out', boxShadow: 'none', borderColor: 'rgba(255,255,255,0.04)' });
        var img = this.querySelector('.thumb img');
        if (img) gsap.to(img, { scale: 1, duration: 0.6, ease: 'power2.out' });
      });
    });

    document.querySelectorAll('.share a').forEach(function(link) {
      link.addEventListener('mouseenter', function() {
        gsap.to(this, { y: -3, duration: 0.3, ease: 'back.out(1.7)', backgroundColor: '#10b981', borderColor: '#10b981', color: '#ffffff' });
      });
      link.addEventListener('mouseleave', function() {
        gsap.to(this, { y: 0, duration: 0.3, ease: 'power2.out', backgroundColor: 'rgba(255,255,255,0.03)', borderColor: 'rgba(255,255,255,0.05)', color: '#94a3b8' });
      });
    });
  });
  </script>
</body>

</html>
