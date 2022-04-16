@extends('App.app_layout')
@section('content')


<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{url('index')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{url('services')}}">Service</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>




  <!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>All Services</h2>
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

  @endsection