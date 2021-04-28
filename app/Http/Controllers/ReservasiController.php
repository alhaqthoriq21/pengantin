<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\Calon;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use PDF;


class ReservasiController extends Controller
{
    public function getData(Request $request){
        $calon = Calon::get();
        $reservasi = Reservasi::with('calon')->paginate(10);
        $page = $request->page != null ? $request->page : 1;
        return view('dashboard.reservasi.reservasi', compact('reservasi','calon','page'));
    }

    public function show($reservasiId)
    {
        $reservasi = Reservasi::find($reservasiId);
        $reservasi->reservasi_status_desc = Constants::reservasiStatusDesc($reservasi->status);
        return view('dashboard.reservasi.detailReservasi', compact('reservasi'));
    }

    public function cetak(Request $request)
    {
        
    $r = $request->only(["calon_id"]);
    $calon = Calon::find($r)->first();
	$reservasi = Reservasi::where('calon_id', $r)->with('calon')->get();
	$pdf = PDF::loadview('dashboard.reservasi.reservasiPdf', compact('reservasi','calon'));
    
	return $pdf->stream();
    }

    // public function dataPush(){
    //     $calon = Calon::get();
    //     $reservasi = Reservasi::get();
    //     return view('dashboard.reservasi.reservasiPdf', compact('reservasi','calon'));
    // }

}