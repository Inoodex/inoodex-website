<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.header')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
  /* ===== STANDARD CLEAN DESIGN ===== */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background: #05080f;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    color: #e2e8f0;
    line-height: 1.6;
  }

  /* ===== GLOW ORBS ===== */
  .glow-orb {
    position: fixed;
    border-radius: 50%;
    filter: blur(120px);
    pointer-events: none;
    z-index: 0;
  }

  .glow-orb-1 {
    width: 500px;
    height: 500px;
    top: -15%;
    right: -10%;
    background: rgba(37, 99, 235, 0.05);
  }

  .glow-orb-2 {
    width: 400px;
    height: 400px;
    bottom: -15%;
    left: -10%;
    background: rgba(124, 58, 237, 0.04);
  }

  .glow-orb-3 {
    width: 350px;
    height: 350px;
    top: 40%;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(34, 197, 94, 0.025);
  }

  /* ===== CONTAINER ===== */
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* ===== HERO SECTION ===== */
  .hero-section {
    padding: 120px 0 80px;
    position: relative;
    z-index: 1;
    text-align: center;
  }

  .hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.06);
    padding: 6px 20px;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 600;
    color: #60a5fa;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 20px;
  }

  .hero-badge i {
    margin-right: 6px;
  }

  .hero-title {
    font-size: 52px;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: -2px;
    line-height: 1.1;
    margin-bottom: 16px;
  }

  .hero-title span {
    background: linear-gradient(135deg, #60a5fa, #a78bfa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .hero-subtitle {
    font-size: 18px;
    color: #94a3b8;
    max-width: 560px;
    margin: 0 auto 32px;
    line-height: 1.8;
  }

  .hero-subtitle .highlight-blue {
    color: #60a5fa;
    font-weight: 500;
  }

  .hero-subtitle .highlight-purple {
    color: #a78bfa;
    font-weight: 500;
  }

  .hero-subtitle .highlight-green {
    color: #34d399;
    font-weight: 500;
  }

  .hero-actions {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 14px;
  }

  .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 32px;
    background: linear-gradient(135deg, #2563eb, #7c3aed);
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(37, 99, 235, 0.2);
  }

  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(37, 99, 235, 0.3);
  }

  .btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 28px;
    color: #94a3b8;
    font-size: 15px;
    font-weight: 500;
    border-radius: 50px;
    text-decoration: none;
    border: 1px solid rgba(255, 255, 255, 0.06);
    transition: all 0.3s ease;
  }

  .btn-secondary:hover {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.15);
  }

  /* ===== PRODUCTS SECTION ===== */
  .products-section {
    padding: 40px 0 80px;
    position: relative;
    z-index: 1;
  }

  .section-header {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    justify-content: space-between;
    margin-bottom: 40px;
    gap: 16px;
  }

  .section-header .label {
    font-size: 12px;
    font-weight: 600;
    color: #60a5fa;
    text-transform: uppercase;
    letter-spacing: 2px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .section-header .label .line {
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, #60a5fa, transparent);
  }

  .section-header h2 {
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: -0.5px;
  }

  .section-header h2 span {
    background: linear-gradient(135deg, #60a5fa, #a78bfa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .section-header .count-badge {
    font-size: 14px;
    color: #64748b;
    background: rgba(255, 255, 255, 0.03);
    padding: 6px 18px;
    border-radius: 50px;
    border: 1px solid rgba(255, 255, 255, 0.04);
  }

  .section-header .count-badge i {
    margin-right: 6px;
    color: #60a5fa;
  }

  /* ===== PRODUCT GRID ===== */
  .product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }

  /* ===== PRODUCT CARD ===== */
  .product-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s ease;
    position: relative;
  }

  .product-card:hover {
    transform: translateY(-8px);
    border-color: rgba(37, 99, 235, 0.15);
    background: rgba(255, 255, 255, 0.04);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
  }

  .product-card .image-wrap {
    position: relative;
    overflow: hidden;
    background: #0a0e1a;
    height: 260px;
  }

  .product-card .image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
  }

  .product-card:hover .image-wrap img {
    transform: scale(1.05);
  }

  .product-card .image-wrap .overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(5, 8, 15, 0.7));
    pointer-events: none;
  }

  .product-card .category-tag {
    position: absolute;
    top: 16px;
    left: 16px;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(8px);
    padding: 4px 14px;
    border-radius: 50px;
    font-size: 10px;
    font-weight: 700;
    color: #60a5fa;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: 1px solid rgba(37, 99, 235, 0.1);
  }

  .product-card .status-tag {
    position: absolute;
    top: 16px;
    right: 16px;
    background: rgba(34, 197, 94, 0.1);
    backdrop-filter: blur(8px);
    padding: 4px 14px;
    border-radius: 50px;
    font-size: 10px;
    font-weight: 600;
    color: #34d399;
    border: 1px solid rgba(34, 197, 94, 0.1);
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .product-card .status-tag .dot {
    width: 6px;
    height: 6px;
    background: #34d399;
    border-radius: 50%;
    display: inline-block;
  }

  .product-card .card-body {
    padding: 22px 24px 24px;
  }

  .product-card .card-body h3 {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 8px;
    letter-spacing: -0.3px;
  }

  .product-card .card-body h3 a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .product-card .card-body h3 a:hover {
    color: #60a5fa;
  }

  .product-card .card-body p {
    font-size: 14px;
    color: #94a3b8;
    line-height: 1.7;
    margin-bottom: 16px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .product-card .card-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 12px;
    padding-top: 16px;
    border-top: 1px solid rgba(255, 255, 255, 0.04);
  }

  .product-card .btn-demo {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 20px;
    background: linear-gradient(135deg, #2563eb, #7c3aed);
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .product-card .btn-demo:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.25);
  }

  .product-card .meta {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 12px;
    color: #475569;
  }

  .product-card .meta span {
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .product-card .meta .divider {
    width: 1px;
    height: 14px;
    background: rgba(255, 255, 255, 0.05);
  }

  /* ===== EMPTY STATE ===== */
  .empty-state {
    text-align: center;
    padding: 80px 0;
    grid-column: 1 / -1;
  }

  .empty-state .icon-wrap {
    display: inline-block;
    padding: 24px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    margin-bottom: 16px;
  }

  .empty-state .icon-wrap i {
    font-size: 40px;
    color: #334155;
  }

  .empty-state h3 {
    font-size: 20px;
    color: #94a3b8;
    margin-bottom: 6px;
  }

  .empty-state p {
    color: #64748b;
    font-size: 15px;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1024px) {
    .product-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
    }

    .product-card .image-wrap {
      height: 230px;
    }

    .hero-title {
      font-size: 42px;
    }
  }

  @media (max-width: 768px) {
    .hero-section {
      padding: 100px 0 60px;
    }

    .hero-title {
      font-size: 34px;
    }

    .hero-subtitle {
      font-size: 16px;
    }

    .section-header h2 {
      font-size: 26px;
    }

    .product-card .image-wrap {
      height: 210px;
    }

    .product-card .card-body {
      padding: 18px 18px 20px;
    }

    .product-card .card-body h3 {
      font-size: 16px;
    }
  }

  @media (max-width: 640px) {
    .product-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }

    .hero-title {
      font-size: 28px;
    }

    .hero-section {
      padding: 80px 0 40px;
    }

    .btn-primary,
    .btn-secondary {
      width: 100%;
      justify-content: center;
    }

    .section-header {
      flex-direction: column;
      align-items: flex-start;
    }

    .section-header .count-badge {
      align-self: flex-start;
    }

    .product-card .image-wrap {
      height: 200px;
    }

    .product-card .card-footer {
      flex-direction: column;
      align-items: stretch;
    }

    .product-card .btn-demo {
      justify-content: center;
    }
  }

  @media (max-width: 400px) {
    .container {
      padding: 0 14px;
    }

    .hero-title {
      font-size: 24px;
    }

    .product-card .image-wrap {
      height: 180px;
    }
  }

  /* ===== SCROLLBAR ===== */
  ::-webkit-scrollbar {
    width: 5px;
  }

  ::-webkit-scrollbar-track {
    background: #05080f;
  }

  ::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg, #2563eb, #7c3aed);
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg, #3b82f6, #8b5cf6);
  }
  </style>
</head>

<body>

  <!-- Glow Orbs -->
  <div class="glow-orb glow-orb-1"></div>
  <div class="glow-orb glow-orb-2"></div>
  <div class="glow-orb glow-orb-3"></div>

  @include('layout.headerNav')

  <!-- ===== HERO SECTION ===== -->
  <section class="hero-section">
    <div class="container">

      <div class="hero-badge">
        <i class="fa-regular fa-star"></i> Premium Collection
      </div>

      <h1 class="hero-title">
        Our <span>Products</span>
      </h1>

      <p class="hero-subtitle">
        Discover our premium collection of
        <span class="highlight-blue">digital products</span>,
        <span class="highlight-purple">web applications</span> and
        <span class="highlight-green">innovative solutions</span>
        crafted with precision.
      </p>

    </div>
  </section>

  <!-- ===== PRODUCTS SECTION ===== -->
  <section id="products" class="products-section">
    <div class="container">

      <!-- Section Header -->
      <div class="section-header">
        <div>
          <div class="label">
            <i class="fa-regular fa-grid-2"></i> Featured Products
            <span class="line"></span>
          </div>
          <h2>All <span>Products</span></h2>
        </div>
        <div class="count-badge">
          <i class="fa-regular fa-layer-group"></i> {{ $products->count() }} items
        </div>
      </div>

      <!-- Product Grid -->
      <div class="product-grid">

        @forelse ($products as $product)

        <div class="product-card">

          <!-- Image -->
          <div class="image-wrap">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" loading="lazy">
            <div class="overlay"></div>

            <!-- Category Tag -->
            <span class="category-tag">
              <i class="fa-regular fa-folder-open" style="margin-right:4px;"></i>
              {{ $product->category->name ?? 'Uncategorized' }}
            </span>

            <!-- Status Tag -->
            <span class="status-tag">
              <span class="dot"></span> Live
            </span>
          </div>

          <!-- Content -->
          <div class="card-body">
            <h3>
              <a href="{{ $product->product_url }}" target="_blank">
                {{ $product->title }}
              </a>
            </h3>
            <p>{{ Str::limit(strip_tags($product->description), 110) }}</p>

            <!-- Footer -->
            <div class="card-footer">
              <a href="{{ $product->product_url }}" target="_blank" class="btn-demo">
                <i class="fa-regular fa-eye"></i> View Product
                <i class="fa-solid fa-arrow-right" style="font-size:10px;"></i>
              </a>
              <div class="meta">
                <span><i class="fa-regular fa-heart"></i> 124</span>
                <span class="divider"></span>
                <span><i class="fa-regular fa-comment"></i> 24</span>
              </div>
            </div>
          </div>

        </div>

        @empty

        <!-- Empty State -->
        <div class="empty-state">
          <div class="icon-wrap">
            <i class="fa-regular fa-box-open"></i>
          </div>
          <h3>No Products Found</h3>
          <p>Check back later for new products.</p>
        </div>

        @endforelse

      </div>

    </div>
  </section>

  @include('layout.footer')

</body>

</html>