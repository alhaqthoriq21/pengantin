<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\CalonController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\AkadNikahController;
use App\Http\Controllers\ResepsiController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\FotoHeaderController;
use App\Http\Controllers\FotoBodyController;
use App\Http\Controllers\FotoFooterController;
use App\Http\Controllers\LoveStoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SongController;


    Route::get('/', function () {
        return view('home');
    });

    //routing slug
    Route::get("/{slug}", [ProjectController::class, "getData"])->name("get.project.data");
    // Route::get('/comment/list', [ProjectController::class, 'getDataComment'])->name("get.comment.data");
    Route::post("/comment/save", [ProjectController::class, "saveComment"])->name("comment.save");
    // Route::get('/reservasi/list', [ProjectController::class, 'getDataComment'])->name("get.comment.data");
    Route::post("/reservasi/save", [ProjectController::class, "saveReservasi"])->name("reservasi.save");

    Route::get('/calon/list', [CalonController::class, 'getData'])->name("get.calon.data");
    Route::get('/calon/setStatus/{id}', 'App\Http\Controllers\CalonController@acceptedCalon')->name("update.status.calon");
    Route::post("/calon/updateStatus", [CalonController::class, "updateStatus"])->name("calon.updateStatus");
    Route::post("/calon/save/", [CalonController::class, "save"])->name("calon.save");
    Route::get("/calon/detail/{calonId}", [CalonController::class, "detail"])->name("calon.detail");
    Route::post("/calon/update/{calonId}", [CalonController::class, "update"])->name("calon.update");
    Route::get("/calon/show/{calonId}", [CalonController::class, "show"])->name("calon.show");

    Route::get('/song/list', [SongController::class, 'getData'])->name("get.song.data");
    Route::get('/song/setStatus/{id}', 'App\Http\Controllers\SongController@acceptedSong')->name("update.status.song");
    Route::post("/song/updateStatus", [SongController::class, "updateStatus"])->name("song.updateStatus");
    Route::post("/song/save/", [SongController::class, "save"])->name("song.save");
    Route::get("/song/detail/{songId}", [SongController::class, "detail"])->name("song.detail");
    Route::post("/song/update/{songId}", [SongController::class, "update"])->name("song.update");
    Route::get("/song/show/{songId}", [SongController::class, "show"])->name("song.show");

    Route::get('/loveStory/list', [LoveStoryController::class, 'getData'])->name("get.loveStory.data");
    Route::get('/loveStory/setStatus/{id}', 'App\Http\Controllers\LoveStoryController@acceptedLoveStory')->name("update.status.loveStory");
    Route::post("/loveStory/updateStatus", [LoveStoryController::class, "updateStatus"])->name("loveStory.updateStatus");
    Route::post("/loveStory/save/", [LoveStoryController::class, "save"])->name("loveStory.save");
    Route::get("/loveStory/detail/{loveStoryId}", [LoveStoryController::class, "detail"])->name("loveStory.detail");
    Route::post("/loveStory/update/{loveStoryId}", [LoveStoryController::class, "update"])->name("loveStory.update");
    Route::get("/loveStory/show/{loveStoryId}", [LoveStoryController::class, "show"])->name("loveStory.show");
    
    Route::get('/quotes/list', [QuotesController::class, 'getData'])->name("get.quotes.data");
    Route::get('/quotes/setStatus/{id}', 'App\Http\Controllers\QuotesController@acceptedQuotes')->name("update.status.quotes");
    Route::post("/quotes/updateStatus", [QuotesController::class, "updateStatus"])->name("quotes.updateStatus");
    Route::post("/quotes/save/", [QuotesController::class, "save"])->name("quotes.save");
    Route::get("/quotes/detail/{quotesId}", [QuotesController::class, "detail"])->name("quotes.detail");
    Route::post("/quotes/update/{quotesId}", [QuotesController::class, "update"])->name("quotes.update");

    Route::get('/akadNikah/list', [AkadNikahController::class, 'getData'])->name("get.akadNikah.data");
    Route::get('/akadNikah/setStatus/{id}', 'App\Http\Controllers\AkadNikahController@acceptedAkadNikah')->name("update.status.akadNikah");
    Route::post("/akadNikah/updateStatus", [AkadNikahController::class, "updateStatus"])->name("akadNikah.updateStatus");
    Route::post("/akadNikah/save/", [AkadNikahController::class, "save"])->name("akadNikah.save");
    Route::get("/akadNikah/detail/{akadNikahId}", [AkadNikahController::class, "detail"])->name("akadNikah.detail");
    Route::post("/akadNikah/update/{akadNikahId}", [AkadNikahController::class, "update"])->name("akadNikah.update");
    Route::get("/akadNikah/show/{akadNikahId}", [AkadNikahController::class, "show"])->name("akadNikah.show");

    Route::get('/resepsi/list', [ResepsiController::class, 'getData'])->name("get.resepsi.data");
    Route::get('/resepsi/setStatus/{id}', 'App\Http\Controllers\ResepsiController@acceptedResepsi')->name("update.status.resepsi");
    Route::post("/resepsi/updateStatus", [ResepsiController::class, "updateStatus"])->name("resepsi.updateStatus");
    Route::post("/resepsi/save/", [ResepsiController::class, "save"])->name("resepsi.save");
    Route::get("/resepsi/detail/{resepsiId}", [ResepsiController::class, "detail"])->name("resepsi.detail");
    Route::post("/resepsi/update/{resepsiId}", [ResepsiController::class, "update"])->name("resepsi.update");
    Route::get("/resepsi/show/{resepsiId}", [ResepsiController::class, "show"])->name("resepsi.show");

    Route::get('/fotoHeader/list', [FotoHeaderController::class, 'getData'])->name("get.fotoHeader.data");
    Route::get('/fotoHeader/setStatus/{id}', 'App\Http\Controllers\FotoHeaderController@acceptedFotoHeader')->name("update.status.fotoHeader");
    Route::post("/fotoHeader/updateStatus", [FotoHeaderController::class, "updateStatus"])->name("fotoHeader.updateStatus");
    Route::post("/fotoHeader/save/", [FotoHeaderController::class, "save"])->name("fotoHeader.save");
    Route::get("/fotoHeader/detail/{fotoHeaderId}", [FotoHeaderController::class, "detail"])->name("fotoHeader.detail");
    Route::post("/fotoHeader/update/{fotoHeaderId}", [FotoHeaderController::class, "update"])->name("fotoHeader.update");

    Route::get('/fotoBody/list', [FotoBodyController::class, 'getData'])->name("get.fotoBody.data");
    Route::get('/fotoBody/setStatus/{id}', 'App\Http\Controllers\FotoBodyController@acceptedFotoBody')->name("update.status.fotoBody");
    Route::post("/fotoBody/updateStatus", [FotoBodyController::class, "updateStatus"])->name("fotoBody.updateStatus");
    Route::post("/fotoBody/save/", [FotoBodyController::class, "save"])->name("fotoBody.save");
    Route::get("/fotoBody/detail/{fotoBodyId}", [FotoBodyController::class, "detail"])->name("fotoBody.detail");
    Route::post("/fotoBody/update/{fotoBodyId}", [FotoBodyController::class, "update"])->name("fotoBody.update");

    Route::get('/fotoFooter/list', [FotoFooterController::class, 'getData'])->name("get.fotoFooter.data");
    Route::get('/fotoFooter/setStatus/{id}', 'App\Http\Controllers\FotoFooterController@acceptedFotoFooter')->name("update.status.fotoFooter");
    Route::post("/fotoFooter/updateStatus", [FotoFooterController::class, "updateStatus"])->name("fotoFooter.updateStatus");
    Route::post("/fotoFooter/save/", [FotoFooterController::class, "save"])->name("fotoFooter.save");
    Route::get("/fotoFooter/detail/{fotoFooterId}", [FotoFooterController::class, "detail"])->name("fotoFooter.detail");
    Route::post("/fotoFooter/update/{fotoFooterId}", [FotoFooterController::class, "update"])->name("fotoFooter.update");



    Route::get('/comment/list', [CommentController::class, 'getData'])->name("get.comment.data");
    Route::get("/comment/show/{commentId}", [CommentController::class, "show"])->name("comment.show");

    Route::get('/reservasi/list', [ReservasiController::class, 'getData'])->name("get.reservasi.data");
    Route::get("/reservasi/show/{reservasiId}", [ReservasiController::class, "show"])->name("reservasi.show");

    /* disini */