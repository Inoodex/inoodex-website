<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latest Blog - Three.js</title>
  <style>
  .latest-news {
    position: relative;
    background: #0a0e1a;
    padding: 100px 0;
    overflow: hidden;
    min-height: 100vh;
  }

  #three-canvas-blog {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
  }

  .latest-news .max-w-7xl {
    position: relative;
    z-index: 10;
  }

  .blog-item {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    opacity: 0;
    transform: translateX(-80px) scale(0.9);
  }

  .blog-item:hover {
    transform: translateY(-6px) !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5) !important;
  }

  .blog-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;
    opacity: 0;
    transform: scale(0.3) rotate(-8deg);
    transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .blog-image:hover {
    transform: scale(1.08) !important;
  }

  .blog-content {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .blog-item.visible {
    opacity: 1;
    transform: translateX(0) scale(1);
  }

  .blog-item.visible .blog-image {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }

  .blog-item.visible .blog-content {
    opacity: 1;
    transform: translateY(0);
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
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

  @media (max-width: 1024px) {
    .latest-news>div>div:first-child>div {
      flex: 0 0 100% !important;
      max-width: 100% !important;
      text-align: center !important;
    }

    .latest-news>div>div:first-child>div:last-child {
      text-align: center !important;
      margin-top: 15px;
    }

    .blog-item>div:first-child {
      flex: 0 0 100% !important;
      max-width: 100% !important;
    }

    .blog-item>div:last-child {
      flex: 0 0 100% !important;
      max-width: 100% !important;
      padding: 25px !important;
    }

    .blog-image {
      height: 200px !important;
    }
  }

  @media (max-width: 640px) {
    .latest-news>div>div:first-child h2 {
      font-size: 28px !important;
    }

    .blog-item>div:last-child h2 {
      font-size: 18px !important;
    }

    .blog-item>div:last-child p {
      font-size: 14px !important;
    }

    .blog-image {
      height: 180px !important;
    }

    .blog-item>div:last-child {
      padding: 20px !important;
    }
  }
  </style>
</head>

<body>

  <div class="latest-news">
    <!-- Three.js Canvas -->
    <div id="three-canvas-blog"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div style="display: flex; flex-wrap: wrap; align-items: center; margin-bottom: 50px;">
        <div style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
          <div class="section-title">
            <div
              style="display: inline-block; padding: 6px 20px; background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.12); border-radius: 50px; margin-bottom: 15px; animation: fadeInDown 0.6s ease forwards; opacity: 0; transform: translateY(-20px);">
              <span
                style="color: #10b981; font-size: 12px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;">✦
                Latest Blog & Articles</span>
            </div>
            <h2
              style="font-size: 38px; font-weight: 800; color: #ffffff; line-height: 1.2; margin-bottom: 0; animation: fadeInUp 0.6s ease forwards 0.1s; opacity: 0; transform: translateY(20px);">
              The latest <span
                style="background: linear-gradient(135deg, #10b981, #34d399, #3b82f6, #8b5cf6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; background-size: 300% 300%; animation: gradientMove 5s ease-in-out infinite;">insights</span>
              you need to know
            </h2>
          </div>
        </div>
        <div style="flex: 0 0 50%; max-width: 50%; padding: 0 15px; text-align: right;">
          <div style="animation: fadeInUp 0.6s ease forwards 0.2s; opacity: 0; transform: translateY(20px);">
            <a href="{{ route('blogs') }}"
              style="display: inline-flex; align-items: center; gap: 10px; padding: 12px 35px; background: linear-gradient(135deg, #10b981, #059669); color: #ffffff; font-size: 15px; font-weight: 600; border-radius: 50px; text-decoration: none; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); box-shadow: 0 4px 25px rgba(16,185,129,0.3);"
              onmouseover="this.style.transform='translateY(-3px) scale(1.03)'; this.style.boxShadow='0 10px 40px rgba(16,185,129,0.4)'"
              onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 25px rgba(16,185,129,0.3)'">
              <span>View All Blogs</span>
              <span style="transition: transform 0.3s;" onmouseover="this.style.transform='translateX(6px)'"
                onmouseout="this.style.transform='translateX(0)'">→</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Blog Grid -->
      <div style="display: grid; grid-template-columns: 1fr; gap: 30px; margin-top: 20px;">
        @php
        $blogColors = ['#10b981', '#3b82f6', '#8b5cf6'];
        @endphp

        @foreach ($blogs as $index => $blog)
        <div class="blog-item" style="border-left: 4px solid {{ $blogColors[$index % count($blogColors)] }};"
          data-delay="{{ $index * 150 }}">
          <!-- Image Column -->
          <div style="flex: 0 0 40%; max-width: 40%; overflow: hidden; position: relative;">
            <div style="position: relative; overflow: hidden; min-height: 200px;">
              <figure style="margin: 0; overflow: hidden;">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="blog-image">
              </figure>
              <div
                style="position: absolute; inset: 0; background: linear-gradient(90deg, rgba(10,14,26,0.6), transparent); pointer-events: none;">
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div style="flex: 0 0 60%; max-width: 60%; padding: 30px 35px;">
            <div class="blog-content">
              <!-- Category Badge -->
              <div
                style="display: inline-block; padding: 4px 16px; background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.1); border-radius: 50px; margin-bottom: 12px;">
                <span
                  style="color: #10b981; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">{{ $blog->category ?? 'Technology' }}</span>
              </div>

              <!-- Blog Title -->
              <h2
                style="font-size: 22px; font-weight: 700; color: #ffffff; line-height: 1.3; margin-bottom: 12px; transition: color 0.3s;">
                <a href="{{ route('blogs.show', $blog->slug) }}"
                  style="color: #ffffff; text-decoration: none; transition: all 0.3s;"
                  onmouseover="this.style.color='#10b981'" onmouseout="this.style.color='#ffffff'">
                  {{ $blog->title }}
                </a>
              </h2>

              <!-- Blog Meta -->
              <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                <span style="color: #6b7280; font-size: 13px;">
                  <span style="color: #10b981;">✦</span>
                  {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Jan 01, 2025' }}
                </span>
                <span style="color: #374151;">|</span>
                <span style="color: #6b7280; font-size: 13px;">
                  <span style="color: #10b981;">✦</span>
                  5 min read
                </span>
              </div>

              <!-- Excerpt -->
              <p style="color: #9ca3af; font-size: 15px; line-height: 1.8; margin-bottom: 15px;">
                {{ Str::limit(strip_tags($blog->description ?? $blog->content ?? ''), 120) }}
              </p>

              <!-- Read More Link -->
              <a href="{{ route('blogs.show', $blog->slug) }}"
                style="display: inline-flex; align-items: center; gap: 8px; color: #10b981; font-size: 14px; font-weight: 500; text-decoration: none; transition: all 0.3s;"
                onmouseover="this.style.gap='12px'" onmouseout="this.style.gap='8px'">
                <span>Read More</span>
                <span style="transition: transform 0.3s;" onmouseover="this.style.transform='translateX(6px)'"
                  onmouseout="this.style.transform='translateX(0)'">→</span>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- GSAP & Lenis -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>
  <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js" defer></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // ========== THREE.JS BACKGROUND - GEOMETRIC SHAPES ==========
    const container = document.getElementById('three-canvas-blog');
    if (!container || typeof THREE === 'undefined') return;
    const width = container.clientWidth;
    const height = container.clientHeight;

    // Scene
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0x0a0e1a);

    // Camera
    const camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 1000);
    camera.position.z = 20;

    // Renderer
    const renderer = new THREE.WebGLRenderer({
      antialias: true,
      alpha: true
    });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // ========== CREATE FLOATING GEOMETRIC SHAPES ==========
    const shapes = [];
    const shapeTypes = [
      'box', 'tetrahedron', 'octahedron', 'dodecahedron',
      'cone', 'cylinder', 'torus', 'icosahedron'
    ];

    const colors = [0x10b981, 0x3b82f6, 0x8b5cf6, 0xec4899, 0xf59e0b, 0x06b6d4];

    for (let i = 0; i < 35; i++) {
      const type = shapeTypes[Math.floor(Math.random() * shapeTypes.length)];
      const color = colors[Math.floor(Math.random() * colors.length)];

      let geometry;
      const size = 0.2 + Math.random() * 0.4;

      switch (type) {
        case 'box':
          geometry = new THREE.BoxGeometry(size, size, size);
          break;
        case 'tetrahedron':
          geometry = new THREE.TetrahedronGeometry(size);
          break;
        case 'octahedron':
          geometry = new THREE.OctahedronGeometry(size);
          break;
        case 'dodecahedron':
          geometry = new THREE.DodecahedronGeometry(size);
          break;
        case 'cone':
          geometry = new THREE.ConeGeometry(size, size * 1.5, 4);
          break;
        case 'cylinder':
          geometry = new THREE.CylinderGeometry(size * 0.6, size * 0.6, size * 1.5, 6);
          break;
        case 'torus':
          geometry = new THREE.TorusGeometry(size, size * 0.3, 8, 12);
          break;
        case 'icosahedron':
          geometry = new THREE.IcosahedronGeometry(size);
          break;
        default:
          geometry = new THREE.BoxGeometry(size, size, size);
      }

      const material = new THREE.MeshBasicMaterial({
        color: color,
        transparent: true,
        opacity: 0.15 + Math.random() * 0.15,
        wireframe: Math.random() > 0.5,
      });

      const mesh = new THREE.Mesh(geometry, material);
      mesh.position.set(
        (Math.random() - 0.5) * 30,
        (Math.random() - 0.5) * 20,
        (Math.random() - 0.5) * 15 - 5
      );
      mesh.userData = {
        rotSpeedX: (Math.random() - 0.5) * 0.02,
        rotSpeedY: (Math.random() - 0.5) * 0.02,
        rotSpeedZ: (Math.random() - 0.5) * 0.02,
        floatSpeed: 0.2 + Math.random() * 0.3,
        floatAmp: 0.3 + Math.random() * 0.5,
        phase: Math.random() * Math.PI * 2,
        baseY: mesh.position.y,
        baseX: mesh.position.x,
      };
      scene.add(mesh);
      shapes.push(mesh);
    }

    // ========== CREATE FLOATING LINES ==========
    const lineCount = 8;
    const linePositions = [];

    for (let i = 0; i < lineCount; i++) {
      const points = [];
      const segments = 30;
      const yBase = (i / lineCount - 0.5) * 18;

      for (let j = 0; j <= segments; j++) {
        const t = j / segments;
        const x = (t - 0.5) * 25;
        const y = yBase + Math.sin(x * 0.5 + i * 0.3) * 1.5;
        const z = Math.sin(x * 0.3 + i * 0.5) * 0.5;
        points.push(new THREE.Vector3(x, y, z));
      }

      const geometry = new THREE.BufferGeometry().setFromPoints(points);
      const color = colors[i % colors.length];
      const material = new THREE.LineBasicMaterial({
        color: color,
        transparent: true,
        opacity: 0.06,
      });
      const line = new THREE.Line(geometry, material);
      line.userData = {
        index: i,
        speed: 0.2 + Math.random() * 0.2,
        phase: Math.random() * Math.PI * 2,
      };
      scene.add(line);
    }

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

      // Animate geometric shapes
      shapes.forEach((mesh) => {
        const data = mesh.userData;
        mesh.rotation.x += data.rotSpeedX;
        mesh.rotation.y += data.rotSpeedY;
        mesh.rotation.z += data.rotSpeedZ;

        mesh.position.y = data.baseY + Math.sin(time * data.floatSpeed + data.phase) * data.floatAmp;
        mesh.position.x = data.baseX + Math.cos(time * data.floatSpeed * 0.7 + data.phase) * data.floatAmp *
        0.3;

        // Pulse opacity
        mesh.material.opacity = 0.1 + Math.sin(time * 0.3 + data.phase) * 0.05 + 0.05;
      });

      // Animate lines
      const lines = scene.children.filter(child => child.type === 'Line');
      lines.forEach((line, index) => {
        const positions = line.geometry.attributes.position;
        const posArray = positions.array;
        const yBase = (index / lineCount - 0.5) * 18;

        for (let i = 0; i < posArray.length; i += 3) {
          const t = i / posArray.length;
          const x = posArray[i];
          const wave = Math.sin(x * 0.3 + time * 0.2 + index * 0.5) * 1.2;
          posArray[i + 1] = yBase + wave;
          posArray[i + 2] = Math.sin(x * 0.2 + time * 0.15 + index * 0.3) * 0.8;
        }
        positions.needsUpdate = true;
      });

      // Camera follows mouse
      camera.position.x += (targetX * 0.6 - camera.position.x) * 0.01;
      camera.position.y += (targetY * 0.4 - camera.position.y) * 0.01;
      camera.lookAt(0, 0, 0);

      renderer.render(scene, camera);
      requestAnimationFrame(animate);
    }

    animate();

    // ========== RESIZE ==========
    window.addEventListener('resize', () => {
      const w = container.clientWidth;
      const h = container.clientHeight;
      camera.aspect = w / h;
      camera.updateProjectionMatrix();
      renderer.setSize(w, h);
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

    // ========== GSAP ANIMATIONS FOR BLOG ITEMS ==========
    gsap.registerPlugin(ScrollTrigger);

    document.querySelectorAll('.blog-item').forEach((item, index) => {
      const delay = parseInt(item.dataset.delay) || index * 150;

      gsap.to(item, {
        opacity: 1,
        x: 0,
        scale: 1,
        duration: 0.9,
        delay: delay / 1000,
        ease: "power3.out",
        scrollTrigger: {
          trigger: item,
          start: "top 85%",
          toggleActions: "play none none none"
        }
      });

      const img = item.querySelector('.blog-image');
      gsap.to(img, {
        opacity: 1,
        scale: 1,
        rotation: 0,
        duration: 0.8,
        delay: (delay + 300) / 1000,
        ease: "back.out(1.7)",
        scrollTrigger: {
          trigger: item,
          start: "top 85%",
          toggleActions: "play none none none"
        }
      });

      const content = item.querySelector('.blog-content');
      gsap.to(content, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        delay: (delay + 500) / 1000,
        ease: "power3.out",
        scrollTrigger: {
          trigger: item,
          start: "top 85%",
          toggleActions: "play none none none"
        }
      });
    });
  });
  </script>

</body>

</html>