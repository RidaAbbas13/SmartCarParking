@extends('App.app_layout')
@section('content')


<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<h3 style="background-color:green">
							@if(!empty($successMessage))
						 		{{$successMessage}} 
						 	@endif
						</h3>
						<div class="col-lg-12 col-12">
							<div class="form-main">
								<div class="title text-center">
									<h1>Create Parking</h1>
								</div>
								<div class="row">
									<div class="title">
										<h5>Give Information</h5>
									</div>
								</div>
								<form class="form" action="{{URL::to('save-parking')}}" method="post">
									@csrf
									<div class="row">
										
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label for="lang">Select<span>*</span></label><br>
												<select name="service_id[]" class="lang" multiple="" style="display: block !important">
													<option value="1">Select</option>
													<option value="2">1</option>
													<option value="3">2</option>
													<option value="4">3</option>
													{{-- @if(!empty($services))
													@foreach($services as $serv)
													<option value="{{$serv->id}}">{{$serv->service_name}} - $ {{$serv->service_price}}</option>
													@endforeach
													@endif --}}
												</select>
											</div>
										</div>

										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Parking Center<span>*</span></label><br>
												<select required name="parking_center_id">
													<option value="">Select Center</option>
													@if(!empty($parkingCenters))
													@foreach($parkingCenters as $parkingC)
													<option value="{{$parkingC->id}}">{{$parkingC->parking_center_name}}</option>
													@endforeach
													@endif
												</select>
											</div>
										</div>

										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Pickup Location<span>*</span></label>
												<input name="pickup_address" type="text" placeholder="Enter Pickup Location" required>
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Drop-off Location<span>*</span></label>
												<input name="drop_address" type="text" placeholder="Enter Your Drop-off Location">
											</div>
										</div>

										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Start Date<span>*</span></label>
												<input name="start_data" type="date">
											</div>
										</div>

										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>End Date<span>*</span></label>
												<input name="end_date" 
											type="date"
											</div>
										</div>
										<!-- <div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Register</button>
											</div>
										</div> -->
									</div>


									<div class="row">
										
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Book Parking</button>
											</div>
										</div>
									</div>	


								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
<style>
	.lang{
		display: block !important;
	}
</style>
	<!-- <div class="map-section">
		<div id="myMap"></div>
	</div> -->

@endsection