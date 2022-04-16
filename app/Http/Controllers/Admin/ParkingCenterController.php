<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParkingCenter;

class ParkingCenterController extends Controller
{
    public function create()
    {
        return view('Admin.ParkingCenter.add_parking_center');
    }

    public function index()
    {
        $allParkingCenters = ParkingCenter::all();

        return view('Admin.ParkingCenter.view_parking_centers',["allParkingCenters" => $allParkingCenters]);
    }

    public function store(Request $request)
    {
        $insertParkingCenter = ParkingCenter::create([
            "parking_center_name" => $request->parking_center_name,
            "city_name" => $request->city_name,
            "address" => $request->address,
        ]);

        return redirect('view-parking-centers');
    }

    public function destroy($id)
    {
        $deleteParkingCenter = ParkingCenter::find($id)->delete();

        return redirect('view-parking-centers');
    }

    public function edit($id)
    {
        $editParkingCenter = ParkingCenter::find($id);

        return view('Admin.ParkingCenter.edit_parking_center')
                ->with("editParkingCenter",$editParkingCenter);
    }

    public function update(Request $request)
    {
        $parkingCenter = ParkingCenter::find($request->id);

        $parkingCenter->parking_center_name = $request->parking_center_name;
        $parkingCenter->city_name = $request->city_name;
        $parkingCenter->address = $request->address;

        $parkingCenter->update();

        return redirect('view-parking-centers');
    }
}
