<div class="our-services" style="position: relative; background: #0a0e1a; padding: 100px 0; overflow: hidden;">
  <!-- Animated Background -->
  <div style="position: absolute; inset: 0; overflow: hidden; pointer-events: none; z-index: 0;">
    <div style="position: absolute; inset: 0; background: #0a0e1a;"></div>

    <!-- Gradient Orbs -->
    <div
      style="position: absolute; top: -15%; right: -5%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(16,185,129,0.06) 0%, transparent 70%); border-radius: 50%; animation: floatOrb1 12s ease-in-out infinite;">
    </div>
    <div
      style="position: absolute; bottom: -15%; left: -5%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(59,130,246,0.04) 0%, transparent 70%); border-radius: 50%; animation: floatOrb2 16s ease-in-out infinite;">
    </div>
    <div
      style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 400px; height: 400px; background: radial-gradient(circle, rgba(139,92,246,0.03) 0%, transparent 70%); border-radius: 50%; animation: floatOrb3 20s ease-in-out infinite;">
    </div>

    <!-- Floating Particles -->
    <div
      style="position: absolute; width: 3px; height: 3px; background: rgba(16,185,129,0.3); border-radius: 50%; top: 10%; left: 5%; animation: particle1 6s ease-in-out infinite;">
    </div>
    <div
      style="position: absolute; width: 5px; height: 5px; background: rgba(59,130,246,0.25); border-radius: 50%; top: 25%; right: 8%; animation: particle2 8s ease-in-out infinite;">
    </div>
    <div
      style="position: absolute; width: 4px; height: 4px; background: rgba(139,92,246,0.3); border-radius: 50%; bottom: 30%; left: 10%; animation: particle3 7s ease-in-out infinite;">
    </div>
    <div
      style="position: absolute; width: 6px; height: 6px; background: rgba(236,72,153,0.2); border-radius: 50%; top: 55%; right: 15%; animation: particle4 9s ease-in-out infinite;">
    </div>
    <div
      style="position: absolute; width: 4px; height: 4px; background: rgba(16,185,129,0.2); border-radius: 50%; bottom: 40%; right: 35%; animation: particle5 5s ease-in-out infinite;">
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <!-- Section Header -->
    <div style="display: flex; flex-wrap: wrap; align-items: center; margin-bottom: 50px;">
      <div style="flex: 0 0 58.333%; max-width: 58.333%; padding: 0 15px;">
        <div class="section-title">
          <div
            style="display: inline-block; padding: 6px 20px; background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.12); border-radius: 50px; margin-bottom: 15px; animation: fadeInDown 0.6s ease forwards; opacity: 0; transform: translateY(-20px);">
            <span
              style="color: #10b981; font-size: 12px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;">✦
              Our Services</span>
          </div>
          <h2
            style="font-size: 38px; font-weight: 800; color: #ffffff; line-height: 1.2; margin-bottom: 0; animation: fadeInUp 0.6s ease forwards 0.1s; opacity: 0; transform: translateY(20px);">
            What <span
              style="background: linear-gradient(135deg, #10b981, #34d399, #3b82f6, #8b5cf6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; background-size: 300% 300%; animation: gradientMove 5s ease-in-out infinite;">we
              can offer</span> today
          </h2>
        </div>
      </div>
      <div style="flex: 0 0 41.666%; max-width: 41.666%; padding: 0 15px; text-align: right;">
        <div style="animation: fadeInUp 0.6s ease forwards 0.2s; opacity: 0; transform: translateY(20px);">
          <a href="{{ url('/services') }}"
            style="display: inline-flex; align-items: center; gap: 10px; padding: 12px 35px; background: linear-gradient(135deg, #10b981, #059669); color: #ffffff; font-size: 15px; font-weight: 600; border-radius: 50px; text-decoration: none; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); box-shadow: 0 4px 25px rgba(16,185,129,0.3);"
            onmouseover="this.style.transform='translateY(-3px) scale(1.03)'; this.style.boxShadow='0 10px 40px rgba(16,185,129,0.4)'"
            onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 25px rgba(16,185,129,0.3)'">
            <span>View All Services</span>
            <span style="transition: transform 0.3s;" onmouseover="this.style.transform='translateX(6px)'"
              onmouseout="this.style.transform='translateX(0)'">→</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Services Grid - Card Style -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-top: 20px;">
      @php
      $serviceColors = [
      ['bg' => 'rgba(16,185,129,0.04)', 'border' => '#10b981', 'light' => 'rgba(16,185,129,0.1)'],
      ['bg' => 'rgba(59,130,246,0.04)', 'border' => '#3b82f6', 'light' => 'rgba(59,130,246,0.1)'],
      ['bg' => 'rgba(139,92,246,0.04)', 'border' => '#8b5cf6', 'light' => 'rgba(139,92,246,0.1)'],
      ['bg' => 'rgba(236,72,153,0.04)', 'border' => '#ec4899', 'light' => 'rgba(236,72,153,0.1)'],
      ['bg' => 'rgba(245,158,11,0.04)', 'border' => '#f59e0b', 'light' => 'rgba(245,158,11,0.1)'],
      ['bg' => 'rgba(6,182,212,0.04)', 'border' => '#06b6d4', 'light' => 'rgba(6,182,212,0.1)']
      ];

      $services = [
      [
      'title' => 'Software Development',
      'desc' => 'At InooDex, we specialize in delivering custom software solutions tailored to meet the unique needs of
      businesses across all industries.',
      'icon' => 'software.png'
      ],
      [
      'title' => 'Apps Development',
      'desc' => 'We offer custom app development services that are designed to meet the specific needs of your business
      for iOS and Android platforms.',
      'icon' => 'apps.png'
      ],
      [
      'title' => 'Web Development',
      'desc' => 'We understand that every business is unique, which is why we create custom websites tailored to your
      specific requirements.',
      'icon' => 'web.png'
      ],
      [
      'title' => 'Digital Marketing',
      'desc' => 'We help businesses grow online through tailored digital marketing strategies that drive traffic,
      increase conversions, and boost brand awareness.',
      'icon' => 'marketing.png'
      ],
      [
      'title' => 'SEO Service',
      'desc' => 'We focus on both on-page and off-page SEO to ensure your website is fully optimized for search
      engines.',
      'icon' => 'seo.png'
      ],
      [
      'title' => 'Graphics Design',
      'desc' => 'Our talented graphic designers combine creativity with technical expertise to produce high-quality
      visuals that engage and captivate your audience.',
      'icon' => 'graphics.png'
      ]
      ];
      @endphp

      @foreach ($services as $index => $service)
      <div class="service-card" style="
                background: {{ $serviceColors[$index % count($serviceColors)]['bg'] }}; 
                border: 1px solid rgba(255,255,255,0.04); 
                border-radius: 20px; 
                padding: 30px 25px 28px; 
                text-align: left; 
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); 
                position: relative; 
                overflow: hidden;
                animation: cardFadeUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
                animation-delay: {{ $index * 0.1 }}s;
                opacity: 0;
                transform: translateY(50px);
                border-bottom: 3px solid {{ $serviceColors[$index % count($serviceColors)]['border'] }};
                cursor: pointer;
            ">
        <!-- Glow Effect -->
        <div
          style="position: absolute; inset: 0; background: radial-gradient(circle at 50% 30%, {{ $serviceColors[$index % count($serviceColors)]['border'] }}08, transparent 70%); opacity: 0; transition: opacity 0.6s;">
        </div>

        <!-- Decorative Elements -->
        <div
          style="position: absolute; top: -50px; right: -50px; width: 120px; height: 120px; background: radial-gradient(circle, {{ $serviceColors[$index % count($serviceColors)]['border'] }}06, transparent 70%); border-radius: 50%;">
        </div>
        <div
          style="position: absolute; bottom: -40px; left: -40px; width: 80px; height: 80px; background: radial-gradient(circle, {{ $serviceColors[$index % count($serviceColors)]['border'] }}04, transparent 70%); border-radius: 50%;">
        </div>

        <!-- Service Number -->
        <div
          style="position: absolute; top: 12px; right: 15px; font-size: 10px; font-weight: 700; color: {{ $serviceColors[$index % count($serviceColors)]['border'] }}; opacity: 0.15; letter-spacing: 1px;">
          #{{ sprintf('%02d', $index + 1) }}
        </div>

        <!-- Icon -->
        <div
          style="display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; margin-bottom: 18px; background: {{ $serviceColors[$index % count($serviceColors)]['light'] }}; border-radius: 14px; border: 1px solid {{ $serviceColors[$index % count($serviceColors)]['border'] }}25; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); position: relative; z-index: 1;"
          onmouseover="this.style.background='{{ $serviceColors[$index % count($serviceColors)]['border'] }}20'; this.style.transform='scale(1.05) rotate(-5deg)'; this.style.boxShadow='0 10px 30px {{ $serviceColors[$index % count($serviceColors)]['border'] }}20'"
          onmouseout="this.style.background='{{ $serviceColors[$index % count($serviceColors)]['light'] }}'; this.style.transform='scale(1) rotate(0deg)'; this.style.boxShadow='none'">
          <img src="{{ asset('frontend/assets/images/services/' . $service['icon']) }}" alt="{{ $service['title'] }}"
            style="width: 32px; height: 32px; object-fit: contain; filter: brightness(0) invert(1) opacity(0.7); transition: all 0.4s;">
        </div>

        <!-- Title -->
        <h3
          style="font-size: 18px; font-weight: 700; color: #ffffff; margin: 0 0 12px 0; transition: color 0.3s; position: relative; z-index: 1;"
          onmouseover="this.style.color='{{ $serviceColors[$index % count($serviceColors)]['border'] }}'"
          onmouseout="this.style.color='#ffffff'">
          {{ $service['title'] }}
        </h3>

        <!-- Description -->
        <p
          style="color: #9ca3af; font-size: 14px; line-height: 1.8; margin: 0 0 20px 0; position: relative; z-index: 1;">
          {{ $service['desc'] }}
        </p>

        <!-- Learn More -->
        <div style="display: flex; align-items: center; gap: 8px; position: relative; z-index: 1;">
          <a href="{{ url('/services') }}"
            style="color: {{ $serviceColors[$index % count($serviceColors)]['border'] }}; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s;"
            onmouseover="this.style.gap='14px'" onmouseout="this.style.gap='8px'">
            <span>Learn More</span>
            <span style="display: inline-block; transition: transform 0.3s;"
              onmouseover="this.style.transform='translateX(6px)'"
              onmouseout="this.style.transform='translateX(0)'">→</span>
          </a>
        </div>

        <!-- Bottom Progress Line -->
        <div
          style="position: absolute; bottom: 0; left: 0; width: 0%; height: 3px; background: linear-gradient(90deg, {{ $serviceColors[$index % count($serviceColors)]['border'] }}, {{ $serviceColors[$index % count($serviceColors)]['border'] }}80); transition: width 0.6s cubic-bezier(0.34, 1.56, 0.64, 1); border-radius: 0 0 3px 3px;">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<style>
/* Floating Orbs */
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

@keyframes floatOrb3 {

  0%,
  100% {
    transform: translate(-50%, -50%) scale(1);
  }

  50% {
    transform: translate(-50%, -50%) scale(1.2);
  }
}

/* Particles */
@keyframes particle1 {

  0%,
  100% {
    transform: translate(0, 0);
    opacity: 0.3;
  }

  50% {
    transform: translate(-20px, -30px);
    opacity: 0.7;
  }
}

@keyframes particle2 {

  0%,
  100% {
    transform: translate(0, 0);
    opacity: 0.25;
  }

  50% {
    transform: translate(30px, -20px);
    opacity: 0.6;
  }
}

@keyframes particle3 {

  0%,
  100% {
    transform: translate(0, 0);
    opacity: 0.3;
  }

  50% {
    transform: translate(-25px, 25px);
    opacity: 0.7;
  }
}

@keyframes particle4 {

  0%,
  100% {
    transform: translate(0, 0);
    opacity: 0.2;
  }

  50% {
    transform: translate(20px, -30px);
    opacity: 0.5;
  }
}

@keyframes particle5 {

  0%,
  100% {
    transform: translate(0, 0);
    opacity: 0.2;
  }

  50% {
    transform: translate(-30px, -20px);
    opacity: 0.6;
  }
}

/* Fade Animations */
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

/* Card Fade Up Animation */
@keyframes cardFadeUp {
  from {
    opacity: 0;
    transform: translateY(50px) scale(0.95);
  }

  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Service Card Hover */
.service-card:hover {
  transform: translateY(-8px) scale(1.01) !important;
  border-color: rgba(255, 255, 255, 0.08) !important;
  box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4) !important;
}

.service-card:hover>div:first-child {
  opacity: 1 !important;
}

.service-card:hover>div:last-child {
  width: 100% !important;
}

/* Responsive */
@media (max-width: 1024px) {
  .our-services>div>div:first-child>div {
    flex: 0 0 100% !important;
    max-width: 100% !important;
    text-align: center !important;
  }

  .our-services>div>div:first-child>div:last-child {
    text-align: center !important;
    margin-top: 15px;
  }

  .our-services>div>div:last-child {
    grid-template-columns: repeat(2, 1fr) !important;
  }
}

@media (max-width: 640px) {
  .our-services>div>div:first-child h2 {
    font-size: 28px !important;
  }

  .our-services>div>div:last-child {
    grid-template-columns: 1fr !important;
    gap: 20px !important;
  }

  .service-card {
    padding: 25px 20px !important;
  }

  .service-card h3 {
    font-size: 16px !important;
  }

  .service-card p {
    font-size: 13px !important;
  }
}
</style>