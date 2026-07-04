<style>
.exclusive-partners {
  background: #0f172a;
  padding: 80px 0;
  position: relative;
  overflow: hidden;
}

/* --- SECTION HEADER: LABEL ABOVE TITLE --- */
.section-header {
  max-width: 1200px;
  margin: 0 auto 50px auto;
  padding: 0 20px;
  text-align: center;
}

.exclusive-badge {
  display: inline-block;
  background: rgba(34, 197, 94, 0.12);
  color: #22c55e;
  font-size: 13px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 3px;
  padding: 8px 24px;
  border-radius: 50px;
  margin-bottom: 14px;
  border: 1px solid rgba(34, 197, 94, 0.15);
  backdrop-filter: blur(4px);
}

.partner-heading {
  font-size: 38px;
  font-weight: 700;
  color: #ffffff;
  line-height: 1.2;
  margin: 0;
}

.partner-heading span {
  color: #22c55e;
  position: relative;
}

.partner-heading span::after {
  content: '';
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, #22c55e, transparent);
  border-radius: 4px;
}

/* --- CENTER the track wrapper --- */
.partner-track-wrap {
  overflow: hidden;
  mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent);
  -webkit-mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent);
  display: flex;
  justify-content: center;
}

.partner-track {
  display: flex;
  gap: 24px;
  width: max-content;
  animation: partnerScroll 30s linear infinite;
  padding: 0 20px;
}

.partner-track:hover {
  animation-play-state: paused;
}

.partner-card {
  background: #1e293b;
  border-radius: 16px;
  padding: 30px 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 110px;
  min-width: 180px;
  border: 1px solid rgba(255, 255, 255, 0.05);
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.partner-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, transparent, #22c55e, transparent);
  transform: translateX(-100%);
  transition: transform 0.6s ease;
}

.partner-card:hover::before {
  transform: translateX(100%);
}

.partner-card:hover {
  border-color: rgba(34, 197, 94, 0.3) !important;
  box-shadow: 0 0 30px rgba(34, 197, 94, 0.08) !important;
  transform: translateY(-4px) !important;
}

.partner-card img {
  max-width: 100%;
  max-height: 60px;
  width: auto;
  height: auto;
  object-fit: contain;
  display: block;
  transition: all 0.4s ease;
  filter: grayscale(0.4) brightness(0.9);
}

.partner-card:hover img {
  filter: none;
  transform: scale(1.08);
}

@keyframes partnerScroll {
  0% {
    transform: translateX(0);
  }

  100% {
    transform: translateX(-50%);
  }
}

.p-anim {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.p-anim.visible {
  opacity: 1;
  transform: translateY(0);
}

@media (max-width: 640px) {
  .partner-heading {
    font-size: 26px;
  }

  .exclusive-partners {
    padding: 60px 0;
  }

  .partner-card {
    height: 80px;
    min-width: 140px;
    padding: 20px 24px;
  }

  .partner-track {
    gap: 16px;
  }

  .exclusive-badge {
    font-size: 11px;
    padding: 6px 18px;
    letter-spacing: 2px;
  }
}
</style>

<div class="exclusive-partners">
  <!-- SECTION HEADER: "Exclusive Partners" ABOVE "Our Partners" -->
  <div class="section-header p-anim" style="transition-delay:0.05s;">
    <span class="exclusive-badge">
      <i class=" style=" margin-right:8px;font-size:12px;"></i>
      Exclusive Partners
    </span>
    <h2 class="partner-heading">Our <span>Partners</span></h2>
  </div>

  <!-- PARTNER LOGOS TRACK -->
  <div class="partner-track-wrap">
    <div class="partner-track" id="partnerTrack">
      @foreach ($partners as $partner)
      <div class="partner-card">
        <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" title="{{ $partner->name }}">
      </div>
      @endforeach
      @foreach ($partners as $partner)
      <div class="partner-card">
        <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" title="{{ $partner->name }}">
      </div>
      @endforeach
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var section = document.querySelector('.exclusive-partners');
  if (!section) return;
  var items = section.querySelectorAll('.p-anim');
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15
  });
  items.forEach(function(item) {
    observer.observe(item);
  });
});
</script>