<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Calon;
use App\Models\FotoBody;
use App\Models\FotoFooter;
use App\Models\FotoHeader;
use App\Models\Song;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Models\Image as Images;
// use App\Models\Song as Songs;
use App\Models\LoveStory;

class ImageUploadController extends Controller
{
    public function upload(Request $request, $data)
    {
        $validator = Validator::make($data, [
            'uniq_id' => 'required',
            'type' => 'required',
        ]);

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        // if ($validatorFile->fails()) {
        //     return $validator->errors();
        // }

        $images = [];
        if ($files = $request->file('foto_pria')) {
            try {
                    $image = $files;
                    $input['foto_pria'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_pria']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_pria']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_pria']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_pria']), $fixPath . $input['foto_pria'], 80);
                    unlink(public_path('uploads/' . $input['foto_pria']));

                    $calon = Calon::where('id',$data['uniq_id'])
                ->update([
                        "foto_pria" => "uploads/images/$year/$month/$date/" . $input['foto_pria']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {

                dd($e);
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        } 

        if ($files = $request->file('foto_wanita')) {
            try {
                    $image = $files;
                    $input['foto_wanita'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_wanita']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_wanita']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_wanita']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_wanita']), $fixPath . $input['foto_wanita'], 80);
                    unlink(public_path('uploads/' . $input['foto_wanita']));

                    $calon = Calon::where('id',$data['uniq_id'])
                ->update([
                        "foto_wanita" => "uploads/images/$year/$month/$date/" . $input['foto_wanita']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        }
    }

    // public function uploadSong(Request $request, $data)
    // {
    //     $validator = Validator::make($data, [
    //         'uniq_id' => 'required',
    //         'type' => 'required',
    //     ]);

    //     // $validatorFile = Validator::make($request->all(), [
    //     //     'foto_pria' => 'required|image',
    //     //     'foto_wanita' => 'required|image'
    //     // ]);

    //     if ($validator->fails()) {
    //         return $validator->errors();
    //     }

    //     // if ($validatorFile->fails()) {
    //     //     return $validator->errors();
    //     // }

    //     $songs = [];
    //     if ($files = $request->file('song')) {
    //         try {
    //                 $song = $files;
    //                 $input['song'] = time() . $files->getClientOriginalName() . '.' . $song->getClientOriginalExtension();
    //                 $destinationPath = public_path('/uploads/');
    //                 $song = $request->file('avatar')->store('avatars');

    //                 $song->save($destinationPath . '/' . $input['song']);

    //                 $year = date("Y");
    //                 $month = date("m");
    //                 $date = date("d");
    //                 $fixPath = public_path("uploads/songs/$year/$month/$date/");
    //                 if (!File::isDirectory($fixPath)) {
    //                     File::makeDirectory($fixPath, 0777, true, true);
    //                 }
    //                 $this->compress_image(public_path('uploads/' . $input['song']), $fixPath . $input['song'], 80);
    //                 unlink(public_path('uploads/' . $input['song']));

    //                 $song = Song::where('id',$data['uniq_id'])
    //             ->update([
    //                     "song" => "uploads/images/$year/$month/$date/" . $input['song']
    //                 ]);

    //                 $songs[] = $song;
    //         } catch (\Exception $e) {

    //             dd($e);
    //             return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
    //         }
    //     } 

        
    // }


    public function uploadHeader(Request $request, $data)
    {
        $validator = Validator::make($data, [
            'uniq_id' => 'required',
            'type' => 'required',
        ]);

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        // if ($validatorFile->fails()) {
        //     return $validator->errors();
        // }

        $images = [];
        if ($files = $request->file('foto_header')) {
            try {
                    $image = $files;
                    $input['foto_header'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_header']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_header']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_header']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_header']), $fixPath . $input['foto_header'], 80);
                    unlink(public_path('uploads/' . $input['foto_header']));

                    $fotoHeader = FotoHeader::where('id',$data['uniq_id'])
                ->update([
                        "foto_header" => "uploads/images/$year/$month/$date/" . $input['foto_header']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {

                dd($e);
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        } 

        if ($files = $request->file('foto_countdown')) {
            try {
                    $image = $files;
                    $input['foto_countdown'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_countdown']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_countdown']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_countdown']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_countdown']), $fixPath . $input['foto_countdown'], 80);
                    unlink(public_path('uploads/' . $input['foto_countdown']));

                    $fotoHeader = FotoHeader::where('id',$data['uniq_id'])
                ->update([
                        "foto_countdown" => "uploads/images/$year/$month/$date/" . $input['foto_countdown']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {

                dd($e);
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        } 
    }

    public function uploadBody(Request $request, $data)
    {
        $validator = Validator::make($data, [
            'uniq_id' => 'required',
            'type' => 'required',
        ]);

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        // if ($validatorFile->fails()) {
        //     return $validator->errors();
        // }

        $images = [];
        if ($files = $request->file('foto_pertama')) {
            try {
                    $image = $files;
                    $input['foto_pertama'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_pertama']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_pertama']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_pertama']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_pertama']), $fixPath . $input['foto_pertama'], 80);
                    unlink(public_path('uploads/' . $input['foto_pertama']));

                    $fotoBody = FotoBody::where('id',$data['uniq_id'])
                ->update([
                        "foto_pertama" => "uploads/images/$year/$month/$date/" . $input['foto_pertama']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {

                dd($e);
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        } 
        
        if ($files = $request->file('foto_kedua')) {
            try {
                    $image = $files;
                    $input['foto_kedua'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_kedua']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_kedua']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_kedua']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_kedua']), $fixPath . $input['foto_kedua'], 80);
                    unlink(public_path('uploads/' . $input['foto_kedua']));

                    $fotoBody = FotoBody::where('id',$data['uniq_id'])
                ->update([
                        "foto_kedua" => "uploads/images/$year/$month/$date/" . $input['foto_kedua']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {

                dd($e);
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        } 
        
    }

    public function uploadFooter(Request $request, $data)
    {
        $validator = Validator::make($data, [
            'uniq_id' => 'required',
            'type' => 'required',
        ]);

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        // if ($validatorFile->fails()) {
        //     return $validator->errors();
        // }

        $images = [];
        if ($files = $request->file('foto')) {
            try {
                    $image = $files;
                    $input['foto'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto']), $fixPath . $input['foto'], 80);
                    unlink(public_path('uploads/' . $input['foto']));

                    $fotoFooter = FotoFooter::where('id',$data['uniq_id'])
                ->update([
                        "foto" => "uploads/images/$year/$month/$date/" . $input['foto']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {

                dd($e);
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        } 
    }

    public function uploadLoveStory(Request $request, $data)
    {
        $validator = Validator::make($data, [
            'uniq_id' => 'required',
            'type' => 'required',
        ]);

        // $validatorFile = Validator::make($request->all(), [
        //     'foto_pria' => 'required|image',
        //     'foto_wanita' => 'required|image'
        // ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        // if ($validatorFile->fails()) {
        //     return $validator->errors();
        // }

        $images = [];
        if ($files = $request->file('foto_firstmeet')) {
            try {
                    $image = $files;
                    $input['foto_firstmeet'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_firstmeet']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_firstmeet']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_firstmeet']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_firstmeet']), $fixPath . $input['foto_firstmeet'], 80);
                    unlink(public_path('uploads/' . $input['foto_firstmeet']));

                    $loveStory = LoveStory::where('id',$data['uniq_id'])
                ->update([
                        "foto_firstmeet" => "uploads/images/$year/$month/$date/" . $input['foto_firstmeet']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {

                dd($e);
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        } 

        if ($files = $request->file('foto_firstdate')) {
            try {
                    $image = $files;
                    $input['foto_firstdate'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_firstdate']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_firstdate']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_firstdate']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_firstdate']), $fixPath . $input['foto_firstdate'], 80);
                    unlink(public_path('uploads/' . $input['foto_firstdate']));

                    $loveStory = LoveStory::where('id',$data['uniq_id'])
                ->update([
                        "foto_firstdate" => "uploads/images/$year/$month/$date/" . $input['foto_firstdate']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        }

        if ($files = $request->file('foto_relationship')) {
            try {
                    $image = $files;
                    $input['foto_relationship'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_relationship']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_relationship']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_relationship']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_relationship']), $fixPath . $input['foto_relationship'], 80);
                    unlink(public_path('uploads/' . $input['foto_relationship']));

                    $loveStory = LoveStory::where('id',$data['uniq_id'])
                ->update([
                        "foto_relationship" => "uploads/images/$year/$month/$date/" . $input['foto_relationship']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        }

        if ($files = $request->file('foto_enganged')) {
            try {
                    $image = $files;
                    $input['foto_enganged'] = md5(time() . $files->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/');
                    $image->move($destinationPath, $input['foto_enganged']);
                    // $img = Image::make($image->getRealPath());
                    $img = Image::make($destinationPath . $input['foto_enganged']);
                    $width = $img->width() > 1280 ? 1280 : round($img->width() * 0.8);
                    $img->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath . '/' . $input['foto_enganged']);

                    $year = date("Y");
                    $month = date("m");
                    $date = date("d");
                    $fixPath = public_path("uploads/images/$year/$month/$date/");
                    if (!File::isDirectory($fixPath)) {
                        File::makeDirectory($fixPath, 0777, true, true);
                    }
                    $this->compress_image(public_path('uploads/' . $input['foto_enganged']), $fixPath . $input['foto_enganged'], 80);
                    unlink(public_path('uploads/' . $input['foto_enganged']));

                    $loveStory = LoveStory::where('id',$data['uniq_id'])
                ->update([
                        "foto_enganged" => "uploads/images/$year/$month/$date/" . $input['foto_enganged']
                    ]);

                    $images[] = $image;
            } catch (\Exception $e) {
                return $this->sendError("Terjadi Kesalahan dalam Upload Gambar", $e->getMessage());
            }
        }
    }


    function compress_image($source_url, $destination_url, $quality)
    {
        $info = getimagesize($source_url);
        if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
        elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
        elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
        imagejpeg($image, $destination_url, $quality);
    }

    public function removeImage($imageId)
    {
        $image = Images::find($imageId);
        if (!$image) return $this->sendError("Image Not found");
        $destinationPath = public_path($image->filename);
        if (File::exists($destinationPath)) {
            unlink($destinationPath);
        }
        $image->delete();
        return $this->sendResponse([], "Image delete successfull");
    }
}