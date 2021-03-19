<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\Calon;
use App\Models\Resepsi;
use Illuminate\Http\Request;
use Validator;

class ResepsiController extends Controller
{
    public function getData(){
        $calon = Calon::get();
        $resepsi = Resepsi::paginate(10);
        return view('dashboard.resepsi.resepsi', compact('resepsi','calon'));
    }
    
    public function acceptedResepsi($id)
    {
        try {
            $resepsi = Resepsi::find($id);
            if (!$resepsi) throw new \Exception("Resepsi Not Found", 1);
            $resepsi->status = 1;
            $resepsi->save();
            return redirect(route("get.resepsi.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "resepsiId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $resepsiId = $request->resepsiId;
            $status = $request->status;
            $resepsi = Resepsi::find($resepsiId);
            if (!$resepsi) throw new \Exception("Resepsi Not Found", 1);
            $resepsi->status = $status;
            $resepsi->save();
            return redirect(route("get.resepsi.data"))->with("success", "Status Resepsi has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.resepsi.data"))->with("error", $e->getMessage());
        }
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tempat_rsp' => 'required',
            'alamat_rsp' => 'required',
            'status_rsp' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","tgl_rsp","waktu_rsp","tempat_rsp","alamat_rsp","google_loc_rsp","status"]);
            $resepsi = Resepsi::create($input);
            return redirect(route("get.resepsi.data"))->with("success", "Resepsi Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.resepsi.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $resepsiId)
    {
        $validator = Validator::make($request->all(), [
            'tempat_rsp' => 'required',
            'alamat_rsp' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","tgl_rsp","waktu_rsp","tempat_rsp","alamat_rsp","google_loc_rsp"]);
            $resepsi = Resepsi::find($resepsiId);
            if ($resepsi) {
                foreach ($input as $key => $value) {
                    $resepsi->{$key} = $value;
                }
                $resepsi->save();
                return redirect(route("get.resepsi.data"))->with("success", "Resepsi Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($resepsiId)
    {
        $calon = Calon::get();
        $resepsi = Resepsi::find($resepsiId);
        return view('dashboard.resepsi.updateResepsi', compact('resepsi','calon'));
    }

    public function show($resepsiId)
    {
        $calon = Calon::get();
        $resepsi = Resepsi::find($resepsiId);
        $resepsi->resepsi_status_desc = Constants::resepsiStatusDesc($resepsi->status);
        return view('dashboard.resepsi.detailResepsi', compact('resepsi','calon'));
    }

}