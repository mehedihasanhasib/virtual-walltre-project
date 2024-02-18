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
        $passport_info = Passport::where('user_id', $user_id)->get()->first();

        $data = [
            'name' => $passport_info->name,
            'passport_number'=>$passport_info->passport_number
        ];

        $pdf = Pdf::loadView('pdf.download_passport', ['data'=> $data]);
        return $pdf->stream();
    }

    public function nid()
    {
        $user_id = Auth::user()->id;
        $nid_info = NID::where('user_id', $user_id)->get()->first();
        $data = [
            'name' => $nid_info->name,
            'father_name'=>$nid_info->father_name,
            'mother_name'=>$nid_info->mother_name,
            'nid_number'=>$nid_info->nid_number,
            'dob'=>$nid_info->dob,
        ];
        
        $pdf = Pdf::loadView('pdf.download_nid', ['data' => $data]);
        return $pdf->stream('nid.pdf');

        // return view('download_nid', ['data'=>$data]);
    }
}
