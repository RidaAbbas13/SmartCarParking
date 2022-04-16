@extends("Admin.admin_layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Parking Centers</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{url('create-parking-center')}}"><button class="btn btn-primary">Add Parking Center</button></a>
                            
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parking Center</th>
                                                    <th>City</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allParkingCenters))
                                                @foreach($allParkingCenters as $parkingCenter)
                                                <tr>
                                                    <td>{{$parkingCenter->parking_center_name}}</td>
                                                    <td>{{$parkingCenter->city_name}}</td>
                                                    <td>{{$parkingCenter->address}}</td>
                                                    <td>
                                                        <a href="edit-parking-center/{{$parkingCenter->id}}" style="margin-right: 5px" class="btn btn-info">Edit</a>

                                                        <a href="delete-parking-center/{{$parkingCenter->id}}"  style="margin-left: 5px" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>


@endsection