@extends('Admin.admin_layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Additional Charges</h1>
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
                                    <h4>Add New Additional Charges</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{URL::to('create-additional-charges')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Charges Title</label>
                                                        <input type="text" class="form-control" name="charges_title">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Charges Amount</label>
                                                        <input type="number" class="form-control" name="amount">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary">
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