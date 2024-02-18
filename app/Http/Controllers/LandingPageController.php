<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LandingPageController extends Controller
{
    public function index()
    {

        $user_id = Subscription::where('user_id', Auth::user()->id)->get('user_id')->first();

        if (!is_null($user_id)) {
            return redirect()->intended('dashboard');
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
