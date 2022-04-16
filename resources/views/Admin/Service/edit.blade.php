@extends('Admin.admin_layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Service</h1>
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
                                    <h4>Edit Service</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{URL::to('update-service')}}" method="post"  enctype="multipart/form-data">      
                                        @csrf
                                            <div class="row">
                                                <input type="hidden" name="id"  value="{{$editService->id}}">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Service Name</label>
                                                        <input type="text" class="form-control" name="service_name" value="{{$editService->service_name}}">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Service Price</label>
                                                        <input type="number" class="form-control" name="service_price" value="{{$editService->service_price}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Service Thumbnail <small>(if you want to change)</small></label>
                                                        <input type="file" class="form-control" name="thumbnail">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea  class="form-control" name="description" rows="10">{{$editService->description}}</textarea>
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