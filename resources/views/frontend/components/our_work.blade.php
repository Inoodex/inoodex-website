<style>
    .our-work {
        background: #0f172a;
        padding: 80px 0;
        position: relative;
    }
    .work-label {
        font-size: 14px;
        color: #22c55e;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 600;
        margin-bottom: 10px;
    }
    .work-heading {
        font-size: 36px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        line-height: 1.2;
    }
    .work-heading span { color: #22c55e; }

    .work-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-top: 40px;
    }

    .work-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        height: 350px;
        cursor: pointer;
        border: 1px solid rgba(255,255,255,0.05);
        transition: all 0.4s ease;
        background: #1e293b;
    }
    .work-card:hover {
        border-color: #22c55e;
        box-shadow: 0 0 20px rgba(34,197,94,0.15), 0 0 60px rgba(34,197,94,0.05);
        transform: translateY(-4px);
    }

    .work-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.5s ease;
        display: block;
    }
    .work-card:hover img {
        transform: scale(1.1);
    }

    /* Neon overlay - hidden by default */
    .work-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(15,23,42,0.1) 0%, rgba(15,23,42,0.95) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 30px;
        opacity: 0;
        transition: all 0.4s ease;
    }
    .work-card:hover .work-overlay {
        opacity: 1;
    }

    /* Neon glow border that appears inside */
    .work-overlay::before {
        content: '';
        position: absolute;
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px;
        border-radius: 16px;
        border: 2px solid transparent;
        background: linear-gradient(135deg, #22c55e, #16a34a, #22c55e) border-box;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }
    .work-card:hover .work-overlay::before {
        opacity: 1;
        animation: neonPulse 2s ease-in-out infinite;
    }

    @keyframes neonPulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    .work-overlay .category {
        display: inline-block;
        padding: 4px 14px;
        background: rgba(34,197,94,0.15);
        color: #22c55e;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 20px;
        margin-bottom: 12px;
        border: 1px solid rgba(34,197,94,0.2);
        align-self: flex-start;
    }
    .work-overlay h3 {
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 6px 0;
        line-height: 1.2;
    }
    .work-overlay h3 a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .work-overlay h3 a:hover { color: #22c55e; }
    .work-overlay .client {
        font-size: 14px;
        color: #94a3b8;
        margin: 0 0 16px 0;
    }

    .work-overlay .discover-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #22c55e;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    .work-overlay .discover-link:hover {
        gap: 14px;
        text-shadow: 0 0 20px rgba(34,197,94,0.5);
    }
    .work-overlay .discover-link .arrow-circle {
        width: 32px;
        height: 32px;
        background: #22c55e;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(34,197,94,0.3);
    }
    .work-overlay .discover-link:hover .arrow-circle {
        box-shadow: 0 0 20px rgba(34,197,94,0.6);
        transform: scale(1.1);
    }
    .work-overlay .discover-link .arrow-circle svg {
        color: #ffffff;
    }

    .work-btn-wrap {
        display: flex;
        justify-content: flex-end;
        margin-top: 10px;
    }

    @media (max-width: 1024px) {
        .work-grid { grid-template-columns: repeat(2, 1fr); }
        .work-heading { font-size: 28px; }
        .work-card { height: 300px; }
    }
    @media (max-width: 640px) {
        .work-grid { grid-template-columns: 1fr; }
        .work-heading { font-size: 24px; }
        .our-work { padding: 50px 0; }
        .work-card { height: 280px; }
    }
</style>

<div class="our-work">
    <div style="max-width:1200px;margin:0 auto;padding:0 20px;">
        <div style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;margin-bottom:10px;">
            <div>
                <div class="work-label wow fadeInUp">Our Works</div>
                <h2 class="work-heading wow fadeInUp" data-wow-delay="0.1s">Our <span>Latest Works</span></h2>
            </div>
            <div class="work-btn-wrap">
                <a href="{{ url('/portfolio') }}" class="services-btn" style="display:inline-block;padding:14px 36px;background:linear-gradient(135deg,#22c55e,#16a34a);color:#ffffff;font-size:14px;font-weight:600;text-transform:uppercase;letter-spacing:1px;border-radius:50px;text-decoration:none;transition:all 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 30px rgba(34,197,94,0.3)'" onmouseout="this.style.transform='';this.style.boxShadow=''">All Portfolio</a>
            </div>
        </div>

        <div class="work-grid">
            @if (isset($portfolios) && $portfolios->count())
                @foreach ($portfolios as $portfolio)
                    <div class="work-card">
                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                        <div class="work-overlay">
                            <span class="category">{{ $portfolio->category->name ?? 'Other' }}</span>
                            <h3><a href="{{ route('portfolio.show', $portfolio->id) }}">{{ $portfolio->title }}</a></h3>
                            <p class="client">{{ $portfolio->client_name }}</p>
                            <a href="{{ route('portfolio.show', $portfolio->id) }}" class="discover-link">
                                <span class="arrow-circle">
                                    <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </span>
                                Discover Case
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
