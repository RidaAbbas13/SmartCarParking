<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddtionalCharge;

class AdditionalCharges extends Controller
{
    public function create()
    {
        return view('Admin.AdditionalCharges.add_additional_charges');
    }


    public function index()
    {
        $allAdditionalCharges = AddtionalCharge::all();

        return view("Admin.AdditionalCharges.view_additional_charges",["allAdditionalCharges" => $allAdditionalCharges]);
    }

    public function store(Request $request)
    {
        $insertAdditionalCharges = AddtionalCharge::create([
            "charges_title" => $request->charges_title,
            "amount" => $request->amount,
        ]);

        return redirect('view-additional-charges');
    }

    public function destroy($id)
    {
        $deleteAdditionalCharges = AddtionalCharge::find($id)->delete();

        return redirect('view-additional-charges');
    }
}
