<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Calon;
use App\Models\Comment;
use App\Models\Reservasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getData(Request $request, $slug){
        $calon = Calon::where('slug',$slug)->with("akadNikah","loveStory","resepsi",
        "quotes","song","comment","reservasi","fotoHeader","fotoBody","fotoFooter","user")->first();

        if($calon == null){
            return redirect()->route('landing.page');
        }

        $qs = str_replace('-', ' ', $request->only(["u"]));

        $tanggalIndoAkad = $this->convertIndoDate($calon->akadNikah->tgl);
        $tanggalIndoResepsi = $this->convertIndoDate($calon->resepsi->tgl_rsp);

        return $this->pickTemplate($calon->template, $calon, $qs, $tanggalIndoAkad, $tanggalIndoResepsi);
    }

    public function pickTemplate($template,$calon, $qs, $tanggalIndoAkad, $tanggalIndoResepsi){
        switch ($template) {
            case "bronze":
                return view('dashboard.project.bronze', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
                break;
            case "silver":
                return view('dashboard.project.silver', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
                break;
            case "gold":
                return view('dashboard.project.gold', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
                break;
            case "platinum":
                return view('dashboard.project.platinum', compact('calon', 'qs','tanggalIndoAkad', 'tanggalIndoResepsi'));
                break;
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

    public function generateShare($slug)
    {
        //get data from table calon
        $calon = Calon::where('slug', $slug)->first();

        //jika calon tidak ada maka redirect ke halaman landing poage
        if($calon == null){
            return redirect()->route('landing.page');
        }

        //jika ada return dengan data dibawah
        $data = [
            'linkUndangan' => 'https://tobeabride.com/'.$slug
        ];
        
        return view('share-link', $data);
    }

    public function shareLink(Request $request)
    {
        $request->validate([
            'noWhatsapp' => 'required|integer',
            'namaTamu' => 'required|max:255'
        ]);

        $noWhatsapp = $request->input('noWhatsapp');

        $linkUndangan = $request->input('linkUndangan') .'?u=' . Str::slug($request->input('namaTamu'));

        $message = '&text=_Bismillahirrahmanirrahim_%0D%0A%0D%0A_Assalamualaikum+Warrahmatullahi+Wabarakatuh._%0D%0A%0D%0A%E2%80%9CDan+di+antara+tanda-tanda+%28kebesaran%29-Nya+ialah+Dia+menciptakan+pasangan-pasangan+untukmu+dari+jenismu+sendiri%2C+agar+kamu+cenderung+dan+merasa+tenteram+kepadanya%2C+dan+Dia+menjadikan+di+antaramu+rasa+kasih+dan+sayang%E2%80%9D+%28Q.S+Ar-Rum+ayat+21%29.++%0D%0A%0D%0ATanpa+mengurangi+rasa+hormat%2C+kami+mengundang+saudara%2Fi+dalam+hari+pernikahan+kami.+%0D%0A%0D%0A%2AKlik+disini+untuk+membuka+undangan%3A+%2A ' .$linkUndangan;

        $linkWhatsapp = 'https://api.whatsapp.com/send/?phone=';

        return redirect()->away($linkWhatsapp.$noWhatsapp.$message);
    }
}