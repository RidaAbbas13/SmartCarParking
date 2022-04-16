<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function create()
    {
        return view('Admin.Service.create');
    }

    public function index()
    {
        $allServices = Service::all();

        return view('Admin.Service.view')->with("allServices",$allServices);
    }

    public function store(Request $request)
    {   
        $thumbnail = '';
        if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('app/images/productThumbnail', $filename);
                $thumbnail = $filename;
            }

        $insertService = Service::create([
            "service_name" => $request->service_name,
            "service_price" => $request->service_price,
            "thubnail" => $thumbnail,
            "description" => $request->description,
        ]);

        return redirect('view-services');
    }

    public function destroy($id)
    {
        $deleteService = Service::find($id)->delete();

        return redirect('view-services');
    }


    public function edit($id)
    {
        $editService = Service::find($id);

        return view('Admin.Service.edit')
                ->with("editService",$editService);
    }

    public function update(Request $request)
    {
        $updateService = Service::find($request->id);

        $updateService->service_name = $request->service_name;
        $updateService->service_price = $request->service_price;
        $updateService->description = $request->description;

        if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('app/images/productThumbnail', $filename);
                $updateService->thubnail = $filename;
            }

        $updateService->update();

        return redirect('view-services');
    }
}
