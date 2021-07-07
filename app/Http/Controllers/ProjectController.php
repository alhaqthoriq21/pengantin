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
            'slug' => $slug,
        ];
        
        return view('share-link', $data);
    }

    public function shareLink(Request $request)
    {
        $request->validate([
            'noWhatsapp' => 'required|integer',
            'namaTamu' => 'required|max:255'
        ]);

        $linkWhatsapp = 'https://api.whatsapp.com/send/?phone=';
        $noWhatsapp = $request->input('noWhatsapp');
        $linkUndangan = 'https://tobeabride.com/'. $request->input('slug') .'?u=' . Str::slug($request->input('namaTamu'));
        $calon = Calon::where('slug', $request->input('slug'))->with('akadNikah')->first();

        if($calon->akadNikah->status == 1){
            $message = '&text=%2AAssalamu%27alaikum%20Warahmatullah%20Wabarakatuh%2A%0A%0A_Bismillahirahmanirrahim._%0ATanpa%20mengurangi%20rasa%20hormat%2C%20perkenankan%20kami%20mengundang%20Bapak%2FIbu%2FSaudara%2Fi%2C%20untuk%20menghadiri%20acara%20pernikahan%20kami%20%3A%0A%0A%2A'. $calon->calon_wanita .'%20%26%20'. $calon->calon_pria .'%2A%0A%0ABerikut%20link%20untuk%20info%20lengkap%20dari%20acara%20kami%20%3A%0A%0A'.$linkUndangan.'%0A%0AMerupakan%20suatu%20kebahagiaan%20bagi%20kami%20apabila%20Bapak%2FIbu%2FSaudara%2Fi%20berkenan%20untuk%20hadir%20dan%20memberikan%20doa%20restu.%0A%0A%2AWassalamu%27alaikum%20Warahmatullah%20Wabarakatuh%2A%0A%0A-%20'. $calon->nick_wanita .'%20%26%20'. $calon->nick_pria .'%20-';
        }elseif($calon->akadNikah->status == 2){
            $message = '&text=_Bismillahirrahmanirrahim_%0A%0AAssalamu%27alaikum%20Warahmatullahi%20Wabarakatuh%0A%0ADengan%20memohon%20rahmat%20dan%20ridha%20Allah%20Subhanahu%20Wa%20Ta%27ala%20%2C%20kami%20bermaksud%20mengundang%20Bapak%2FIbu%2FSaudara%2Fi%20untuk%20hadir%20secara%20virtual%20melalui%20Zoom%20pada%20acara%20pernikahan%20kami.%0A%0A'. $calon->calon_wanita .'%20%26%20'. $calon->calon_pria .'%0A%0ABerikut%20link%20untuk%20info%20lengkap%20dari%20acara%20pernikahan%20kami%20%3A%0A%0A'.$linkUndangan.'%0A%0AKami%20memohon%20maaf%20karena%20tidak%20bisa%20mengundang%20untuk%20hadir%20secara%20langsung%20dikarenakan%20situasi%20pandemi%20Covid-19%20serta%20mentaati%20aturan%20dari%20Pemerintah.%0A%0AMerupakan%20suatu%20kehormatan%20bagi%20kami%20apabila%20Bapak%2FIbu%2FSaudara%2Fi%20berkenan%20hadir%20secara%20virtual%20untuk%20memberi%20do%27a%20dan%20restu.%0A%0AWassalamu%27alaikum%20Warahmatullahi%20Wabarakatuh%0A%0A-%20'. $calon->nick_wanita .'%20%26%20'. $calon->nick_pria .'%20-';
        }

        return redirect()->away($linkWhatsapp.$noWhatsapp.$message);
    }
}