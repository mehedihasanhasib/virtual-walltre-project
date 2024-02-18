<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Bank;
use App\Models\Card;
use App\Models\Passport;
use App\Models\Subscription;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user_id = Subscription::where('user_id', Auth::user()->id)->get()->first();
        $passport = Passport::where('user_id', Auth::user()->id)->get()->first();
        $bank = Bank::where('user_id', Auth::user()->id)->get()->first();
        $card = Card::where('user_id', Auth::user()->id)->get()->first();

        if (is_null($user_id)) {
            return redirect()->intended(RouteServiceProvider::HOME);
        } else if(is_null($passport)){
            return redirect()->intended('passport');
        } else if(is_null($bank)){
            return redirect()->intended('bank');
        }else if(is_null($card)){
            return redirect()->intended('card');
        }
        else {
            return redirect()->intended('dashboard');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
