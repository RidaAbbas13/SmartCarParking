<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Parking;
use App\Models\Service;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $allParkings = Parking::with("services")->with('parkingCenters')->with("customers")->where("status","pending")->orderBy("id","DESC")->get();
        $all_services = Service::all();

        $totalCustomers = User::where("role","customer")->count();
        $totalUsers = User::where("role","admin")->count();
        $totalProcessParking = Parking::whereNotIn("status",['drop',"done"])->count();
        $totalParkings = Parking::count();

        return view("Admin.Dashboard.dashboard",
            [
                "all_services" => $all_services,
                "allParkings" => $allParkings,
                "totalCustomers" => $totalCustomers,
                "totalParkings" => $totalParkings,
                "totalProcessParking" => $totalProcessParking,
                "totalUsers" => $totalUsers,
            ]
        );
    }
}
