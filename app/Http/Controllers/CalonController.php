<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\AkadNikah;
use App\Models\Calon;
use App\Models\FotoFooter;
use App\Models\LoveStory;
use App\Models\Quotes;
use App\Models\Resepsi;
use Illuminate\Http\Request;
use Validator;


class CalonController extends Controller
{
    public function getData(){
        $calon = Calon::paginate(10);
        return view('dashboard.calon.calon', compact('calon'));
    }
    
    public function acceptedCalon($id)
    {
        try {
            $calon = Calon::find($id);
            if (!$calon) throw new \Exception("Calon Not Found", 1);
            $calon->status = 1;
            $calon->save();
            return redirect(route("get.calon.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "calonId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $calonId = $request->calonId;
            $status = $request->status;
            $calon = Calon::find($calonId);
            if (!$calon) throw new \Exception("Calon Not Found", 1);
            $calon->status = $status;
            $calon->save();
            return redirect(route("get.calon.data"))->with("success", "Status Calon has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.calon.data"))->with("error", $e->getMessage());
        }
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nick_pria' => 'required',
            'nick_wanita' => 'required',
            // 'status' => 'required',
        ]);

        if ($validator->fails()) {
            // return redirect(route("get.calon.data"))->with('Validation Error.', $validator->errors());
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["slug","template","color","nick_pria","nick_wanita","calon_pria","calon_wanita","sosmed_pria",
            "sosmed_wanita","foto_pria","foto_wanita","ayah_pria","ibu_pria","ayah_wanita","ibu_wanita"]);
            $calon = Calon::create($input);
            $this->uploadImage($request, $calon->id);

            $akadNikah = $request->only(["calon_id","tgl","waktu","tempat","alamat","google_loc"]);
            $akadNikah['calon_id'] = $calon->id;
            $akadNikah = AkadNikah::create($akadNikah);

            $resepsi = $request->only(["calon_id","tgl_rsp","waktu_rsp","tempat_rsp","alamat_rsp","google_loc_rsp"]);
            $resepsi['calon_id'] = $calon->id;
            $resepsi = Resepsi::create($resepsi);

            $loveStory = $request->only(["calon_id","tgl_firstmeet","story_firstmeet","foto_firstmeet","tgl_firstdate",
            "story_firstdate","foto_firstdate","tgl_relationship","story_relationship","foto_relationship",
            "tgl_enganged","story_enganged","foto_enganged"]);
            $loveStory['calon_id'] = $calon->id;
            $loveStory = LoveStory::create($loveStory);
            $this->uploadLove($request, $loveStory->id);

            $quotes = $request->only(["calon_id","judul","isi"]);
            $quotes['calon_id'] = $calon->id;
            $quotes = Quotes::create($quotes);


            // dd($input,$akadNikah,$resepsi,$quotes);
            return redirect(route("get.calon.data"))->with("success", "Calon Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.calon.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $calonId)
    {
        $validator = Validator::make($request->all(), [
            'nick_pria' => 'required',
            'nick_wanita' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $calon = $request->only(["slug","template","color","nick_pria","nick_wanita","calon_pria","calon_wanita","sosmed_pria",
            "sosmed_wanita","foto_pria","foto_wanita","ayah_pria","ibu_pria","ayah_wanita","ibu_wanita"]);
            $calon = Calon::find($calonId);
            // dd($request);
            if ($calon) {
                foreach ($calon as $key => $value) {
                    $calon->{$key} = $value;
                }
                $calon->save();
            $this->uploadImage($request, $calon->id);
            }

            $akadNikah = $request->only(["calon_id","tgl","waktu","tempat","alamat","google_loc"]);
            $akadNikah['calon_id'] = $calon->id;
            $akadNikah = AkadNikah::create($akadNikah);

            if ($akadNikah) {
                foreach ($akadNikah as $key => $value) {
                    $akadNikah->{$key} = $value;
                }
                $akadNikah->save();
            }
            
            $resepsi = $request->only(["calon_id","tgl_rsp","waktu_rsp","tempat_rsp","alamat_rsp","google_loc_rsp"]);
            $resepsi['calon_id'] = $calon->id;
            $resepsi = Resepsi::create($resepsi);
            if ($akadNikah) {
                foreach ($akadNikah as $key => $value) {
                    $akadNikah->{$key} = $value;
                }
                $akadNikah->save();
            }

            $loveStory = $request->only(["calon_id","tgl_firstmeet","story_firstmeet","foto_firstmeet","tgl_firstdate",
            "story_firstdate","foto_firstdate","tgl_relationship","story_relationship","foto_relationship",
            "tgl_enganged","story_enganged","foto_enganged"]);
            $loveStory['calon_id'] = $calon->id;
            $loveStory = LoveStory::create($loveStory);
            if ($loveStory) {
                foreach ($loveStory as $key => $value) {
                    $loveStory->{$key} = $value;
                }
                $loveStory->save();
            $this->uploadLove($request, $loveStory->id);
            }

            $quotes = $request->only(["calon_id","judul","isi"]);
            $quotes['calon_id'] = $calon->id;
            $quotes = Quotes::create($quotes);
            if ($quotes) {
                foreach ($quotes as $key => $value) {
                    $quotes->{$key} = $value;
                }
                $quotes->save();
            } 
            dd($calon,$akadNikah,$resepsi,$quotes);
            return redirect(route("get.calon.data"))->with("success", "Calon Has Been Edited");
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($calonId)
    {
        $calon = Calon::find($calonId);
        return view('dashboard.calon.updateCalon', compact('calon'));
    }

    public function show($calonId)
    {
        // $product = Product::get();
        // $productBrand = ProductBrand::get();
        $calon = Calon::find($calonId);
        // $calon = Calon::with(["image" => function ($query) {
        //         return $query->where("types", "calon");
        //     }])->find($CalonId);
        $calon->calon_status_desc = Constants::calonStatusDesc($calon->status);
        return view('dashboard.calon.detailCalon', compact('calon'));
    }

    public function uploadImage(Request $request, $calonId)
    {
        $uploader = new ImageUploadController();
        $data = ["type" => "calon", "uniq_id" => $calonId];

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);
        // dd($request);

        $result = $uploader->upload($request, $data);
        return $result;
    }

    public function uploadLove(Request $request, $loveStoryId)
    {
        $uploader = new ImageUploadController();
        $data = ["type" => "loveStory", "uniq_id" => $loveStoryId];

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);
        // dd($request);

        $result = $uploader->uploadLoveStory($request, $data);
        return $result;
    }
    
}