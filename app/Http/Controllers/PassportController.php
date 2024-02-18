<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    public function create()
    {
        return view('passport');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:255',
            'passport_number' => 'required|digits:10',
        ]);

        $validated_data['user_id'] = Auth::user()->id;

        Passport::create($validated_data);

        return redirect()
            ->route('dashboard')
            ->with('message', 'Passport Info Updated Successfully');
    }
}
