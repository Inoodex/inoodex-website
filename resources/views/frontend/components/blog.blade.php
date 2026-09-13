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

/* Stacking cards - same as products */
.blog-stack-container { max-width: 1200px; margin: 0 auto; padding: 0 24px; position: relative; }

.blog-whitebg {
  padding: 1.5rem;
  background-color: #f6f6f6;
  border-radius: 2rem;
  box-shadow: 0px -3px 2px 1px rgba(0,0,0,0.1);
}

.blog-row { display: flex; flex-wrap: wrap; margin-left: -0.75rem; margin-right: -0.75rem; }
.blog-gx-4 > [class*="col-"] { padding-left: 1.5rem; padding-right: 1.5rem; }
.blog-mt-4 { margin-top: 1.5rem !important; }
.blog-p-0 { padding: 0 !important; }

.blog-stacking-card {
  position: sticky;
  margin-bottom: 0;
  top: 220px;
  border-radius: 32px;
  overflow: hidden;
  background-color: #f6f6f6;
  width: 100%;
}

.blog-card-inner { display: flex; flex-direction: row; min-height: 420px; }
.blog-flex-reverse .blog-card-inner { flex-direction: row-reverse; }
.blog-col-6 { flex: 0 0 50%; max-width: 50%; }

.blog-card-text {
  display: flex; flex-direction: column; justify-content: center;
  gap: 12px; padding: 40px;
}
.blog-card-title {
  font-family: 'Inter', sans-serif; font-size: clamp(26px, 3vw, 36px);
  font-weight: 800; color: #1c1c1c; margin: 0; line-height: 1.2;
}
.blog-card-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 4px; }
.blog-card-tag {
  display: inline-block; padding: 6px 16px; background: #a3e635; color: #1a2e05;
  font-size: 12px; font-weight: 700; border-radius: 20px; text-transform: uppercase;
}
.blog-card-desc { font-size: 15px; color: #4b5563; line-height: 1.7; margin: 8px 0 0; }
.blog-card-btn {
  display: inline-flex; align-items: center; gap: 9px; padding: 11px 18px;
  border-radius: 999px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600;
  letter-spacing: 0.5px; text-transform: uppercase; color: #fff; text-decoration: none;
  background: rgba(17,24,39,0.1); border: 1px solid rgba(17,24,39,0.3);
  transition: all 0.3s ease; width: fit-content; margin-top: 16px;
}
.blog-card-btn .arrow-ring {
  display: inline-flex; align-items: center; justify-content: center;
  width: 24px; height: 24px; border-radius: 50%; background: #111827;
  color: #fff; font-size: 10px; transition: all 0.35s ease;
}
.blog-card-btn:hover { color: #111827; background: #f4a637; border-color: #f4a637; gap: 13px; box-shadow: 0 10px 30px -8px rgba(244,166,55,0.4); }
.blog-card-btn:hover .arrow-ring { background: #111827; color: #f4a637; transform: translateX(2px) rotate(-8deg); }

.blog-card-img {
  position: relative; overflow: hidden; background: #e5e7eb;
  border-radius: 2rem; margin: 10px; display: flex; align-items: center; justify-content: center;
}
.blog-card-img img { width: 100%; height: 100%; object-fit: cover; min-height: 380px; }

@media (max-width: 991px) {
  .blog-col-6 { flex: 0 0 100%; max-width: 100%; }
  .blog-card-inner { flex-direction: column !important; min-height: auto; }
  .blog-stacking-card { position: relative; top: auto; }
  .blog-card-img img { min-height: 260px; }
  .blog-card-text { padding: 28px; }
}
</style>

<div class="latest-news">
  <div class="blog-header">
    <div class="blog-label">Latest Blog & Articles</div>
    <h2 class="blog-heading">The Latest <span>Insights</span> You Need To Know</h2>
  </div>

  <div class="blog-stack-container">
    @foreach ($blogs as $index => $blog)
      <div class="blog-row blog-gx-4 blog-mt-4 blog-whitebg blog-stacking-card {{ $index % 2 != 0 ? 'blog-flex-reverse' : '' }}">
        <div class="blog-col-6 blog-p-0">
          <div class="blog-card-inner">
            <div class="blog-card-text">
              <h3 class="blog-card-title">{{ $blog->title }}</h3>
              <div class="blog-card-tags">
                <span class="blog-card-tag">{{ $blog->category ?? 'Technology' }}</span>
                <span class="blog-card-tag">Web</span>
                <span class="blog-card-tag">App</span>
              </div>
              <p class="blog-card-desc">{{ Str::limit(strip_tags($blog->body ?? $blog->description ?? ''), 250) }}</p>
              <a href="{{ route('blogs.show', $blog->slug) }}" class="blog-card-btn">
                Read More <span class="arrow-ring"><i class="fa-solid fa-arrow-right"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div class="blog-col-6 blog-p-0">
          <div class="blog-card-inner">
            <div class="blog-card-img">
              <a href="{{ route('blogs.show', $blog->slug) }}">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" loading="lazy">
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
