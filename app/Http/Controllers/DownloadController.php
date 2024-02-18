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
        $passport_info = Passport::where('user_id', $user_id)->get();

        $data = [
            'passport_info' => $passport_info
        ];

        $pdf = Pdf::loadView('download_passport', $data);
        return $pdf->download('invoice.pdf');
    }

    public function mid()
    {
        //
    }
}
