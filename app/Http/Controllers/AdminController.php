<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

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
            return back()->with('message', 'Credentials doesn not match. Seed admin database first');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
