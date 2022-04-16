<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $allCustomers = Customer::all();

        return view('Admin.Customer.view_customers')
            ->with("allCustomers", $allCustomers);
    }
}
