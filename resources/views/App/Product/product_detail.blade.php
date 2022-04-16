@extends('App.app_layout')
@section('content')




<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{url('index')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{url('product_detail')}}">Product <DETAILS></DETAILS></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="image">
										<img src="{{asset('app/images/productThumbnail')}}/{{ $select_product->product_image_1}}" width="950" height="460" alt="#">
									</div>
									<div class="blog-detail">
										<h2 class="blog-title">{{ $select_product->product_name}}</h2>
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i>By {{ $select_product->shop_name}}</a><a href="#"><i class="fa fa-calendar"></i>{{$select_product->updated_at}}</a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
										</div>
										<div class="content">
											<p>{{$select_product->description}}</p>
										</div>
									</div>
									<!-- <div class="share-social">
										<div class="row">
											<div class="col-12">
												<div class="content-tags">
													<h4>Tags:</h4>
													<ul class="tag-inner">
														<li><a href="#">Glass</a></li>
														<li><a href="#">Pant</a></li>
														<li><a href="#">t-shirt</a></li>
														<li><a href="#">swater</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div> -->
								</div>
								<!-- <div class="col-12">
									<div class="comments">
										<h3 class="comment-title">Comments (3)</h3>
										
										<div class="single-comment">
											<img src="https://via.placeholder.com/80x80" alt="#">
											<div class="content">
												<h4>Alisa harm <span>At 8:59 pm On Feb 28, 2018</span></h4>
												<p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
												<div class="button">
													<a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
												</div>
											</div>
										</div>
										

										<div class="single-comment left">
											<img src="https://via.placeholder.com/80x80" alt="#">
											<div class="content">
												<h4>john deo <span>Feb 28, 2018 at 8:59 pm</span></h4>
												<p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
												<div class="button">
													<a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
												</div>
											</div>
										</div>
										

										<div class="single-comment">
											<img src="https://via.placeholder.com/80x80" alt="#">
											<div class="content">
												<h4>megan mart <span>Feb 28, 2018 at 8:59 pm</span></h4>
												<p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
												<div class="button">
													<a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
												</div>
											</div>
										</div>

									</div>									
								</div> -->											
								<div class="col-12">			
									<div class="reply">
										<!-- <div class="reply-head">
											<h2 class="reply-title">Leave a Comment</h2>

											<form class="form" action="#">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Your Name<span>*</span></label>
															<input type="text" name="name" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Your Email<span>*</span></label>
															<input type="email" name="email" placeholder="" required="required">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<label>Your Message<span>*</span></label>
															<textarea name="message" placeholder=""></textarea>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group button">
															<button type="submit" class="btn">Post comment</button>
														</div>
													</div>
												</div>
											</form>

										</div> -->
									</div>			
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<!-- <div class="single-widget search">
								<span>{{$select_product->warrenty}}</span>
								<span>{{$select_product->warrenty_period}}</span>
							</div> -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Services</h3>
								<ul class="categor-list">
									<li><a href="#"><b>Warrenty:</b> {{$select_product->warrenty}}</a></li>
									<li><a href="#"><b>Warrenty Period:</b> {{$select_product->warrenty_period}}</a></li>
									<!-- <li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li> -->
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Delivery</h3>
								<ul class="categor-list">
									<li><a href="#"><b>Delivery:</b> {{$select_product->develivery}}</a></li>
									<li><a href="#"><b>Delivery Charges:</b> {{$select_product->delivery_charges}}</a></li>
									<!-- <li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li> -->
								</ul>
								<!-- End Single Post -->
							</div>

							<div class="single-widget recent-post">
								<h3 class="title">Other</h3>
								<ul class="categor-list">
									<li><a href="#"><b>Color:</b> {{$select_product->color}}</a></li>
									<li><a href="#"><b>Size:</b> {{$select_product->size}}</a></li>
									<li><a href="#"><b>Price:</b> {{$select_product->sale_price}}</a></li>
									<li><a href="#"><b>Discount:</b> {{$select_product->discount ?? 0}}</a></li>
									<li><a href="#"><b>Lable:</b> {{$select_product->lable}}</a></li>
									<li><a href="#"><b>Brand:</b> {{$select_product->brand_name}}</a></li>
									<li><a href="#"><b>Categorey:</b> {{$select_product->categorey_name}}</a></li>
									<!-- <li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li> -->
								</ul>
								<!-- End Single Post -->
							</div>
							<!-- Single Widget -->
							@if(!empty(Auth::user()) && Auth::user()->status == "buyer")
							<div class="single-widget newsletter">
								<h3 class="title">Add TO Cart</h3>
								<div class="letter-inner">
									<h4>Enter Your Quantity<br> least 1.</h4>
									<div class="form-inner">
										<form method="POST" action="{{URL::to('buyer-add-to-cart')}}">
											@csrf
											<input type="hidden" name="seller_id" value="{{ $select_product->SellerID}}">
											<input type="hidden" name="product_id" value="{{ $select_product->productID}}">
											<input type="hidden" name="discount" value="{{ $select_product->discount}}">
											<input type="hidden" name="price" value="{{ $select_product->sale_price}}">
											
											<input type="number" name="quantity" placeholder="Enter Quantity" required="true" min="1">
											<a><input type="submit" style="background-color: #F7941D" name=""></a>
										</form>
									</div>
								</div>
							</div>
						@endif
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
<div class="modal fade" id="product_detail" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                  </div>
                    <div class="modal-body"  style="background-color: white">
                        <div class="row no-gutters">
              <div class="col-lg-6 offset-lg-3 col-12">
                <h2 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Thanks YOu</h2>
                <h3 style="font-size:30px;color:#333;">Please Login YOur Account Then You can Purchase Product.<h3>
                <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;margin-bottom: 90px;"></p>
                <!-- <div class="button" style="margin-top:30px;">
                  <a href="#" target="_blank" class="btn" style="color:#fff;">Download Now!</a>
                </div> -->
              </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection