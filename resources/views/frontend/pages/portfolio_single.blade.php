<!DOCTYPE html>
<html lang="zxx">
@include('layout.header')

<body>
    <!-- Header Start -->
    @include('layout.headerNav')
    <!-- Header End -->

    <!-- Main body content start -->
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3">Portfolio</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="flex flex-wrap list-none p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-project-single">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mb-8">
                    <div class="project-feature-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                        </figure>
                    </div>
                </div>

                <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                    <div class="project-sidebar wow fadeInUp" data-wow-delay="0.25s">
                        <div class="about-project-box">
                            <div class="project-info-box">
                                <div class="project-icon">
                                    <img src="{{ asset('frontend/assets/images/icon-date.svg') }}" alt="">
                                </div>
                                <p>Date</p>
                                <h3>{{ $portfolio->created_at->format('d M Y') }}</h3>
                            </div>
                            <div class="project-info-box">
                                <div class="project-icon">
                                    <img src="{{ asset('frontend/assets/images/icon-client.svg') }}" alt="">
                                </div>
                                <p>Client</p>
                                <h3>{{ $portfolio->client_name ?? 'N/A' }}</h3>
                            </div>
                            <div class="project-info-box">
                                <div class="project-icon">
                                    <img src="{{ asset('frontend/assets/images/icon-website.svg') }}" alt="">
                                </div>
                                <p>Website</p>
                                <h3>
                                    @if ($portfolio->demo_url)
                                        <a href="{{ $portfolio->demo_url }}" target="_blank">{{ $portfolio->demo_url }}</a>
                                    @else
                                        N/A
                                    @endif
                                </h3>
                            </div>
                            <div class="project-info-box">
                                <div class="project-icon">
                                    <img src="{{ asset('frontend/assets/images/icon-location-1.svg') }}" alt="">
                                </div>
                                <p>Location</p>
                                <h3>{{ $portfolio->location ?? 'N/A' }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 px-4">
                    <div class="project-content">
                        <div class="project-entry">
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s">Project Overview</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">{!! $portfolio->description !!}</p>

                            @if ($portfolio->summary)
                                <h2 class="wow fadeInUp" data-wow-delay="1s">Project Summary</h2>
                                <p class="wow fadeInUp" data-wow-delay="1.25s">{!! $portfolio->summary !!}</p>
                            @endif

                            @if ($portfolio->features)
                                <ul class="wow fadeInUp" data-wow-delay="1.5s">
                                    @foreach (explode("\n", $portfolio->features) as $feature)
                                        <li>{{ trim($feature) }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($portfolio->gallery && count($portfolio->gallery))
        <div class="project-details-gallery">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <div class="project-gallery">
                            <div class="flex flex-wrap gap-4 wow fadeInUp" data-wow-delay="0.25s">
                                @foreach ($portfolio->gallery as $image)
                                    <div class="project-gallery-item">
                                        <a href="{{ asset('storage/' . $image) }}" target="_blank">
                                            <figure class="image-anime">
                                                <img src="{{ asset('storage/' . $image) }}" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Footer Start -->
    @include('layout.footer')
</body>

</html>
