<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ParkingCenter;
use App\Models\Parking;
use Auth;
use App\Models\AddtionalCharge;
use App\Models\Customer;
use App\Models\CustomerService;

class ParkingController extends Controller
{
    public function create()
    {
        $services = Service::all();
        $parkingCenters = ParkingCenter::all();

        return view('App.Customer.create_parking')
            ->with("services",$services)
            ->with("parkingCenters",$parkingCenters);
    }

    public function index()
    {
        $allParking = Parking::where("user_id",Auth::user()->id)with("services")->with('parkingCenters')->orderBy('id', "DESC")->get();
        $all_services = Service::all();

        return view('App.Customer.parking_history')
            ->with("all_services", $all_services)
            ->with("allParking", $allParking);
    }

    public function store(Request $request)
    {
        // print_r($request->service_id);exit;
        $user_id = Auth::user()->id ?? 1;

        $createParking = Parking::create([
            "user_id" => $user_id,
            "service_id" => "0",
            "parking_center_id" => $request->parking_center_id,
            "parking_type" => $request->parking_type,
            "pickup_address" => $request->pickup_address,
            "drop_address" => $request->drop_address,
            "start_data" => $request->start_data,
            "end_date" => $request->end_date,
        ]);

        foreach($request->service_id as $service){

            $createService = CustomerService::create([
                "parking_id" => $createParking->id,
                "service_id" => $service,
            ]);
        }

        $findParking = Parking::with('services')->with('customers')->with('parkingCenters')->find($createParking->id);
        $addtionalCharges = AddtionalCharge::all();
        $sumAmount = AddtionalCharge::sum("amount");

        $details = [
            "findParking" => $findParking,
            "addtionalCharges" => $addtionalCharges,
            "sumAmount" => $sumAmount,
        ];

        // \Mail::to("zahidjakhar2370@gmail.com")->send(new \App\Mail\BillMail($details));

        return redirect('parking-history');
    }
}
