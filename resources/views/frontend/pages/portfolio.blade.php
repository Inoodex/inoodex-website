<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body class="tt-magic-cursor" style="background:#05080f;color:#e2e8f0;margin:0;padding:0;box-sizing:border-box;">
  <!-- Magic Cursor Start -->
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <!-- Magic Cursor End -->
  @include('layout.headerNav')

  <style>
  .pf-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 24px;
    padding: 0 16px;
  }

  /* ডেস্কটপ ফিল্টার হাইড মোবাইলে */
  .filter-tabs-desktop {
    display: flex;
  }

  .filter-tabs-mobile {
    display: none;
  }

  @media (max-width: 768px) {
    .filter-tabs-desktop {
      display: none;
    }

    .filter-tabs-mobile {
      display: block;
      width: 100%;
      max-width: 300px;
      margin: 0 auto;
    }

    .pf-grid {
      grid-template-columns: 1fr;
    }
  }
  </style>

  <canvas id="portfolioCanvas"
    style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:0.4;"></canvas>

  <div style="position:relative;z-index:1;padding-top:70px;">
    <div style="max-width:1200px;margin:0 auto;padding:40px 16px;">

      <div style="text-align:center;margin-bottom:40px;">
        <h1 style="font-size:clamp(28px,5vw,48px);font-weight:900;color:#ffffff;margin-bottom:20px;">
          Featured <span
            style="background:linear-gradient(135deg,#22c55e,#3b82f6);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Projects</span>
        </h1>

        <!-- Desktop Filter -->
        <div class="filter-tabs-desktop"
          style="justify-content:center;gap:10px;background:rgba(255,255,255,0.03);padding:8px;border-radius:50px;border:1px solid rgba(255,255,255,0.05);max-width:fit-content;margin:0 auto;">
          <a href="#" class="pf-filter active-btn" data-filter="all"
            style="padding:10px 25px;background:linear-gradient(135deg,#22c55e,#16a34a);color:#fff;border-radius:50px;text-decoration:none;font-size:12px;font-weight:600;text-transform:uppercase;">All</a>
          @foreach ($categories as $cat)
          <a href="#" class="pf-filter" data-filter="{{ Str::slug($cat->name) }}"
            style="padding:10px 25px;background:rgba(255,255,255,0.05);color:#94a3b8;border-radius:50px;text-decoration:none;font-size:12px;font-weight:600;text-transform:uppercase;">{{ $cat->name }}</a>
          @endforeach
        </div>

        <!-- Mobile Dropdown Filter -->
        <select class="filter-tabs-mobile" id="mobileFilter"
          style="background:#1e293b; color:#fff; padding:12px; border-radius:10px; border:1px solid #334155; outline:none;">
          <option value="all">All Projects</option>
          @foreach ($categories as $cat)
          <option value="{{ Str::slug($cat->name) }}">{{ $cat->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="pf-grid" id="portfolioGrid">
        @foreach ($portfolios as $portfolio)
        <div class="pf-item" data-category="{{ Str::slug($portfolio->category->name) }}"
          style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.05);border-radius:20px;overflow:hidden;transition:0.3s;">
          <a href="{{ $portfolio->demo_url }}" target="_blank"
            style="text-decoration:none; color:inherit; display:block;">
            <img src="{{ asset('storage/' . $portfolio->image) }}"
              style="width:100%;height:220px;object-fit:cover; display:block;">
            <div style="padding:20px;">
              <h3 style="color:#fff;margin:0 0 10px;">{{ $portfolio->title }}</h3>
              <p style="color:#64748b;font-size:14px;margin:0;">{{ $portfolio->category->name }}</p>
            </div>
          </a>
        </div>
        @endforeach
        <div id="noProjects" style="grid-column:1/-1;text-align:center;padding:80px 20px;display:none;">
          <div style="font-size:48px;margin-bottom:16px;opacity:0.3;">📁</div>
          <h3 style="color:#94a3b8;font-size:22px;margin:0 0 8px;">No Projects Found</h3>
          <p style="color:#64748b;font-size:15px;">No projects match the selected category.</p>
        </div>
      </div>

      <div id="loadMoreWrap" style="text-align:center;margin-top:40px;display:none;">
        <button id="loadMoreBtn"
          style="padding:14px 40px;background:rgba(255,255,255,0.03);color:#94a3b8;font-size:14px;font-weight:600;border-radius:50px;border:1px solid rgba(255,255,255,0.05);cursor:pointer;transition:all 0.3s;font-family:inherit;"
          onmouseover="this.style.background='rgba(34,197,94,0.08)';this.style.color='#22c55e';this.style.borderColor='rgba(34,197,94,0.2)'"
          onmouseout="this.style.background='rgba(255,255,255,0.03)';this.style.color='#94a3b8';this.style.borderColor='rgba(255,255,255,0.05)'">
          <span id="loadMoreText">Load More</span>
        </button>
      </div>
    </div>
  </div>

  @include('layout.footer')

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var filters = document.querySelectorAll('.pf-filter');
    var mobileFilter = document.getElementById('mobileFilter');
    var allItems = document.querySelectorAll('.pf-item');
    var noMsg = document.getElementById('noProjects');
    var loadMoreWrap = document.getElementById('loadMoreWrap');
    var loadMoreBtn = document.getElementById('loadMoreBtn');
    var step = 6;
    var currentFilter = 'all';
    var currentShow = step;

    function getMatching() {
      var arr = [];
      allItems.forEach(function(item) {
        if (currentFilter === 'all' || item.getAttribute('data-category') === currentFilter) {
          arr.push(item);
        }
      });
      return arr;
    }

    function render() {
      var matching = getMatching();
      var showing = 0;

      matching.forEach(function(item, idx) {
        if (idx < currentShow) {
          item.style.display = 'block';
          showing++;
        } else {
          item.style.display = 'none';
        }
      });

      // Hide non-matching items
      allItems.forEach(function(item) {
        if (matching.indexOf(item) === -1) {
          item.style.display = 'none';
        }
      });

      if (noMsg) {
        noMsg.style.display = matching.length === 0 ? 'block' : 'none';
      }

      if (loadMoreWrap) {
        loadMoreWrap.style.display = (matching.length > currentShow) ? 'block' : 'none';
      }
    }

    function resetShow() {
      currentShow = step;
      render();
    }

    function loadMore() {
      currentShow += step;
      render();
    }

    function setActive(activeBtn) {
      filters.forEach(function(btn) {
        btn.classList.remove('active-btn');
        btn.style.background = 'rgba(255,255,255,0.03)';
        btn.style.color = '#94a3b8';
      });
      if (activeBtn) {
        activeBtn.classList.add('active-btn');
        activeBtn.style.background = 'linear-gradient(135deg,#22c55e,#16a34a)';
        activeBtn.style.color = '#ffffff';
      }
    }

    // Desktop filters
    filters.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        currentFilter = this.getAttribute('data-filter');
        setActive(this);
        mobileFilter.value = currentFilter;
        resetShow();
      });
    });

    // Mobile filter
    mobileFilter.addEventListener('change', function() {
      currentFilter = this.value;
      filters.forEach(function(btn) {
        if (btn.getAttribute('data-filter') === currentFilter) {
          setActive(btn);
        }
      });
      resetShow();
    });

    // Load More
    loadMoreBtn.addEventListener('click', function() {
      loadMore();
    });

    // Initial render
    render();
  });
  </script>
</body>

</html>