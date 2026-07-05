<!DOCTYPE html>
<html lang="zxx">

<head>
  @include('layout.header')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .theme-page {
    background: #0a0e1a;
    min-height: 100vh;
    padding-top: 80px;
    position: relative;
  }

  .theme-page::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image:
      linear-gradient(rgba(34, 197, 94, 0.02) 1px, transparent 1px),
      linear-gradient(90deg, rgba(34, 197, 94, 0.02) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
    z-index: 0;
  }

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
    top: -10%;
    right: -5%;
    background: rgba(34, 197, 94, 0.06);
  }

  .glow-orb-2 {
    width: 400px;
    height: 400px;
    bottom: -10%;
    left: -5%;
    background: rgba(99, 102, 241, 0.05);
  }

  /* Filter Sidebar */
  .theme-filter-sidebar {
    background: rgba(15, 23, 42, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 24px;
    padding: 32px 28px;
    position: sticky;
    top: 100px;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    transition: all 0.4s ease;
  }

  .theme-filter-sidebar:hover {
    border-color: rgba(34, 197, 94, 0.15);
    box-shadow: 0 30px 60px -12px rgba(34, 197, 94, 0.05);
  }

  .theme-filter-group h5 {
    font-size: 11px;
    font-weight: 700;
    color: #94a3b8;
    margin-bottom: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    padding-bottom: 12px;
  }

  .theme-filter-group h5::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, #22c55e, transparent);
    border-radius: 2px;
  }

  .theme-filter-group label {
    color: #94a3b8;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .theme-filter-group label:hover {
    color: #f1f5f9;
  }

  .theme-filter-group input[type="checkbox"] {
    accent-color: #22c55e;
    width: 17px;
    height: 17px;
    border-radius: 5px;
    cursor: pointer;
    flex-shrink: 0;
  }

  /* Sort Dropdown - Category er niche */
  .sort-dropdown-wrapper {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.04);
  }

  .sort-dropdown-wrapper .sort-label {
    font-size: 11px;
    font-weight: 700;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 2px;
    display: block;
    margin-bottom: 14px;
    position: relative;
    padding-bottom: 12px;
  }

  .sort-dropdown-wrapper .sort-label::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, #22c55e, transparent);
    border-radius: 2px;
  }

  .sort-dropdown-container {
    position: relative;
    width: 100%;
    z-index: 50;
  }

  .sort-dropdown-container .dropdown-btn {
    width: 100%;
    padding: 12px 16px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 12px;
    color: #e2e8f0;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: all 0.3s ease;
    font-family: inherit;
  }

  .sort-dropdown-container .dropdown-btn:hover {
    border-color: rgba(34, 197, 94, 0.2);
    background: rgba(255, 255, 255, 0.06);
  }

  .sort-dropdown-container .dropdown-menu {
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    right: 0;
    background: rgba(15, 23, 42, 0.98);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 14px;
    padding: 8px;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    z-index: 999;
    max-height: 350px;
    overflow-y: auto;
  }

  .sort-dropdown-container .dropdown-menu::-webkit-scrollbar {
    width: 4px;
  }

  .sort-dropdown-container .dropdown-menu::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.02);
    border-radius: 4px;
  }

  .sort-dropdown-container .dropdown-menu::-webkit-scrollbar-thumb {
    background: rgba(34, 197, 94, 0.3);
    border-radius: 4px;
  }

  .sort-option {
    width: 100%;
    padding: 10px 16px;
    background: transparent;
    border: none;
    border-radius: 10px;
    color: #94a3b8;
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 12px;
    transition: all 0.3s ease;
    font-family: inherit;
  }

  .sort-option:hover {
    background: rgba(255, 255, 255, 0.04);
    color: #e2e8f0;
  }

  .sort-option.active {
    background: rgba(34, 197, 94, 0.08);
    color: #22c55e;
  }

  .sort-option .check-icon {
    margin-left: auto;
    color: #22c55e;
    font-size: 12px;
  }

  .sort-option .option-icon {
    width: 18px;
    text-align: center;
  }

  /* Theme Card */
  .theme-card {
    background: rgba(30, 41, 59, 0.5);
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    display: flex;
    flex-direction: column;
    position: relative;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    opacity: 0;
    animation: cardFadeIn 0.6s cubic-bezier(0.23, 1, 0.32, 1) forwards;
  }

  @keyframes cardFadeIn {
    from {
      opacity: 0;
      transform: translateY(20px) scale(0.95);
    }

    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  .theme-card:nth-child(1) {
    animation-delay: 0.05s;
  }

  .theme-card:nth-child(2) {
    animation-delay: 0.1s;
  }

  .theme-card:nth-child(3) {
    animation-delay: 0.15s;
  }

  .theme-card:nth-child(4) {
    animation-delay: 0.2s;
  }

  .theme-card:nth-child(5) {
    animation-delay: 0.25s;
  }

  .theme-card:nth-child(6) {
    animation-delay: 0.3s;
  }

  .theme-card::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 20px;
    padding: 1px;
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), transparent, rgba(34, 197, 94, 0.05));
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .theme-card:hover::before {
    opacity: 1;
  }

  .theme-card:hover {
    transform: translateY(-12px) scale(1.01);
    border-color: rgba(34, 197, 94, 0.2);
    box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.5), 0 0 40px rgba(34, 197, 94, 0.03);
    background: rgba(30, 41, 59, 0.7);
  }

  .theme-card .thumb-wrap {
    position: relative;
    overflow: hidden;
    border-radius: 20px 20px 0 0;
  }

  .theme-card .thumb-wrap::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(10, 14, 26, 0.7));
    pointer-events: none;
  }

  .theme-card img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    display: block;
    transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .theme-card:hover img {
    transform: scale(1.08);
  }

  .theme-card .demo-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: #fff;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    padding: 6px 16px;
    border-radius: 50px;
    z-index: 2;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(34, 197, 94, 0.2);
  }

  .theme-card .demo-badge:hover {
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 12px 30px rgba(34, 197, 94, 0.3);
  }

  .theme-card .card-body {
    padding: 24px 22px 22px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .theme-card .card-body h2 {
    font-size: 17px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    letter-spacing: -0.3px;
  }

  .theme-card .card-body h2 a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
    position: relative;
  }

  .theme-card .card-body h2 a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: #22c55e;
    transition: width 0.3s ease;
  }

  .theme-card .card-body h2 a:hover::after {
    width: 100%;
  }

  .theme-card .card-body h2 a:hover {
    color: #22c55e;
  }

  .theme-card .card-body .price {
    font-size: 16px;
    font-weight: 700;
    color: #22c55e;
    letter-spacing: -0.2px;
  }

  /* Header */
  .premium-header h1 {
    font-size: 48px;
    font-weight: 800;
    background: linear-gradient(135deg, #ffffff 0%, #94a3b8 50%, #22c55e 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: -2px;
    position: relative;
    display: inline-block;
  }

  .premium-header p {
    font-size: 17px;
    color: #64748b;
    max-width: 520px;
    margin: 12px auto 0;
    font-weight: 400;
    letter-spacing: 0.2px;
  }

  .clear-filter-btn {
    width: 100%;
    padding: 12px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.06);
    color: #94a3b8;
    border-radius: 12px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.3s ease;
    letter-spacing: 0.5px;
    font-family: inherit;
  }

  .clear-filter-btn:hover {
    border-color: #ef4444;
    color: #ef4444;
    background: rgba(239, 68, 68, 0.05);
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width:1200px) {
    .theme-page>div {
      padding-left: 24px !important;
      padding-right: 24px !important;
    }
  }

  @media (max-width:1024px) {
    .theme-card img {
      height: 220px;
    }

    .theme-filter-sidebar {
      position: static;
      margin-bottom: 24px;
    }

    .theme-page>div>div {
      flex-direction: column !important;
    }

    .theme-page>div>div>div:first-child {
      flex: 1 1 100% !important;
      max-width: 100% !important;
    }

    .theme-page>div>div>div:last-child {
      flex: 1 1 100% !important;
      max-width: 100% !important;
    }

    .theme-page>div>div>div:last-child>div {
      grid-template-columns: repeat(3, 1fr) !important;
    }
  }

  @media (max-width:820px) {
    .theme-page>div>div>div:last-child>div {
      grid-template-columns: repeat(2, 1fr) !important;
    }

    .theme-card img {
      height: 200px;
    }

    .premium-header h1 {
      font-size: 36px !important;
    }
  }

  @media (max-width:640px) {
    .theme-page {
      padding-top: 70px;
    }

    .theme-page>div {
      padding: 20px 16px 40px !important;
    }

    .premium-header h1 {
      font-size: 30px !important;
    }

    .theme-page>div>div>div:last-child>div {
      grid-template-columns: 1fr !important;
      gap: 18px !important;
    }

    .theme-card img {
      height: 200px;
    }

    .theme-filter-sidebar {
      padding: 20px 18px;
    }

    .theme-filter-group {
      margin-bottom: 20px;
    }

    .theme-filter-group h5 {
      font-size: 12px;
    }

    .theme-filter-group label {
      font-size: 13px;
    }

    .theme-card .card-body h2 {
      font-size: 15px;
    }

    .theme-card .card-body .price {
      font-size: 14px;
    }

    .theme-card .card-body {
      padding: 18px 16px 16px;
    }

    .theme-page>div>div {
      gap: 20px !important;
    }

    .premium-header p {
      font-size: 15px;
    }

    .sort-dropdown-container .dropdown-menu {
      max-height: 250px;
    }
  }

  @media (max-width:400px) {
    .theme-page>div {
      padding: 16px 10px 32px !important;
    }

    .premium-header h1 {
      font-size: 26px !important;
    }

    .theme-card img {
      height: 180px;
    }

    .theme-filter-sidebar {
      padding: 16px 14px;
    }

    .theme-filter-group {
      margin-bottom: 16px;
    }

    .theme-filter-group h5 {
      font-size: 11px;
      margin-bottom: 12px;
    }

    .theme-filter-group label {
      font-size: 12px;
    }

    .theme-filter-group input[type="checkbox"] {
      width: 15px;
      height: 15px;
    }

    .theme-card .card-body h2 {
      font-size: 14px;
    }

    .theme-card .card-body .price {
      font-size: 13px;
    }

    .theme-card .card-body {
      padding: 14px 12px 12px;
    }

    .theme-card .demo-badge {
      font-size: 9px;
      padding: 4px 12px;
      top: 10px;
      right: 10px;
    }

    .sort-dropdown-container .dropdown-menu {
      max-height: 200px;
    }
  }
  </style>
</head>

<body style="background:#0a0e1a;color:#e2e8f0;margin:0;padding:0;">

  <!-- Glow Orbs -->
  <div class="glow-orb glow-orb-1"></div>
  <div class="glow-orb glow-orb-2"></div>

  @include('layout.headerNav')

  <canvas id="themeCanvas"
    style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:0.6;"></canvas>

  <div class="theme-page" style="position:relative;z-index:1;">
    <div style="max-width:1200px;margin:0 auto;padding:40px 24px 60px;">

      <!-- Premium Header -->
      <div class="premium-header" style="text-align:center;margin-bottom:40px;">
        <h1>Our <span
            style="background:linear-gradient(135deg,#22c55e,#4ade80);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Themes</span>
        </h1>
        <p>Handcrafted, responsive, and performance-optimized themes for modern web experiences.</p>
      </div>

      <div style="display:flex;flex-wrap:wrap;gap:30px;" x-data="{
                themes: @js(isset($themes) ? $themes->map(fn($t) => ['id'=>$t->id,'title'=>$t->title,'image'=>$t->image,'demo_url'=>$t->demo_url,'category_id'=>(int)$t->category_id,'price'=>(float)$t->price]) : []),
                selectedCategories: [],
                sortType: 'newest',
                dropdownOpen: false,
                
                get filteredThemes() {
                    let result = this.themes.filter(t => {
                        if (this.selectedCategories.length > 0 && !this.selectedCategories.includes(t.category_id)) return false;
                        return true;
                    });
                    
                    if (this.sortType === 'newest') return result;
                    if (this.sortType === 'oldest') return [...result].reverse();
                    if (this.sortType === 'price_low') return [...result].sort((a, b) => a.price - b.price);
                    if (this.sortType === 'price_high') return [...result].sort((a, b) => b.price - a.price);
                    if (this.sortType === 'az') return [...result].sort((a, b) => a.title.localeCompare(b.title));
                    if (this.sortType === 'za') return [...result].sort((a, b) => b.title.localeCompare(a.title));
                    return result;
                },
                
                get totalCount() {
                    return this.filteredThemes.length;
                },
                
                setSort(type) {
                    this.sortType = type;
                    this.dropdownOpen = false;
                },
                
                toggleDropdown() {
                    this.dropdownOpen = !this.dropdownOpen;
                },
                
                closeDropdown() {
                    this.dropdownOpen = false;
                }
            }" @click.away="closeDropdown()">

        <!-- Sidebar -->
        <div style="flex:0 0 260px;min-width:0;max-width:100%;">
          <div class="theme-filter-sidebar">

            <!-- Category Section -->
            <div class="theme-filter-group">
              <h5><i class="fas fa-tag" style="margin-right:8px;font-size:11px;"></i> Category</h5>
              @if(isset($categories) && $categories->count() > 0)
              @foreach ($categories as $cat)
              <div style="display:flex;align-items:center;gap:10px;margin-bottom:14px;">
                <input type="checkbox" id="cat_{{ $cat->id }}" value="{{ $cat->id }}"
                  x-model.number="selectedCategories">
                <label for="cat_{{ $cat->id }}">{{ $cat->name }}</label>
              </div>
              @endforeach
              @else
              <div style="color:#64748b;font-size:13px;">No categories available</div>
              @endif
            </div>

            <!-- ===== SORT DROPDOWN - Category er NICHE ===== -->
            <div class="sort-dropdown-wrapper">
              <span class="sort-label"><i class="fas fa-arrow-up-wide-short" style="margin-right:8px;"></i> Sort
                By</span>

              <div class="sort-dropdown-container">
                <button class="dropdown-btn" @click="toggleDropdown()">
                  <span style="display:flex;align-items:center;gap:10px;">
                    <i class="fas" :class="{
                      'fa-clock': sortType === 'newest',
                      'fa-history': sortType === 'oldest',
                      'fa-arrow-up': sortType === 'price_low',
                      'fa-arrow-down': sortType === 'price_high',
                      'fa-sort-alpha-down': sortType === 'az',
                      'fa-sort-alpha-up': sortType === 'za'
                    }" style="color:#22c55e;"></i>
                    <span x-text="{
                      'newest': 'Newest First',
                      'oldest': 'Oldest First',
                      'price_low': 'Price: Low → High',
                      'price_high': 'Price: High → Low',
                      'az': 'A → Z',
                      'za': 'Z → A'
                    }[sortType]"></span>
                  </span>
                  <i class="fas fa-chevron-down" style="font-size:12px;color:#64748b;transition:transform 0.3s;"
                    :style="{ transform: dropdownOpen ? 'rotate(180deg)' : 'rotate(0deg)' }"></i>
                </button>

                <!-- Dropdown Menu -->
                <div class="dropdown-menu" x-show="dropdownOpen" x-transition:enter.duration.200ms>
                  <button class="sort-option" :class="{ 'active': sortType === 'newest' }" @click="setSort('newest')">
                    <i class="fas fa-clock option-icon"></i> Newest First
                    <i class="fas fa-check check-icon" x-show="sortType === 'newest'"></i>
                  </button>

                  <button class="sort-option" :class="{ 'active': sortType === 'oldest' }" @click="setSort('oldest')">
                    <i class="fas fa-history option-icon"></i> Oldest First
                    <i class="fas fa-check check-icon" x-show="sortType === 'oldest'"></i>
                  </button>

                  <div style="height:1px;background:rgba(255,255,255,0.04);margin:4px 12px;"></div>

                  <button class="sort-option" :class="{ 'active': sortType === 'price_low' }"
                    @click="setSort('price_low')">
                    <i class="fas fa-arrow-up option-icon"></i> Price: Low → High
                    <i class="fas fa-check check-icon" x-show="sortType === 'price_low'"></i>
                  </button>

                  <button class="sort-option" :class="{ 'active': sortType === 'price_high' }"
                    @click="setSort('price_high')">
                    <i class="fas fa-arrow-down option-icon"></i> Price: High → Low
                    <i class="fas fa-check check-icon" x-show="sortType === 'price_high'"></i>
                  </button>

                  <div style="height:1px;background:rgba(255,255,255,0.04);margin:4px 12px;"></div>

                  <button class="sort-option" :class="{ 'active': sortType === 'az' }" @click="setSort('az')">
                    <i class="fas fa-sort-alpha-down option-icon"></i> A → Z
                    <i class="fas fa-check check-icon" x-show="sortType === 'az'"></i>
                  </button>

                  <button class="sort-option" :class="{ 'active': sortType === 'za' }" @click="setSort('za')">
                    <i class="fas fa-sort-alpha-up option-icon"></i> Z → A
                    <i class="fas fa-check check-icon" x-show="sortType === 'za'"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Clear Filter Button -->
            <button class="clear-filter-btn" @click="selectedCategories=[]; sortType='newest'" style="margin-top:20px;">
              <i class="fas fa-undo-alt" style="margin-right:8px;"></i> Clear Filters
            </button>
          </div>
        </div>

        <!-- Grid -->
        <div style="flex:1;min-width:0;max-width:100%;">

          <!-- Results Count Header -->
          <div
            style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;margin-bottom:20px;padding:0 4px;">
            <span style="font-size:14px;color:#94a3b8;">
              Showing <span style="color:#22c55e;font-weight:700;" x-text="totalCount"></span>
              <span x-text="totalCount !== 1 ? 'themes' : 'theme'"></span>
            </span>
          </div>

          <!-- ===== THEMES GRID ===== -->
          <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <template x-for="(theme, index) in filteredThemes" :key="theme.id">
              <div class="theme-card" :style="{ animationDelay: (index * 0.05) + 's' }">
                <div class="thumb-wrap">
                  <a :href="theme.demo_url" target="_blank" rel="noopener noreferrer">
                    <img :src="'{{ asset('storage') }}/' + theme.image" :alt="theme.title" loading="lazy">
                  </a>
                  <a :href="theme.demo_url" target="_blank" class="demo-badge">
                    <i class="fas fa-external-link-alt" style="margin-right:6px;font-size:9px;"></i> Live Demo
                  </a>
                </div>
                <div class="card-body">
                  <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px;">
                    <h2><a :href="theme.demo_url" target="_blank" x-text="theme.title"></a></h2>
                    {{-- <span class="price" x-text="'$' + theme.price.toFixed(2)"></span> --}}
                  </div>
                </div>
              </div>
            </template>

            <!-- Empty State -->
            <div style="grid-column:1/-1;text-align:center;padding:60px 0;" x-show="filteredThemes.length === 0">
              <i class="fas fa-search" style="font-size:40px;color:#334155;margin-bottom:16px;display:block;"></i>
              <p style="color:#64748b;font-size:17px;">No themes found matching your filters.</p>
              <button
                style="margin-top:14px;padding:12px 28px;background:linear-gradient(135deg,rgba(34,197,94,0.1),rgba(34,197,94,0.05));color:#22c55e;border:1px solid rgba(34,197,94,0.1);border-radius:12px;cursor:pointer;font-size:14px;font-weight:600;transition:all 0.3s;font-family:inherit;"
                @click="selectedCategories=[]; sortType='newest'">
                <i class="fas fa-undo-alt" style="margin-right:8px;"></i> Clear Filters
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  @include('layout.footer')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" defer></script>
  <script>
  (function() {
    var canvas = document.getElementById('themeCanvas');
    if (!canvas) return;

    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    var renderer = new THREE.WebGLRenderer({
      canvas: canvas,
      alpha: true,
      antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    var count = 200;
    var positions = new Float32Array(count * 3);
    for (var i = 0; i < count; i++) {
      positions[i * 3] = (Math.random() - 0.5) * 30;
      positions[i * 3 + 1] = (Math.random() - 0.5) * 30;
      positions[i * 3 + 2] = (Math.random() - 0.5) * 20 - 5;
    }
    var pGeom = new THREE.BufferGeometry();
    pGeom.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    var pMat = new THREE.PointsMaterial({
      color: 0x22c55e,
      size: 0.03,
      transparent: true,
      opacity: 0.2,
      blending: THREE.AdditiveBlending
    });
    scene.add(new THREE.Points(pGeom, pMat));

    var cubes = [];
    var colors = [0x22c55e, 0x16a34a, 0x4ade80, 0x34d399];
    for (var i = 0; i < 6; i++) {
      var size = 0.2 + Math.random() * 0.25;
      var geom = new THREE.OctahedronGeometry(size);
      var mat = new THREE.MeshBasicMaterial({
        color: colors[Math.floor(Math.random() * colors.length)],
        wireframe: true,
        transparent: true,
        opacity: 0.08 + Math.random() * 0.1,
      });
      var mesh = new THREE.Mesh(geom, mat);
      mesh.position.set((Math.random() - 0.5) * 20, (Math.random() - 0.5) * 20, (Math.random() - 0.5) * 12 - 4);
      mesh.rotation.set(Math.random() * Math.PI, Math.random() * Math.PI, 0);
      mesh.userData = {
        rot: {
          x: (Math.random() - 0.5) * 0.01,
          y: (Math.random() - 0.5) * 0.01,
          z: (Math.random() - 0.5) * 0.01
        },
        phase: Math.random() * Math.PI * 2,
        baseY: mesh.position.y,
        floatSpeed: 0.001 + Math.random() * 0.002
      };
      scene.add(mesh);
      cubes.push(mesh);
    }

    camera.position.z = 7;

    var mouseX = 0,
      mouseY = 0;
    document.addEventListener('mousemove', function(e) {
      mouseX = (e.clientX / window.innerWidth) * 2 - 1;
      mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
    });

    var time = 0;

    function animate() {
      requestAnimationFrame(animate);
      time += 0.005;

      cubes.forEach(function(mesh) {
        mesh.rotation.x += mesh.userData.rot.x || 0.002;
        mesh.rotation.y += mesh.userData.rot.y || 0.003;
        mesh.rotation.z += mesh.userData.rot.z || 0.001;
        mesh.position.y = (mesh.userData.baseY || 0) + Math.sin(time * 4 + mesh.userData.phase) * 0.2;
      });

      camera.position.x += (mouseX * 0.3 - camera.position.x) * 0.015;
      camera.position.y += (-mouseY * 0.25 - camera.position.y) * 0.015;
      camera.lookAt(scene.position);

      renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', function() {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    });
  })();
  </script>
</body>

</html>