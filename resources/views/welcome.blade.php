@extends('layouts.app') 
@section('content')
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="/web/images/arrival-bg.png" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                       انتظرونا قريبا 
                                    </span>
                                    <br>
                                   
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    تسوق الأن
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    soon 
                                    </span>
                                    <br>
                                    
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    تسوق الأن
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                      تخفيضات
                                    </span>
                                    <br>
                                    
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    تسوق الأن
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      </div>
   
      
      
      <!-- product section -->
      <section id="product" class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                   <span> منتجاتنا </span>
               </h2>
            </div>
            <div class="row">
            @foreach ($products as $product)
           
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                          @if (Auth::user())
                           <a href="{{ route('cart.store', $product->id) }}" class="option1">
                          @else 
                           <a href="{{ route('register') }}" class="option1">
                          @endif
                          إضافة الي السلة
                           </a>
                           <a href="#" class="option2">
                           عرض التفاصيل
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{ $product->image }}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{ $product->name }}
                        </h5>
                        <h6>
                           ${{ $product->price }}
                        </h6>
                     </div>
                  </div>
               </div>
                
            @endforeach
            </div>
            <div class="btn-box">
               <a href="">
               {{-- View All products --}}
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->


   @endsection