<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body class="tt-magic-cursor" style="background:#0f172a;color:#e2e8f0;">
  <!-- Magic Cursor Start -->
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <!-- Magic Cursor End -->
  @include('layout.headerNav')

  <!-- Three.js Hero -->
  <div style="position:relative;min-height:100vh;display:flex;align-items:center;overflow:hidden;padding-top:70px;">
    <canvas id="threeCanvas" style="position:absolute;inset:0;width:100%;height:100%;pointer-events:none;"></canvas>

    <!-- Decorative images -->
    <img src="{{ asset('frontend/assets/images/laptop.png') }}" alt=""
      style="position:absolute;left:3%;top:25%;width:clamp(80px,12vw,180px);opacity:0.12;pointer-events:none;z-index:1;transform:rotate(-8deg);display:none;">
    <img src="{{ asset('frontend/assets/images/world.png') }}" alt=""
      style="position:absolute;right:3%;bottom:20%;width:clamp(70px,10vw,160px);opacity:0.1;pointer-events:none;z-index:1;transform:rotate(5deg);display:none;">

    <div style="position:relative;z-index:2;width:100%;">
      <div style="max-width:1200px;margin:0 auto;padding:40px 16px 20px;">

        <!-- Header -->
        <div style="text-align:center;">
          <span
            style="display:inline-block;background:rgba(34,197,94,0.1);color:#22c55e;font-size:clamp(11px,1.5vw,13px);font-weight:700;text-transform:uppercase;letter-spacing:2px;padding:5px 14px;border-radius:50px;margin-bottom:12px;">Contact
            Us</span>
          <h1
            style="font-size:clamp(28px,6vw,52px);font-weight:800;color:#ffffff;margin:0 0 12px;letter-spacing:-1px;line-height:1.2;">
            Get In <span style="color:#22c55e;">Touch</span></h1>
          <p
            style="font-size:clamp(14px,1.8vw,18px);color:#94a3b8;max-width:500px;margin:0 auto 30px;line-height:1.7;padding:0 16px;">
            Have a project in mind? We'd love to hear from you.</p>
        </div>

        <!-- Contact Info Cards -->
        @php $c = $contacts->first(); @endphp
        <div class="contact-cards"
          style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;margin-bottom:40px;">

          <!-- Address Card -->
          <div
            style="background:rgba(30,41,59,0.7);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,0.06);border-radius:16px;padding:clamp(16px,2.5vw,28px) clamp(14px,2vw,20px);text-align:center;transition:all 0.4s ease;"
            onmouseover="this.style.borderColor='#22c55e';this.style.transform='translateY(-4px)';this.style.boxShadow='0 20px 40px rgba(34,197,94,0.1)'"
            onmouseout="this.style.borderColor='rgba(255,255,255,0.06)';this.style.transform='';this.style.boxShadow=''">
            <div
              style="width:clamp(40px,5vw,50px);height:clamp(40px,5vw,50px);background:rgba(34,197,94,0.1);border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
              <svg style="width:clamp(18px,2.5vw,22px);height:clamp(18px,2.5vw,22px);color:#22c55e;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <h3
              style="font-size:clamp(12px,1.5vw,14px);font-weight:700;color:#ffffff;margin:0 0 4px;text-transform:uppercase;letter-spacing:0.5px;">
              Address</h3>
            <p style="font-size:clamp(12px,1.3vw,14px);color:#94a3b8;margin:0;line-height:1.6;word-break:break-word;">
              {!! $c->address ?? '' !!}</p>
          </div>

          <!-- Phone Card -->
          <div
            style="background:rgba(30,41,59,0.7);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,0.06);border-radius:16px;padding:clamp(16px,2.5vw,28px) clamp(14px,2vw,20px);text-align:center;transition:all 0.4s ease;"
            onmouseover="this.style.borderColor='#22c55e';this.style.transform='translateY(-4px)';this.style.boxShadow='0 20px 40px rgba(34,197,94,0.1)'"
            onmouseout="this.style.borderColor='rgba(255,255,255,0.06)';this.style.transform='';this.style.boxShadow=''">
            <div
              style="width:clamp(40px,5vw,50px);height:clamp(40px,5vw,50px);background:rgba(34,197,94,0.1);border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
              <svg style="width:clamp(18px,2.5vw,22px);height:clamp(18px,2.5vw,22px);color:#22c55e;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <h3
              style="font-size:clamp(12px,1.5vw,14px);font-weight:700;color:#ffffff;margin:0 0 4px;text-transform:uppercase;letter-spacing:0.5px;">
              Phone</h3>
            <p style="font-size:clamp(12px,1.3vw,14px);color:#94a3b8;margin:0;line-height:1.6;">{{ $c->phone ?? '' }}
            </p>
          </div>

          <!-- Email Card -->
          <div
            style="background:rgba(30,41,59,0.7);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,0.06);border-radius:16px;padding:clamp(16px,2.5vw,28px) clamp(14px,2vw,20px);text-align:center;transition:all 0.4s ease;"
            onmouseover="this.style.borderColor='#22c55e';this.style.transform='translateY(-4px)';this.style.boxShadow='0 20px 40px rgba(34,197,94,0.1)'"
            onmouseout="this.style.borderColor='rgba(255,255,255,0.06)';this.style.transform='';this.style.boxShadow=''">
            <div
              style="width:clamp(40px,5vw,50px);height:clamp(40px,5vw,50px);background:rgba(34,197,94,0.1);border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
              <svg style="width:clamp(18px,2.5vw,22px);height:clamp(18px,2.5vw,22px);color:#22c55e;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <h3
              style="font-size:clamp(12px,1.5vw,14px);font-weight:700;color:#ffffff;margin:0 0 4px;text-transform:uppercase;letter-spacing:0.5px;">
              Email</h3>
            <p style="font-size:clamp(12px,1.3vw,14px);color:#94a3b8;margin:0;line-height:1.6;word-break:break-word;">
              {{ $c->email ?? '' }}</p>
          </div>
        </div>

        <!-- Map + Form - Map on LEFT, Form on RIGHT -->
        <div class="contact-grid" style="display:grid;grid-template-columns:1.2fr 1fr;gap:24px;align-items:stretch;">

          <!-- LEFT: Map -->
          <div class="map-wrapper" style="display:flex;">
            <div class="map-container"
              style="background:rgba(30,41,59,0.5);border:1px solid rgba(255,255,255,0.05);border-radius:16px;overflow:hidden;width:100%;position:relative;display:flex;align-items:stretch;min-height:500px;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.8596995503444!2d90.35103507608738!3d23.823587585961263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1006cb54f2d%3A0x970526e9c2b197c6!2sInoodex!5e0!3m2!1sen!2sbd!4v1751177416023!5m2!1sen!2sbd"
                width="100%" height="100%"
                style="border:0;display:block;position:absolute;top:0;left:0;width:100%;height:100%;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>

          <!-- RIGHT: Form -->
          <div class="form-wrapper" style="display:flex;">
            <div class="form-card"
              style="background:rgba(30,41,59,0.5);border:1px solid rgba(255,255,255,0.05);border-radius:16px;padding:clamp(18px,3vw,36px);width:100%;display:flex;flex-direction:column;">
              <form action="{{ route('contact.store') }}" method="POST"
                style="flex:1;display:flex;flex-direction:column;">
                @csrf
                <!-- Name + Email -->
                <div class="form-row" style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px;">
                  <div>
                    <label
                      style="display:block;font-size:clamp(10px,1.2vw,12px);font-weight:600;color:#94a3b8;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.5px;">Name
                      *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                      style="width:100%;padding:clamp(8px,1.2vw,11px) clamp(10px,1.5vw,14px);background:#1e293b;border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#ffffff;font-size:clamp(12px,1.3vw,14px);outline:none;transition:border-color 0.3s;box-sizing:border-box;"
                      onfocus="this.style.borderColor='#22c55e'"
                      onblur="this.style.borderColor='rgba(255,255,255,0.08)'">
                  </div>
                  <div>
                    <label
                      style="display:block;font-size:clamp(10px,1.2vw,12px);font-weight:600;color:#94a3b8;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.5px;">Email
                      *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                      style="width:100%;padding:clamp(8px,1.2vw,11px) clamp(10px,1.5vw,14px);background:#1e293b;border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#ffffff;font-size:clamp(12px,1.3vw,14px);outline:none;transition:border-color 0.3s;box-sizing:border-box;"
                      onfocus="this.style.borderColor='#22c55e'"
                      onblur="this.style.borderColor='rgba(255,255,255,0.08)'">
                  </div>
                </div>

                <!-- Phone + Subject -->
                <div class="form-row" style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:12px;">
                  <div>
                    <label
                      style="display:block;font-size:clamp(10px,1.2vw,12px);font-weight:600;color:#94a3b8;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.5px;">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                      style="width:100%;padding:clamp(8px,1.2vw,11px) clamp(10px,1.5vw,14px);background:#1e293b;border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#ffffff;font-size:clamp(12px,1.3vw,14px);outline:none;transition:border-color 0.3s;box-sizing:border-box;"
                      onfocus="this.style.borderColor='#22c55e'"
                      onblur="this.style.borderColor='rgba(255,255,255,0.08)'">
                  </div>
                  <div>
                    <label
                      style="display:block;font-size:clamp(10px,1.2vw,12px);font-weight:600;color:#94a3b8;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.5px;">Subject</label>
                    <input type="text" name="subject" value="{{ old('subject') }}"
                      style="width:100%;padding:clamp(8px,1.2vw,11px) clamp(10px,1.5vw,14px);background:#1e293b;border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#ffffff;font-size:clamp(12px,1.3vw,14px);outline:none;transition:border-color 0.3s;box-sizing:border-box;"
                      onfocus="this.style.borderColor='#22c55e'"
                      onblur="this.style.borderColor='rgba(255,255,255,0.08)'">
                  </div>
                </div>

                <!-- Message -->
                <div style="margin-bottom:16px;flex:1;">
                  <label
                    style="display:block;font-size:clamp(10px,1.2vw,12px);font-weight:600;color:#94a3b8;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.5px;">Message
                    *</label>
                  <textarea name="message" rows="4" required
                    style="width:100%;padding:clamp(8px,1.2vw,11px) clamp(10px,1.5vw,14px);background:#1e293b;border:1px solid rgba(255,255,255,0.08);border-radius:10px;color:#ffffff;font-size:clamp(12px,1.3vw,14px);outline:none;transition:border-color 0.3s;resize:vertical;min-height:clamp(80px,10vw,120px);box-sizing:border-box;"
                    onfocus="this.style.borderColor='#22c55e'"
                    onblur="this.style.borderColor='rgba(255,255,255,0.08)'">{{ old('message') }}</textarea>
                </div>

                <!-- Social Follow -->
                <div style="margin-bottom:16px;">
                  <h3
                    style="font-size:clamp(11px,1.2vw,13px);font-weight:700;color:#ffffff;margin:0 0 8px;text-transform:uppercase;letter-spacing:0.5px;">
                    Follow Us</h3>
                  <div style="display:flex;gap:8px;flex-wrap:wrap;">
                    <a href="#"
                      style="display:flex;align-items:center;justify-content:center;width:clamp(32px,4vw,38px);height:clamp(32px,4vw,38px);background:rgba(255,255,255,0.05);border-radius:8px;color:#94a3b8;text-decoration:none;transition:all 0.3s;font-size:clamp(14px,1.8vw,16px);"
                      onmouseover="this.style.background='#22c55e';this.style.color='#fff'"
                      onmouseout="this.style.background='rgba(255,255,255,0.05)';this.style.color='#94a3b8'"><i
                        class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"
                      style="display:flex;align-items:center;justify-content:center;width:clamp(32px,4vw,38px);height:clamp(32px,4vw,38px);background:rgba(255,255,255,0.05);border-radius:8px;color:#94a3b8;text-decoration:none;transition:all 0.3s;font-size:clamp(14px,1.8vw,16px);"
                      onmouseover="this.style.background='#22c55e';this.style.color='#fff'"
                      onmouseout="this.style.background='rgba(255,255,255,0.05)';this.style.color='#94a3b8'"><i
                        class="fa-brands fa-instagram"></i></a>
                    <a href="#"
                      style="display:flex;align-items:center;justify-content:center;width:clamp(32px,4vw,38px);height:clamp(32px,4vw,38px);background:rgba(255,255,255,0.05);border-radius:8px;color:#94a3b8;text-decoration:none;transition:all 0.3s;font-size:clamp(14px,1.8vw,16px);"
                      onmouseover="this.style.background='#22c55e';this.style.color='#fff'"
                      onmouseout="this.style.background='rgba(255,255,255,0.05)';this.style.color='#94a3b8'"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"
                      style="display:flex;align-items:center;justify-content:center;width:clamp(32px,4vw,38px);height:clamp(32px,4vw,38px);background:rgba(255,255,255,0.05);border-radius:8px;color:#94a3b8;text-decoration:none;transition:all 0.3s;font-size:clamp(14px,1.8vw,16px);"
                      onmouseover="this.style.background='#22c55e';this.style.color='#fff'"
                      onmouseout="this.style.background='rgba(255,255,255,0.05)';this.style.color='#94a3b8'"><i
                        class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>

                <button type="submit"
                  style="width:100%;padding:clamp(10px,1.5vw,13px);background:linear-gradient(135deg,#22c55e,#16a34a);color:#ffffff;font-size:clamp(12px,1.4vw,14px);font-weight:600;border:none;border-radius:10px;cursor:pointer;transition:all 0.3s;text-transform:uppercase;letter-spacing:0.5px;margin-top:auto;"
                  onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 10px 30px rgba(34,197,94,0.3)'"
                  onmouseout="this.style.transform='';this.style.boxShadow=''">Send Message</button>
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  @include('layout.footer')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" defer></script>
  <script>
  (function() {
    var canvas = document.getElementById('threeCanvas');
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

    // Particles
    var particleCount = 200;
    var positions = new Float32Array(particleCount * 3);
    for (var i = 0; i < particleCount; i++) {
      positions[i * 3] = (Math.random() - 0.5) * 30;
      positions[i * 3 + 1] = (Math.random() - 0.5) * 30;
      positions[i * 3 + 2] = (Math.random() - 0.5) * 15 - 5;
    }
    var pGeom = new THREE.BufferGeometry();
    pGeom.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    var pMat = new THREE.PointsMaterial({
      color: 0x22c55e,
      size: 0.03,
      transparent: true,
      opacity: 0.4,
      blending: THREE.AdditiveBlending
    });
    var particles = new THREE.Points(pGeom, pMat);
    scene.add(particles);

    // Load image textures and create floating planes
    var loader = new THREE.TextureLoader();
    var baseUrl = "{{ asset('frontend/assets/images') }}";
    var planes = [];

    function createImagePlane(imgSrc, x, y, z, scale) {
      loader.load(imgSrc, function(texture) {
        var aspect = texture.image.width / texture.image.height;
        var geom = new THREE.PlaneGeometry(scale * aspect, scale);
        var mat = new THREE.MeshBasicMaterial({
          map: texture,
          transparent: true,
          depthWrite: false,
          side: THREE.DoubleSide,
        });
        var mesh = new THREE.Mesh(geom, mat);
        mesh.position.set(x, y, z);
        mesh.userData = {
          floatSpeed: 0.003 + Math.random() * 0.002,
          floatPhase: Math.random() * Math.PI * 2,
          rotSpeedY: (Math.random() - 0.5) * 0.004,
          rotSpeedX: (Math.random() - 0.5) * 0.002,
          baseY: y,
        };
        scene.add(mesh);
        planes.push(mesh);

        // Glow ring behind
        var ringGeom = new THREE.RingGeometry(scale * aspect * 0.45, scale * aspect * 0.55, 32);
        var ringMat = new THREE.MeshBasicMaterial({
          color: 0x22c55e,
          transparent: true,
          opacity: 0.08,
          side: THREE.DoubleSide,
          depthWrite: false,
        });
        var ring = new THREE.Mesh(ringGeom, ringMat);
        ring.position.set(x, y, z - 0.05);
        ring.userData = {
          parentMesh: mesh
        };
        scene.add(ring);
        planes.push(ring);
      });
    }

    createImagePlane(baseUrl + '/laptop.png', -2.5, 0.5, -1, 2.0);
    createImagePlane(baseUrl + '/world.png', 2.8, -0.8, -1.5, 1.8);

    // Grid floor (subtle)
    var gridHelper = new THREE.GridHelper(12, 24, 0x22c55e, 0x22c55e);
    gridHelper.position.y = -3.5;
    gridHelper.material.transparent = true;
    gridHelper.material.opacity = 0.06;
    scene.add(gridHelper);

    camera.position.z = 5.5;
    camera.position.y = 0.3;

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
      particles.rotation.y += 0.0005;

      planes.forEach(function(mesh) {
        if (mesh.userData.parentMesh) return;
        mesh.position.y = mesh.userData.baseY + Math.sin(time * 5 + mesh.userData.floatPhase) * 0.15;
        mesh.rotation.y += mesh.userData.rotSpeedY;
        mesh.rotation.x += mesh.userData.rotSpeedX;
      });

      camera.position.x += (mouseX * 0.4 - camera.position.x) * 0.02;
      camera.position.y += (-mouseY * 0.3 + 0.3 - camera.position.y) * 0.02;
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

  <style>
  /* ========== RESPONSIVE STYLES ========== */

  /* Laptop / Desktop (1025px - 1200px) */
  @media (max-width: 1200px) {
    .contact-grid {
      grid-template-columns: 1.1fr 1fr !important;
      gap: 20px !important;
    }

    .map-container {
      min-height: 450px !important;
    }
  }

  /* Small Laptop / Tablet (769px - 1024px) */
  @media (max-width: 1024px) {
    .contact-grid {
      grid-template-columns: 1fr 1fr !important;
      gap: 18px !important;
    }

    .map-container {
      min-height: 400px !important;
    }

    .form-card {
      padding: clamp(16px, 2.5vw, 28px) !important;
    }

    .contact-cards {
      grid-template-columns: repeat(3, 1fr) !important;
      gap: 14px !important;
    }
  }

  /* Tablet (481px - 768px) */
  @media (max-width: 768px) {
    .contact-grid {
      grid-template-columns: 1fr !important;
      gap: 20px !important;
    }

    .map-container {
      min-height: 300px !important;
      width: 100% !important;
    }

    .map-wrapper {
      order: 1 !important;
    }

    .form-wrapper {
      order: 2 !important;
    }

    .form-row {
      grid-template-columns: 1fr !important;
      gap: 10px !important;
    }

    .contact-cards {
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 12px !important;
    }

    .form-card {
      padding: 20px !important;
    }
  }

  /* Mobile (320px - 480px) */
  @media (max-width: 480px) {
    .contact-cards {
      grid-template-columns: 1fr !important;
      gap: 10px !important;
    }

    .map-container {
      min-height: 220px !important;
    }

    .form-card {
      padding: 16px !important;
    }

    .contact-grid {
      gap: 16px !important;
    }

    .contact-cards>div {
      padding: 16px 14px !important;
    }

    .form-card input,
    .form-card textarea {
      font-size: 14px !important;
      padding: 10px 12px !important;
    }

    .form-card button {
      padding: 12px !important;
      font-size: 13px !important;
    }
  }

  /* Extra Small Mobile (below 320px) */
  @media (max-width: 320px) {
    .map-container {
      min-height: 180px !important;
    }

    .form-card {
      padding: 12px !important;
    }

    .form-card input,
    .form-card textarea {
      font-size: 13px !important;
      padding: 8px 10px !important;
    }

    .social-icons a {
      width: 30px !important;
      height: 30px !important;
      font-size: 13px !important;
    }
  }

  /* Touch-friendly hover states (disable hover on touch devices) */
  @media (hover: none) {
    .contact-cards>div:hover {
      transform: none !important;
      border-color: rgba(255, 255, 255, 0.06) !important;
      box-shadow: none !important;
    }

    .social-icon:hover {
      background: rgba(255, 255, 255, 0.05) !important;
      color: #94a3b8 !important;
    }
  }
  </style>

  @if (session('success'))
  <script>
  Swal.fire({
    icon: 'success',
    title: 'Thank you!',
    text: '{{ session('
    success ') }}',
    confirmButtonColor: '#22c55e',
    background: '#1e293b',
    color: '#fff'
  })
  </script>
  @endif

  @if ($errors->any())
  <script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    html: `{!! implode('<br>', $errors->all()) !!}`,
    confirmButtonColor: '#d33',
    background: '#1e293b',
    color: '#fff'
  })
  </script>
  @endif
</body>

</html>