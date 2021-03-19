<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function getData(){
        $reservasi = Reservasi::paginate(10);
        return view('dashboard.reservasi.reservasi', compact('reservasi'));
    }

    public function show($reservasiId)
    {
        $reservasi = Reservasi::find($reservasiId);
        $reservasi->reservasi_status_desc = Constants::reservasiStatusDesc($reservasi->status);
        return view('dashboard.reservasi.detailReservasi', compact('reservasi'));
    }
}