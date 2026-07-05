<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $portfolio->title ?? 'Portfolio Details' }} | Inoodex</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap');

  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: #050a14;
    color: #d1d5db;
  }

  .glass-card {
    background: rgba(17, 24, 39, 0.7);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  .project-img {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    border-radius: 16px;
    transition: transform 0.5s ease;
  }

  .img-container {
    overflow: hidden;
    border-radius: 16px;
  }

  .img-container:hover .project-img {
    transform: scale(1.05);
  }

  .gradient-text {
    background: linear-gradient(135deg, #ffffff 0%, #10b981 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* গোল বাটন ও অটো-বাউন্স অ্যানিমেশন */
  .view-live-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 20px;
    background: rgba(16, 185, 129, 0.1);
    border: 1px solid rgba(16, 185, 129, 0.3);
    border-radius: 50px;
    transition: all 0.4s ease;
  }

  .circle-icon {
    width: 30px;
    height: 30px;
    background: rgba(16, 185, 129, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  @keyframes btn-bounce {

    0%,
    100% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(5px);
    }
  }

  .btn-bounce {
    animation: btn-bounce 1.5s ease-in-out infinite;
  }
  </style>
</head>

<body class="overflow-x-hidden">
  @include('layout.headerNav')
  <!-- Header -->
  <header class="py-16 text-center">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-4 gradient-text">{{ $portfolio->title }}</h1>
    <p class="text-emerald-500 uppercase tracking-widest text-xs font-bold">
      {{ $portfolio->category->name ?? 'Project Detail' }}</p>
  </header>

  <main class="max-w-5xl mx-auto px-6 pb-20">

    <!-- Hero Image -->
    <div class="img-container mb-10 shadow-2xl shadow-emerald-900/20">
      <img
        src="{{ $portfolio->image ? asset('storage/'.$portfolio->image) : 'https://placehold.co/1200x675/111827/10b981?text=Portfolio+Image' }}"
        alt="Project" class="project-img">
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
      <div class="glass-card p-5 rounded-2xl border border-white/5 text-center">
        <p class="text-[10px] text-gray-500 uppercase">Client</p> <br>
        <h4 class="font-bold text-white">{{ $portfolio->title ?? '' }}</h4>
      </div>
      <div class="glass-card p-5 rounded-2xl border border-white/5 text-center">
        <p class="text-[10px] text-gray-500 uppercase">Location</p> <br>
        <h4 class="font-bold text-white">{{ $portfolio->location ?? 'Dhaka, Bangladesh' }}</h4> <br>
      </div>
      <div class="glass-card p-5 rounded-2xl border border-white/5 text-center">
        <p class="text-[10px] text-gray-500 uppercase">Date</p><br>
        <h4 class="font-bold text-white">{{ $portfolio->created_at?->format('d M, Y') ?? 'N/A' }}</h4><br>
      </div>
      <div
        class="glass-card p-5 rounded-2xl border border-white/5 text-center flex flex-col items-center justify-center">
        <p class="text-[10px] text-gray-500 uppercase mb-2">Website</p>
        <a href="{{ $portfolio->demo_url ?? '#' }}"
          class="view-live-btn btn-bounce font-bold text-emerald-400 hover:bg-emerald-500/20">
          View Live
          <span class="circle-icon"><i class="fas fa-arrow-right text-[10px]"></i></span>
        </a>
      </div>
    </div>

    <!-- Article Section -->
    <article class="space-y-10">


      @if($portfolio->features)
      <section>
        <h2 class="text-3xl font-bold text-white mb-8">Key Features</h2>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
          @foreach (explode("\n", $portfolio->features) as $feature)
          @if(trim($feature))
          <li
            class="bg-white/5 p-5 rounded-2xl border border-white/5 text-sm hover:border-emerald-500/50 transition-all">
            <i class="fas fa-check text-emerald-500 mr-3"></i> {{ trim($feature) }}
          </li>
          @endif
          @endforeach
        </ul>
      </section>
      @endif
    </article>
    <section>


      <h2 class="text-3xl font-bold text-white mb-6">Project Overview</h2>
      <div class="text-gray-400 leading-relaxed text-lg">{!! $portfolio->description !!}</div>
    </section>

    <!-- Gallery -->
    @if ($portfolio->gallery && count($portfolio->gallery) > 0)
    <div class="mt-20">
      <h2 class="text-3xl font-bold text-white mb-8">Project Gallery</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($portfolio->gallery as $image)
        <div class="img-container">
          <img src="{{ asset('storage/' . $image) }}" alt="Gallery" class="project-img">
        </div>
        @endforeach
      </div>
    </div>
    @endif
  </main>
  @include('layout.footer')

</body>

</html>