<?php

namespace App\Http\Controllers;

use App\Models\NID;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NIDController extends Controller
{
    public function create()
    {
        return view('nid');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|max:255',
            'father_name' => 'required|max:255',
            'mother_name' => 'required|max:255',
            'nid_number' => 'required|digits:10',
            'dob' => 'required|date'
        ]);

        $validated_data['user_id'] = Auth::user()->id;

        NID::create($validated_data);

        return redirect()
            ->route('dashboard')
            ->with('message', 'NID Info Updated Successfully');
    }
}
