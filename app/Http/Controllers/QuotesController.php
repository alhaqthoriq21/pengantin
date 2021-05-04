<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Quotes;
use Illuminate\Http\Request;
use Validator;

class QuotesController extends Controller
{
    public function getData(Request $request){
        $calon = Calon::get();
        $quotes = Quotes::with('calon')->paginate(10);
        $page = $request->page != null ? $request->page : 1;
        return view('dashboard.quotes.quotes', compact('quotes','calon','page'));
    }
    
    public function acceptedQuotes($id)
    {
        try {
            $quotes = Quotes::find($id);
            if (!$quotes) throw new \Exception("Quptes Not Found", 1);
            $quotes->status = 1;
            $quotes->save();
            return redirect(route("get.quotes.data"));
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function updateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "quotesId" => "required",
            "status" => "required"
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $quotesId = $request->quotesId;
            $status = $request->status;
            $quotes = Quotes::find($quotesId);
            if (!$quotes) throw new \Exception("Quotes Not Found", 1);
            $quotes->status = $status;
            $quotes->save();
            return redirect(route("get.quotes.data"))->with("success", "Status Quotes has been changed");
        } catch (\Exception $e) {
            return redirect(route("get.quotes.data"))->with("error", $e->getMessage());
        }
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","judul","isi","status"]);
            $quotes = Quotes::create($input);
            return redirect(route("get.quotes.data"))->with("success", "Quotes Has Been Added");
        } catch (\Exception $e) {
            return redirect(route("get.quotes.data"))->with("error", $e->getMessage());
        }
    }

    public function update(Request $request, $quotesId)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        try {
            $input = $request->only(["calon_id","judul","isi"]);
            $quotes = Quotes::find($quotesId);
            if ($quotes) {
                foreach ($input as $key => $value) {
                    $quotes->{$key} = $value;
                }
                $quotes->save();
                return redirect(route("get.quotes.data"))->with("success", "Quotes Has Been Edited");
            }
            return $this->sendError("Tidak ditemukan");
        } catch (\Exception $e) {
            return $this->sendError("Terjadi Sebuah Keasalahn", $e->getMessage());
        }
    }

    public function detail($quotesId)
    {
        $calon = Calon::get();
        $quotes = Quotes::find($quotesId);
        return view('dashboard.quotes.updateQuotes', compact('quotes','calon'));
    }
}