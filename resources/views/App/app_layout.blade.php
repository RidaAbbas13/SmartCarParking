<!DOCTYPE html>
<html lang="zxx">
<head>
  <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='copyright' content=''>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Title Tag  -->
    <title>Car Smart Parking</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <!-- Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  
  <!-- StyleSheet -->
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('app/css/bootstrap.css')}}">
  <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('app/css/magnific-popup.min.css')}}">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('app/css/font-awesome.css')}}">
  <!-- Fancybox -->
  <link rel="stylesheet" href="{{asset('app/css/jquery.fancybox.min.css')}}">
  <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('app/css/themify-icons.css')}}">
  <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('app/css/niceselect.css')}}">
  <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('app/css/animate.css')}}">
  <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('app/css/flex-slider.min.css')}}">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('app/css/owl-carousel.css')}}">
  <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('app/css/slicknav.min.css')}}">
  
  <!-- Eshop StyleSheet -->
  <link rel="stylesheet" href="{{asset('app/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('app/style.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/responsive.css')}}">

  
</head>
<body class="js">
  
  <!-- Preloader -->
  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- End Preloader -->
  
  
  <!-- Header -->
  <header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-12">
            <!-- Top Left -->
            <div class="top-left">
              <ul class="list-main">
                <li><i class="ti-headphone-alt"></i> +12345678901</li>
                <li><i class="ti-email"></i> support@smartcarpark.com</li>
              </ul>
            </div>
            <!--/ End Top Left -->
          </div>
          <div class="col-lg-7 col-md-12 col-12">
            <!-- Top Right -->
            <div class="right-content">
              <ul class="list-main">
               <!--  <li><i class="ti-location-pin"></i> Store location</li>
                <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> -->
                @if(empty(Auth::user()))
                  <li><i class="ti-user"></i> <a href="{{url('customer-register')}}">Register</a></li>
                  <li><i class="ti-power-off"></i><a href="{{url('login')}}">Login</a></li>
                @else
                  <li><i class="ti-user"></i> <a>{{Auth::user()->name ?? ''}}</a></li>
                  <li><i></i><a>{{Auth::user()->role ?? ''}}</a></li>
                @endif
              </ul>
            </div>
            <!-- End Top Right -->
          </div>
        </div>
      </div>
    </div>


    <!-- End Topbar -->
    <div class="middle-inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-2 col-12">
            <!-- Logo -->
            <div class="logo">
              <!-- <a href="{{url('index')}}"><img src="app/images/logo.png" alt="logo"></a> -->
              <a href="{{url('index')}}"><h4>Smart Car Park</h4></a>
            </div>
            <!--/ End Logo -->
            <!-- Search Form -->
            <div class="search-top">
              <div class="top-search"><a href="#"><i class="ti-search"></i></a></div>
              <!-- Search Form -->
              <div class="search-top">
                <form class="search-form">
                  <input type="text" placeholder="Search here..." name="search">
                  <button value="search" type="submit"><i class="ti-search"></i></button>
                </form>
              </div>
              <!--/ End Search Form -->
            </div>
            <!--/ End Search Form -->
            <div class="mobile-nav"></div>
          </div>
          <div class="col-lg-5 col-md-7 col-12">
            
          </div>
          <div class="col-lg-4 col-md-3 col-12">
            <div class="right-bar">
              <!-- Search Form -->
              <!-- <div class="sinlge-bar">
                <a href="#" class="single-icon"><i class="ti-power-off"></i></a>
              </div> -->
              @if(!empty(Auth::user()) && Auth::user()->role == "customer")
              <div class="sinlge-bar">
                <a href="{{url('profile')}}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
              </div>
               <div class="sinlge-bar">
                  <span>{{Auth::user()->name ?? ''}}</span>
              </div>
              <div class="sinlge-bar">
                <form method="post" action="{{URL::to('logout')}}">
                  @csrf
                  <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
              @else
              <div class="sinlge-bar">
                <a href="{{url('customer-register')}}" class="single-icon" style="font-size: 13px;font-weight: 400">Join Free</a>
              </div>

              <div class="sinlge-bar">
                <a href="{{url('login')}}" class="single-icon" style="font-size: 13px;font-weight: 400">Sign in</a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="header-inner">
      <div class="container">
        <div class="cat-nav-head">
          <div class="row">

            <div class="col-lg-3">
              <!-- <div class="all-category">
                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                
              </div> -->
            </div>

            <div class="col-lg-9 col-12">
              <div class="menu-area">
                <!-- Main Menu -->
                <nav class="navbar navbar-expand-lg">
                  <div class="navbar-collapse"> 
                    <div class="nav-inner"> 
                      <ul class="nav main-menu menu navbar-nav">
                          <li class=""><a href="{{url('/')}}">Home</a></li>
                          <li><a href="{{url('services')}}">Services</a></li>                        
                          <li><a href="{{url('contact-us')}}">Contact Us</a>
                            <!-- <i class="ti-angle-down"></i> -->
                            <!-- <span class="new"></span> -->
                          <!--   <ul class="dropdown">
                              <li><a href="#">Cart</a></li>
                              <li><a href="#">Checkout</a></li>
                            </ul> -->
                          </li>
                          <!-- <li><a href="#">Pricing</a></li> -->
                          <!-- <li><a href="#">Pages</a></li>                   -->
                          @if(!empty(Auth::user()) && Auth::user()->role == "customer")
                          <li><a href="{{url('profile')}}">Profile<i class="ti-angle-down"></i></a>
                            <ul class="dropdown">
                              <li><a href="{{url('create-parking')}}">Create Parking</a></li>
                              <li><a href="{{url('parking-history')}}">Parking History</a></li>
                              {{-- <li>
                                <a>
                                <form action="{{URL::to('logout')}}" method="post">
                                  @csrf
                                  <input type="submit" value="Logout" style="padding: 10px;">
                                  
                                </form>
                              </a>
                              </li> --}}
                            </ul>
                          </li>
                          @endif
                          <!-- <li><a href="{{url('contact')}}">Contact Us</a></li> -->
                          <!-- <li><a href="#" ></a></li> -->
                        </ul>
                    </div>
                  </div>
                </nav>
                <!--/ End Main Menu --> 
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <!--/ End Header Inner -->
  </header>
  
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                  </div>
                    <div class="modal-body"  style="background-color: white">
                        <div class="row no-gutters">
              <div class="col-lg-6 offset-lg-3 col-12">
                <h2 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Welcome TO Smart Car Parking</h2>
                <h3 style="font-size:30px;color:#333;">if you want to register your Business on Smart Car Parking then, <h3>
                <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;margin-bottom: 90px;">Please, contact on whatsapp: +923081312527</p>
                <!-- <div class="button" style="margin-top:30px;">
                  <a href="#" target="_blank" class="btn" style="color:#fff;">Download Now!</a>
                </div> -->
              </div>
                        </div>
                    </div>
                </div>
            </div>
  
@yield("content")
  
  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
              <div class="col-lg-6 offset-lg-3 col-12">
                <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Online Layyah Free Desktop App</h4>
                <h3 style="font-size:30px;color:#333;">Currently You are using free Web App.<h3>
                <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
                <div class="button" style="margin-top:30px;">
                  <a href="#" target="_blank" class="btn" style="color:#fff;">Download Now!</a>
                </div>
              </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
  
  <!-- Start Footer Area -->
  <footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 col-12">
            <!-- Single Widget -->
            <div class="single-footer about">
              <div class="logo">
                <!-- <a href="{{url('index')}}"><img src="app/images/logo2.png" alt="#"></a> -->
                <h1 style="color: white">Smart Car Park</h1>
              </div>
              <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
              <p class="call">Got Question? Call us 24/7<span><a href="tel:03081312527">+1234567890</a></span></p>
            </div>
            <!-- End Single Widget -->
          </div>
          <div class="col-lg-2 col-md-6 col-12">
            <!-- Single Widget -->
            <div class="single-footer links">
              <h4>Information</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div>
            <!-- End Single Widget -->
          </div>
          <div class="col-lg-2 col-md-6 col-12">
            <!-- Single Widget -->
            <div class="single-footer links">
              <h4>Customer Service</h4>
              <ul>
                <li><a href="#">Payment Methods</a></li>
                <li><a href="#">Money-back</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <!-- End Single Widget -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Widget -->
            <div class="single-footer social">
              <h4>Get In Tuch</h4>
              <!-- Single Widget -->
              <div class="contact">
                <ul>
                  <li>Main address</li>
                  <li>city & country</li>
                  <li>info@smartpark.com</li>
                  <li>+91 123456789</li>
                </ul>
              </div>
              <!-- End Single Widget -->
              <ul>
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter"></i></a></li>
                <li><a href="#"><i class="ti-flickr"></i></a></li>
                <li><a href="#"><i class="ti-instagram"></i></a></li>
              </ul>
            </div>
            <!-- End Single Widget -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="left">
                <p>Copyright © 2021 <a href="#" target="_blank">smartcarpark.com</a>  -  All Rights Reserved.</p>
              </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="right">
                <img src="app/images/payments.png" alt="#">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /End Footer Area -->
 
  <!-- Jquery -->
    <script src="{{asset('app/js/jquery.min.js')}}"></script>
    <script src="{{asset('app/js/jquery-migrate-3.0.0.js')}}"></script>
  <script src="{{asset('app/js/jquery-ui.min.js')}}"></script>
  <!-- Popper JS -->
  <script src="{{asset('app/js/popper.min.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
  <!-- Color JS -->
  <script src="{{asset('app/js/colors.js')}}"></script>
  <!-- Slicknav JS -->
  <script src="{{asset('app/js/slicknav.min.js')}}"></script>
  <!-- Owl Carousel JS -->
  <script src="{{asset('app/js/owl-carousel.js')}}"></script>
  <!-- Magnific Popup JS -->
  <script src="{{asset('app/js/magnific-popup.js')}}"></script>
  <!-- Waypoints JS -->
  <script src="{{asset('app/js/waypoints.min.js')}}"></script>
  <!-- Countdown JS -->
  <script src="{{asset('app/js/finalcountdown.min.js')}}"></script>
  <!-- Nice Select JS -->
  <script src="{{asset('app/js/nicesellect.js')}}"></script>
  <!-- Flex Slider JS -->
  <script src="{{asset('app/js/flex-slider.js')}}"></script>
  <!-- ScrollUp JS -->
  <script src="{{asset('app/js/scrollup.js')}}"></script>
  <!-- Onepage Nav JS -->
  <script src="{{asset('app/js/onepage-nav.min.js')}}"></script>
  <!-- Easing JS -->
  <script src="{{asset('app/js/easing.js')}}"></script>
  <!-- Active JS -->
  <script src="{{asset('app/js/active.js')}}"></script>

  <!-- Google Map JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script> 
  <script src="js/gmap.min.js"></script>
  <script src="js/map-script.js"></script>
</body>
</html>