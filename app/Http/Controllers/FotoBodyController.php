<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\FotoBody;
use Illuminate\Http\Request;
use Validator;

class FotoBodyController extends Controller
{
    public function getData(){
        $calon = Calon::get();
        $fotoBody = FotoBody::with('calon')->paginate(10);
        return view('dashboard.fotoBody.fotoBody', compact('fotoBody','calon'));
    }
    
    public function acceptedFotoBody($id)
    {
        try {
            $fotoBody = FotoBody::find($id);
            if (!$fotoBody) throw new \Exception("Foto Body Not Found", 1);
            $fotoBody->status = 1;
            $fotoBody->save();
            return redirect(route("get.fotoBody.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "fotoBodyId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $fotoBodyId = $request->fotoBodyId;
            $status = $request->status;
            $fotoBody = FotoBody::find($fotoBodyId);
            if (!$fotoBody) throw new \Exception("Foto Body Not Found", 1);
            $fotoBody->status = $status;
            $fotoBody->save();
            return redirect(route("get.fotoBody.data"))->with("success", "Status Foto Body has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.fotoBody.data"))->with("error", $e->getMessage());
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
            $input = $request->only(["calon_id","foto_pertama","foto_kedua","status"]);
            $fotoBody = FotoBody::create($input);
            $this->uploadImage($request, $fotoBody->id);
            return redirect(route("get.fotoBody.data"))->with("success", "Foto Body Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.fotoBody.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $fotoBodyId)
    {
        $validator = Validator::make($request->all(), [
            // 'status' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","foto_pertama", "foto_kedua"]);
            $fotoBody = FotoBody::find($fotoBodyId);
            
            if ($fotoBody) {
                foreach ($input as $key => $value) {
                    $fotoBody->{$key} = $value;
                }
                $fotoBody->save();
                $this->uploadImage($request, $fotoBody->id);
                return redirect(route("get.fotoBody.data"))->with("success", "Foto Body Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($fotoBodyId)
    {
        $calon = Calon::get();
        $fotoBody = FotoBody::find($fotoBodyId);
        return view('dashboard.fotoBody.updateFotoBody', compact('fotoBody','calon'));
    }

    public function uploadImage(Request $request, $fotoBodyId)
    {
        $uploader = new ImageUploadController();
        $data = ["type" => "fotoBody", "uniq_id" => $fotoBodyId];

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);
        // dd($request);

        $result = $uploader->uploadBody($request, $data);
        return $result;
    }
}