 <div class="our-work">
     <div class="container">
         <div class="row section-row align-items-center">
             <div class="col-lg-8 col-md-9">
                 <!-- Section Title Start -->
                 <div class="section-title">
                     <h3 class="wow fadeInUp">our products</h3>
                     <h2 class="text-anime-style-3">
                         Our Popular Products
                     </h2>
                 </div>
                 <!-- Section Title End -->
             </div>

             <div class="col-lg-4 col-md-3">
                 <!-- Section Btn Start -->
                 <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                     <a href="{{ url('/products') }}" class="btn-default">all products</a>
                 </div>
                 <!-- Section Btn End -->
             </div>
         </div>

         
             <!-- <div class="d-flex justify-content-center col-lg-12"> -->
             <!-- <div class="d-flex"></div> -->
             <!-- Works Item Start -->
             
             <div class="row ">
                 @foreach ($products as $product)
                     <div class="col-md-4 project-item-box {{ Str::slug($product->category->name, '-') }}">
                         <!-- Works Item Start -->
                         <div class="works-item">
                             <a href="{{ $product->product_url }}" target="_blank">
                                 <div class="icon">
                                     <h4>{{ $product->title }}</h4>
                                     <!--<span><i class="fa-solid fa-angle-right"></i></span>-->
                                 </div>
                             </a>

                             <div class="works-image">
                                 <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" />
                             </div>

                             <div class="works-content">
                                 <h2><a href="{{ $product->product_url }}" target="_blank">View Demo</a>
                                 </h2>
                                 <p>{!! $product->description !!}</p>
                             </div>

                             <!--<div class="work-btn">-->
                             <!--    <button>{{ $product->category->name }}</button>-->
                             <!--</div>-->
                         </div>
                         <!-- Works Item End -->
                     </div>
                 @endforeach
             </div>
            

         </div>
    
 </div>
