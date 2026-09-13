<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.layout.header')
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { background: #fff; color: #111827; font-family: 'Inter', sans-serif; line-height: 1.6; }

    .prod-hero {
      position: relative;
      height: 380px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0c1a3d 0%, #0a0f1e 100%);
    }
    .prod-hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(10,15,30,0.55) 0%, rgba(10,15,30,0.70) 100%);
    }
    .prod-hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 0 24px;
    }
    .prod-hero-content h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(36px, 5vw, 56px);
      font-weight: 800;
      color: #fff;
      margin-bottom: 16px;
    }
    .prod-hero-content h1 span { color: #f4a637; }

    .prod-section { padding: 60px 0 100px; background: #fff; }
    .prod-container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .prod-header { text-align: center; margin-bottom: 50px; }
    .prod-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(244,166,55,0.08); border: 1px solid rgba(244,166,55,0.15);
      padding: 8px 20px; border-radius: 50px; font-size: 12px; font-weight: 600;
      color: #f4a637; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 20px;
    }
    .prod-badge::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: #f4a637; }
    .prod-header h2 { font-family: 'Playfair Display', serif; font-size: clamp(28px, 4vw, 40px); font-weight: 800; color: #111827; margin-bottom: 12px; }
    .prod-header p { font-size: 16px; color: #6b7280; max-width: 560px; margin: 0 auto; }

    .stacking-cards-container { position: relative; }

    .whitebg {
      padding: 1.5rem;
      background-color: #f6f6f6;
      border-radius: 2rem;
      box-shadow: 0px -3px 2px 1px rgba(0,0,0,0.1);
    }

    .row { display: flex; flex-wrap: wrap; margin-left: -0.75rem; margin-right: -0.75rem; }
    .gx-4 > [class*="col-"] { padding-left: 1.5rem; padding-right: 1.5rem; }
    .mt-4 { margin-top: 1.5rem !important; }
    .p-0 { padding: 0 !important; }

    .stacking-card {
      position: sticky;
      margin-bottom: 0;
      top: 220px;
      border-radius: 32px;
      overflow: hidden;
      background-color: #f6f6f6;
      width: 100%;
    }

    .card-inner { display: flex; flex-direction: row; min-height: 420px; }
    .flex-row-reverse .card-inner { flex-direction: row-reverse; }
    .col-lg-6 { flex: 0 0 50%; max-width: 50%; }

    .card-text-side {
      display: flex; flex-direction: column; justify-content: center;
      gap: 12px; padding: 40px;
    }
    .card-title {
      font-family: 'Inter', sans-serif; font-size: clamp(26px, 3vw, 36px);
      font-weight: 800; color: #1c1c1c; margin: 0; line-height: 1.2;
    }
    .card-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 4px; }
    .card-tag {
      display: inline-block; padding: 6px 16px; background: #a3e635; color: #1a2e05;
      font-size: 12px; font-weight: 700; border-radius: 20px; text-transform: uppercase;
    }
    .card-desc { font-size: 15px; color: #4b5563; line-height: 1.7; margin: 8px 0 0; }
    .card-btn {
      display: inline-flex; align-items: center; gap: 9px; padding: 11px 18px;
      border-radius: 999px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600;
      letter-spacing: 0.5px; text-transform: uppercase; color: #fff; text-decoration: none;
      background: rgba(17,24,39,0.1); border: 1px solid rgba(17,24,39,0.3);
      transition: all 0.3s ease; width: fit-content; margin-top: 16px;
    }
    .card-btn .arrow-ring {
      display: inline-flex; align-items: center; justify-content: center;
      width: 24px; height: 24px; border-radius: 50%; background: #111827;
      color: #fff; font-size: 10px; transition: all 0.35s ease;
    }
    .card-btn:hover { color: #111827; background: #f4a637; border-color: #f4a637; gap: 13px; box-shadow: 0 10px 30px -8px rgba(244,166,55,0.4); }
    .card-btn:hover .arrow-ring { background: #111827; color: #f4a637; transform: translateX(2px) rotate(-8deg); }

    .card-img-side {
      position: relative; overflow: hidden; background: #e5e7eb;
      border-radius: 2rem; margin: 10px; display: flex; align-items: center; justify-content: center;
    }
    .card-img-side img { width: 100%; height: 100%; object-fit: cover; min-height: 380px; }

    .prod-empty { text-align: center; padding: 80px 24px; background: #f6f6f6; border-radius: 2rem; }
    .prod-empty h3 { font-family: 'Playfair Display', serif; font-size: 22px; color: #111827; margin-bottom: 8px; }
    .prod-empty p { color: #6b7280; font-size: 15px; }

    .prod-cta {
      background: linear-gradient(135deg, #0c1a3d 0%, #0a0f1e 100%);
      padding: 70px 24px; text-align: center; position: relative; overflow: hidden; margin-top: 60px;
    }
    .prod-cta::before {
      content: ''; position: absolute; inset: 0;
      background-image: url("{{ asset('frontend/assets/images/about.png') }}");
      background-size: cover; background-position: center; opacity: 0.12;
    }
    .prod-cta-inner { position: relative; z-index: 1; max-width: 650px; margin: 0 auto; }
    .prod-cta h2 { font-family: 'Playfair Display', serif; font-size: clamp(26px, 3.5vw, 38px); font-weight: 800; color: #fff; margin-bottom: 16px; }
    .prod-cta h2 span { color: #f4a637; }
    .prod-cta p { font-size: 16px; color: rgba(255,255,255,0.8); margin-bottom: 32px; line-height: 1.7; }
    .prod-cta-btn {
      display: inline-flex; align-items: center; gap: 10px; background: #f4a637;
      color: #fff; padding: 15px 32px; border-radius: 8px; font-size: 15px;
      font-weight: 600; text-decoration: none; transition: all 0.35s ease;
    }
    .prod-cta-btn:hover { background: #2563eb; color: #fff; transform: translateY(-2px); box-shadow: 0 12px 30px -8px rgba(37,99,235,0.4); }

    @media (max-width: 991px) {
      .col-lg-6 { flex: 0 0 100% !important; max-width: 100% !important; }
      .card-inner { flex-direction: column !important; min-height: auto !important; }
      .stacking-card { position: relative !important; top: auto !important; overflow: visible !important; }
      .card-img-side img { min-height: 200px !important; }
      .card-text-side { padding: 24px !important; }
      .row { margin-left: 0 !important; margin-right: 0 !important; }
      .whitebg { padding: 0.75rem !important; }
      .gx-4 > [class*="col-"] { padding-left: 0.75rem !important; padding-right: 0.75rem !important; }
    }
    @media (max-width: 768px) {
      .prod-hero { height: 240px; }
      .prod-header h2 { font-size: clamp(22px, 6vw, 32px); }
      .card-text-side { padding: 16px !important; }
      .card-title { font-size: 20px !important; }
      .card-desc { font-size: 14px !important; }
      .prod-section { padding: 80px 0 60px !important; }
      .prod-container { padding: 0 12px !important; }
    }
  </style>
</head>

<body class="no-hero">
  @include('frontend.layout.headerNav')

  <section class="prod-section" style="padding-top: 100px;">
    <div class="prod-container">
      <div class="prod-header">
        <div class="prod-badge">Our Products</div>
        <h2>Explore Our Products</h2>
        <p>Digital products and solutions engineered with precision to help your business grow and thrive.</p>
      </div>

      <div class="stacking-cards-container">
        <div id="case-studies-container">
          @forelse($products as $product)
            <div class="row gx-4 mt-4 whitebg stacking-card stackIndex-{{ $loop->index }} {{ $loop->index % 2 != 0 ? 'flex-row-reverse' : '' }}">
              <div class="col-lg-6 p-0">
                <div class="card-inner">
                  <div class="card-text-side">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <div class="card-tags">
                      @foreach(explode(',', $product->category->name ?? 'Product') as $tag)
                        <span class="card-tag">{{ trim($tag) }}</span>
                      @endforeach
                    </div>
                    <p class="card-desc">{{ Str::limit(strip_tags($product->description), 250) }}</p>
                    <a href="{{ $product->product_url }}" target="_blank" class="card-btn">
                      View Demo <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 p-0">
                <div class="card-inner">
                  <div class="card-img-side">
                    <a href="{{ $product->product_url }}" target="_blank">
                      <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy" onerror="this.style.display='none'">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <div class="whitebg prod-empty">
              <h3>No products yet</h3>
              <p>Check back later for new products.</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>
  </section>

  <section class="prod-cta">
    <div class="prod-cta-inner">
      <h2>Interested in a Product? <span>Let's Talk.</span></h2>
      <p>Reach out to learn more about our solutions or request a demo.</p>
      <a href="{{ url('/contact') }}" class="prod-cta-btn">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </section>

  @include('frontend.layout.footer')
</body>
</html>
