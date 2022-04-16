@extends("Admin.admin_layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Additional Charges</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{url('create-additional-charges')}}"><button class="btn btn-primary">Add Additional Charges</button></a>
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Charges Title</th>
                                                    <th>Amount</th>
                                                    <th>Created at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($allAdditionalCharges))
                                                @foreach($allAdditionalCharges as $addtionalCharges)
                                                <tr>
                                                    <td>{{$addtionalCharges->charges_title}}</td>
                                                    <td>{{$addtionalCharges->amount}}</td>
                                                    <td>{{$addtionalCharges->created_at}}</td>
                                                    <td><a href="delete-additional-charges/{{$addtionalCharges->id}}" class="btn btn-danger">Delete</a></td>
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