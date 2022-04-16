@extends('App.app_layout')
@section('content')

  <!-- Header Inner -->
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
    $(function(){
        //prepare Your data array with img urls
        var dataArray=new Array();
        dataArray[0]="app/images/slider/slider7.jpg";
        dataArray[1]="app/images/slider/slider8.jpg";
        dataArray[2]="app/images/slider/slider9.jpg";
        dataArray[3]="app/images/slider/slider10.jpg";
        dataArray[4]="app/images/slider/slider11.jpg";
        // dataArray[5]="app/images/slider/slider6.jpg";
        // dataArray[5]="app/images/slider/slider7.jpg";
        // dataArray[2]="images/img3.png";
        // dataArray[3]="images/img0.png";

        //start with id=0 after 5 seconds
        var thisId=0;

        window.setInterval(function(){
            $('#thisImg').attr('src',dataArray[thisId]);
            thisId++; //increment data array id
            if (thisId==5) thisId=0; //repeat from start
        },2000);        
    });
</script>
  <!--/ End Header -->
  <img src="app/images/slider/slider7.jpg" id="thisImg" style="height: 600px !important;width: 100%;size: cover">
  <!-- Slider Area -->
 
  <!--/ End Slider Area -->

	  <!-- Start Small Banner  -->
  <section class="small-banner section">
    <div class="container-fluid">
      <div class="row">
        <!-- Single Banner  -->

        <div class="col-lg-12 col-12">
          <h3 class="text-center">Welcome To Smart Car Park</h3>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
        </div>
        <!-- /End Single Banner  -->
      </div>
    </div>
  </section>
  <!-- End Small Banner -->



  <!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Services</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-info">
              
              <div class="tab-content" id="myTabContent">


                <!-- Start Single Tab -->
                <div class="tab-pane fade show active" id="man" role="tabpanel">
                  <div class="tab-single">
                    <div class="row">

                      @if(!empty($allServices))
                      @foreach($allServices as $service)
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12 shadow-lg p-3 mb-5 bg-white rounded" style="box-shadow: 0px 15px 15px #0000000a;">
                        <div class=" single-product">
                          <div class="product-img">
                            <a href="#">
                              <img class="default-img" src="app/images/productThumbnail/{{$service->thubnail}}" alt="#" style="height: 350px">
                              <!-- <span class="new">{{$service->service_name}}</span> -->
                            </a>

                            <div class="button-head">
                              <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Product" href="#"><i class=" ti-eye"></i><span>View Detail</span></a>
                              </div>
                              <div class="product-action-2">
                                <a title="View Prodcut Detail" href="#">View Detail</a>
                              </div>
                            </div>
                            <div class="product-content">
                <h3><a href="product-details">{{$service->service_name}}</a></h3>
                <div class="product-price">
                  <!-- <span class="old">$ 00</span> -->
                  <span>$ {{$service->service_price}}</span>
                </div>
              </div>
                          </div>
                        </div>
                      </div>

                     
                      @endforeach
                      @endif



                    </div>
                  </div>
                </div>
                <!--/ End Single Tab -->
                <!--/ End Single Tab -->
              </div>
            </div>
          </div>
        </div>
            </div>
    </div>
  <!-- End Product Area -->
  

  
  
  <section class="section free-version-banner">
        <div class="container" >
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Smart Car Parking</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Currently You are using free <br> Web App.</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of the Desktop App <br> and Andriod App.</p>

                        <div class="button">
                            <a href="#" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s"  data-toggle="modal" data-target="#exampleModal">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Smart Car Park</h4>
                <h3 style="font-size:30px;color:#333;">Currently We are working on Web Application.<h3>
                <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;margin-bottom: 90px;">Please, contact on whatsapp: +1234567890</p>
                <!-- <div class="button" style="margin-top:30px;">
                  <a href="#" target="_blank" class="btn" style="color:#fff;">Download Now!</a>
                </div> -->
              </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  
  

  <div class="product-area most-popular section" style="margin-top: -70px">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h2>Our Team</h2>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->
            <div class="single-product">
              <div class="product-img">
                <a href="#">
                  <img class="default-img" src="app/images/blogImage/zahid.jpg" style="    height: 260px;" alt="#">
                  <span class="out-of-stock">Full Stack Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Zahid Akbar</a></h3>
              </div>
            </div>

            <div class="single-product">
              <div class="product-img">
                <a href="#">
                  <img class="default-img" src="app/images/blogImage/zahid.jpg" style="    height: 260px;" alt="#">
                  <span class="out-of-stock">Full Stack Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Zahid Akbar</a></h3>
              </div>
            </div>

            <!-- <div class="single-product">
              <div class="product-img">
                <a href="#">
                  <img class="default-img" src="app/images/blogImage/abid.jpeg" style="    height: 260px;" alt="#">
                  <span class="out-of-stock">Backend Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Abid Ali</a></h3>
              </div>
            </div> -->

            <div class="single-product">
              <div class="product-img">
                <a href="#">
                  <img class="default-img" src="app/images/blogImage/zahid.jpg" style="    height: 260px;" alt="#">
                  <span class="out-of-stock">Full Stack Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Zahid Akbar</a></h3>
              </div>
            </div>



          </div>
        </div>
      </div>


    </div>
    </div>
  
  <!-- Start Shop Services Area -->
  <section class="shop-services section home">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-rocket"></i>
            <h4>Free shiping</h4>
            <p>Orders over $100</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-reload"></i>
            <h4>Free Return</h4>
            <p>Within 30 days returns</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-lock"></i>
            <h4>Sucure Payment</h4>
            <p>100% secure payment</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-tag"></i>
            <h4>Best Peice</h4>
            <p>Guaranteed price</p>
          </div>
          <!-- End Single Service -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Services Area -->
  
  <!-- Start Shop Newsletter  -->
  <section class="shop-newsletter section">
    <div class="container">
      <div class="inner-top">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
            <!-- Start Newsletter Inner -->
            <div class="inner">
              <h4>Newsletter</h4>
              <p> Subscribe to our newsletter and get <span>New Coming</span> offers or Updates.</p>
              <form action="{{URL::to('newsletter')}}" method="post" class="newsletter-inner">
                @csrf
                <input name="email" placeholder="Your email address" required="true" type="email">
                <button type="submit" class="btn">Subscribe</button>
              </form>
            </div>
            <!-- End Newsletter Inner -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Newsletter -->

@endsection