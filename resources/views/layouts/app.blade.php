<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/web/images/favicon.png" type="">
      <title> Shooping  </title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="/web/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="/web/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="/web/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="/web/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"> <span > <samp class="text-danger"> Shooping </span> </a>
                  <!-- <img width="250" src="images/logo" alt="#" />  -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ url('/') }}">الرئيسية <span class="sr-only">(current)</span></a>
                        </li>
                      
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/#product') }}"> المنتجات </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{  route('cart') }}">  السلة  </a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="">تواصل معنا</a>
                        </li>
                        @if (!Auth::user())
                         <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}"> تسجيل الدخول </a>
                        </li>
                        @else

                        <li class="nav-item">
                           <form action="{{route('logout')}}" method="POST">
                                 {{ csrf_field() }}
                                 <button href="#!" class="dropdown-item">
                                    <i class="fab fas fa-sign-out-alt ml-2"></i>
                                    تسجيل الخروج
                                 </button>
                           </form>
                        </li>
                        @endif

                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->

    @yield('content')

      <!-- footer start -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"> <span style="font-size: x-large;" class="text-danger"> Shooping </span> </a>
                           <!-- <img width="210" src="images/logo.png" alt="#" /></a> -->
                      </div>
                      <div class="information_f">
                        <p>Subscribe by our newsletter and get update protidin. Subscribe by our newsletter and get update Subscribe by our newsletter and get update</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3> القائمة </h3>
                        <ul>
                           <li><a href="#"> الرئيسية </a></li>
                           <li><a href="#"> عن الشركة </a></li>
                           <li><a href="#">قسم الرياضة </a></li>
                           <li><a href="#"> قسم العناية بالبشرة</a></li>
                           <li><a href="#"> قسم التغدية </a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3> تواصل معنا </h3>
                        <div class="information_f">
                           <p><strong> العنوان :</strong> 28 White tower, Street Name New York City, USA</p>
                           <p><strong> رقم الجوال :</strong> +91 987 654 3210</p>
                           <p><strong> البريد الالكتروني:</strong> yourmain@gmail.com</p>
                         </div>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>اشترك معنا</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="ادخل البريد الالكتروني" name="email" />
                                    <input type="submit" value="إشتراك" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto"> جميع الحقوق محفوظة لسنة © 2022
         </p>
      </div>
      <!-- jQery -->
      <script src="/web/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="/web/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="/web/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="/web/js/custom.js"></script>
   </body>
</html>