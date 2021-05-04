<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\FotoFooter;
use Illuminate\Http\Request;
use Validator;

class FotoFooterController extends Controller
{
    public function getData(Request $request){
        $calon = Calon::get();
        $fotoFooter = FotoFooter::with('calon')->paginate(10);
        $page = $request->page != null ? $request->page : 1;
        return view('dashboard.fotoFooter.fotoFooter', compact('fotoFooter','calon','page'));
    }
    
    public function acceptedFotoFooter($id)
    {
        try {
            $fotoFooter = FotoFooter::find($id);
            if (!$fotoFooter) throw new \Exception("Foto Footer Not Found", 1);
            $fotoFooter->status = 1;
            $fotoFooter->save();
            return redirect(route("get.fotoFooter.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "fotoFooterId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $fotoFooterId = $request->fotoFooterId;
            $status = $request->status;
            $fotoFooter = FotoFooter::find($fotoFooterId);
            if (!$fotoFooter) throw new \Exception("Foto Footer Not Found", 1);
            $fotoFooter->status = $status;
            $fotoFooter->save();
            return redirect(route("get.fotoFooter.data"))->with("success", "Status Foto Footer has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.fotoFooter.data"))->with("error", $e->getMessage());
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
            $input = $request->only(["calon_id","foto","status"]);
            $fotoFooter = FotoFooter::create($input);
            $this->uploadImage($request, $fotoFooter->id);
            return redirect(route("get.fotoFooter.data"))->with("success", "Foto Footer Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.fotoFooter.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $fotoFooterId)
    {
        $validator = Validator::make($request->all(), [
            // 'foto' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","foto"]);
            $fotoFooter = FotoFooter::find($fotoFooterId);
        
            if ($fotoFooter) {
                foreach ($input as $key => $value) {
                    $fotoFooter->{$key} = $value;
                }
                $fotoFooter->save();
                $this->uploadImage($request, $fotoFooter->id);
                return redirect(route("get.fotoFooter.data"))->with("success", "Foto Footer Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($fotoFooterId)
    {
        $calon = Calon::get();
        $fotoFooter = FotoFooter::find($fotoFooterId);
        return view('dashboard.fotoFooter.updateFotoFooter', compact('fotoFooter','calon'));
    }

    public function uploadImage(Request $request, $fotoFooterId)
    {
        $uploader = new ImageUploadController();
        $data = ["type" => "fotoFooter", "uniq_id" => $fotoFooterId];

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);
        // dd($request);

        $result = $uploader->uploadFooter($request, $data);
        return $result;
    }
}