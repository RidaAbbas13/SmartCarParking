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
									<h1>Profile</h1>
								</div>
								<div class="row">
									<div class="title">
										<h5>Personal Information</h5>
									</div>
								</div>
								<form class="form" action="{{URL::to('profile')}}" method="post">
									@csrf
									<div class="row">
										
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>First Name<span>*</span></label>
												<input name="first_name" type="text" value="{{$profile[0]->name}}" placeholder="Enter Your First Name" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Mobile Number<span>*</span></label>
												<input name="mobile_no" type="number"  value="{{$profile[0]->mobile_no}}" placeholder="Enter Your Mobile Number" required>
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Parmanent Address<span>*</span></label>
												<input name="address" type="text"  value="{{$profile[0]->parmanent_address}}" placeholder="Enter Your Address">
											</div>
										</div>
										<!-- <div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Register</button>
											</div>
										</div> -->
									</div>

									<div class="row">
										<div class="title">
											<h5>Vehicle Information</h5>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Vehicle Plate #<span>*</span></label>
												<input name="vehicle_palte_no" type="text"  value="{{$profile[0]->vehicle_plate_no}}" placeholder="Enter Vahecil No Pate" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Vehicle Color<span>*</span></label>
												<input name="vehicle_color" type="text" placeholder="Enter Vehicle Color"  value="{{$profile[0]->vehicle_color}}" required>
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Vehicle Type<span>*</span></label>
												<input name="vehicle_Type" type="text"  value="{{$profile[0]->vehicle_type}}" placeholder="Enter Vehicle Type" required>
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Engine Number<span>*</span></label>
												<input name="engine_number"  value="{{$profile[0]->engine_number}}" type="text" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Company Name(Maker)<span>*</span></label>
												<input name="company_name" type="text"  value="{{$profile[0]->company_name}}" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Model<span>*</span></label>
												<input name="model"  value="{{$profile[0]->model}}" type="text" required>
											</div>
										</div>
									</div>


									<div class="row">
										
										<div class="col-12">
											<div class="form-group button">
												<button class="btn ">Update Profile</button>
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

	<!-- <div class="map-section">
		<div id="myMap"></div>
	</div> -->

@endsection