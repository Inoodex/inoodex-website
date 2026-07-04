  <!DOCTYPE html>
  <html lang="zxx">
  @include('layout.header')

  <body>
      <!-- Header Start -->
      @include('layout.headerNav')

      <!-- Header Start -->

      <!-- Header End -->

      <div class="page-header">
          <div class="max-w-7xl mx-auto px-4">
              <div class="flex flex-wrap">
                  <div class="w-full">
                      <div class="page-header-box">
                          <h1 class="text-anime-style-3">{{ $blog->title }}</h1>
                      </div>
                      <div class="lg:w-1/2 md:w-1/3">
                  <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                      <a href="{{ route('blogs') }}" class="btn-default">View All Blogs</a>
                  </div>
              </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="page-single-post">
          <div class="max-w-7xl mx-auto px-4">
              <div class="flex flex-wrap">
                  <div class="w-full">
                      <div class="post-single-image flex justify-center my-4">
                          <figure class="image-anime m-0">
                              <a href="{{ route('blogs.show', $blog->id) }}">
                                  <img src="{{ asset('storage/' . $blog->image) }}" alt="image"
                                      style="width:1000px; height:500px; object-fit:cover;">
                              </a>
                          </figure>
                      </div>

                      <div class="post-content">
                          <div class="post-entry">
                              {!! $blog->body !!}
                          </div>

                          <div class="flex flex-wrap items-center">
                              <div class="lg:w-2/3 w-full mb-4 lg:mb-0">
                                  <div class="post-tags wow fadeInUp" data-wow-delay="0.25s">
                                      <a class="btn-default" href="#">Website</a>
                                      <a class="btn-default" href="#">App Development</a>
                                      <a class="btn-default" href="#">SEO</a>
                                      <a class="btn-default" href="#">Graphics Design</a>
                                  </div>
                              </div>

                              <div class="lg:w-1/3 w-full">
                                  <div class="post-social-links wow fadeInUp" data-wow-delay="0.25s">
                                      <ul>
                                          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                          <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="latest-news related-articles">
          <div class="max-w-7xl mx-auto px-4">
              <div class="flex flex-wrap -mx-4 section-row items-center">
                  <div class="w-full px-4">
                      <div class="section-title">
                          <h3 class="wow fadeInUp">related articles</h3>
                          <h2 class="text-anime-style-3">You may also like this</h2>
                      </div>
                  </div>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                  <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                      <div class="post-featured-image">
                          <figure class="image-anime">
                              <a href="{{ route('blogs.show', $blog->id) }}">
                                  <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                              </a>
                          </figure>
                      </div>
                      <div class="post-item-body">
                          <p><a href="#">{{ $blog->created_at->format('d M Y') }}</a></p>
                          <h2>
                              <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                          </h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      @include('layout.footer')
  </body>
  </html>
