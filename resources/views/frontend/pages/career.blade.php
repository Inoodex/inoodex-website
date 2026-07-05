<!DOCTYPE html>
<html lang="zxx">
  @include('layout.header')

  <body class="tt-magic-cursor" style="background:#0f172a;color:#e2e8f0;">
    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
      <div id="ball"></div>
    </div>
    <!-- Magic Cursor End -->
    <!-- Header Start -->
    @include('layout.headerNav')
    <!-- Header End -->

    <!-- Main body content start -->
    <div class="page-header">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full">
            <div class="page-header-box">
              <h1 class="text-anime-style-3">Career</h1>
              <nav class="wow fadeInUp" data-wow-delay="0.25s">
                <ol class="flex flex-wrap list-none p-0 m-0">
                  <li class="breadcrumb-item"><a href="#">home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">career</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="career-area">
      <div class="max-w-7xl mx-auto px-4">
        <div class="section-title">
          <h2>Our Current Openings</h2>
        </div>
        <div class="space-y-4">
          <div class="career-items flex flex-wrap items-center justify-between">
            <div class="career-title">
              <h3><a href="career-single.html">Frontend Developer Intern</a></h3>
              <div class="career-meta">
                <ul class="flex flex-wrap gap-2">
                  <li>Onsite</li>
                  <li>Full Time</li>
                  <li>Intern</li>
                </ul>
              </div>
            </div>
            <div>
              <a href="career-single.html" class="btn-default career-btn">Submit</a>
            </div>
          </div>
          <div class="career-items flex flex-wrap items-center justify-between">
            <div class="career-title">
              <h3><a href="career-single.html">Laravel Developer</a></h3>
              <div class="career-meta">
                <ul class="flex flex-wrap gap-2">
                  <li>Onsite</li>
                  <li>Full Time</li>
                  <li>Intern</li>
                </ul>
              </div>
            </div>
            <div>
              <a href="career-single.html" class="btn-default career-btn">Submit</a>
            </div>
          </div>
          <div class="career-items flex flex-wrap items-center justify-between">
            <div class="career-title">
              <h3><a href="career-single.html">SQA Engineer</a></h3>
              <div class="career-meta">
                <ul class="flex flex-wrap gap-2">
                  <li>Onsite</li>
                  <li>Full Time</li>
                  <li>Intern</li>
                </ul>
              </div>
            </div>
            <div>
              <a href="career-single.html" class="btn-default career-btn">Submit</a>
            </div>
          </div>
          <div class="career-items flex flex-wrap items-center justify-between">
            <div class="career-title">
              <h3><a href="career-single.html">Joomla Developer</a></h3>
              <div class="career-meta">
                <ul class="flex flex-wrap gap-2">
                  <li>Onsite</li>
                  <li>Full Time</li>
                  <li>Senior</li>
                </ul>
              </div>
            </div>
            <div>
              <a href="career-single.html" class="btn-default career-btn">Submit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main body content End --> 

    <!-- Footer Start -->
    @include('layout.footer')
  </body>
</html>
