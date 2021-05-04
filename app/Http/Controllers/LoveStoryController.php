<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\Calon;
use App\Models\LoveStory;
use Illuminate\Http\Request;
use Validator;

class LoveStoryController extends Controller
{
    public function getData(Request $request){
        $calon = Calon::get();
        $loveStory = LoveStory::paginate(10);
        $page = $request->page != null ? $request->page : 1;
        return view('dashboard.love.loveStory', compact('loveStory','calon','page'));
    }
    
    public function acceptedLoveStory($id)
    {
        try {
            $loveStory = LoveStory::find($id);
            if (!$loveStory) throw new \Exception("Love Story Not Found", 1);
            $loveStory->status = 1;
            $loveStory->save();
            return redirect(route("get.loveStory.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "loveStoryId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $loveStoryId = $request->loveStoryId;
            $status = $request->status;
            $loveStory = LoveStory::find($loveStoryId);
            if (!$loveStory) throw new \Exception("Love Story Not Found", 1);
            $loveStory->status = $status;
            $loveStory->save();
            return redirect(route("get.loveStory.data"))->with("success", "Status Love Story has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.loveStory.data"))->with("error", $e->getMessage());
        }
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tgl_firstmeet' => 'required',
            // 'foto_firstmeet' => 'required',
            // 'status' => 'required',
        ]);

        if ($validator->fails()) {
            // return redirect(route("get.loveStory.data"))->with('Validation Error.', $validator->errors());
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","tgl_firstmeet","story_firstmeet","foto_firstmeet","tgl_firstdate",
        "story_firstdate","foto_firstdate","tgl_relationship","story_relationship","foto_relationship",
        "tgl_enganged","story_enganged","foto_enganged","status"]);
            $loveStory = LoveStory::create($input);
            $this->uploadImage($request, $loveStory->id);
            // dd($input);
            return redirect(route("get.loveStory.data"))->with("success", "Love Story Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.loveStory.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $loveStoryId)
    {
        $validator = Validator::make($request->all(), [
            'tgl_firstmeet' => 'required',
            // 'foto_firstmeet' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $loveStory = $request->only(["calon_id","tgl_firstmeet","story_firstmeet","foto_firstmeet","tgl_firstdate",
        "story_firstdate","foto_firstdate","tgl_relationship","story_relationship","foto_relationship",
        "tgl_enganged","story_enganged","foto_enganged"]);
            $loveStory = loveStory::find($loveStoryId);
            // dd($request);
            if ($loveStory) {
                foreach ($loveStory as $key => $value) {
                    $loveStory->{$key} = $value;
                }
                $loveStory->save();
            $this->uploadImage($request, $loveStory->id);
                return redirect(route("get.loveStory.data"))->with("success", "Love Story Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($loveStoryId)
    {
        $calon = Calon::get();
        $loveStory = LoveStory::find($loveStoryId);
        return view('dashboard.love.updateLoveStory', compact('loveStory','calon'));
    }

    public function show($loveStoryId)
    {
        // $product = Product::get();
        // $productBrand = ProductBrand::get();
        $calon = Calon::get();
        $loveStory = LoveStory::find($loveStoryId);
        $loveStory->love_story_status_desc = Constants::loveStoryStatusDesc($loveStory->status);
        return view('dashboard.love.detailLoveStory', compact('loveStory','calon'));
    }

    public function uploadImage(Request $request, $calonId)
    {
        $uploader = new ImageUploadController();
        $data = ["type" => "loveStory", "uniq_id" => $calonId];

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);
        // dd($request);

        $result = $uploader->uploadLoveStory($request, $data);
        return $result;
    }
}