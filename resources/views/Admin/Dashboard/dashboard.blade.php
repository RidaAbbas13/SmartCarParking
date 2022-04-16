@extends("Admin.admin_layout")
@section('content')


 <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Users</div>
                                        <div class="stat-digit">{{$totalUsers ?? 0}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Customers</div>
                                        <div class="stat-digit">{{$totalCustomers ?? 0}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Parkings</div>
                                        <div class="stat-digit">{{$totalParkings ?? 0}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Process Parking</div>
                                        <div class="stat-digit">{{$totalProcessParking ?? 0}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /# column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title pr">
                                    <h4>All New Parking Booking</h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                    <th><label><input type="checkbox" value=""></label>Customer Name</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                    <th>Parking Center</th>
                                                    <th>Service Name</th>
                                                    <th>Pickup Location</th>
                                                    <th>Start Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allParkings))
                                                @foreach($allParkings as $parking)
                                                <tr>
                                                    <td>{{$parking["customers"]->name}}</td>
                                                    <td>{{$parking["customers"]->mobile_no}}</td>
                                                    <td>
                                                        {{$parking["customers"]->email}}
                                                    </td>
                                                    <td>
                                                        {{$parking["parkingCenters"]->parking_center_name}}
                                                    </td>
                                                    <td>
                                                        {{$parking["services"]->service_name}}
                                                    </td>
                                                    <td>{{$parking->pickup_address}}</td>
                                                    <td>{{$parking->start_data}}</td>
                                                    <td><a href="update-parking-status/{{$parking->id}}/confirm" class="btn btn-success">Confirm</a></td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <!-- <div class="row">
                        <div class="col-lg-3">
                            <div class="card p-0">
                                <div class="stat-widget-three home-widget-three">
                                    <div class="stat-icon bg-facebook">
                                        <i class="ti-facebook"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="stat-digit">8,268</div>
                                        <div class="stat-text">Likes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card p-0">
                                <div class="stat-widget-three home-widget-three">
                                    <div class="stat-icon bg-youtube">
                                        <i class="ti-youtube"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="stat-digit">12,545</div>
                                        <div class="stat-text">Subscribes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card p-0">
                                <div class="stat-widget-three home-widget-three">
                                    <div class="stat-icon bg-twitter">
                                        <i class="ti-twitter"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="stat-digit">7,982</div>
                                        <div class="stat-text">Tweets</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card p-0">
                                <div class="stat-widget-three home-widget-three">
                                    <div class="stat-icon bg-danger">
                                        <i class="ti-linkedin"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="stat-digit">9,658</div>
                                        <div class="stat-text">Followers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </section>
            </div>
        </div>
    </div>

@endsection