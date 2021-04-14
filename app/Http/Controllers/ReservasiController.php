<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\Calon;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use PDF;


class ReservasiController extends Controller
{
    public function getData(){
        $calon = Calon::get();
        $reservasi = Reservasi::with('calon')->paginate(10);
        return view('dashboard.reservasi.reservasi', compact('reservasi','calon'));
    }

    public function show($reservasiId)
    {
        $reservasi = Reservasi::find($reservasiId);
        $reservasi->reservasi_status_desc = Constants::reservasiStatusDesc($reservasi->status);
        return view('dashboard.reservasi.detailReservasi', compact('reservasi'));
    }

    public function cetak(Request $request)
    {
    $calon = Calon::first();
    $r =$request->only(["calon_id"]);
	$reservasi = Reservasi::where('calon_id', $r)->get();
	$pdf = PDF::loadview('dashboard.reservasi.reservasiPdf', compact('reservasi','calon'));
    // dd($calon);
	return $pdf->stream();
    }

    // public function dataPush(){
    //     $calon = Calon::get();
    //     $reservasi = Reservasi::get();
    //     return view('dashboard.reservasi.reservasiPdf', compact('reservasi','calon'));
    // }

}