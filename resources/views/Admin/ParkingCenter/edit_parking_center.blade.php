@extends('Admin.admin_layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Parking Center</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Edit Parking Center</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{URL::to('update-parking-center')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{$editParkingCenter->id}}">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Parking Center Name</label>
                                                        <input type="text" class="form-control" value="{{$editParkingCenter->parking_center_name}}" name="parking_center_name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>City Name</label>
                                                        <input type="text" class="form-control" name="city_name"  value="{{$editParkingCenter->city_name}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea  class="form-control" name="address" rows="10">{{$editParkingCenter->address}}</textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Update">
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>


@endsection