<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Card;
use App\Models\Contact;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $contact_info = Contact::where('user_id', $user_id)->get();
        $bank_info = Bank::where('user_id', $user_id)->get();
        $card_info = Card::where('user_id', $user_id)->get();
        $subs_info = Subscription::where('user_id', $user_id)->first();

        return view('dashboard', [
            'contact_info' => $contact_info,
            'bank_info' => $bank_info,
            'card_info' => $card_info,
            'subs_info' => $subs_info
        ]);
    }
}
