<?php

namespace App\Http\Controllers;

use App\Models\NID;
use App\Models\Passport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class DownloadController extends Controller
{
    public function passport()
    {
        $user_id = Auth::user()->id;
        $nid_info = NID::where('user_id', $user_id)->get();
        $passport_info = Passport::where('user_id', $user_id)->get();

        $pdf = Pdf::loadView('download_passport', ['passport_info' => $passport_info]);
        return $pdf->download('passport.pdf');
    }

    public function mid()
    {
        //
    }
}
