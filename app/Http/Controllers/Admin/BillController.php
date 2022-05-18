<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parking;
use PDF;
use App\Models\AddtionalCharge;
use App\Models\Service;

class BillController extends Controller
{
    public function bill($id)
    {
        $findParking = Parking::with('services')->with('customers')->with('parkingCenters')->find($id);
        $addtionalCharges = AddtionalCharge::all();
        $all_services = Service::all();
        $sumAmount = AddtionalCharge::sum("amount");

        $data = [
            "findParking" => $findParking,
            "addtionalCharges" => $addtionalCharges,
            "sumAmount" => $sumAmount,
            "all_services" => $all_services,
        ];

        $pdf = PDF::loadView('App.Email.bill',$data);
        return $pdf->download('SmartCarParkingInvoice.pdf');
    }

    public function viewBill($id)
    {
        $findParking = Parking::with('services')->with('customers')->with('parkingCenters')->find($id);
        $addtionalCharges = AddtionalCharge::all();
        $all_services = Service::all();
        $sumAmount = AddtionalCharge::sum("amount");

        return view('App.Email.bill')
                ->with("findParking", $findParking)
                ->with("sumAmount", $sumAmount)
                ->with("all_services", $all_services)
                ->with("addtionalCharges", $addtionalCharges);
    }
}
