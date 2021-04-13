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
        // dd($calon);
        return $this->pickTemplate($calon->template,$calon, $qs);
    }

    public function pickTemplate($template,$calon, $qs){
        // dd($qs);
        switch ($template) {
    case "gold":
        return view('dashboard.project.gold', compact('calon', 'qs'));
        break;
    case "silver":
        return view('dashboard.project.silver', compact('calon', 'qs'));
        break;
    case "premium":
        return view('dashboard.project.premium', compact('calon', 'qs'));
        break;
    case "bronze":
        return view('dashboard.project.bronze', compact('calon', 'qs'));
        break;
    case "honey":
        return view('dashboard.project.honey', compact('calon', 'qs'));
        break;
    case "cherry":
        return view('dashboard.project.cherry', compact('calon', 'qs'));
        break;
    case "clone":
        return view('dashboard.project.clone', compact('calon', 'qs'));
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

}