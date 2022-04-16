@extends("Admin.admin_layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Services</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <!-- <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div> -->
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{url('create-service')}}"><button class="btn btn-primary">Add Service</button></a>
                            
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Service Name</th>
                                                    <th>Service Price</th>
                                                    <th>Thumbnail</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allServices))
                                                @foreach($allServices as $service)
                                                <tr>
                                                    <td>{{$service->service_name}}</td>
                                                    <td>{{$service->service_price}}</td>
                                                    <td><img src="app/images/productThumbnail/{{$service->thubnail}}" style="width: 100px;height: 50px;" /></td>
                                                    <td>{{$service->description}}</td>
                                                    <td>
                                                        <a href="edit-service/{{$service->id}}" style="margin-right: 5px;" class="btn btn-info">Edit</a>
                                                        <a href="delete-service/{{$service->id}}" style="margin-left: 5px;" class="btn btn-danger">Delete</a>
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