<?php

namespace App\Http\Controllers\UserApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\NewsLetter;

class HomeController extends Controller
{
    public function index()
    {
        $allServices = Service::orderBy("id","DESC")->paginate(4);

        return view('App.Page.home')
            ->with("allServices", $allServices);
    }

    public function newsletter(Request $request)
    {
        $newsletter = NewsLetter::create([
            "email" => $request->email,
        ]);

        return redirect('/');
    }
}
