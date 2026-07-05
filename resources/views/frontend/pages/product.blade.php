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
    padding: 120px 0 60px;
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
    max-width: 640px;
    margin: 0 auto 0;
    line-height: 1.8;
    font-weight: 400;
  }

  /* ===== FILTER SECTION ===== */
  .filter-section {
    padding: 30px 0 40px;
    position: relative;
    z-index: 1;
  }

  .filter-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 20px 24px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 16px;
  }

  .filter-categories {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
  }

  .filter-categories .label {
    font-size: 12px;
    font-weight: 600;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-right: 4px;
  }

  .filter-categories a {
    padding: 6px 16px;
    font-size: 13px;
    font-weight: 500;
    color: #94a3b8;
    border-radius: 50px;
    text-decoration: none;
    border: 1px solid transparent;
    transition: all 0.3s ease;
  }

  .filter-categories a:hover {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.08);
  }

  .filter-categories a.active {
    background: rgba(37, 99, 235, 0.1);
    color: #60a5fa;
    border-color: rgba(37, 99, 235, 0.15);
  }

  .filter-actions {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .filter-actions select {
    padding: 8px 16px;
    background: rgba(255, 255, 255, 0.03);
    color: #94a3b8;
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 50px;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
  }

  .filter-actions select:focus {
    border-color: rgba(37, 99, 235, 0.3);
  }

  .filter-actions select option {
    background: #0a0e1a;
    color: #e2e8f0;
  }

  .filter-actions .btn-clear {
    padding: 8px 18px;
    font-size: 13px;
    font-weight: 500;
    color: #64748b;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .filter-actions .btn-clear:hover {
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.1);
  }

  .filter-actions .btn-clear i {
    margin-right: 4px;
  }

  /* ===== RESULT COUNT ===== */
  .result-count {
    padding: 0 0 24px;
    position: relative;
    z-index: 1;
  }

  .result-count span {
    font-size: 14px;
    color: #64748b;
  }

  .result-count span strong {
    color: #ffffff;
    font-weight: 600;
  }

  /* ===== PRODUCTS SECTION ===== */
  .products-section {
    padding: 0 0 80px;
    position: relative;
    z-index: 1;
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
    height: 240px;
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
    padding: 20px 22px 22px;
  }

  .product-card .card-body h3 {
    font-size: 17px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 6px;
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

  .product-card .card-body .price {
    font-size: 18px;
    font-weight: 700;
    color: #34d399;
    margin-bottom: 12px;
    display: block;
  }

  .product-card .card-body p {
    font-size: 14px;
    color: #94a3b8;
    line-height: 1.7;
    margin-bottom: 14px;
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
    gap: 10px;
    padding-top: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.04);
  }

  .product-card .btn-demo {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 18px;
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
    gap: 12px;
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
      height: 220px;
    }

    .hero-title {
      font-size: 42px;
    }

    .filter-wrapper {
      flex-direction: column;
      align-items: flex-start;
    }

    .filter-actions {
      width: 100%;
      flex-wrap: wrap;
    }

    .filter-actions select {
      flex: 1;
      min-width: 140px;
    }
  }

  @media (max-width: 768px) {
    .hero-section {
      padding: 100px 0 40px;
    }

    .hero-title {
      font-size: 34px;
    }

    .hero-subtitle {
      font-size: 16px;
    }

    .filter-section {
      padding: 20px 0 30px;
    }

    .filter-wrapper {
      padding: 16px 18px;
    }

    .filter-categories {
      gap: 4px;
    }

    .filter-categories a {
      padding: 4px 12px;
      font-size: 12px;
    }

    .product-card .image-wrap {
      height: 200px;
    }

    .product-card .card-body {
      padding: 16px 16px 18px;
    }

    .product-card .card-body h3 {
      font-size: 15px;
    }

    .product-card .card-body .price {
      font-size: 16px;
    }
  }

  @media (max-width: 640px) {
    .product-grid {
      grid-template-columns: 1fr;
      gap: 18px;
    }

    .hero-title {
      font-size: 28px;
    }

    .hero-section {
      padding: 80px 0 30px;
    }

    .filter-actions {
      flex-direction: column;
      width: 100%;
    }

    .filter-actions select {
      width: 100%;
      min-width: unset;
    }

    .filter-actions .btn-clear {
      width: 100%;
      text-align: center;
    }

    .filter-categories {
      gap: 6px;
    }

    .filter-categories .label {
      width: 100%;
      margin-bottom: 2px;
    }

    .product-card .image-wrap {
      height: 190px;
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
      height: 170px;
    }

    .filter-wrapper {
      padding: 14px;
    }

    .filter-categories a {
      font-size: 11px;
      padding: 4px 10px;
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
        Our <span> Products</span>
      </h1>

      <p class="hero-subtitle" style="font-normal: 300;">
        Discover our premium collection of digital products, web applications and innovative solutions crafted with
        precision.
      </p>

    </div>
  </section>

  <!-- ===== FILTER SECTION ===== -->
  <section class="filter-section">
    <div class="container">
      <div class="filter-wrapper">



        <!-- ===== RESULT COUNT ===== -->
        {{-- <div class="result-count">
          <div class="container">
            <span>Showing <strong>{{ $products->count() }}</strong> themes</span>
          </div>
        </div> --}}


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
              {{-- <span class="price">$30.00</span> --}}
              <p>{{ Str::limit(strip_tags($product->description), 80) }}</p>

              <!-- Footer -->
              <div class="card-footer">
                <a href="{{ $product->product_url }}" target="_blank" class="btn-demo">
                  <i class="fa-regular fa-eye"></i> Live Demo
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
            <h3>No Themes Found</h3>
            <p>Check back later for new themes.</p>
          </div>

          @endforelse

        </div>

      </div>
  </section>

  @include('layout.footer')

</body>

</html>