<!DOCTYPE html>
<html lang="zxx">
@include('frontend.layout.header')

<body style="background:#ffffff;color:#111827;margin:0;padding:0;">

  @include('frontend.layout.headerNav')

  <!-- Hero Section -->
  <div class="blog-detail-hero">
    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="blog-detail-hero-bg">
    <div class="blog-detail-hero-overlay"></div>
    
  </div>

  <!-- Main Content -->
  <div class="blog-detail-body">
    <div class="blog-detail-container">

      <!-- Left Column -->
      <div class="blog-detail-main">
        <!-- Featured Image -->
        <div class="blog-detail-featured">
          <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
          <div class="blog-detail-date-badge">
            <span class="day">{{ $blog->created_at ? $blog->created_at->format('d') : '08' }}</span>
            <span class="month">{{ $blog->created_at ? $blog->created_at->format('M') : 'Aug' }}</span>
          </div>
        </div>

        <!-- Meta -->
        <div class="blog-detail-meta">
          <span><i class="fa-solid fa-bookmark"></i> {{ $blog->category ?? 'Technology' }}</span>
          <span><i class="fa-solid fa-user"></i> Inoodex</span>
          <span><i class="fa-regular fa-comment"></i> {{ $blog->comments_count ?? '0' }} Comments</span>
        </div>

        <!-- Title -->
        <h2 class="blog-detail-title">{{ $blog->title }}</h2>

        <!-- Post Body -->
        <div class="blog-detail-post-body">
          {!! $blog->body !!}
        </div>

        <!-- Tags & Share -->
        <div class="blog-detail-footer">

          <div class="blog-detail-share">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="blog-detail-sidebar">
        <!-- Search -->
        <div class="sidebar-search">
          <input type="text" placeholder="Write your keyword...">
          <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>

        <!-- Popular Posts -->
        <div class="sidebar-widget">
          <h3 class="sidebar-title">Popular Posts</h3>
          @if(isset($related) && $related->count() > 0)
            @foreach ($related->take(3) as $item)
            <a href="{{ route('blogs.show', $item->slug) }}" class="popular-post">
              <div class="popular-post-img">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
              </div>
              <div class="popular-post-info">
                <h4>{{ $item->title }}</h4>
                <span><i class="fa-regular fa-calendar"></i> {{ $item->created_at ? $item->created_at->format('M d, Y') : 'May 15, 2025' }}</span>
              </div>
            </a>
            @endforeach
          @endif
        </div>
      </div>

    </div>
  </div>

  @include('frontend.layout.footer')

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var revealEls = document.querySelectorAll('.blog-detail-featured, .blog-detail-meta, .blog-detail-title, .blog-detail-post-body, .blog-detail-footer, .sidebar-widget, .sidebar-search');
    if (!revealEls.length) return;
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('bd-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    revealEls.forEach(function(el) { observer.observe(el); });
  });
  </script>

</body>
</html>

<style>
/* Hero */
.blog-detail-hero {
  position: relative;
  height: 400px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #0a0000;
}
.blog-detail-hero-bg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.blog-detail-hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.30);
}
.blog-detail-hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
}
.blog-detail-hero-content h1 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 700;
  color: #ffffff;
  margin: 0 0 12px;
}
.breadcrumb {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}
.breadcrumb li {
  font-size: 14px;
  color: rgba(255,255,255,0.5);
}
.breadcrumb li a {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s;
}
.breadcrumb li a:hover {
  color: #e03e3e;
}
.breadcrumb li.active {
  color: rgba(255,255,255,0.7);
}
.breadcrumb li + li::before {
  content: '/';
  margin-right: 8px;
  color: rgba(255,255,255,0.3);
}

/* Body */
.blog-detail-body {
  padding: 60px 0 80px;
  background: #ffffff;
}
.blog-detail-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 1fr 340px;
  gap: 40px;
}

/* Main */
.blog-detail-featured {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  margin-bottom: 24px;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.blog-detail-featured.bd-visible {
  opacity: 1;
  transform: translateY(0);
}
.blog-detail-featured img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
}
.blog-detail-date-badge {
  position: absolute;
  top: 20px;
  left: 20px;
  background: #e03e3e;
  border-radius: 8px;
  padding: 10px 14px;
  text-align: center;
  line-height: 1.2;
}
.blog-detail-date-badge .day {
  display: block;
  font-size: 22px;
  font-weight: 700;
  color: #ffffff;
}
.blog-detail-date-badge .month {
  display: block;
  font-size: 12px;
  font-weight: 500;
  color: rgba(255,255,255,0.85);
  text-transform: uppercase;
}

/* Meta */
.blog-detail-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 16px;
  font-size: 14px;
  color: #6b7280;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.1s;
}
.blog-detail-meta.bd-visible {
  opacity: 1;
  transform: translateY(0);
}
.blog-detail-meta span {
  display: flex;
  align-items: center;
  gap: 6px;
}
.blog-detail-meta i {
  color: #e03e3e;
  font-size: 13px;
}

/* Title */
.blog-detail-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(24px, 3vw, 32px);
  font-weight: 700;
  color: #111827;
  line-height: 1.3;
  margin: 0 0 24px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.15s;
}
.blog-detail-title.bd-visible {
  opacity: 1;
  transform: translateY(0);
}

/* Post Body */
.blog-detail-post-body {
  font-size: 15px;
  line-height: 1.9;
  color: #4b5563;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.2s;
}
.blog-detail-post-body.bd-visible {
  opacity: 1;
  transform: translateY(0);
}
.blog-detail-post-body h1,
.blog-detail-post-body h2,
.blog-detail-post-body h3,
.blog-detail-post-body h4 {
  color: #111827;
  margin-top: 28px;
  margin-bottom: 12px;
}
.blog-detail-post-body p {
  margin-bottom: 18px;
}
.blog-detail-post-body img {
  border-radius: 10px;
  max-width: 100%;
}
.blog-detail-post-body blockquote {
  border-left: 4px solid #e03e3e;
  padding: 16px 24px;
  margin: 24px 0;
  background: rgba(224,62,62,0.03);
  border-radius: 0 10px 10px 0;
  color: #374151;
  font-style: italic;
}

/* Footer */
.blog-detail-footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  margin-top: 40px;
  padding-top: 24px;
  border-top: 1px solid rgba(0,0,0,0.06);
  gap: 16px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.25s;
}
.blog-detail-footer.bd-visible {
  opacity: 1;
  transform: translateY(0);
}
.blog-detail-tags {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 8px;
}
.blog-detail-tags span {
  font-size: 14px;
  font-weight: 600;
  color: #111827;
}
.blog-detail-tags a {
  padding: 5px 14px;
  background: #f3f4f6;
  border-radius: 6px;
  color: #6b7280;
  font-size: 12px;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s;
}
.blog-detail-tags a:hover {
  background: #e03e3e;
  color: #ffffff;
}
.blog-detail-share {
  display: flex;
  gap: 8px;
}
.blog-detail-share a {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f3f4f6;
  color: #6b7280;
  font-size: 14px;
  text-decoration: none;
  transition: all 0.3s;
}
.blog-detail-share a:hover {
  background: #e03e3e;
  color: #ffffff;
}

/* Sidebar */
.sidebar-search {
  display: flex;
  background: #f9fafb;
  border: 1px solid rgba(0,0,0,0.06);
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 30px;
  opacity: 0;
  transform: translateX(30px);
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.1s;
}
.sidebar-search.bd-visible {
  opacity: 1;
  transform: translateX(0);
}
.sidebar-search input {
  flex: 1;
  padding: 12px 16px;
  border: none;
  background: transparent;
  font-size: 14px;
  color: #111827;
  outline: none;
}
.sidebar-search button {
  padding: 12px 18px;
  background: transparent;
  border: none;
  color: #9ca3af;
  cursor: pointer;
  transition: color 0.3s;
}
.sidebar-search button:hover {
  color: #e03e3e;
}

.sidebar-widget {
  opacity: 0;
  transform: translateX(30px);
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.2s;
}
.sidebar-widget.bd-visible {
  opacity: 1;
  transform: translateX(0);
}
.sidebar-title {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  font-weight: 700;
  color: #111827;
  margin: 0 0 20px;
  padding-bottom: 12px;
  border-bottom: 2px solid #e03e3e;
  display: inline-block;
}
.popular-post {
  display: flex;
  gap: 14px;
  padding: 14px 0;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  text-decoration: none;
  transition: all 0.3s;
}
.popular-post:last-child {
  border-bottom: none;
}
.popular-post:hover {
  padding-left: 6px;
}
.popular-post-img {
  width: 72px;
  height: 72px;
  border-radius: 10px;
  overflow: hidden;
  flex-shrink: 0;
}
.popular-post-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.popular-post:hover .popular-post-img img {
  transform: scale(1.08);
}
.popular-post-info h4 {
  font-size: 14px;
  font-weight: 600;
  color: #111827;
  line-height: 1.4;
  margin: 0 0 6px;
  transition: color 0.3s;
}
.popular-post:hover .popular-post-info h4 {
  color: #e03e3e;
}
.popular-post-info span {
  font-size: 12px;
  color: #9ca3af;
  display: flex;
  align-items: center;
  gap: 4px;
}
.popular-post-info span i {
  color: #e03e3e;
  font-size: 11px;
}

/* Responsive */
@media (max-width: 992px) {
  .blog-detail-container {
    grid-template-columns: 1fr;
  }
  .blog-detail-hero { height: 300px; }
}
@media (max-width: 640px) {
  .blog-detail-hero { height: 250px; }
  .blog-detail-featured img { height: 260px; }
  .blog-detail-meta { gap: 12px; }
  .blog-detail-footer { flex-direction: column; align-items: flex-start; }
}
</style>
