<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ParkingCenter;
use App\Models\Parking;
use Auth;
use App\Models\AddtionalCharge;

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
        $allParking = Parking::with("services")->with('parkingCenters')->orderBy('id', "DESC")->get();

        return view('App.Customer.parking_history')
            ->with("allParking", $allParking);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $createParking = Parking::create([
            "user_id" => $user_id,
            "service_id" => $request->service_id,
            "parking_center_id" => $request->parking_center_id,
            "pickup_address" => $request->pickup_address,
            "drop_address" => $request->drop_address,
            "start_data" => $request->start_data,
            "end_date" => $request->end_date,
        ]);

        $findParking = Parking::with('services')->with('customers')->with('parkingCenters')->find($createParking->id);
        $addtionalCharges = AddtionalCharge::all();
        $sumAmount = AddtionalCharge::sum("amount");

        $details = [
            "findParking" => $findParking,
            "addtionalCharges" => $addtionalCharges,
            "sumAmount" => $sumAmount,
        ];

        \Mail::to("zahidjakhar2370@gmail.com")->send(new \App\Mail\BillMail($details));

        return redirect('parking-history');
    }
}
