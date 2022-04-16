@extends('App.app_layout')
@section("content")






<div class="shopping-cart section">
        <div class="container">
            <div class="title text-center mb-5">
                <h1>Parking History</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                                <th>Service Name</th>
                                <th>Parking Center</th>
                                <th class="text-center">Pickup Add.</th>
                                <th class="text-center">Drop Add.</th>
                                <th class="text-center">Start</th>
                                <th class="text-center">End Date</th> 
                                <th class="text-center">Status</th> 
                                <th class="text-center">Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($allParking))
                            @foreach($allParking as $parking)

                                <tr>
                                    <td>{{$parking['services']->service_name}}</td>
                                    <td>{{$parking['parkingCenters']->parking_center_name}}</td>
                                    <td>{{$parking->pickup_address}}</td>
                                    <td>{{$parking->drop_address}}</td>
                                    <td>{{$parking->start_data}}</td>
                                    <td>{{$parking->end_date}}</td>
                                    <td><span class="bg-success text-white bold">{{$parking->status}}</span></td>
                                    <td><a href="bill/{{$parking->id}}" class="btn btn-success text-white bg-primary">Invoice</a></td>
                                </tr>

                            @endforeach
                            @endif
                           
                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <!-- <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <button class="btn">Apply</button>
                                        </form>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Total Items<span>{{$totalItems ?? 00}}</span></li>
                                        <li>Cart Subtotal<span>{{$totalPrice ?? 00}}</span></li>
                                        <li>You Save<span>{{$totalDiscount ?? 00}}</span></li>
                                        <li class="last">You Pay<span>{{$grandTotal ?? 00}}</span></li>
                                    </ul>
                                    <div class="button5">
                                        <a href="#" class="btn">Checkout</a>
                                        <a href="{{url('products')}}" class="btn">Continue shopping</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>

@endsection