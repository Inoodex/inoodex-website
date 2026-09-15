<style>
.latest-news {
  position: relative;
  background: #ffffff;
  padding: 60px 0 120px;
}

.blog-header {
  text-align: center;
  margin-bottom: 50px;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
  padding: 0 24px;
}

.blog-label {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: #f4a637;
  margin-bottom: 18px;
}
.blog-label::before, .blog-label::after {
  content: ''; width: 30px; height: 1.5px;
  background: linear-gradient(90deg, transparent, #f4a637); border-radius: 2px;
}
.blog-label::after { background: linear-gradient(90deg, #f4a637, transparent); }

.blog-heading {
  font-family: 'Playfair Display', serif;
  font-size: clamp(30px, 3.5vw, 44px);
  font-weight: 700; color: #111827; line-height: 1.15; margin: 0;
}
.blog-heading span { color: #f4a637; }

.blog-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  align-items: stretch;
}

.blog-card {
  background: #ffffff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  height: 100%;
}
.blog-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
}

.blog-card-top {
  padding: 28px 24px 20px;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.blog-card:nth-child(1) .blog-card-top { background: linear-gradient(135deg, #e03e3e, #ff6b6b); }
.blog-card:nth-child(2) .blog-card-top { background: linear-gradient(135deg, #7c3aed, #a78bfa); }
.blog-card:nth-child(3) .blog-card-top { background: linear-gradient(135deg, #2563eb, #60a5fa); }
.blog-card:nth-child(4) .blog-card-top { background: linear-gradient(135deg, #059669, #34d399); }
.blog-card:nth-child(5) .blog-card-top { background: linear-gradient(135deg, #d97706, #fbbf24); }
.blog-card:nth-child(6) .blog-card-top { background: linear-gradient(135deg, #dc2626, #f87171); }

.blog-card-category {
  display: inline-block;
  font-family: 'Playfair Display', serif;
  font-size: 16px;
  font-weight: 700;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.blog-card-body {
  padding: 20px 24px;
  flex: 1;
}
.blog-card-title {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  font-weight: 700;
  color: #111827;
  line-height: 1.3;
  margin-bottom: 10px;
}
.blog-card-desc {
  font-size: 14px;
  color: #6b7280;
  line-height: 1.7;
  margin: 0;
}

.blog-card-img {
  width: 100%;
  overflow: hidden;
}
.blog-card-img img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.blog-card:hover .blog-card-img img {
  transform: scale(1.05);
}

.blog-card-bottom {
  padding: 16px 24px 28px;
  margin-top: auto;
}
.blog-card-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  width: 100%;
  padding: 14px 24px;
  background: #f4a637;
  color: #111827;
  font-family: 'Playfair Display', serif;
  font-size: 14px;
  font-weight: 700;
  border-radius: 12px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.blog-card-btn i {
  font-size: 12px;
  transition: transform 0.3s ease;
}
.blog-card-btn:hover {
  background: #111827;
  color: #f4a637;
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}
.blog-card-btn:hover i {
  transform: translateX(4px);
}

@media (max-width: 1024px) {
  .blog-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
}
@media (max-width: 768px) {
  .blog-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }
  .blog-card-top { padding: 20px 20px 16px; }
  .blog-card-body { padding: 16px 20px; }
  .blog-card-title { font-size: 18px; }
  .blog-card-bottom { padding: 12px 20px 24px; }
}
</style>

<div class="latest-news">
  <div class="blog-header">
    <div class="blog-label">Latest Blog & Articles</div>
    <h2 class="blog-heading">The Latest <span>Insights</span> You Need To Know</h2>
  </div>

  <div class="blog-grid">
    @foreach ($blogs->take(6) as $blog)
      <div class="blog-card">
        <div class="blog-card-top">
          <span class="blog-card-category">{{ $blog->category ?? 'Technology' }}</span>
        </div>
        <div class="blog-card-body">
          <h3 class="blog-card-title">{{ $blog->title }}</h3>
          <p class="blog-card-desc">{{ Str::limit(strip_tags($blog->body ?? $blog->description ?? ''), 120) }}</p>
        </div>
        <div class="blog-card-img">
          <a href="{{ route('blogs.show', $blog->slug) }}">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" loading="lazy">
          </a>
        </div>
        <div class="blog-card-bottom">
          <a href="{{ route('blogs.show', $blog->slug) }}" class="blog-card-btn">
            Read More <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    @endforeach
  </div>
</div>
