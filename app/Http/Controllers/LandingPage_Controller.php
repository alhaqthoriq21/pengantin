<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use Illuminate\Http\Request;

class LandingPage_Controller extends Controller
{

    public function index()
    {
        $calon = Calon::select('slug', 'foto_gateway', 'nick_pria', 'nick_wanita')
                ->offset(0)
                ->limit(6)
                ->orderBy('id', 'DESC')
                ->get();
                
        return view('landing-page', compact('calon', $calon));
    }

    public function sendMessage(Request $request)
    {
        //Validasi pilihan paket
        if($request->input('paket') == 'bronze'){
            $paket = 'Bronze';
        }
        else if($request->input('paket') == 'silver'){
            $paket = 'Silver';
        }
        else if($request->input('paket') == 'gold'){
            $paket = 'Gold';
        }
        else if($request->input('paket') == 'platinum'){
            $paket = 'Platinum';
        }

        $noWa   = '6283827589388';
        $encode = 'Hallo%2C+Saya+%28nama%29.%0D%0ASaya+ingin+memesan+E-Invitation+Letter+paket+'. $paket;

        return redirect()->away('https://api.whatsapp.com/send/?phone='. $noWa. '&text='. $encode .'&app_absent=0');
    }

    public function videoInvitation()
    {
        return view('video-invitation');
    }
}
