<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name_on_card' => 'required|max:255',
            'card_number' => 'required|digits:14',
            'expiration_date' => 'required|date',
            'security_code' => 'required|digits:4'
        ]);
        $validated_data['user_id'] = Auth::user()->id;
        Card::create($validated_data);
    }
}
