<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<style>
/* ====== THEMES WRAPPER ====== */
.themes-wrapper {
  padding: 80px 0;
  background: #f8f9fc;
}

/* ====== THEME CARD ====== */
.theme__card {
  background: #fff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
  transition: all 0.35s ease;
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
}

.theme__card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
}

/* ====== IMAGE ====== */
.theme__card figure {
  margin: 0;
  overflow: hidden;
  border-bottom: 1px solid #eee;
  flex-shrink: 0;
}

.theme__card img {
  width: 100%;
  height: 320px;
  /* Increased from 220px */
  object-fit: cover;
  transition: transform 0.5s ease;
  border-radius: 16px 16px 0 0;
}

.theme__card:hover img {
  transform: scale(1.08);
}

/* ====== CONTENT ====== */
.theme__content {
  padding: 22px 20px 30px;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.theme__title {
  margin-bottom: 12px;
}

.theme__title h2 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
  color: #1e1e2f;
}

.theme__title h2 a {
  color: inherit;
  text-decoration: none;
  transition: color 0.3s ease;
}

.theme__title h2 a:hover {
  color: #4e73df;
}

.theme__title span {
  font-size: 16px;
  font-weight: 700;
  color: #4e73df;
}

/* ====== DESCRIPTION ====== */
.theme__content p {
  font-size: 14px;
  color: #5f6368;
  line-height: 1.6;
  margin: 0;
}

/* ====== RESPONSIVE ====== */
@media (max-width: 992px) {
  .theme__card img {
    height: 260px;
  }
}

@media (max-width: 768px) {
  .theme__card img {
    height: 220px;
  }

  .theme__card {
    margin-bottom: 24px;
  }
}
</style>

<body>
  <!-- Header Start -->
  @include('layout.headerNav')

  <div class="theme-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mx-auto">
          <!-- Page Header Box Start -->
          <div class="theme-header-box">
            <h1 class="text-anime-style-3 mb-2">All Themes</h1>
            <p class="theme-description text-center">
              Explore our 180+ themes built with modern
              technologies and chose the right one for your
              project.
            </p>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <div class="themes-wrapper">
    <div class="container">
      <div class="row">
        @foreach ($themes as $theme)
        <!-- card item start -->
        <div class="col-lg-6 col-sm-6 col-xl-3 mb-4">
          <div class="theme__card">
            {{-- <figure class="image-anime"> --}}
            <a href="{{ $theme->demo_url }}" target="_blank" rel="noopener noreferrer">
              <img src="{{ asset('storage/' . $theme->image) }}" alt="{{ $theme->title }}">
            </a>
            {{-- </figure> --}}
            <div class="theme__content">
              <div class="theme__title d-flex justify-content-between align-items-center">
                <h2>
                  <a href="{{ $theme->demo_url }}" target="_blank" rel="noopener noreferrer">
                    {{ $theme->title }}
                  </a>
                </h2>

                {{-- <span>${{ number_format($theme->price, 2) }}</span> --}}
              </div>

            </div>
          </div>
        </div>
        <!-- card item end -->
        @endforeach
      </div>
    </div>
  </div>
  <!-- Footer Start -->
  @include('layout.footer')
</body>

</html>