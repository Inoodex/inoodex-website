<style>
.home-products {
  position: relative;
  background: #ffffff;
  padding: 60px 0 100px;
}
.home-products .hp-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}
.home-products .hp-header {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 48px;
}
.home-products .hp-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(244,166,55,0.08);
  border: 1px solid rgba(244,166,55,0.15);
  padding: 8px 20px;
  border-radius: 50px;
  font-size: 12px;
  font-weight: 600;
  color: #f4a637;
  letter-spacing: 2px;
  text-transform: uppercase;
  margin-bottom: 12px;
}
.home-products .hp-badge::before {
  content: '';
  width: 6px; height: 6px; border-radius: 50%; background: #f4a637;
}
.home-products .hp-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(28px, 3.5vw, 40px);
  font-weight: 700;
  color: #111827;
  line-height: 1.2;
}
.home-products .hp-view-all {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 15px 36px;
  background: #111827;
  color: #f4a637;
  font-family: 'Playfair Display', serif;
  font-size: 14px;
  font-weight: 700;
  border-radius: 8px;
  text-decoration: none;
  transition: all 0.3s ease;
  white-space: nowrap;
}
.home-products .hp-view-all:hover {
  background: #1e3a8a;
  transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(0,0,0,0.15);
}
.home-products .hp-view-all i { font-size: 11px; transition: transform 0.3s ease; }
.home-products .hp-view-all:hover i { transform: translateX(4px); }

.hp-stack-container { position: relative; }

.hp-whitebg {
  padding: 1.5rem;
  background-color: #f6f6f6;
  border-radius: 2rem;
  box-shadow: 0px -3px 2px 1px rgba(0,0,0,0.1);
}
.hp-row { display: flex; flex-wrap: wrap; margin-left: -0.75rem; margin-right: -0.75rem; }
.hp-gx-4 > [class*="col-"] { padding-left: 1.5rem; padding-right: 1.5rem; }
.hp-mt-4 { margin-top: 1.5rem !important; }
.hp-p-0 { padding: 0 !important; }

.hp-stacking-card {
  position: sticky;
  margin-bottom: 0;
  top: 220px;
  border-radius: 32px;
  overflow: hidden;
  background-color: #f6f6f6;
  width: 100%;
}
.hp-card-inner { display: flex; flex-direction: row; min-height: 420px; }
.hp-flex-reverse .hp-card-inner { flex-direction: row-reverse; }
.hp-col-6 { flex: 0 0 50%; max-width: 50%; }

.hp-card-text {
  display: flex; flex-direction: column; justify-content: center;
  gap: 12px; padding: 40px;
}
.hp-card-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(26px, 3vw, 36px);
  font-weight: 700; color: #1c1c1c; margin: 0; line-height: 1.2;
}
.hp-card-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 4px; }
.hp-card-tag {
  display: inline-block; padding: 6px 16px; background: #a3e635; color: #1a2e05;
  font-size: 12px; font-weight: 700; border-radius: 20px; text-transform: uppercase;
}
.hp-card-desc { font-size: 15px; color: #4b5563; line-height: 1.7; margin: 8px 0 0; }
.hp-card-btn {
  display: inline-flex; align-items: center; gap: 9px; padding: 11px 18px;
  border-radius: 999px; font-family: 'Playfair Display', serif; font-size: 12px; font-weight: 600;
  letter-spacing: 0.5px; text-transform: uppercase; color: #fff; text-decoration: none;
  background: rgba(17,24,39,0.1); border: 1px solid rgba(17,24,39,0.3);
  transition: all 0.3s ease; width: fit-content; margin-top: 16px;
}
.hp-card-btn .arrow-ring {
  display: inline-flex; align-items: center; justify-content: center;
  width: 24px; height: 24px; border-radius: 50%; background: #111827;
  color: #fff; font-size: 10px; transition: all 0.35s ease;
}
.hp-card-btn:hover { color: #111827; background: #f4a637; border-color: #f4a637; gap: 13px; box-shadow: 0 10px 30px -8px rgba(244,166,55,0.4); }
.hp-card-btn:hover .arrow-ring { background: #111827; color: #f4a637; transform: translateX(2px) rotate(-8deg); }

.hp-card-img {
  position: relative; overflow: hidden; background: #e5e7eb;
  border-radius: 2rem; margin: 10px; display: flex; align-items: center; justify-content: center;
}
.hp-card-img img { width: 100%; height: 100%; object-fit: cover; min-height: 380px; }

.hp-empty { text-align: center; padding: 80px 24px; background: #f6f6f6; border-radius: 2rem; }
.hp-empty h3 { font-family: 'Playfair Display', serif; font-size: 22px; color: #111827; margin-bottom: 8px; }
.hp-empty p { color: #6b7280; font-size: 15px; }

@media (max-width: 991px) {
  .hp-col-6 { flex: 0 0 100% !important; max-width: 100% !important; }
  .hp-card-inner { flex-direction: column !important; min-height: auto !important; }
  .hp-stacking-card { position: relative !important; top: auto !important; overflow: visible !important; }
  .hp-card-img img { min-height: 200px !important; }
  .hp-card-text { padding: 24px !important; }
  .hp-row { margin-left: 0 !important; margin-right: 0 !important; }
  .hp-whitebg { padding: 0.75rem !important; }
  .hp-gx-4 > [class*="col-"] { padding-left: 0.75rem !important; padding-right: 0.75rem !important; }
}
@media (max-width: 768px) {
  .home-products .hp-header { flex-direction: column; align-items: flex-start; gap: 16px; }
  .hp-card-text { padding: 16px !important; }
  .hp-card-title { font-size: 20px !important; }
}
</style>

<div class="home-products">
  <div class="hp-container">
    <div class="hp-header">
      <div>
        <div class="hp-badge">Our Products</div>
        <h2 class="hp-title">Explore Our Products</h2>
      </div>
      <a href="{{ url('/products') }}" class="hp-view-all">View All Products <i class="fas fa-chevron-right"></i></a>
    </div>

    <div class="hp-stack-container">
      @forelse($products->take(6) as $product)
        <div class="hp-row hp-gx-4 hp-mt-4 hp-whitebg hp-stacking-card {{ $loop->index % 2 != 0 ? 'hp-flex-reverse' : '' }}">
          <div class="hp-col-6 hp-p-0">
            <div class="hp-card-inner">
              <div class="hp-card-text">
                <h3 class="hp-card-title">{{ $product->name }}</h3>
                <div class="hp-card-tags">
                  @foreach(explode(',', $product->category->name ?? 'Product') as $tag)
                    <span class="hp-card-tag">{{ trim($tag) }}</span>
                  @endforeach
                </div>
                <p class="hp-card-desc">{{ Str::limit(strip_tags($product->description), 250) }}</p>
                <a href="{{ $product->product_url }}" target="_blank" class="hp-card-btn">
                  View Demo <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="hp-col-6 hp-p-0">
            <div class="hp-card-inner">
              <div class="hp-card-img">
                <a href="{{ $product->product_url }}" target="_blank">
                  <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy" onerror="this.style.display='none'">
                </a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="hp-whitebg hp-empty">
          <h3>No products yet</h3>
          <p>Check back later for new products.</p>
        </div>
      @endforelse
    </div>
  </div>
</div>
