<header class="main-header bg-gray-900 border-b border-gray-800 sticky top-0 z-40">
  <div class="header-sticky relative">
    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="absolute inset-0 bg-gray-900"></div>
      <div class="absolute top-0 left-0 w-64 h-64 bg-green-500/5 rounded-full blur-3xl"></div>
      <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <nav class="flex items-center justify-between h-20">
        <!-- Logo -->
        <a class="flex items-center gap-3 flex-shrink-0 group" href="{{ url('/') }}">
          <div class="relative">
            <div class="absolute -inset-2 bg-green-500/20 rounded-full blur-2xl animate-pulse-slow"></div>
            <div
              class="absolute -inset-1 bg-green-500 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
            </div>
            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Inoodex"
              class="h-10 w-auto relative transition-all duration-500 group-hover:scale-110 brightness-0 invert" />
          </div>

        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center">
          <ul class="flex items-center gap-0.5" id="menu">
            <li>
              <a class="nav-link px-4 py-2.5 text-sm font-semibold text-gray-400 hover:text-white rounded-xl transition-all duration-300 relative group"
                href="{{ url('/') }}">
                <span class="relative z-10">Home</span>
                <span
                  class="absolute inset-0 bg-white/0 rounded-xl group-hover:bg-white/5 transition-all duration-300"></span>
              </a>
            </li>
            <li>
              <a class="nav-link px-4 py-2.5 text-sm font-semibold text-gray-400 hover:text-white rounded-xl transition-all duration-300 relative group"
                href="{{ url('/about') }}">
                <span class="relative z-10">About</span>
                <span
                  class="absolute inset-0 bg-white/0 rounded-xl group-hover:bg-white/5 transition-all duration-300"></span>
              </a>
            </li>
            <li class="relative group">
              <a class="nav-link px-4 py-2.5 text-sm font-semibold text-gray-400 hover:text-white rounded-xl transition-all duration-300 relative group inline-flex items-center gap-1.5"
                href="{{ url('/services') }}">
                <span class="relative z-10 flex items-center gap-1">
                  Services
                  <span class="text-gray-500 text-xs transition-transform duration-300 group-hover:rotate-180">▾</span>
                </span>
                <span
                  class="absolute inset-0 bg-white/0 rounded-xl group-hover:bg-white/5 transition-all duration-300"></span>
              </a>
              <!-- Dropdown -->
              <div
                class="absolute left-0 top-full mt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                <div class="bg-gray-800 shadow-2xl rounded-2xl min-w-[220px] py-3 border border-gray-700">
                  <div class="px-4 pb-3 mb-2 border-b border-gray-700">
                    <span class="text-xs font-bold text-green-400 uppercase tracking-wider">Our Services</span>
                  </div>
                  <a class="flex items-center px-5 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-700/50 transition-all duration-300"
                    href="{{ url('/software-development') }}">
                    Software Development
                  </a>
                  <a class="flex items-center px-5 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-700/50 transition-all duration-300"
                    href="{{ url('/apps-development') }}">
                    Apps Development
                  </a>
                  <a class="flex items-center px-5 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-700/50 transition-all duration-300"
                    href="{{ url('/web-development') }}">
                    Web Development
                  </a>
                  <a class="flex items-center px-5 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-700/50 transition-all duration-300"
                    href="{{ url('/digital-marketing') }}">
                    Digital Marketing
                  </a>
                  <a class="flex items-center px-5 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-700/50 transition-all duration-300"
                    href="{{ url('/seo') }}">
                    SEO
                  </a>
                  <a class="flex items-center px-5 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-700/50 transition-all duration-300"
                    href="{{ url('/data-analysis') }}">
                    Data Analysis
                  </a>
                </div>
              </div>
            </li>
            <li>
              <a class="nav-link px-4 py-2.5 text-sm font-semibold text-gray-400 hover:text-white rounded-xl transition-all duration-300 relative group"
                href="{{ url('/portfolio') }}">
                <span class="relative z-10">Portfolio</span>
                <span
                  class="absolute inset-0 bg-white/0 rounded-xl group-hover:bg-white/5 transition-all duration-300"></span>
              </a>
            </li>
            <li>
              <a class="nav-link px-4 py-2.5 text-sm font-semibold text-gray-400 hover:text-white rounded-xl transition-all duration-300 relative group"
                href="{{ url('/products') }}">
                <span class="relative z-10">Products</span>
                <span
                  class="absolute inset-0 bg-white/0 rounded-xl group-hover:bg-white/5 transition-all duration-300"></span>
              </a>
            </li>
            <li>
              <a class="nav-link px-4 py-2.5 text-sm font-semibold text-gray-400 hover:text-white rounded-xl transition-all duration-300 relative group"
                href="{{ url('/themes') }}">
                <span class="relative z-10">Themes</span>
                <span
                  class="absolute inset-0 bg-white/0 rounded-xl group-hover:bg-white/5 transition-all duration-300"></span>
              </a>
            </li>
            <li>
              <a class="nav-link px-4 py-2.5 text-sm font-semibold text-gray-400 hover:text-white rounded-xl transition-all duration-300 relative group"
                href="{{ url('/contact') }}">
                <span class="relative z-10">Contact</span>
                <span
                  class="absolute inset-0 bg-white/0 rounded-xl group-hover:bg-white/5 transition-all duration-300"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Right Side Buttons -->
        <div class="hidden lg:flex items-center gap-3">
          <a href="{{ url('/contact') }}"
            class="group relative inline-flex items-center px-6 py-2.5 bg-green-600 hover:bg-green-700 text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-xl hover:shadow-green-500/30 hover:scale-105">
            <span class="relative z-10">Free Consultation</span>
          </a>
          <a href="{{ url('/contact') }}"
            class="inline-flex items-center px-6 py-2.5 bg-gray-800 hover:bg-gray-700 text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-xl hover:scale-105 border border-gray-700">
            Get Quote
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button
          class="lg:hidden flex items-center p-2.5 rounded-xl bg-gray-800 hover:bg-gray-700 transition-all duration-300 border border-gray-700"
          onclick="toggleMobileMenu()">
          <span class="text-white text-lg font-bold">☰</span>
        </button>
      </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden lg:hidden bg-gray-900 border-t border-gray-800 shadow-2xl">
      <div class="max-w-7xl mx-auto px-4 py-6">
        <ul class="space-y-1.5">
          <li>
            <a class="flex items-center px-4 py-3 text-sm font-semibold text-gray-400 hover:text-white hover:bg-gray-800 rounded-xl transition-all duration-300"
              href="{{ url('/') }}">
              Home
            </a>
          </li>
          <li>
            <a class="flex items-center px-4 py-3 text-sm font-semibold text-gray-400 hover:text-white hover:bg-gray-800 rounded-xl transition-all duration-300"
              href="{{ url('/about') }}">
              About
            </a>
          </li>
          <li>
            <button
              class="w-full flex items-center justify-between px-4 py-3 text-sm font-semibold text-gray-400 hover:text-white hover:bg-gray-800 rounded-xl transition-all duration-300"
              onclick="toggleMobileSubMenu(this)">
              <span>Services</span>
              <span class="text-gray-500 text-xs transition-transform duration-300">▾</span>
            </button>
            <ul class="hidden ml-4 mt-1 space-y-1">
              <li><a
                  class="flex items-center px-4 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-300"
                  href="{{ url('/software-development') }}">Software Development</a></li>
              <li><a
                  class="flex items-center px-4 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-300"
                  href="{{ url('/apps-development') }}">Apps Development</a></li>
              <li><a
                  class="flex items-center px-4 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-300"
                  href="{{ url('/web-development') }}">Web Development</a></li>
              <li><a
                  class="flex items-center px-4 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-300"
                  href="{{ url('/digital-marketing') }}">Digital Marketing</a></li>
              <li><a
                  class="flex items-center px-4 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-300"
                  href="{{ url('/seo') }}">SEO</a></li>
              <li><a
                  class="flex items-center px-4 py-2.5 text-sm text-gray-400 hover:text-white hover:bg-gray-800 rounded-lg transition-all duration-300"
                  href="{{ url('/data-analysis') }}">Data Analysis</a></li>
            </ul>
          </li>
          <li>
            <a class="flex items-center px-4 py-3 text-sm font-semibold text-gray-400 hover:text-white hover:bg-gray-800 rounded-xl transition-all duration-300"
              href="{{ url('/portfolio') }}">
              Portfolio
            </a>
          </li>
          <li>
            <a class="flex items-center px-4 py-3 text-sm font-semibold text-gray-400 hover:text-white hover:bg-gray-800 rounded-xl transition-all duration-300"
              href="{{ url('/products') }}">
              Products
            </a>
          </li>
          <li>
            <a class="flex items-center px-4 py-3 text-sm font-semibold text-gray-400 hover:text-white hover:bg-gray-800 rounded-xl transition-all duration-300"
              href="{{ url('/themes') }}">
              Themes
            </a>
          </li>
          <li>
            <a class="flex items-center px-4 py-3 text-sm font-semibold text-gray-400 hover:text-white hover:bg-gray-800 rounded-xl transition-all duration-300"
              href="{{ url('/contact') }}">
              Contact
            </a>
          </li>
          <li class="pt-2 border-t border-gray-800">
            <a class="flex items-center justify-center px-4 py-3.5 text-sm font-semibold text-white bg-green-600 hover:bg-green-700 rounded-xl transition-all duration-300 hover:shadow-xl hover:shadow-green-500/30"
              href="{{ url('/contact') }}">
              Free Consultation
            </a>
          </li>
          <li>
            <a class="flex items-center justify-center px-4 py-3.5 text-sm font-semibold text-white bg-gray-800 hover:bg-gray-700 rounded-xl transition-all duration-300 border border-gray-700"
              href="{{ url('/contact') }}">
              Get A Quote
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>

<script>
function toggleMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  menu.classList.toggle('hidden');
}

function toggleMobileSubMenu(button) {
  const subMenu = button.nextElementSibling;
  subMenu.classList.toggle('hidden');
  const icon = button.querySelector('span:last-child');
  if (icon) {
    icon.classList.toggle('rotate-180');
  }
}

// Close mobile menu on window resize
window.addEventListener('resize', function() {
  if (window.innerWidth >= 1024) {
    document.getElementById('mobileMenu').classList.add('hidden');
  }
});
</script>

<style>
/* Main header */
.main-header {
  position: sticky;
  top: 0;
  z-index: 50;
}

/* Animations */
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

.animate-pulse-slow {
  animation: pulse-slow 4s ease-in-out infinite;
}

/* Nav link styles with animated underline */
.nav-link {
  position: relative;
}

.nav-link::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2.5px;
  border-radius: 2px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transform: translateX(-50%);
  background: #22c55e;
}

.nav-link:hover::before {
  width: 60%;
}

.nav-link.active::before {
  width: 60%;
}

/* Dropdown animations */
.group:hover .group-hover\:opacity-100 {
  opacity: 1;
}

.group:hover .group-hover\:visible {
  visibility: visible;
}

.group:hover .group-hover\:translate-y-0 {
  transform: translateY(0);
}

/* Mobile menu */
#mobileMenu {
  transition: all 0.3s ease-in-out;
  max-height: 80vh;
  overflow-y: auto;
}

#mobileMenu::-webkit-scrollbar {
  width: 4px;
}

#mobileMenu::-webkit-scrollbar-track {
  background: rgba(255, 255, 255, 0.05);
}

#mobileMenu::-webkit-scrollbar-thumb {
  background: #22c55e;
  border-radius: 2px;
}

/* Rotate animation for dropdown arrow */
.rotate-180 {
  transform: rotate(180deg);
}

/* Hover scale effect */
.hover\:scale-105:hover {
  transform: scale(1.05);
}
</style>