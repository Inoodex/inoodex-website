<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.layout.header')
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { background: #fff; color: #111827; font-family: 'Inter', sans-serif; line-height: 1.6; }

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

    .prod-cards { display: flex; flex-direction: column; gap: 40px; }

    .prod-card {
      display: flex;
      flex-direction: row;
      background: #f6f6f6;
      border-radius: 24px;
      overflow: hidden;
      min-height: 400px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .prod-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }
    .prod-card.reverse {
      flex-direction: row-reverse;
    }

    .prod-card-img {
      flex: 0 0 50%;
      max-width: 50%;
      position: relative;
      overflow: hidden;
      background: #e5e7eb;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .prod-card-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      min-height: 400px;
      transition: transform 0.5s ease;
    }
    .prod-card:hover .prod-card-img img {
      transform: scale(1.04);
    }

    .prod-card-text {
      flex: 0 0 50%;
      max-width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 16px;
      padding: 48px 56px;
    }
    .prod-card-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(28px, 3vw, 40px);
      font-weight: 700;
      color: #111827;
      line-height: 1.2;
    }
    .prod-card-tags { display: flex; flex-wrap: wrap; gap: 10px; }
    .prod-card-tag {
      display: inline-block; padding: 6px 18px; background: #a3e635; color: #1a2e05;
      font-size: 12px; font-weight: 700; border-radius: 20px; text-transform: uppercase;
    }
    .prod-card-desc {
      font-size: 15px; color: #6b7280; line-height: 1.8;
    }
    .prod-card-btn {
      display: inline-flex; align-items: center; gap: 12px;
      padding: 14px 28px;
      background: #111827;
      color: #fff;
      font-family: 'Playfair Display', serif;
      font-size: 14px;
      font-weight: 600;
      border-radius: 999px;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      width: fit-content;
      margin-top: 8px;
    }
    .prod-card-btn i {
      font-size: 12px;
      transition: transform 0.3s ease;
    }
    .prod-card-btn:hover {
      background: #f4a637;
      color: #111827;
      transform: translateY(-2px);
      box-shadow: 0 10px 30px rgba(244,166,55,0.3);
    }
    .prod-card-btn:hover i {
      transform: translateX(4px);
    }

    .prod-empty { text-align: center; padding: 80px 24px; background: #f6f6f6; border-radius: 24px; }
    .prod-empty h3 { font-family: 'Playfair Display', serif; font-size: 22px; color: #111827; margin-bottom: 8px; }
    .prod-empty p { color: #6b7280; font-size: 15px; }

    .prod-cta {
      background: linear-gradient(135deg, #0c1a3d 0%, #0a0f1e 100%);
      padding: 70px 24px; text-align: center; position: relative; overflow: hidden; margin-top: 80px;
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
      .prod-card,
      .prod-card.reverse {
        flex-direction: column;
      }
      .prod-card-img,
      .prod-card-text {
        flex: 0 0 100%;
        max-width: 100%;
      }
      .prod-card-img img { min-height: 280px; }
      .prod-card-text { padding: 28px 24px; }
    }
    @media (max-width: 768px) {
      .prod-header h2 { font-size: clamp(24px, 6vw, 32px); }
      .prod-card-text { padding: 20px; }
      .prod-card-title { font-size: 24px; }
    }
  </style>
</head>

<body class="no-hero">
  @include('frontend.layout.headerNav')

  <section class="prod-section">
    <div class="prod-container">
      <div class="prod-header">
        <div class="prod-badge">Our Products</div>
        <h2>Explore Our Products</h2>
        <p>Digital products and solutions engineered with precision to help your business grow and thrive.</p>
      </div>

      <div class="prod-cards">
        @forelse($products as $product)
          <div class="prod-card {{ $loop->index % 2 != 0 ? 'reverse' : '' }}">
            <div class="prod-card-img">
              <a href="{{ $product->product_url }}" target="_blank">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy" onerror="this.style.display='none'">
              </a>
            </div>
            <div class="prod-card-text">
              <h3 class="prod-card-title">{{ $product->name }}</h3>
              <div class="prod-card-tags">
                @foreach(explode(',', $product->category->name ?? 'Product') as $tag)
                  <span class="prod-card-tag">{{ trim($tag) }}</span>
                @endforeach
              </div>
              <p class="prod-card-desc">{{ Str::limit(strip_tags($product->description), 250) }}</p>
              <a href="{{ $product->product_url }}" target="_blank" class="prod-card-btn">
                Case Study <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        @empty
          <div class="prod-empty">
            <h3>No products yet</h3>
            <p>Check back later for new products.</p>
          </div>
        @endforelse
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