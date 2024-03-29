<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'full_name' => 'required|max:255',
            'contact_number' => 'required|digits:11',
            'email' => 'required|email',
            'address' => 'required|max:255'
        ]);

        $validated_data['user_id'] = Auth::user()->id;
        Contact::create($validated_data);

        return redirect()
            ->route('bank')
            ->with('message', 'Contact Info Uploaded Successfully');
    }
}
