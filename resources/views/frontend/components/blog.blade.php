<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latest Blog - Three.js</title>
  <style>
  .latest-news {
    position: relative;
    background: #0a0e1a;
    padding: 100px 0;
    overflow: hidden;
    min-height: 100vh;
  }

  .latest-news .max-w-7xl {
    position: relative;
    z-index: 10;
  }

  .blog-item {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    opacity: 0;
    transform: translateX(-80px) scale(0.9);
  }

  .blog-item:hover {
    transform: translateY(-6px) !important;
    border-color: rgba(255, 255, 255, 0.08) !important;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5) !important;
  }

  .blog-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;
    opacity: 0;
    transform: scale(0.3) rotate(-8deg);
    transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .blog-image:hover {
    transform: scale(1.08) !important;
  }

  .blog-content {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .blog-item.visible {
    opacity: 1;
    transform: translateX(0) scale(1);
  }

  .blog-item.visible .blog-image {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }

  .blog-item.visible .blog-content {
    opacity: 1;
    transform: translateY(0);
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes gradientMove {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  @media (max-width: 1024px) {
    .latest-news>div>div:first-child>div {
      flex: 0 0 100% !important;
      max-width: 100% !important;
      text-align: center !important;
    }

    .latest-news>div>div:first-child>div:last-child {
      text-align: center !important;
      margin-top: 15px;
    }

    .blog-item>div:first-child {
      flex: 0 0 100% !important;
      max-width: 100% !important;
    }

    .blog-item>div:last-child {
      flex: 0 0 100% !important;
      max-width: 100% !important;
      padding: 25px !important;
    }

    .blog-image {
      height: 200px !important;
    }
  }

  @media (max-width: 640px) {
    .latest-news>div>div:first-child h2 {
      font-size: 28px !important;
    }

    .blog-item>div:last-child h2 {
      font-size: 18px !important;
    }

    .blog-item>div:last-child p {
      font-size: 14px !important;
    }

    .blog-image {
      height: 180px !important;
    }

    .blog-item>div:last-child {
      padding: 20px !important;
    }
  }
  </style>
</head>

<body>

  <div class="latest-news">
    <!-- Light animated background (CSS) -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div style="display: flex; flex-wrap: wrap; align-items: center; margin-bottom: 50px;">
        <div style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
          <div class="section-title">
            <div
              style="display: inline-block; padding: 6px 20px; background: rgba(244,166,55,0.08); border: 1px solid rgba(244,166,55,0.12); border-radius: 50px; margin-bottom: 15px; animation: fadeInDown 0.6s ease forwards; opacity: 0; transform: translateY(-20px);">
              <span
                style="color: #f4a637; font-size: 12px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;">✦
                Latest Blog & Articles</span>
            </div>
            <h2
              style="font-size: 38px; font-weight: 800; color: #ffffff; line-height: 1.2; margin-bottom: 0; animation: fadeInUp 0.6s ease forwards 0.1s; opacity: 0; transform: translateY(20px);">
              The latest <span
                style="background: linear-gradient(135deg, #f4a637, #f7c873, #3b82f6, #8b5cf6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; background-size: 300% 300%; animation: gradientMove 5s ease-in-out infinite;">insights</span>
              you need to know
            </h2>
          </div>
        </div>
        <div style="flex: 0 0 50%; max-width: 50%; padding: 0 15px; text-align: right;">
          <div style="animation: fadeInUp 0.6s ease forwards 0.2s; opacity: 0; transform: translateY(20px);">
            <a href="{{ route('blogs') }}"
              style="display: inline-flex; align-items: center; gap: 10px; padding: 12px 35px; background: linear-gradient(135deg, #f4a637, #d18f2b); color: #ffffff; font-size: 15px; font-weight: 600; border-radius: 50px; text-decoration: none; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); box-shadow: 0 4px 25px rgba(244,166,55,0.3);"
              onmouseover="this.style.transform='translateY(-3px) scale(1.03)'; this.style.boxShadow='0 10px 40px rgba(244,166,55,0.4)'"
              onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 25px rgba(244,166,55,0.3)'">
              <span>View All Blogs</span>
              <i class="fas fa-arrow-right" style="margin-left:2px;transition:transform 0.3s ease;"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Blog Grid -->
      <div style="display: grid; grid-template-columns: 1fr; gap: 30px; margin-top: 20px;">
        @php
        $blogColors = ['#f4a637', '#3b82f6', '#8b5cf6'];
        @endphp

        @foreach ($blogs as $index => $blog)
        <div class="blog-item" style="border-left: 4px solid {{ $blogColors[$index % count($blogColors)] }};"
          data-delay="{{ $index * 150 }}">
          <!-- Image Column -->
          <div style="flex: 0 0 40%; max-width: 40%; overflow: hidden; position: relative;">
            <div style="position: relative; overflow: hidden; min-height: 200px;">
              <figure style="margin: 0; overflow: hidden;">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="blog-image">
              </figure>
              <div
                style="position: absolute; inset: 0; background: linear-gradient(90deg, rgba(10,14,26,0.6), transparent); pointer-events: none;">
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div style="flex: 0 0 60%; max-width: 60%; padding: 30px 35px;">
            <div class="blog-content">
              <!-- Category Badge -->
              <div
                style="display: inline-block; padding: 4px 16px; background: rgba(244,166,55,0.08); border: 1px solid rgba(244,166,55,0.1); border-radius: 50px; margin-bottom: 12px;">
                <span
                  style="color: #f4a637; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">{{ $blog->category ?? 'Technology' }}</span>
              </div>

              <!-- Blog Title -->
              <h2
                style="font-size: 22px; font-weight: 700; color: #ffffff; line-height: 1.3; margin-bottom: 12px; transition: color 0.3s;">
                <a href="{{ route('blogs.show', $blog->slug) }}"
                  style="color: #ffffff; text-decoration: none; transition: all 0.3s;"
                  onmouseover="this.style.color='#f4a637'" onmouseout="this.style.color='#ffffff'">
                  {{ $blog->title }}
                </a>
              </h2>

              <!-- Blog Meta -->
              <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                <span style="color: #6b7280; font-size: 13px;">
                  <span style="color: #f4a637;">✦</span>
                  {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Jan 01, 2025' }}
                </span>
                <span style="color: #374151;">|</span>
                <span style="color: #6b7280; font-size: 13px;">
                  <span style="color: #f4a637;">✦</span>
                  5 min read
                </span>
              </div>

              <!-- Excerpt -->
              <p style="color: #9ca3af; font-size: 15px; line-height: 1.8; margin-bottom: 15px;">
                {{ Str::limit(strip_tags($blog->description ?? $blog->content ?? ''), 120) }}
              </p>

              <!-- Read More Link -->
              <a href="{{ route('blogs.show', $blog->slug) }}"
                style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 24px; background: linear-gradient(135deg, #f4a637, #d18f2b); color: #ffffff; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; text-decoration: none; border-radius: 50px; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); position: relative; overflow: hidden;"
                onmouseover="this.style.boxShadow='0 12px 40px rgba(244,166,55,0.35)'; this.style.transform='translateY(-2px) scale(1.02)'; this.style.gap='12px'"
                onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0) scale(1)'; this.style.gap='8px'">
                <span>Read More</span>
                <i class="fas fa-arrow-right" style="margin-left:2px;transition:transform 0.3s ease;"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- GSAP & Lenis -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // ========== GSAP SCROLL REVEALS FOR BLOG ITEMS ==========
    if (typeof gsap !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);

      document.querySelectorAll('.blog-item').forEach((item, index) => {
        const delay = parseInt(item.dataset.delay) || index * 150;

        gsap.to(item, {
          opacity: 1,
          x: 0,
          scale: 1,
          duration: 0.9,
          delay: delay / 1000,
          ease: "power3.out",
          scrollTrigger: {
            trigger: item,
            start: "top 85%",
            toggleActions: "play none none none"
          }
        });

        const img = item.querySelector('.blog-image');
        gsap.to(img, {
          opacity: 1,
          scale: 1,
          rotation: 0,
          duration: 0.8,
          delay: (delay + 300) / 1000,
          ease: "back.out(1.7)",
          scrollTrigger: {
            trigger: item,
            start: "top 85%",
            toggleActions: "play none none none"
          }
        });

        const content = item.querySelector('.blog-content');
        gsap.to(content, {
          opacity: 1,
          y: 0,
          duration: 0.8,
          delay: (delay + 500) / 1000,
          ease: "power3.out",
          scrollTrigger: {
            trigger: item,
            start: "top 85%",
            toggleActions: "play none none none"
          }
        });
      });
    }
  });
  </script>

</body>

</html>