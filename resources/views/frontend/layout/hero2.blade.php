<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
  .hero {
    position: relative;
    min-height: 70vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    margin-top: -72px;
    padding-top: 72px;
    font-family: 'Inter', sans-serif;
    background: linear-gradient(135deg, #e8eaf6 0%, #e3f0ff 30%, #dbeafe 60%, #c7d2fe 100%);
  }

  .hero::before {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(147,197,253,0.4) 0%, transparent 70%);
    top: -10%;
    right: 5%;
    z-index: 0;
    pointer-events: none;
  }

  .hero::after {
    content: '';
    position: absolute;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(196,181,253,0.25) 0%, transparent 70%);
    bottom: -5%;
    left: 10%;
    z-index: 0;
    pointer-events: none;
  }

  .hero-swiper {
    position: relative;
    z-index: 4;
    width: 100%;
  }
  .hero .swiper-slide {
    min-height: 70vh;
    display: flex;
    align-items: center;
  }
  .hero .swiper-pagination {
    bottom: 40px !important;
  }
  .hero .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background: #94a3b8;
    opacity: 0.5;
    transition: all 0.3s;
  }
  .hero .swiper-pagination-bullet-active {
    background: #2563eb;
    opacity: 1;
    width: 12px;
    height: 12px;
  }

  .hero-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 48px;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
  }

  .hero-content {
    position: relative;
    z-index: 2;
  }

  .hero-title {
    font-family: 'Inter', sans-serif;
    font-size: clamp(32px, 4.2vw, 52px);
    font-weight: 800;
    color: #1e293b;
    line-height: 1.15;
    letter-spacing: -0.03em;
    margin: 0 0 24px;
  }

  .hero-desc {
    color: #475569;
    font-size: 15px;
    line-height: 1.8;
    margin: 0 0 36px;
    max-width: 480px;
  }

  .hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 32px;
    background: #111827;
    color: #f4a637;
    font-family: 'Playfair Display', serif;
    font-size: 14px;
    font-weight: 700;
    border-radius: 8px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
  }
  .hero-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
    transition: left 0.5s;
  }
  .hero-btn:hover::before {
    left: 100%;
  }
  .hero-btn:hover {
    background: #1e3a8a;
    color: #f4a637;
    transform: translateY(-3px);
    box-shadow: 0 12px 36px rgba(30, 58, 138, 0.3);
  }
  .hero-btn i {
    font-size: 12px;
    transition: transform 0.3s;
  }
  .hero-btn:hover i {
    transform: translateX(4px);
  }

  .hero-img-wrap {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .hero-img-wrap img {
    width: 100%;
    max-width: 520px;
    height: auto;
    object-fit: contain;
    border-radius: 16px;
    transition: transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
  }
  .swiper-slide-active .hero-img-wrap img {
    animation: heroImgIn 0.8s ease forwards;
  }
  @keyframes heroImgIn {
    from { opacity: 0; transform: scale(0.95) translateX(20px); }
    to { opacity: 1; transform: scale(1) translateX(0); }
  }

  .swiper-slide-active .hero-content {
    animation: heroContentIn 0.7s 0.2s ease forwards;
  }
  @keyframes heroContentIn {
    from { opacity: 0; transform: translateY(24px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @media (max-width: 900px) {
    .hero { min-height: auto; padding: 100px 0 60px; }
    .hero .swiper-slide { min-height: auto; }
    .hero-container {
      grid-template-columns: 1fr;
      padding: 0 24px;
      text-align: center;
      gap: 30px;
    }
    .hero-desc { margin-left: auto; margin-right: auto; }
    .hero-img-wrap { order: -1; }
    .hero-img-wrap img { max-width: 320px; }
    .hero .swiper-pagination { bottom: 20px !important; }
  }
</style>

<div class="hero">
  <div class="hero-swiper">
    <div class="swiper-wrapper">
      @forelse($sliders as $slide)
      <div class="swiper-slide">
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="hero-title">{{ $slide->title ?? 'Crafting Digital Excellence From Dhaka to the World' }}</h1>
            @if ($slide->description ?? false)
            <p class="hero-desc">{!! $slide->description !!}</p>
            @else
            <p class="hero-desc">We turn bold ideas into powerful software products. With a passionate team of engineers, designers, and strategists — we build solutions that scale, perform, and inspire.</p>
            @endif
            <a href="{{ url('/contact') }}" class="hero-btn">
              {{ $slide->button_text ?? "Get a Free Demo" }} <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="hero-img-wrap">
            @if(!empty($slide->image) && file_exists(public_path('storage/' . $slide->image)))
              <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title ?? 'Hero' }}">
            @else
              <img src="{{ asset('frontend/assets/images/Self-Serving.webp') }}" alt="Hero">
            @endif
          </div>
        </div>
      </div>
      @empty
      <div class="swiper-slide">
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="hero-title">Build Bold. Scale Fearlessly.</h1>
            <p class="hero-desc">From ideation to deployment, we craft high-performance software that fuels growth. Partner with a team that turns complex challenges into elegant, revenue-driving digital experiences.</p>
            <a href="{{ url('/contact') }}" class="hero-btn">
                  Let's Talk <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="hero-img-wrap">
            <img src="{{ asset('frontend/assets/images/Self-Serving.webp') }}" alt="Next-Gen Outsourcing Solutions">
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="hero-title">Intelligent Automation Meets Human Creativity</h1>
            <p class="hero-desc">Leverage AI-driven insights and machine learning pipelines to unlock hidden efficiencies. We build smart systems that learn, adapt, and evolve — so your business stays ahead of the curve.</p>
            <a href="{{ url('/contact') }}" class="hero-btn">
             Let's Talk <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="hero-img-wrap">
            <img src="{{ asset('frontend/assets/images/AI-Powered.webp') }}" alt="AI-Powered Platform">
          </div>
        </div>
      </div>
      @endforelse
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  new Swiper('.hero-swiper', {
    loop: true,
    speed: 800,
    autoplay: { delay: 5000, disableOnInteraction: false },
    effect: 'fade',
    fadeEffect: { crossFade: true },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
});
</script>
