<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function create()
    {
        return view("Admin.User.add_user");
    }

    public function store(Request $request)
    {
        $insertUser = User::create([
            "name" => $request->user_name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => "admin",
            "status" => "1",
        ]);

        return redirect('view-users');
    }

    public function index()
    {
        $allUsers = User::whereNotIn("id", [1])->orderBy("id","DESC")->get();

        return view("Admin.User.view_users")
            ->with("allUsers", $allUsers);
    }

    public function updateUserStatus($id, $status)
    {
        $user = User::find($id);

        $user->status = $status;

        $user->update();

        return redirect('view-users');
    }
}
