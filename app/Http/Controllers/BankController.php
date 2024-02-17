<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'account_name' => 'required|max:255',
            'account_number' => 'required|digits:10',
        ]);
        $validated_data['user_id'] = Auth::user()->id;
        Bank::create($validated_data);
    }
}
