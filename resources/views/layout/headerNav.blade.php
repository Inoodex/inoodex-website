<header id="mainHeader"
  style="background: #0a0e1a; border-bottom: 1px solid rgba(255,255,255,0.04); position: fixed; top: 0; left: 0; right: 0; z-index: 9999; transition: all 0.4s ease;">
  <div class="header-sticky" style="position: relative;">
    <!-- Animated Background -->
    <div style="position: absolute; inset: 0; overflow: hidden; pointer-events: none;" class="header-bg-glow">
      <div style="position: absolute; inset: 0; background: #0a0e1a;"></div>
      <div
        style="position: absolute; top: 0; left: 0; width: 256px; height: 256px; background: rgba(16,185,129,0.05); border-radius: 50%; filter: blur(64px);">
      </div>
      <div
        style="position: absolute; bottom: 0; right: 0; width: 384px; height: 384px; background: rgba(59,130,246,0.04); border-radius: 50%; filter: blur(64px);">
      </div>
    </div>

    <div style="max-width: 1280px; margin: 0 auto; padding: 0 16px; position: relative; z-index: 10;">
      <nav style="display: flex; align-items: center; justify-content: space-between; height: 70px;">
        <!-- Logo -->
        <a class="logo-wrap"
          style="display: flex; align-items: center; gap: 12px; flex-shrink: 0; text-decoration: none;"
          href="{{ url('/') }}">
          <div style="position: relative; display: flex; align-items: center; justify-content: center;">
            <div
              style="position: absolute; inset: -8px; background: rgba(16,185,129,0.15); border-radius: 50%; filter: blur(32px); animation: pulse-slow 4s ease-in-out infinite;">
            </div>
            <div
              style="position: absolute; inset: -4px; background: #10b981; border-radius: 50%; filter: blur(16px); opacity: 0; transition: opacity 0.5s;">
            </div>
            <div class="ripple-ring"
              style="position: absolute; inset: -6px; border: 1.5px solid rgba(16,185,129,0.4); border-radius: 50%; animation: waterDrop 1.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite;">
            </div>
            <div class="ripple-ring"
              style="position: absolute; inset: -6px; border: 1.5px solid rgba(16,185,129,0.3); border-radius: 50%; animation: waterDrop 1.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite 0.6s;">
            </div>
            <div class="ripple-ring"
              style="position: absolute; inset: -6px; border: 1.5px solid rgba(16,185,129,0.2); border-radius: 50%; animation: waterDrop 1.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite 1.2s;">
            </div>
            <img id="navLogo" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Inoodex"
              style="height: 34px; width: auto; position: relative; filter: none !important; transition: all 0.5s; animation: logoFloat 3s ease-in-out infinite;" />
          </div>
        </a>

        <!-- Desktop Menu -->
        <div id="desktopMenu" style="display: none; align-items: center;">
          <ul style="display: flex; align-items: center; gap: 2px; list-style: none; margin: 0; padding: 0;" id="menu">
            <li>
              <a class="nav-link"
                style="padding: 8px 14px; font-size: 14px; font-weight: 500; color: #9ca3af; border-radius: 10px; text-decoration: none; transition: all 0.3s; position: relative;"
                href="{{ url('/') }}">Home</a>
            </li>
            <li>
              <a class="nav-link"
                style="padding: 8px 14px; font-size: 14px; font-weight: 500; color: #9ca3af; border-radius: 10px; text-decoration: none; transition: all 0.3s; position: relative;"
                href="{{ url('/about') }}">About</a>
            </li>
            <li style="position: relative;">
              <a class="nav-link"
                style="padding: 8px 14px; font-size: 14px; font-weight: 500; color: #9ca3af; border-radius: 10px; text-decoration: none; transition: all 0.3s; position: relative; display: inline-flex; align-items: center; gap: 4px;"
                href="{{ url('/services') }}">
                Services <span style="color: #6b7280; font-size: 10px;">▾</span>
              </a>
              <div class="services-dropdown"
                style="position: absolute; left: 0; top: 100%; margin-top: 8px; opacity: 0; visibility: hidden; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); transform: translateY(16px);">
                <div
                  style="background: #131b2e; box-shadow: 0 25px 50px rgba(0,0,0,0.5); border-radius: 14px; min-width: 220px; padding: 8px 0; border: 1px solid rgba(255,255,255,0.05);">
                  <div
                    style="padding: 0 16px 10px; margin-bottom: 6px; border-bottom: 1px solid rgba(255,255,255,0.04);">
                    <span
                      style="font-size: 11px; font-weight: 700; color: #10b981; text-transform: uppercase; letter-spacing: 0.8px;">✦
                      Our Services</span>
                  </div>
                  <a style="display: flex; align-items: center; padding: 8px 16px; font-size: 14px; color: #d1d5db; text-decoration: none; transition: all 0.3s;"
                    href="{{ url('/software-development') }}">Software Development</a>
                  <a style="display: flex; align-items: center; padding: 8px 16px; font-size: 14px; color: #d1d5db; text-decoration: none; transition: all 0.3s;"
                    href="{{ url('/apps-development') }}">Apps Development</a>
                  <a style="display: flex; align-items: center; padding: 8px 16px; font-size: 14px; color: #d1d5db; text-decoration: none; transition: all 0.3s;"
                    href="{{ url('/web-development') }}">Web Development</a>
                  <a style="display: flex; align-items: center; padding: 8px 16px; font-size: 14px; color: #d1d5db; text-decoration: none; transition: all 0.3s;"
                    href="{{ url('/digital-marketing') }}">Digital Marketing</a>
                  <a style="display: flex; align-items: center; padding: 8px 16px; font-size: 14px; color: #d1d5db; text-decoration: none; transition: all 0.3s;"
                    href="{{ url('/seo') }}">SEO</a>
                  <a style="display: flex; align-items: center; padding: 8px 16px; font-size: 14px; color: #d1d5db; text-decoration: none; transition: all 0.3s;"
                    href="{{ url('/data-analysis') }}">Data Analysis</a>
                </div>
              </div>
            </li>
            <li>
              <a class="nav-link"
                style="padding: 8px 14px; font-size: 14px; font-weight: 500; color: #9ca3af; border-radius: 10px; text-decoration: none; transition: all 0.3s; position: relative;"
                href="{{ url('/portfolio') }}">Portfolio</a>
            </li>
            <li>
              <a class="nav-link"
                style="padding: 8px 14px; font-size: 14px; font-weight: 500; color: #9ca3af; border-radius: 10px; text-decoration: none; transition: all 0.3s; position: relative;"
                href="{{ url('/products') }}">Products</a>
            </li>
            <li>
              <a class="nav-link"
                style="padding: 8px 14px; font-size: 14px; font-weight: 500; color: #9ca3af; border-radius: 10px; text-decoration: none; transition: all 0.3s; position: relative;"
                href="{{ url('/themes') }}">Themes</a>
            </li>
            <li>
              <a class="nav-link"
                style="padding: 8px 14px; font-size: 14px; font-weight: 500; color: #9ca3af; border-radius: 10px; text-decoration: none; transition: all 0.3s; position: relative;"
                href="{{ url('/contact') }}">Contact</a>
            </li>
          </ul>
        </div>

        <!-- Right Side Buttons -->
        <div id="desktopBtns" style="display: none; align-items: center; gap: 10px;">
          <a href="{{ url('/contact') }}"
            style="display: inline-flex; align-items: center; padding: 8px 20px; background: linear-gradient(135deg, #10b981, #059669); color: #ffffff; font-size: 13px; font-weight: 600; border-radius: 10px; text-decoration: none; border: 1px solid rgba(16,185,129,0.3); transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); box-shadow: 0 4px 15px rgba(16,185,129,0.25);"
            onmouseover="this.style.background='linear-gradient(135deg, #10b981, #047857)'; this.style.transform='translateY(-2px) scale(1.04)'; this.style.boxShadow='0 8px 25px rgba(16,185,129,0.4)'; this.style.borderColor='rgba(16,185,129,0.5)'"
            onmouseout="this.style.background='linear-gradient(135deg, #10b981, #059669)'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 4px 15px rgba(16,185,129,0.25)'; this.style.borderColor='rgba(16,185,129,0.3)'">Get
            Quote</a>
        </div>

        <!-- Mobile Menu Button with Bounce Animation -->
        <button id="mobileMenuBtn"
          style="display: flex; align-items: center; justify-content: center; width: 46px; height: 46px; border-radius: 12px; background: linear-gradient(135deg, rgba(16,185,129,0.15), rgba(5,150,105,0.08)); border: 1.5px solid rgba(16,185,129,0.2); cursor: pointer; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); position: relative; backdrop-filter: blur(10px);"
          onmouseover="this.style.background='linear-gradient(135deg, rgba(16,185,129,0.25), rgba(5,150,105,0.15))'; this.style.borderColor='rgba(16,185,129,0.4)'; this.style.transform='scale(1.05)'"
          onmouseout="this.style.background='linear-gradient(135deg, rgba(16,185,129,0.15), rgba(5,150,105,0.08))'; this.style.borderColor='rgba(16,185,129,0.2)'; this.style.transform='scale(1)'">

          <!-- Hamburger Icon -->
          <svg id="hamburgerIcon"
            style="width: 24px; height: 24px; color: #10b981; position: absolute; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);"
            fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>

          <!-- Cross Icon with Bounce Design -->
          <svg id="crossIcon"
            style="width: 24px; height: 24px; color: #10b981; position: absolute; display: none; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);"
            fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <!-- Rotating circle background -->
            <circle cx="12" cy="12" r="11" stroke="currentColor" stroke-width="1.5" opacity="0.2" />
            <!-- Cross lines with rounded caps -->
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 8L16 16M8 16L16 8" />
          </svg>
        </button>
      </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
      style="display: none; background: #0a0e1a; border-top: 1px solid rgba(255,255,255,0.04); max-height: calc(100vh - 70px); overflow-y: auto; position: absolute; left: 0; right: 0; top: 70px; z-index: 50;">
      <div style="max-width: 1280px; margin: 0 auto; padding: 16px 20px 24px;">
        <ul style="list-style: none; margin: 0; padding: 0;">
          <li>
            <a style="display: flex; align-items: center; padding: 12px 16px; font-size: 15px; font-weight: 500; color: #d1d5db; border-radius: 12px; text-decoration: none; transition: all 0.3s;"
              href="{{ url('/') }}"
              onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
              onmouseout="this.style.background='transparent'; this.style.color='#d1d5db'">
              <svg style="width: 18px; height: 18px; margin-right: 12px; color: #10b981;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg>
              Home
            </a>
          </li>
          <li>
            <a style="display: flex; align-items: center; padding: 12px 16px; font-size: 15px; font-weight: 500; color: #d1d5db; border-radius: 12px; text-decoration: none; transition: all 0.3s;"
              href="{{ url('/about') }}"
              onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
              onmouseout="this.style.background='transparent'; this.style.color='#d1d5db'">
              <svg style="width: 18px; height: 18px; margin-right: 12px; color: #10b981;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              About
            </a>
          </li>
          <li>
            <button class="mobile-svc-btn"
              style="width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 12px 16px; font-size: 15px; font-weight: 500; color: #d1d5db; border-radius: 12px; background: transparent; border: none; cursor: pointer; transition: all 0.3s;"
              onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
              onmouseout="this.style.background='transparent'; this.style.color='#d1d5db'">
              <span style="display: flex; align-items: center;">
                <svg style="width: 18px; height: 18px; margin-right: 12px; color: #10b981;" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                  </path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Services
              </span>
              <span class="mobile-sub-arrow"
                style="color: #6b7280; font-size: 12px; transition: transform 0.4s;">▾</span>
            </button>
            <ul class="mobile-submenu"
              style="display: none; margin: 4px 0 0 0; padding: 4px 0; list-style: none; background: rgba(255,255,255,0.02); border-radius: 10px; overflow: hidden;">
              <li><a
                  style="display: flex; align-items: center; padding: 10px 16px 10px 46px; font-size: 14px; color: #9ca3af; border-radius: 6px; text-decoration: none; transition: all 0.3s;"
                  href="{{ url('/software-development') }}"
                  onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
                  onmouseout="this.style.background='transparent'; this.style.color='#9ca3af'">Software Development</a>
              </li>
              <li><a
                  style="display: flex; align-items: center; padding: 10px 16px 10px 46px; font-size: 14px; color: #9ca3af; border-radius: 6px; text-decoration: none; transition: all 0.3s;"
                  href="{{ url('/apps-development') }}"
                  onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
                  onmouseout="this.style.background='transparent'; this.style.color='#9ca3af'">Apps Development</a></li>
              <li><a
                  style="display: flex; align-items: center; padding: 10px 16px 10px 46px; font-size: 14px; color: #9ca3af; border-radius: 6px; text-decoration: none; transition: all 0.3s;"
                  href="{{ url('/web-development') }}"
                  onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
                  onmouseout="this.style.background='transparent'; this.style.color='#9ca3af'">Web Development</a></li>
              <li><a
                  style="display: flex; align-items: center; padding: 10px 16px 10px 46px; font-size: 14px; color: #9ca3af; border-radius: 6px; text-decoration: none; transition: all 0.3s;"
                  href="{{ url('/digital-marketing') }}"
                  onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
                  onmouseout="this.style.background='transparent'; this.style.color='#9ca3af'">Digital Marketing</a>
              </li>
              <li><a
                  style="display: flex; align-items: center; padding: 10px 16px 10px 46px; font-size: 14px; color: #9ca3af; border-radius: 6px; text-decoration: none; transition: all 0.3s;"
                  href="{{ url('/seo') }}"
                  onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
                  onmouseout="this.style.background='transparent'; this.style.color='#9ca3af'">SEO</a></li>
              <li><a
                  style="display: flex; align-items: center; padding: 10px 16px 10px 46px; font-size: 14px; color: #9ca3af; border-radius: 6px; text-decoration: none; transition: all 0.3s;"
                  href="{{ url('/data-analysis') }}"
                  onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
                  onmouseout="this.style.background='transparent'; this.style.color='#9ca3af'">Data Analysis</a></li>
            </ul>
          </li>
          <li>
            <a style="display: flex; align-items: center; padding: 12px 16px; font-size: 15px; font-weight: 500; color: #d1d5db; border-radius: 12px; text-decoration: none; transition: all 0.3s;"
              href="{{ url('/portfolio') }}"
              onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
              onmouseout="this.style.background='transparent'; this.style.color='#d1d5db'">
              <svg style="width: 18px; height: 18px; margin-right: 12px; color: #10b981;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
              </svg>
              Portfolio
            </a>
          </li>
          <li>
            <a style="display: flex; align-items: center; padding: 12px 16px; font-size: 15px; font-weight: 500; color: #d1d5db; border-radius: 12px; text-decoration: none; transition: all 0.3s;"
              href="{{ url('/products') }}"
              onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
              onmouseout="this.style.background='transparent'; this.style.color='#d1d5db'">
              <svg style="width: 18px; height: 18px; margin-right: 12px; color: #10b981;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
              </svg>
              Products
            </a>
          </li>
          <li>
            <a style="display: flex; align-items: center; padding: 12px 16px; font-size: 15px; font-weight: 500; color: #d1d5db; border-radius: 12px; text-decoration: none; transition: all 0.3s;"
              href="{{ url('/themes') }}"
              onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
              onmouseout="this.style.background='transparent'; this.style.color='#d1d5db'">
              <svg style="width: 18px; height: 18px; margin-right: 12px; color: #10b981;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                </path>
              </svg>
              Themes
            </a>
          </li>
          <li>
            <a style="display: flex; align-items: center; padding: 12px 16px; font-size: 15px; font-weight: 500; color: #d1d5db; border-radius: 12px; text-decoration: none; transition: all 0.3s;"
              href="{{ url('/contact') }}"
              onmouseover="this.style.background='rgba(255,255,255,0.04)'; this.style.color='#ffffff'"
              onmouseout="this.style.background='transparent'; this.style.color='#d1d5db'">
              <svg style="width: 18px; height: 18px; margin-right: 12px; color: #10b981;" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
              </svg>
              Contact
            </a>
          </li>
          <li>
            <a style="display: flex; align-items: center; justify-content: center; padding: 13px 16px; font-size: 15px; font-weight: 600; color: #ffffff; background: linear-gradient(135deg, #10b981, #059669); border-radius: 12px; text-decoration: none; border: 1px solid rgba(16,185,129,0.3); transition: all 0.4s; box-shadow: 0 4px 15px rgba(16,185,129,0.25);"
              href="{{ url('/contact') }}"
              onmouseover="this.style.background='linear-gradient(135deg, #059669, #047857)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(16,185,129,0.4)'"
              onmouseout="this.style.background='linear-gradient(135deg, #10b981, #059669)'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(16,185,129,0.25)'">Get
              A Quote</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>

<style>
.nav-link::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  border-radius: 2px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateX(-50%);
  background: #10b981;
}

.nav-link:hover::before {
  width: 50%;
}

.nav-link.active::before {
  width: 50%;
}

@keyframes pulse-slow {

  0%,
  100% {
    opacity: 0.3;
    transform: scale(1);
  }

  50% {
    opacity: 0.6;
    transform: scale(1.1);
  }
}

@keyframes logoFloat {

  0%,
  100% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(-3px);
  }
}

@keyframes waterDrop {
  0% {
    transform: scale(0.3);
    opacity: 0.9;
  }

  30% {
    transform: scale(0.8);
    opacity: 0.7;
  }

  60% {
    transform: scale(1.5);
    opacity: 0.3;
  }

  100% {
    transform: scale(2.2);
    opacity: 0;
  }
}

/* Cross Icon Bounce Animation */
@keyframes crossBounce {
  0% {
    transform: scale(0) rotate(-90deg);
    opacity: 0;
  }

  60% {
    transform: scale(1.2) rotate(10deg);
    opacity: 1;
  }

  80% {
    transform: scale(0.9) rotate(-5deg);
  }

  100% {
    transform: scale(1) rotate(0deg);
    opacity: 1;
  }
}

@keyframes hamburgerBounce {
  0% {
    transform: scale(0) rotate(90deg);
    opacity: 0;
  }

  60% {
    transform: scale(1.2) rotate(-10deg);
    opacity: 1;
  }

  80% {
    transform: scale(0.9) rotate(5deg);
  }

  100% {
    transform: scale(1) rotate(0deg);
    opacity: 1;
  }
}

.cross-bounce {
  animation: crossBounce 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards !important;
}

.hamburger-bounce {
  animation: hamburgerBounce 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards !important;
}

/* Hover dropdown */
li:hover .services-dropdown {
  opacity: 1 !important;
  visibility: visible !important;
  transform: translateY(0) !important;
}

.dropdown-item:hover {
  background: rgba(16, 185, 129, 0.06) !important;
  color: #ffffff !important;
  padding-left: 22px !important;
}

#mobileMenu::-webkit-scrollbar {
  width: 4px;
}

#mobileMenu::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.02);
}

#mobileMenu::-webkit-scrollbar-thumb {
  background: linear-gradient(135deg, #10b981, #059669);
  border-radius: 4px;
}

@media (min-width: 1024px) {

  #desktopMenu,
  #desktopBtns {
    display: flex !important;
  }

  #mobileMenuBtn {
    display: none !important;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var menu = document.getElementById('mobileMenu');
  var btn = document.getElementById('mobileMenuBtn');
  var hamburgerIcon = document.getElementById('hamburgerIcon');
  var crossIcon = document.getElementById('crossIcon');

  // Mobile menu toggle with bounce animation
  if (btn) {
    btn.addEventListener('click', function() {
      if (!menu) return;
      var isOpen = menu.style.display === 'block';
      menu.style.display = isOpen ? 'none' : 'block';
      document.body.style.overflow = isOpen ? '' : 'hidden';

      // Toggle icons with bounce animation
      if (hamburgerIcon && crossIcon) {
        if (isOpen) {
          // Show hamburger with bounce
          hamburgerIcon.style.display = 'block';
          crossIcon.style.display = 'none';
          hamburgerIcon.classList.remove('cross-bounce');
          hamburgerIcon.classList.add('hamburger-bounce');
          // Remove animation class after it completes
          setTimeout(function() {
            hamburgerIcon.classList.remove('hamburger-bounce');
          }, 600);
        } else {
          // Show cross with bounce
          hamburgerIcon.style.display = 'none';
          crossIcon.style.display = 'block';
          crossIcon.classList.remove('hamburger-bounce');
          crossIcon.classList.add('cross-bounce');
          // Remove animation class after it completes
          setTimeout(function() {
            crossIcon.classList.remove('cross-bounce');
          }, 600);
        }
      }
    });
  }

  // Mobile Services submenu toggle
  var svcBtns = document.querySelectorAll('.mobile-svc-btn');
  svcBtns.forEach(function(svcBtn) {
    svcBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      var subMenu = this.nextElementSibling;
      var arrow = this.querySelector('.mobile-sub-arrow');
      if (!subMenu) return;
      var isOpen = subMenu.style.display === 'block';
      subMenu.style.display = isOpen ? 'none' : 'block';
      if (arrow) arrow.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    });
  });

  // Close mobile menu on outside click
  document.addEventListener('click', function(event) {
    if (menu && menu.style.display === 'block' && btn && !btn.contains(event.target) && !menu.contains(event
        .target)) {
      menu.style.display = 'none';
      document.body.style.overflow = '';
      if (hamburgerIcon && crossIcon) {
        hamburgerIcon.style.display = 'block';
        crossIcon.style.display = 'none';
        hamburgerIcon.classList.remove('cross-bounce');
        hamburgerIcon.classList.add('hamburger-bounce');
        setTimeout(function() {
          hamburgerIcon.classList.remove('hamburger-bounce');
        }, 600);
      }
    }
  });

  // Close on resize to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 1024 && menu) {
      menu.style.display = 'none';
      document.body.style.overflow = '';
      if (hamburgerIcon && crossIcon) {
        hamburgerIcon.style.display = 'block';
        crossIcon.style.display = 'none';
      }
    }
  });
});
</script>