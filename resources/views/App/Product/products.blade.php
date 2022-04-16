@extends('App.app_layout')
@section('content')


<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{url('index')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{url('products')}}">Products</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="product-area section">
            <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Products</h2>
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

                      @if(!empty($all_products))
                      @foreach($all_products as $product)
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                          <div class="product-img">
                            <a href="{{url('product-detail',$product->productID)}}">
                              <img class="default-img" src="app/images/productThumbnail/{{$product->product_image_1}}" alt="#" style="height: 350px">
                              <span class="new">{{$product->categorey_name}}</span>
                            </a>
                            <div class="button-head">
                              <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="View Product Detail" href="{{url('product-detail',$product->productID)}}"><i class=" ti-eye"></i><span>Product Detail</span></a>
                              </div>
                              <div class="product-action-2">
                                <a title="View Product Detail" href="{{url('product-detail',$product->productID)}}">Visit Product</a>
                              </div>
                              </div>
							</div>
							
							<div class="product-content">
								<h3><a href="{{url('product-detail',$product->productID)}}">{{$product->product_name}}</a></h3>
								<div class="product-price">
                  <span class="old">Rs {{$product->sale_price}}</span>
									<span>Rs {{$product->sale_price - $product->discount}}</span>
								</div>
							</div>
                            
                        </div>
                      </div>
                      @endforeach
                      @endif
                    </div>
                  </div>
                </div>
                {{$all_products->links()}}
                <!--/ End Single Tab -->

              
                <!--/ End Single Tab -->
              </div>
            </div>
          </div>
        </div>
            </div>
    </div>

@endsection