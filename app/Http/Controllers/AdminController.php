<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.all_users', ['users' => User::all()]);
    }


    public function index()
    {
        return view("admin.admin_login");
    }

    public function login(Request $request)
    {
        $credentials = $request->all();
        if (Auth::guard('admin')->attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password']
        ])) {
            return redirect()->route('admin.dashboard');
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function create_package()
    {

        return view('admin.pages.create_package');
    }


    public function store_package(Request $request)
    {
        $features = json_encode($request->input('features'));
        // $validated_data = $request->validate([
        //     'package_name' => 'required',
        //     'price' => 'required',
        // ]);

        // $validated_data['features'] = $features;


        Package::create([
            'package_name' => $request->input('package_name'),
            'price' => $request->input('package_price'),
            'features' => $features
        ]);
    }
}
