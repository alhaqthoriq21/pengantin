<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Song;
use Illuminate\Http\Request;
use Validator;

class SongController extends Controller
{
    public function getData(){
         $calon = Calon::get();
        $song = Song::with('calon')->paginate(10);
        return view('dashboard.song.song', compact('song','calon'));
    }
    
    public function acceptedSong($id)
    {
        try {
            $song = Song::find($id);
            if (!$song) throw new \Exception("Songs Not Found", 1);
            $song->status = 1;
            $song->save();
            return redirect(route("get.song.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "songId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $songId = $request->songId;
            $status = $request->status;
            $song = Song::find($songId);
            if (!$song) throw new \Exception("Songs Not Found", 1);
            $song->status = $status;
            $song->save();
            return redirect(route("get.song.data"))->with("success", "Status Songs has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.song.data"))->with("error", $e->getMessage());
        }
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","judul","song","status"]);
            $song = Song::create($input);
            // $this->uploadSong($request, $song->id);
            return redirect(route("get.song.data"))->with("success", "Songs Footer Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.song.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $songId)
    {
        $validator = Validator::make($request->all(), [
            // 'song' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","judul_song","song"]);
            $song = Song::find($songId);
        
            if ($song) {
                foreach ($input as $key => $value) {
                    $song->{$key} = $value;
                }
                $song->save();
                // $this->uploadSong($request, $song->id);
                return redirect(route("get.song.data"))->with("success", "Songs Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($songId)
    {
        $calon = Calon::get();
        $song = Song::find($songId);
        return view('dashboard.song.updateSong', compact('song','calon'));
    }

    // public function uploadSong(Request $request, $songId)
    // {
    //     $uploader = new ImageUploadController();
    //     $data = ["type" => "song", "uniq_id" => $songId];

    //     // $validatorFile = Validator::make($request->all(), [
    //     //     'foto_pria' => 'required|image',
    //     //     'foto_wanita' => 'required|image'
    //     // ]);
    //     // dd($request);

    //     $result = $uploader->uploadSong($request, $data);
    //     return $result;
    // }
}