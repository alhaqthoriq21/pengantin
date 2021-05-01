<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\AkadNikah;
use App\Models\Calon;
use Illuminate\Http\Request;
use Validator;

class AkadNikahController extends Controller
{
    public function getData(Request $request){
        $calon = Calon::get();
        $akadNikah = AkadNikah::with("calon")->paginate(10);
        $page = $request->page != null ? $request->page : 1;
        return view('dashboard.akad.akadNikah', compact('akadNikah','calon','page'));
    }
    
    public function acceptedAkadNikah($id)
    {
        try {
            $akadNikah = AkadNikah::find($id);
            if (!$akadNikah) throw new \Exception("Akad Nikah Not Found", 1);
            $akadNikah->status = 1;
            $akadNikah->save();
            return redirect(route("get.akadNikah.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "akadNikahId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $akadNikahId = $request->akadNikahId;
            $status = $request->status;
            $akadNikah = AkadNikah::find($akadNikahId);
            if (!$akadNikah) throw new \Exception("Akad Nikah Not Found", 1);
            $akadNikah->status = $status;
            $akadNikah->save();
            return redirect(route("get.akadNikah.data"))->with("success", "Status Akad Nikah has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.akadNikah.data"))->with("error", $e->getMessage());
        }
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tempat' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","tgl","waktu","tempat","alamat","google_loc","status"]);
            $akadNikah = AkadNikah::create($input);
            // dd($input);
            return redirect(route("get.akadNikah.data"))->with("success", "Akad Nikah Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.akadNikah.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $akadNikahId)
    {
        $validator = Validator::make($request->all(), [
            'tempat' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","tgl","waktu","tempat","alamat","google_loc"]);
            $akadNikah = AkadNikah::find($akadNikahId);
            if ($akadNikah) {
                foreach ($input as $key => $value) {
                    $akadNikah->{$key} = $value;
                }
                $akadNikah->save();
                return redirect(route("get.akadNikah.data"))->with("success", "Akad Nikah Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($akadNikahId)
    {
        $calon = Calon::get();
        $akadNikah = AkadNikah::find($akadNikahId);
        return view('dashboard.akad.updateAkadNikah', compact('akadNikah','calon'));
    }

    public function show($akadNikahId)
    {
        
        $calon = Calon::get();
        $akadNikah = AkadNikah::find($akadNikahId);
        $akadNikah->akad_nikah_status_desc = Constants::akadNikahStatusDesc($akadNikah->status);
        return view('dashboard.akad.detailAkadNikah', compact('akadNikah','calon'));
    }

   


}