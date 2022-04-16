<?php

namespace App\Http\Controllers\UserApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function service()
    {
        $allServices = Service::orderBy("id","DESC")->get();

        return view('App.Page.services',["allServices" => $allServices]);
    }
}
