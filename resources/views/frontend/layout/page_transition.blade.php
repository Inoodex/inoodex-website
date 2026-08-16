<div id="pt-wrap" style="position: fixed; inset: 0; z-index: 9999; background: #010101; display: flex; align-items: center; justify-content: center; flex-direction: column; overflow: hidden;">

    <!-- Gradient mesh bg -->
    <div style="position: absolute; inset: 0; background:
        radial-gradient(ellipse 60% 40% at 20% 15%, rgba(244,166,55,0.10), transparent 60%),
        radial-gradient(ellipse 50% 40% at 85% 90%, rgba(80,100,140,0.08), transparent 60%),
        linear-gradient(180deg, #010101, #0b0e14);"></div>

    <!-- Orbiting particles -->
    <div id="pt-particles" style="position: absolute; inset: 0; pointer-events: none;"></div>

    <!-- Center content -->
    <div style="position: relative; z-index: 3; display: flex; align-items: center; justify-content: center; flex-direction: column;">

        <div class="pt-eyebrow" style="font-size: 11px; font-weight: 700; letter-spacing: 6px; color: #f4a637; text-transform: uppercase; opacity: 0; transform: translateY(12px); margin-bottom: 18px;">
            &mdash; Welcome to &mdash;
        </div>

        <!-- Wordmark -->
        <div class="pt-word" style="display: flex; overflow: hidden; position: relative; line-height: 1.1;">
            <span class="pt-char" style="color: #f4f5f7; font-size: 58px; font-weight: 900; font-family: 'Space Grotesk', 'Inter', 'Manrope', sans-serif; letter-spacing: 10px; text-transform: uppercase; display: inline-block; opacity: 0; transform: translateY(80px) skewY(6deg);">I</span>
            <span class="pt-char" style="color: #f4f5f7; font-size: 58px; font-weight: 900; font-family: 'Space Grotesk', 'Inter', 'Manrope', sans-serif; letter-spacing: 10px; text-transform: uppercase; display: inline-block; opacity: 0; transform: translateY(80px) skewY(6deg);">N</span>
            <span class="pt-char" style="color: #f4f5f7; font-size: 58px; font-weight: 900; font-family: 'Space Grotesk', 'Inter', 'Manrope', sans-serif; letter-spacing: 10px; text-transform: uppercase; display: inline-block; opacity: 0; transform: translateY(80px) skewY(6deg);">O</span>
            <span class="pt-char" style="color: #f4f5f7; font-size: 58px; font-weight: 900; font-family: 'Space Grotesk', 'Inter', 'Manrope', sans-serif; letter-spacing: 10px; text-transform: uppercase; display: inline-block; opacity: 0; transform: translateY(80px) skewY(6deg);">O</span>
            <span class="pt-char" style="color: #f4f5f7; font-size: 58px; font-weight: 900; font-family: 'Space Grotesk', 'Inter', 'Manrope', sans-serif; letter-spacing: 10px; text-transform: uppercase; display: inline-block; opacity: 0; transform: translateY(80px) skewY(6deg);">D</span>
            <span class="pt-char" style="color: #f4f5f7; font-size: 58px; font-weight: 900; font-family: 'Space Grotesk', 'Inter', 'Manrope', sans-serif; letter-spacing: 10px; text-transform: uppercase; display: inline-block; opacity: 0; transform: translateY(80px) skewY(6deg);">E</span>
            <span class="pt-char" style="color: #f4f5f7; font-size: 58px; font-weight: 900; font-family: 'Space Grotesk', 'Inter', 'Manrope', sans-serif; letter-spacing: 10px; text-transform: uppercase; display: inline-block; opacity: 0; transform: translateY(80px) skewY(6deg);">X</span>
        </div>

        <!-- Tagline -->
        <div class="pt-tagline" style="font-size: 12px; font-weight: 500; letter-spacing: 4px; color: #868c99; text-transform: uppercase; margin-top: 16px; opacity: 0;">
            Digital Solutions That Drive Growth
        </div>

        <!-- Progress -->
        <div style="width: 260px; height: 2px; background: rgba(244,245,247,0.08); border-radius: 2px; overflow: hidden; margin-top: 34px; position: relative;">
            <div class="pt-bar" style="width: 100%; height: 100%; background: linear-gradient(90deg, transparent, #f4a637, #D4AF37, #f4a637, transparent); background-size: 200% 100%; border-radius: 2px; transform: translateX(-101%);"></div>
        </div>

        <div class="pt-pct" style="margin-top: 14px; font-size: 12px; font-weight: 600; letter-spacing: 3px; color: #868c99;">LOADING <span class="pt-pct-num" style="color: #f4a637;">0</span>%</div>
    </div>

    <!-- Fine grain -->
    <div style="position: absolute; inset: 0; pointer-events: none; opacity: 0.22; background-image: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%27120%27 height=%27120%27%3E%3Cfilter id=%27n%27%3E%3CfeTurbulence type=%27fractalNoise%27 baseFrequency=%270.9%27 numOctaves=%272%27 stitchTiles=%27stitch%27/%3E%3C/filter%3E%3Crect width=%27100%25%27 height=%27100%25%27 filter=%27url(%23n)%27 opacity=%270.05%27/%3E%3C/svg%3E'); mix-blend-mode: overlay;"></div>
</div>

<style>
#pt-wrap .pt-eyebrow { animation: ptUp 0.22s cubic-bezier(0.22, 1, 0.36, 1) forwards; animation-delay: 0.08s; }
#pt-wrap .pt-tagline { animation: ptUp 0.22s cubic-bezier(0.22, 1, 0.36, 1) forwards; animation-delay: 0.35s; }
@keyframes ptUp {
    0% { opacity: 0; transform: translateY(12px); }
    100% { opacity: 1; transform: translateY(0); }
}
#pt-wrap .pt-char { will-change: transform, opacity; }
#pt-wrap .pt-char { animation: ptCharUp 0.25s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
#pt-wrap .pt-char:nth-child(1) { animation-delay: 0.15s; }
#pt-wrap .pt-char:nth-child(2) { animation-delay: 0.17s; }
#pt-wrap .pt-char:nth-child(3) { animation-delay: 0.19s; }
#pt-wrap .pt-char:nth-child(4) { animation-delay: 0.21s; }
#pt-wrap .pt-char:nth-child(5) { animation-delay: 0.23s; }
#pt-wrap .pt-char:nth-child(6) { animation-delay: 0.25s; }
#pt-wrap .pt-char:nth-child(7) { animation-delay: 0.27s; }
@keyframes ptCharUp {
    0% { opacity: 0; transform: translateY(80px) skewY(6deg); }
    100% { opacity: 1; transform: translateY(0) skewY(0); }
}
@media (max-width: 480px) {
    #pt-wrap .pt-char { font-size: 42px; letter-spacing: 6px; }
}
#pt-wrap .pt-bar { animation: ptBar 0.4s ease-in-out forwards; animation-delay: 0.15s; }
@keyframes ptBar {
    0% { transform: translateX(-101%); }
    100% { transform: translateX(101%); }
}
.pt-particle {
    position: absolute;
    border-radius: 50%;
    opacity: 0;
    animation: ptFloat linear infinite;
}
@keyframes ptFloat {
    0% { transform: translateY(20px); opacity: 0; }
    25% { opacity: 0.6; }
    75% { opacity: 0.3; }
    100% { transform: translateY(-40px); opacity: 0; }
}
/* Cinematic curtain reveal */
.pt-curtain {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 50.5%;
    transform: translateY(0);
    transition: transform 0.25s cubic-bezier(0.77, 0, 0.175, 1);
}
.pt-curtain.left { left: 0; background: #A15948; }
.pt-curtain.right { right: 0; background: #A15948; }
#pt-wrap.pt-done .pt-curtain.left { transform: translateX(-101%); }
#pt-wrap.pt-done .pt-curtain.right { transform: translateX(101%); }
#pt-wrap.pt-done {
    transition: opacity 0.10s ease;
    opacity: 0.999;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var w = document.getElementById('pt-wrap');
    if (!w) return;

    // Curtains
    var l = document.createElement('div'); l.className = 'pt-curtain left';
    var r = document.createElement('div'); r.className = 'pt-curtain right';
    w.appendChild(l); w.appendChild(r);

    // Particles
    var box = document.getElementById('pt-particles');
    for (var i = 0; i < 18; i++) {
        var p = document.createElement('div');
        p.className = 'pt-particle';
        var size = 2 + Math.random() * 4;
        p.style.width = size + 'px';
        p.style.height = size + 'px';
        p.style.left = (Math.random() * 100) + '%';
        p.style.top = (40 + Math.random() * 40) + '%';
        p.style.background = Math.random() > 0.5 ? '#f4a637' : '#D4AF37';
        p.style.boxShadow = '0 0 8px 1px ' + (Math.random() > 0.5 ? 'rgba(212,175,55,0.5)' : 'rgba(244,166,55,0.5)');
        p.style.animationDuration = (2 + Math.random() * 2.5) + 's';
        p.style.animationDelay = (Math.random() * 0.8) + 's';
        box.appendChild(p);
    }

    // Counter
    var num = w.querySelector('.pt-pct-num');
    var start = performance.now(), DUR = 400;
    function tick(now) {
        var p = Math.min(1, (now - start) / DUR);
        if (num) num.textContent = Math.round(p * 100);
        if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);

    requestAnimationFrame(function() { requestAnimationFrame(function() { w.classList.add('pt-ready'); }); });

    setTimeout(function() {
        w.classList.add('pt-done');
        setTimeout(function() { w.style.display = 'none'; }, 250);
    }, 600);
});
</script>