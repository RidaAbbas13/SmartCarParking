<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Hash;
use Auth;

class RegisterCustomerController extends Controller
{
    public function create()
    {
        return view('App.Page.register_customer');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'email' => ['required', 'string', 'max:255', 'unique:users'],
        // ]);

        $insertUser = User::create([
            "name" => $request->first_name . $request->last_name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        $insertCustomer = Customer::create([
            'user_id' => $insertUser->id,
            'name' => $request->first_name . $request->last_name,
            'mobile_no' => $request->mobile_no,
            'parmanent_address' => $request->address,
            "email" => $request->email,
            "vehicle_plate_no" => $request->vehicle_palte_no,
            "vehicle_color" => $request->vehicle_color,
            "vehicle_type" => $request->vehicle_Type,
            "engine_number" => $request->engine_number,
            "company_name" => $request->company_name,
            "model" => $request->model,
        ]);

        return redirect('login');
    }

    public function profile()
    {
        $user_id = Auth::user()->id ?? 1;

        $profile = Customer::where("user_id", $user_id)->get();

        return view('App.Customer.profile',["profile" => $profile]);
    }

    public function updateProfile(Request $request)
    {
        $user_id = Auth::user()->id ?? 1;

        $updateCustomer = Customer::where("user_id",$user_id)->update([
            'name' => $request->first_name,
            'mobile_no' => $request->mobile_no,
            'parmanent_address' => $request->address,
            "vehicle_plate_no" => $request->vehicle_palte_no,
            "vehicle_color" => $request->vehicle_color,
            "vehicle_type" => $request->vehicle_Type,
            "engine_number" => $request->engine_number,
            "company_name" => $request->company_name,
            "model" => $request->model,
        ]);

        return redirect('profile');
    }
}
