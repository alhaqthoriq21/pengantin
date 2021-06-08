<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Comment;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Validator;

class ProjectController extends Controller
{
    public function getData($slug, Request $request){
        $calon = Calon::where('slug',$slug)->with("akadNikah","loveStory","resepsi",
        "quotes","song","comment","reservasi","fotoHeader","fotoBody","fotoFooter","user")->first();
        $qs =$request->only(["u"]);
        $tanggalIndoAkad = $this->convertIndoDate($calon->akadNikah->tgl);
        $tanggalIndoResepsi = $this->convertIndoDate($calon->resepsi->tgl_rsp);
        // dd($calon);
        return $this->pickTemplate($calon->template,$calon, $qs, $tanggalIndoAkad, $tanggalIndoResepsi);
    }

    public function pickTemplate($template,$calon, $qs, $tanggalIndoAkad, $tanggalIndoResepsi){
        // dd($qs);
        switch ($template) {
    case "gold":
        return view('dashboard.project.gold', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
        break;
    case "silver":
        return view('dashboard.project.silver', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
        break;
    case "platinum":
        return view('dashboard.project.platinum', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
        break;
    case "bronze":
        return view('dashboard.project.bronze', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
        break;
    // case "honey":
    //     return view('dashboard.project.honey', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
    //     break;
    // case "cherry":
    //     return view('dashboard.project.cherry', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
    //     break;
    // case "clone":
    //     return view('dashboard.project.clone', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
    //     break;
    }
    }

    public function saveComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'comment' => 'required',
            // 'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route("get.project.data"))->with('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","nama","comment"]);
            $slug = $request->only(["slug"]);
            $comment = Comment::create($input);
            // dd($input);
            return redirect(route("get.project.data",$slug))->with("success", "Comment Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.project.data",$slug))->with("error", $e->getMessage());
        }
    }

    public function saveReservasi(Request $request)
    {
        
            $slug = $request->only(["slug"]);

        try {
            $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'ket' => 'required',
            // 'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route("get.project.data",$slug))->with('Validation Error.', $validator->errors());
        }
        
            $input = $request->only(["calon_id","nama","alamat","ket"]);
            $reservasi = Reservasi::create($input);
            // dd($input);
            return redirect(route("get.project.data",$slug))->with("success", "Calon Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.project.data",$slug))->with("error", $e->getMessage());
        }
    }

     function convertIndoDate($date){
    // contoh : 17 Agustus 2019 10:20:20
    
    $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

    $hariIndo = ['Minggu', 'Senin', 'Selasa','Rabu','Kamis',"Jum'at",'Sabtu'];

    $hari = date("w", strtotime($date));
    $tanggal = date("j", strtotime($date));
    $bulan = date('n', strtotime($date));
    $tahun = date("Y", strtotime($date));
    

    return $hariIndo[$hari] . " " . $tanggal . " " . $bulanIndo[$bulan] . " " . $tahun;
    }

}