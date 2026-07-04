<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Section - Three.js</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
  .hero {
    position: relative;
    background: #0a0e1a;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 80px 0;
  }

  /* Three.js Canvas */
  #three-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
  }

  /* Hero Content */
  .hero-content {
    position: relative;
    z-index: 1;
  }

  .section-title h3 {
    color: #10b981;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 15px;
  }

  .section-title h1 {
    color: #ffffff;
    font-size: 48px;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 20px;
  }

  .section-title h1 .highlight {
    background: linear-gradient(135deg, #10b981, #34d399);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .hero-body p {
    color: #9ca3af;
    font-size: 18px;
    line-height: 1.8;
    max-width: 550px;
    margin-bottom: 30px;
  }

  /* Button */
  .btn-default {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 35px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.4s ease;
    box-shadow: 0 4px 20px rgba(16, 185, 129, 0.3);
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border: none;
  }

  .btn-default:hover {
    transform: translateY(-3px) scale(1.03);
    box-shadow: 0 8px 35px rgba(16, 185, 129, 0.4);
  }

  .btn-default .btn-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #059669, #047857);
    opacity: 0;
    transition: opacity 0.4s ease;
  }

  .btn-default:hover .btn-overlay {
    opacity: 1;
  }

  .btn-default .btn-text {
    position: relative;
    z-index: 1;
  }

  .btn-default .btn-arrow {
    position: relative;
    z-index: 1;
    transition: transform 0.3s ease;
  }

  .btn-default:hover .btn-arrow {
    transform: translateX(5px);
  }

  /* Hero Image */
  .hero-image {
    position: relative;
  }

  .hero-image .image-wrapper {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
  }

  .hero-image .gradient-border {
    position: absolute;
    inset: -2px;
    background: linear-gradient(135deg, #10b981, #3b82f6, #8b5cf6);
    border-radius: 16px;
    padding: 2px;
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
  }

  .hero-image .image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.08), rgba(59, 130, 246, 0.08));
    z-index: 1;
  }

  .hero-image img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 16px;
    transition: transform 0.6s ease;
  }

  .hero-image:hover img {
    transform: scale(1.05);
  }

  /* Image Badge */
  .image-badge {
    position: absolute;
    bottom: -15px;
    right: -15px;
    background: rgba(10, 14, 26, 0.95);
    backdrop-filter: blur(10px);
    padding: 12px 20px;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.05);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    z-index: 2;
  }

  .image-badge span {
    color: #10b981;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
  }

  /* Swiper Navigation */
  .swiper-button-next,
  .swiper-button-prev {
    color: #fff;
    background: rgba(255, 255, 255, 0.05);
    width: 48px;
    height: 48px;
    border-radius: 50%;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
  }

  .swiper-button-next:hover,
  .swiper-button-prev:hover {
    background: rgba(16, 185, 129, 0.15);
    border-color: rgba(16, 185, 129, 0.3);
  }

  .swiper-button-next::after,
  .swiper-button-prev::after {
    font-size: 16px;
    font-weight: 700;
  }

  .swiper-pagination {
    position: relative;
    margin-top: 40px;
    text-align: center;
  }

  .swiper-pagination-bullet {
    background: rgba(255, 255, 255, 0.2);
    opacity: 1;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    transition: all 0.3s ease;
  }

  .swiper-pagination-bullet-active {
    background: #10b981;
    width: 30px;
    border-radius: 10px;
  }

  /* Scroll Indicator */
  .hero-scroll {
    position: absolute;
    bottom: 25px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    opacity: 0.4;
  }

  .hero-scroll span {
    color: #6b7280;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 2px;
  }

  .hero-scroll .scroll-bar {
    width: 18px;
    height: 28px;
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    padding-top: 6px;
  }

  .hero-scroll .scroll-dot {
    width: 3px;
    height: 10px;
    background: #10b981;
    border-radius: 2px;
    animation: scroll-bounce 2s ease-in-out infinite;
  }

  @keyframes scroll-bounce {

    0%,
    100% {
      transform: translateY(0);
      opacity: 1;
    }

    50% {
      transform: translateY(10px);
      opacity: 0.3;
    }
  }

  /* Responsive */
  @media (max-width: 992px) {
    .section-title h1 {
      font-size: 36px !important;
    }

    .col-lg-8,
    .col-lg-4 {
      flex: 0 0 100% !important;
      max-width: 100% !important;
    }

    .hero-image {
      max-width: 400px;
      margin: 30px auto 0;
    }
  }

  @media (max-width: 576px) {
    .section-title h1 {
      font-size: 28px !important;
    }

    .hero-body p {
      font-size: 16px !important;
    }

    .btn-default {
      padding: 12px 25px !important;
      font-size: 14px !important;
    }

    .swiper-button-next,
    .swiper-button-prev {
      display: none !important;
    }
  }
  </style>
</head>

<body>

  <div class="hero">
    <!-- Three.js Canvas -->
    <div id="three-canvas"></div>

    <!-- Swiper -->
    <div class="swiper hero-swiper" style="position: relative; z-index: 1; width: 100%;">
      <div class="swiper-wrapper">
        @forelse($sliders as $slide)
        <div class="swiper-slide">
          <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="row align-items-center"
              style="display: flex; flex-wrap: wrap; align-items: center; margin: 0 -15px;">
              <div class="col-lg-8" style="flex: 0 0 66.666%; max-width: 66.666%; padding: 0 15px;">
                <!-- Hero Content Start -->
                <div class="hero-content">
                  <!-- Section Title Start -->
                  <div class="section-title">
                    @if ($slide->subtitle ?? false)
                    <h3>{{ $slide->subtitle }}</h3>
                    @else
                    <h3>✦ We carry over a decade's worth of experience</h3>
                    @endif
                    <h1>
                      {{ $slide->title ?? 'A results-driven company creating robust, unique and tailored software solutions' }}
                    </h1>
                  </div>
                  <!-- Section Title End -->

                  <!-- Hero Body Start -->
                  <div class="hero-body">
                    <p>
                      {!! $slide->description !!}
                    </p>
                  </div>
                  <!-- Hero Body End -->

                  <!-- Hero Footer Start -->
                  <div class="hero-footer">
                    <a href="{{ url('/contact') }}" class="btn-default">
                      <span class="btn-overlay"></span>
                      <span class="btn-text">{{ $slide->button_text ?? "Let's Talk" }}</span>
                      <span class="btn-arrow">→</span>
                    </a>
                  </div>
                  <!-- Hero Footer End -->
                </div>
                <!-- Hero Left Content End -->
              </div>

              <div class="col-lg-4" style="flex: 0 0 33.333%; max-width: 33.333%; padding: 0 15px;">
                <!-- Hero Image Start -->
                <div class="hero-image">
                  <div class="image-wrapper">
                    <div class="gradient-border"></div>
                    <div class="image-overlay"></div>
                    <figure style="margin: 0; position: relative; z-index: 0; border-radius: 16px; overflow: hidden;">
                      @if(!empty($slide->image) && file_exists(public_path('storage/' . $slide->image)))
                      <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title ?? 'Hero Image' }}"
                        class="img-fluid">
                      @else
                      <img src="{{ asset('frontend/assets/images/hero-img.jpg') }}" alt="Inoodex" class="img-fluid">
                      @endif
                    </figure>
                  </div>
                  <div class="image-badge">
                    <span>✦ Trusted Since 2009</span>
                  </div>
                </div>
                <!-- Hero Image End -->
              </div>
            </div>
          </div>
        </div>
        @empty
        <!-- Default Static Slide -->
        <div class="swiper-slide">
          <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div class="row align-items-center"
              style="display: flex; flex-wrap: wrap; align-items: center; margin: 0 -15px;">
              <div class="col-lg-8" style="flex: 0 0 66.666%; max-width: 66.666%; padding: 0 15px;">
                <div class="hero-content">
                  <div class="section-title">
                    <h3>✦Welcome To Inoodex</h3>
                    <h1>
                      Professional Software Development Company In Bangladesh
                    </h1>
                  </div>
                  <div class="hero-body">

                    <p class="wow fadeInUp" data-wow-delay="0.5s">
                      We are dedicated to understanding your vision and working closely with you
                      to bring it to life. Our agile approach ensures that we adapt to changing
                      needs, providing solutions that are scalable and future-proof.
                    </p>
                  </div>
                  <div class="hero-footer">
                    <a href="{{ url('/contact') }}" class="btn-default">
                      <span class="btn-overlay"></span>
                      <span class="btn-text">Let's Talk</span>
                      <span class="btn-arrow">→</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4" style="flex: 0 0 33.333%; max-width: 33.333%; padding: 0 15px;">
                <div class="hero-image">
                  <div class="image-wrapper">
                    <div class="gradient-border"></div>
                    <div class="image-overlay"></div>
                    <figure style="margin: 0; position: relative; z-index: 0; border-radius: 16px; overflow: hidden;">
                      <img src="{{ asset('frontend/assets/images/hero-img.jpg') }}" alt="Inoodex" class="img-fluid">
                    </figure>
                  </div>
                  <div class="image-badge">
                    <span>✦ Trusted Since 2009</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforelse
      </div>

      <!-- Pagination & Navigation -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- Scroll Indicator -->
    <div class="hero-scroll">
      <span>Scroll</span>
      <div class="scroll-bar">
        <div class="scroll-dot"></div>
      </div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Three.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

  <!-- GSAP & Lenis -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // ========== THREE.JS BACKGROUND ==========
    const container = document.getElementById('three-canvas');
    const width = container.clientWidth;
    const height = container.clientHeight;

    // Scene
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0x0a0e1a);

    // Camera
    const camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 1000);
    camera.position.z = 15;

    // Renderer
    const renderer = new THREE.WebGLRenderer({
      antialias: true,
      alpha: true
    });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // ========== CREATE PARTICLES ==========
    const particleCount = 600;
    const positions = new Float32Array(particleCount * 3);
    const colors = new Float32Array(particleCount * 3);
    const sizes = new Float32Array(particleCount);

    const color1 = new THREE.Color(0x10b981);
    const color2 = new THREE.Color(0x3b82f6);
    const color3 = new THREE.Color(0x8b5cf6);

    for (let i = 0; i < particleCount; i++) {
      positions[i * 3] = (Math.random() - 0.5) * 30;
      positions[i * 3 + 1] = (Math.random() - 0.5) * 20;
      positions[i * 3 + 2] = (Math.random() - 0.5) * 10;

      const colorChoice = Math.random();
      let color;
      if (colorChoice < 0.33) color = color1;
      else if (colorChoice < 0.66) color = color2;
      else color = color3;

      colors[i * 3] = color.r;
      colors[i * 3 + 1] = color.g;
      colors[i * 3 + 2] = color.b;

      sizes[i] = Math.random() * 0.08 + 0.02;
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));
    geometry.setAttribute('size', new THREE.BufferAttribute(sizes, 1));

    const canvas = document.createElement('canvas');
    canvas.width = 64;
    canvas.height = 64;
    const ctx = canvas.getContext('2d');
    const gradient = ctx.createRadialGradient(32, 32, 0, 32, 32, 32);
    gradient.addColorStop(0, 'rgba(255,255,255,1)');
    gradient.addColorStop(0.3, 'rgba(255,255,255,0.8)');
    gradient.addColorStop(1, 'rgba(255,255,255,0)');
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, 64, 64);
    const particleTexture = new THREE.CanvasTexture(canvas);

    const material = new THREE.PointsMaterial({
      size: 0.15,
      map: particleTexture,
      blending: THREE.AdditiveBlending,
      transparent: true,
      opacity: 0.8,
      vertexColors: true,
      depthWrite: false,
    });

    const particleSystem = new THREE.Points(geometry, material);
    scene.add(particleSystem);

    // ========== CREATE FLOATING ORBS ==========
    const orbGroup = new THREE.Group();
    scene.add(orbGroup);

    const orbColors = [0x10b981, 0x3b82f6, 0x8b5cf6];
    const orbPositions = [{
        x: -5,
        y: 3,
        z: -3
      },
      {
        x: 6,
        y: -4,
        z: -2
      },
      {
        x: -3,
        y: -5,
        z: -5
      },
      {
        x: 4,
        y: 2,
        z: -4
      },
      {
        x: 0,
        y: 6,
        z: -6
      }
    ];

    const orbs = [];
    orbPositions.forEach((pos, i) => {
      const size = 0.8 + Math.random() * 0.6;
      const orbGeo = new THREE.SphereGeometry(size, 32, 32);
      const orbMat = new THREE.MeshBasicMaterial({
        color: orbColors[i % orbColors.length],
        transparent: true,
        opacity: 0.06 + Math.random() * 0.06,
        wireframe: false,
      });
      const orb = new THREE.Mesh(orbGeo, orbMat);
      orb.position.set(pos.x, pos.y, pos.z);
      orb.userData = {
        speed: 0.3 + Math.random() * 0.3,
        phase: Math.random() * Math.PI * 2,
        rotSpeed: 0.1 + Math.random() * 0.2,
        baseX: pos.x,
        baseY: pos.y,
        baseZ: pos.z,
        floatAmp: 0.8 + Math.random() * 0.5,
      };
      orbGroup.add(orb);
      orbs.push(orb);

      const ringGeo = new THREE.TorusGeometry(size * 1.8, 0.03, 16, 32);
      const ringMat = new THREE.MeshBasicMaterial({
        color: orbColors[i % orbColors.length],
        transparent: true,
        opacity: 0.1,
        wireframe: true,
      });
      const ring = new THREE.Mesh(ringGeo, ringMat);
      ring.position.copy(orb.position);
      ring.userData.parent = orb;
      ring.userData.rotSpeed = 0.2 + Math.random() * 0.3;
      orbGroup.add(ring);
      orbs.push(ring);
    });

    // ========== MOUSE TRACKING ==========
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;

    document.addEventListener('mousemove', (event) => {
      mouseX = (event.clientX / window.innerWidth) * 2 - 1;
      mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
    });

    // ========== ANIMATION LOOP ==========
    const clock = new THREE.Clock();

    function animate() {
      const time = clock.getElapsedTime();

      targetX += (mouseX - targetX) * 0.03;
      targetY += (mouseY - targetY) * 0.03;

      particleSystem.rotation.x = Math.sin(time * 0.05) * 0.1;
      particleSystem.rotation.y = Math.sin(time * 0.03) * 0.1 + targetX * 0.2;
      particleSystem.rotation.z = Math.sin(time * 0.04) * 0.05;

      const positionsAttr = geometry.attributes.position;
      const posArray = positionsAttr.array;
      for (let i = 0; i < particleCount; i++) {
        const i3 = i * 3;
        posArray[i3 + 1] += Math.sin(time * 0.5 + i * 0.01) * 0.001;
        posArray[i3] += Math.cos(time * 0.4 + i * 0.015) * 0.001;
      }
      positionsAttr.needsUpdate = true;

      orbs.forEach((obj, i) => {
        if (obj.type === 'Mesh' && obj.geometry.type === 'SphereGeometry') {
          const data = obj.userData;
          obj.position.x = data.baseX + Math.sin(time * data.speed + data.phase) * data.floatAmp;
          obj.position.y = data.baseY + Math.cos(time * data.speed * 0.7 + data.phase) * data
            .floatAmp;
          obj.position.z = data.baseZ + Math.sin(time * data.speed * 0.5 + data.phase * 1.5) * data
            .floatAmp * 0.5;

          obj.material.opacity = 0.04 + Math.sin(time * 0.5 + data.phase) * 0.03 + 0.03;
        } else if (obj.type === 'Mesh' && obj.geometry.type === 'TorusGeometry') {
          obj.rotation.x += obj.userData.rotSpeed * 0.02;
          obj.rotation.y += obj.userData.rotSpeed * 0.03;

          if (obj.userData.parent) {
            obj.position.copy(obj.userData.parent.position);
          }
        }
      });

      camera.position.x += (targetX * 0.5 - camera.position.x) * 0.01;
      camera.position.y += (targetY * 0.3 - camera.position.y) * 0.01;
      camera.lookAt(0, 0, 0);

      renderer.render(scene, camera);
      requestAnimationFrame(animate);
    }

    animate();

    // ========== RESIZE HANDLER ==========
    window.addEventListener('resize', () => {
      const newWidth = container.clientWidth;
      const newHeight = container.clientHeight;
      camera.aspect = newWidth / newHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(newWidth, newHeight);
    });

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

    // ========== SWIPER ==========
    const swiper = new Swiper('.hero-swiper', {
      loop: true,
      speed: 1000,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      }
    });

    // Button Hover Animation
    document.querySelectorAll('.btn-default').forEach(btn => {
      btn.addEventListener('mouseenter', function() {
        gsap.to(this, {
          scale: 1.05,
          boxShadow: '0 8px 30px rgba(16,185,129,0.4)',
          duration: 0.3,
          ease: "back.out(1.7)"
        });
        gsap.to(this.querySelector('.btn-arrow'), {
          x: 8,
          duration: 0.3,
          ease: "power2.out"
        });
      });
      btn.addEventListener('mouseleave', function() {
        gsap.to(this, {
          scale: 1,
          boxShadow: '0 4px 20px rgba(16,185,129,0.3)',
          duration: 0.3,
          ease: "power2.out"
        });
        gsap.to(this.querySelector('.btn-arrow'), {
          x: 0,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    });

    // Image Hover Effect
    document.querySelectorAll('.hero-image img').forEach(img => {
      img.addEventListener('mouseenter', function() {
        gsap.to(this, {
          scale: 1.08,
          duration: 0.6,
          ease: "power2.out"
        });
      });
      img.addEventListener('mouseleave', function() {
        gsap.to(this, {
          scale: 1,
          duration: 0.6,
          ease: "power2.out"
        });
      });
    });
  });
  </script>

</body>

</html>