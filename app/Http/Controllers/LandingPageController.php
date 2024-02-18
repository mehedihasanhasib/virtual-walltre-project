<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::user()->new_user) {
            if (Auth::login()) {
                return back();
            } else {
                return redirect()->route('dashboard');
            }
        } else {
            $packages = Package::all();
            return view('landing', [
                'packages' => $packages
            ]);
        }
    }

    public function next_page(Request $request)
    {
        $user_id = Auth::user()->id;
        Subscription::create([
            'user_id' => Auth::user()->id,
            'package_id' => $request->input('package_id')
        ]);

        User::where('id', $user_id)->update([
            'new_user' => false
        ]);

        return redirect()
            ->route('contact')
            ->with('message', 'Payment Successfull');
    }
}
