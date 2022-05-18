<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parking;
use App\Models\Service;

class ParkingController extends Controller
{
    public function index()
    {
        $allParkings = Parking::with('services')->with('customers')->with('parkingCenters')->orderBy('id', "DESC")->get();
        $all_services = Service::all();

        return view('Admin.Parking.view_history')
        ->with("all_services", $all_services)
        ->with("allParkings", $allParkings);
    }

    public function parkingBooking()
    {
        $allParkings = Parking::with('services')->with('customers')->with('parkingCenters')->whereNotIn('status', ["pending","done"])->orderBy('id', "DESC")->get();
        $all_services = Service::all();

        return view('Admin.Parking.view_parkings')->with("allParkings", $allParkings)->with("all_services", $all_services);
    }

    public function updateParkingStatus($id, $status)
    {
        $parking = Parking::find($id);

        $parking->status = $status;

        $parking->update();

        return redirect('view-parking-booking');
    }
}
