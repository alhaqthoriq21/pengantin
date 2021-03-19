<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\FotoHeader;
use Illuminate\Http\Request;
use Validator;

class FotoHeaderController extends Controller
{
    
    public function getData(){
        $calon = Calon::get();
        $fotoHeader = FotoHeader::with('calon')->paginate(10);
        return view('dashboard.fotoHeader.fotoHeader', compact('fotoHeader','calon'));
    }
    
    public function acceptedFotoHeader($id)
    {
        try {
            $fotoHeader = FotoHeader::find($id);
            if (!$fotoHeader) throw new \Exception("Foto Header Not Found", 1);
            $fotoHeader->status = 1;
            $fotoHeader->save();
            return redirect(route("get.fotoHeader.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "fotoHeaderId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $fotoHeaderId = $request->fotoHeaderId;
            $status = $request->status;
            $fotoHeader = FotoHeader::find($fotoHeaderId);
            if (!$fotoHeader) throw new \Exception("Foto Header Not Found", 1);
            $fotoHeader->status = $status;
            $fotoHeader->save();
            return redirect(route("get.fotoHeader.data"))->with("success", "Status Foto Header has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.fotoHeader.data"))->with("error", $e->getMessage());
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
            $input = $request->only(["calon_id","foto_header","foto_countdown","status"]);
            $fotoHeader = FotoHeader::create($input);
            $this->uploadImage($request, $fotoHeader->id);
            return redirect(route("get.fotoHeader.data"))->with("success", "Foto Header Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.fotoHeader.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $fotoHeaderId)
    {
        $validator = Validator::make($request->all(), [
            // 'foto' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","foto_header","foto_countdown"]);
            $fotoHeader = FotoHeader::find($fotoHeaderId);
            
            if ($fotoHeader) {
                foreach ($input as $key => $value) {
                    $fotoHeader->{$key} = $value;
                }
                $fotoHeader->save();
                $this->uploadImage($request, $fotoHeader->id);
                return redirect(route("get.fotoHeader.data"))->with("success", "Foto Header Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($fotoHeaderId)
    {
        $calon = Calon::get();
        $fotoHeader = FotoHeader::find($fotoHeaderId);
        return view('dashboard.fotoHeader.updateFotoHeader', compact('fotoHeader','calon'));
    }

    public function uploadImage(Request $request, $fotoHeaderId)
    {
        $uploader = new ImageUploadController();
        $data = ["type" => "fotoHeader", "uniq_id" => $fotoHeaderId];

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);
        // dd($request);

        $result = $uploader->uploadHeader($request, $data);
        return $result;
    }
}