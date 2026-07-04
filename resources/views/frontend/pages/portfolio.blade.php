<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body style="background:#05080f;color:#e2e8f0;">
  @include('layout.headerNav')

  <!-- Enhanced Glow Orbs -->
  <div style="position:fixed;inset:0;pointer-events:none;z-index:0;">
    <div
      style="position:absolute;width:700px;height:700px;top:-30%;right:-15%;background:radial-gradient(circle,rgba(34,197,94,0.05),transparent 70%);border-radius:50%;filter:blur(180px);animation:orbFloat 20s ease-in-out infinite;">
    </div>
    <div
      style="position:absolute;width:600px;height:600px;bottom:-25%;left:-10%;background:radial-gradient(circle,rgba(59,130,246,0.04),transparent 70%);border-radius:50%;filter:blur(180px);animation:orbFloat 25s ease-in-out infinite reverse;">
    </div>
    <div
      style="position:absolute;width:500px;height:500px;top:50%;left:50%;transform:translate(-50%,-50%);background:radial-gradient(circle,rgba(124,58,237,0.03),transparent 70%);border-radius:50%;filter:blur(180px);animation:orbFloat 18s ease-in-out infinite;">
    </div>
    <div
      style="position:absolute;width:400px;height:400px;top:20%;left:20%;background:radial-gradient(circle,rgba(236,72,153,0.02),transparent 70%);border-radius:50%;filter:blur(150px);animation:orbFloat 22s ease-in-out infinite 2s;">
    </div>
    <style>
    @keyframes orbFloat {

      0%,
      100% {
        transform: translate(0, 0) scale(1);
      }

      25% {
        transform: translate(60px, -70px) scale(1.15);
      }

      50% {
        transform: translate(-40px, 50px) scale(0.85);
      }

      75% {
        transform: translate(30px, -30px) scale(1.1);
      }
    }
    </style>
  </div>

  <canvas id="portfolioCanvas"
    style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:0.6;"></canvas>

  <div style="position:relative;z-index:1;padding-top:70px;">
    <div style="max-width:1280px;margin:0 auto;padding:60px 20px 80px;">

      <!-- ===== MODERN HEADER ===== -->
      <div style="text-align:center;margin-bottom:60px;position:relative;">
        <div style="display:inline-block;position:relative;">
          <span
            style="display:inline-block;background:linear-gradient(135deg,rgba(34,197,94,0.1),rgba(59,130,246,0.1));color:#22c55e;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:3px;padding:8px 24px;border-radius:50px;border:1px solid rgba(34,197,94,0.1);margin-bottom:18px;backdrop-filter:blur(10px);">
            <i class="fa-solid fa-sparkles" style="margin-right:8px;color:#22c55e;"></i> Our Creative Works
          </span>
        </div>
        <h1 style="font-size:56px;font-weight:900;color:#ffffff;margin:0 0 12px;letter-spacing:-3px;line-height:1.1;">
          Featured <span
            style="background:linear-gradient(135deg,#22c55e,#3b82f6,#a78bfa,#ec4899);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;background-size:300% 300%;animation:gradientShift 6s ease-in-out infinite;">Projects</span>
        </h1>
        <style>
        @keyframes gradientShift {

          0%,
          100% {
            background-position: 0% 50%;
          }

          50% {
            background-position: 100% 50%;
          }
        }
        </style>
        <p style="font-size:18px;color:#64748b;max-width:560px;margin:0 auto 35px;line-height:1.8;">
          Explore our curated collection of innovative solutions crafted with passion and precision for brands
          worldwide.
        </p>

        <!-- ===== FILTER TABS (Responsive) ===== -->
        <div
          style="display:flex;flex-wrap:wrap;justify-content:center;gap:6px;padding:6px;background:rgba(255,255,255,0.02);border-radius:50px;border:1px solid rgba(255,255,255,0.04);max-width:fit-content;margin:0 auto;backdrop-filter:blur(10px);">
          <a href="#" class="pf-filter active-btn" data-filter="all"
            style="padding:10px 28px;background:linear-gradient(135deg,#22c55e,#16a34a);color:#ffffff;font-size:13px;font-weight:600;border-radius:50px;text-decoration:none;text-transform:uppercase;letter-spacing:1.2px;transition:all 0.4s cubic-bezier(0.34,1.56,0.64,1);border:none;cursor:pointer;box-shadow:0 4px 20px rgba(34,197,94,0.2);">
            <i class="fa-regular fa-grid-2" style="margin-right:6px;"></i> All
          </a>
          @foreach ($categories as $cat)
          <a href="#" class="pf-filter" data-filter="{{ Str::slug($cat->name, '-') }}"
            style="padding:10px 28px;background:rgba(255,255,255,0.03);color:#94a3b8;font-size:13px;font-weight:600;border-radius:50px;text-decoration:none;text-transform:uppercase;letter-spacing:1.2px;transition:all 0.4s cubic-bezier(0.34,1.56,0.64,1);border:none;cursor:pointer;">
            <i class="fa-regular fa-tag" style="margin-right:6px;"></i> {{ $cat->name }}
          </a>
          @endforeach
        </div>
      </div>

      <!-- ===== RESPONSIVE GRID: auto-fill + minmax ===== -->
      @php
      $allPortfolios = $portfolios->values();
      $total = $allPortfolios->count();
      $middleIndex = floor(($total - 1) / 2);
      @endphp

      <div class="pf-grid" style="display:grid;grid-template-columns:repeat(auto-fill, minmax(300px, 1fr));gap:30px;">

        @foreach ($allPortfolios as $index => $portfolio)
        @php
        $isMiddle = ($index === $middleIndex);
        $slug = Str::slug($portfolio->category->name, '-');
        // make middle item span 2 columns on larger screens (optional)
        $gridCol = $isMiddle ? '1 / span 2' : 'auto';
        $imageHeight = $isMiddle ? '340px' : '240px'; // balanced height
        @endphp

        <div class="pf-item {{ $slug }}" data-category="{{ $slug }}"
          style="{{ $isMiddle ? 'grid-column: 1 / span 2;' : '' }}">

          <div
            style="position:relative;border-radius:24px;overflow:hidden;background:linear-gradient(145deg,rgba(255,255,255,0.03),rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.05);transition:all 0.6s cubic-bezier(0.23,1,0.32,1);height:100%;display:flex;flex-direction:column;backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);"
            onmouseover="this.style.borderColor='rgba(34,197,94,0.2)';this.style.transform='translateY(-8px) scale(1.01)';this.style.boxShadow='0 40px 80px -20px rgba(34,197,94,0.12)';this.style.background='linear-gradient(145deg,rgba(255,255,255,0.06),rgba(255,255,255,0.02))'"
            onmouseout="this.style.borderColor='rgba(255,255,255,0.05)';this.style.transform='translateY(0) scale(1)';this.style.boxShadow='';this.style.background='linear-gradient(145deg,rgba(255,255,255,0.03),rgba(255,255,255,0.01))'">

            <!-- IMAGE (clickable -> live demo) -->
            <a href="{{ $portfolio->demo_url }}" target="_blank" rel="noopener noreferrer"
              style="display:block;text-decoration:none;flex-shrink:0;width:100%;height:{{ $imageHeight }};background:#0a0e1a;position:relative;overflow:hidden;border-radius:24px 24px 0 0;cursor:pointer;">
              <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                style="width:100%;height:100%;object-fit:cover;display:block;transition:all 0.8s cubic-bezier(0.23,1,0.32,1);"
                onmouseover="this.style.transform='scale(1.1)';this.style.filter='brightness(0.7)'"
                onmouseout="this.style.transform='scale(1)';this.style.filter='brightness(1)'">

              <!-- Gradient Overlay -->
              <div
                style="position:absolute;inset:0;background:linear-gradient(180deg,transparent 30%,rgba(5,8,15,0.8));pointer-events:none;">
              </div>

              <!-- Category Badge -->
              <span
                style="position:absolute;top:18px;right:18px;padding:6px 16px;background:rgba(5,8,15,0.6);color:#22c55e;font-size:10px;font-weight:700;border-radius:50px;text-transform:uppercase;letter-spacing:1.5px;border:1px solid rgba(34,197,94,0.15);backdrop-filter:blur(8px);">
                <i class="fa-regular fa-folder" style="margin-right:6px;font-size:9px;"></i>
                {{ $portfolio->category->name }}
              </span>

              <!-- Hover Overlay (click hint) -->
              <div
                style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;opacity:0;transition:all 0.5s cubic-bezier(0.23,1,0.32,1);background:rgba(5,8,15,0.6);backdrop-filter:blur(6px);padding:20px;pointer-events:none;"
                onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0'">
                <div style="text-align:center;">
                  <i class="fa-regular fa-eye"
                    style="font-size:24px;color:#22c55e;margin-bottom:12px;display:block;"></i>
                  <span
                    style="color:#ffffff;font-size:13px;font-weight:600;text-transform:uppercase;letter-spacing:2px;display:block;margin-bottom:6px;">Click
                    to visit</span>
                  <span style="color:#94a3b8;font-size:12px;letter-spacing:1px;">Live demo</span>
                </div>
              </div>

              <!-- Badges -->
              <div style="position:absolute;bottom:18px;left:18px;display:flex;gap:8px;flex-wrap:wrap;">
                <span
                  style="padding:4px 12px;background:rgba(5,8,15,0.5);border-radius:50px;font-size:9px;color:#94a3b8;border:1px solid rgba(255,255,255,0.05);backdrop-filter:blur(4px);">
                  <i class="fa-regular fa-calendar" style="margin-right:4px;"></i> 2026
                </span>
                <span
                  style="padding:4px 12px;background:rgba(5,8,15,0.5);border-radius:50px;font-size:9px;color:#94a3b8;border:1px solid rgba(255,255,255,0.05);backdrop-filter:blur(4px);">
                  <i class="fa-regular fa-heart" style="margin-right:4px;"></i> 124
                </span>
              </div>
            </a>

            <!-- Content -->
            <div
              style="padding:24px 26px 26px;flex-grow:1;display:flex;flex-direction:column;justify-content:space-between;">
              <div>
                <div style="display:flex;align-items:center;gap:8px;margin-bottom:10px;">
                  <span style="width:4px;height:4px;border-radius:50%;background:#22c55e;display:inline-block;"></span>
                  <span
                    style="font-size:11px;color:#22c55e;font-weight:600;text-transform:uppercase;letter-spacing:1.5px;">
                    {{ $portfolio->category->name }}
                  </span>
                </div>
                <h3
                  style="font-size:20px;font-weight:800;color:#ffffff;margin:0 0 10px;letter-spacing:-0.5px;line-height:1.3;">
                  {{ $portfolio->title }}
                </h3>
                <p
                  style="font-size:14px;color:#94a3b8;margin:0;line-height:1.8;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                  {{ \Illuminate\Support\Str::limit(strip_tags($portfolio->description), 100) }}
                </p>
              </div>

              <!-- Actions (live demo button + social) -->
              <div
                style="margin-top:20px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;padding-top:18px;border-top:1px solid rgba(255,255,255,0.04);">
                <a href="{{ $portfolio->demo_url }}" target="_blank" rel="noopener noreferrer"
                  style="display:inline-flex;align-items:center;gap:10px;padding:10px 26px;background:linear-gradient(135deg,#22c55e,#16a34a);color:#fff;font-size:12px;font-weight:700;border-radius:50px;text-decoration:none;transition:all 0.4s cubic-bezier(0.34,1.56,0.64,1);text-transform:uppercase;letter-spacing:1px;box-shadow:0 4px 25px rgba(34,197,94,0.15);"
                  onmouseover="this.style.transform='translateY(-3px) scale(1.05)';this.style.boxShadow='0 8px 35px rgba(34,197,94,0.3)'"
                  onmouseout="this.style.transform='';this.style.boxShadow='0 4px 25px rgba(34,197,94,0.15)'">
                  <i class="fa-regular fa-compass" style="font-size:12px;"></i> Live Demo
                  <i class="fa-solid fa-arrow-right" style="font-size:10px;transition:transform 0.3s;"
                    onmouseover="this.style.transform='translateX(4px)'" onmouseout="this.style.transform=''"></i>
                </a>
                <div style="display:flex;align-items:center;gap:12px;">
                  <a href="#" style="color:#475569;font-size:14px;transition:all 0.3s;"
                    onmouseover="this.style.color='#22c55e';this.style.transform='scale(1.1)'"
                    onmouseout="this.style.color='#475569';this.style.transform=''">
                    <i class="fa-regular fa-share-nodes"></i>
                  </a>
                  <a href="#" style="color:#475569;font-size:14px;transition:all 0.3s;"
                    onmouseover="this.style.color='#ec4899';this.style.transform='scale(1.1)'"
                    onmouseout="this.style.color='#475569';this.style.transform=''">
                    <i class="fa-regular fa-heart"></i>
                  </a>
                  <span style="font-size:11px;color:#334155;">| 124 likes</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      @if ($portfolios->isEmpty())
      <div style="text-align:center;padding:100px 0;">
        <div
          style="display:inline-block;padding:30px;border-radius:50%;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.04);margin-bottom:20px;">
          <i class="fa-regular fa-folder-open" style="font-size:48px;color:#334155;"></i>
        </div>
        <h3 style="color:#94a3b8;font-size:22px;margin:0 0 8px;">No Projects Found</h3>
        <p style="color:#64748b;font-size:15px;">Check back later for our latest work.</p>
      </div>
      @endif

      <!-- ===== LOAD MORE BUTTON ===== -->
      <div style="text-align:center;margin-top:50px;">
        <a href="/themes"
          style="display:inline-flex;align-items:center;gap:12px;padding:14px 40px;background:rgba(255,255,255,0.03);color:#94a3b8;font-size:14px;font-weight:600;border-radius:50px;text-decoration:none;border:1px solid rgba(255,255,255,0.05);transition:all 0.4s cubic-bezier(0.34,1.56,0.64,1);"
          onmouseover="this.style.background='rgba(34,197,94,0.08)';this.style.color='#22c55e';this.style.borderColor='rgba(34,197,94,0.1)';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 30px rgba(34,197,94,0.05)'"
          onmouseout="this.style.background='rgba(255,255,255,0.03)';this.style.color='#94a3b8';this.style.borderColor='rgba(255,255,255,0.05)';this.style.transform='';this.style.boxShadow=''">
          <i class="fa-regular fa-arrow-down"></i>
          Load More Projects
          <i class="fa-regular fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  @include('layout.footer')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" defer></script>
  <script>
  // Three.js - Enhanced Background (same as original)
  (function() {
    var canvas = document.getElementById('portfolioCanvas');
    if (!canvas) return;
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    var renderer = new THREE.WebGLRenderer({
      canvas: canvas,
      alpha: true,
      antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    var count = 500;
    var positions = new Float32Array(count * 3);
    var colors = new Float32Array(count * 3);
    var colorPalette = [new THREE.Color(0x22c55e), new THREE.Color(0x3b82f6), new THREE.Color(0xa78bfa), new THREE
      .Color(0x34d399), new THREE.Color(0xec4899), new THREE.Color(0xf59e0b)
    ];
    for (var i = 0; i < count; i++) {
      positions[i * 3] = (Math.random() - 0.5) * 40;
      positions[i * 3 + 1] = (Math.random() - 0.5) * 40;
      positions[i * 3 + 2] = (Math.random() - 0.5) * 30;
      var col = colorPalette[Math.floor(Math.random() * colorPalette.length)];
      colors[i * 3] = col.r;
      colors[i * 3 + 1] = col.g;
      colors[i * 3 + 2] = col.b;
    }
    var pGeom = new THREE.BufferGeometry();
    pGeom.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    pGeom.setAttribute('color', new THREE.BufferAttribute(colors, 3));
    scene.add(new THREE.Points(pGeom, new THREE.PointsMaterial({
      vertexColors: true,
      size: 0.03,
      transparent: true,
      opacity: 0.4,
      blending: THREE.AdditiveBlending,
      sizeAttenuation: true
    })));

    var shapes = [];
    var shapeColors = [0x22c55e, 0x3b82f6, 0xa78bfa, 0x34d399, 0xec4899];
    for (var i = 0; i < 15; i++) {
      var geom = [new THREE.OctahedronGeometry(0.1 + Math.random() * 0.2), new THREE.TetrahedronGeometry(0.1 + Math
        .random() * 0.2), new THREE.IcosahedronGeometry(0.1 + Math.random() * 0.2)][Math.floor(Math.random() * 3)];
      var mat = new THREE.MeshBasicMaterial({
        color: shapeColors[Math.floor(Math.random() * shapeColors.length)],
        wireframe: true,
        transparent: true,
        opacity: 0.05 + Math.random() * 0.1
      });
      var mesh = new THREE.Mesh(geom, mat);
      mesh.position.set((Math.random() - 0.5) * 25, (Math.random() - 0.5) * 25, (Math.random() - 0.5) * 18 - 5);
      mesh.rotation.set(Math.random() * Math.PI, Math.random() * Math.PI, 0);
      mesh.userData = {
        rot: {
          x: (Math.random() - 0.5) * 0.01,
          y: (Math.random() - 0.5) * 0.01,
          z: (Math.random() - 0.5) * 0.005
        },
        baseY: mesh.position.y,
        phase: Math.random() * Math.PI * 2
      };
      scene.add(mesh);
      shapes.push(mesh);
    }

    camera.position.z = 8;
    var mouseX = 0,
      mouseY = 0;
    document.addEventListener('mousemove', function(e) {
      mouseX = (e.clientX / window.innerWidth) * 2 - 1;
      mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
    });

    var time = 0;

    function animate() {
      requestAnimationFrame(animate);
      time += 0.005;
      shapes.forEach(function(m) {
        m.rotation.x += m.userData.rot.x;
        m.rotation.y += m.userData.rot.y;
        m.rotation.z += m.userData.rot.z || 0.002;
        m.position.y = m.userData.baseY + Math.sin(time * 3 + m.userData.phase) * 0.2;
      });
      camera.position.x += (mouseX * 0.4 - camera.position.x) * 0.01;
      camera.position.y += (-mouseY * 0.3 - camera.position.y) * 0.01;
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

  // Filter functionality
  document.addEventListener('DOMContentLoaded', function() {
    var filters = document.querySelectorAll('.pf-filter');
    var items = document.querySelectorAll('.pf-item');

    filters.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        filters.forEach(function(b) {
          b.classList.remove('active-btn');
          b.style.background = 'rgba(255,255,255,0.03)';
          b.style.color = '#94a3b8';
          b.style.boxShadow = 'none';
        });
        btn.classList.add('active-btn');
        btn.style.background = 'linear-gradient(135deg,#22c55e,#16a34a)';
        btn.style.color = '#ffffff';
        btn.style.boxShadow = '0 4px 20px rgba(34,197,94,0.2)';

        var filterVal = btn.getAttribute('data-filter');
        items.forEach(function(item) {
          if (filterVal === 'all' || item.getAttribute('data-category') === filterVal) {
            item.style.display = 'block';
            item.style.opacity = '1';
          } else {
            item.style.display = 'none';
            item.style.opacity = '0';
          }
        });
      });
    });
  });
  </script>
</body>

</html>