<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    use HasFactory;
    protected $table = 'calon';

    protected $fillable = [
        "slug","template","nick_pria","color","foto_gateway","nick_wanita","calon_pria", "calon_wanita", 
        "sosmed_pria","sosmed_wanita","foto_pria","foto_wanita","ayah_pria","ibu_pria",
        "ayah_wanita","ibu_wanita","undang","status"
    ];

    public function akadNikah()
    {
        return $this->hasOne("App\Models\AkadNikah", "calon_id", "id");
    }

    public function resepsi()
    {
        return $this->hasOne("App\Models\Resepsi", "calon_id", "id");
    }

    public function song()
    {
        return $this->hasOne("App\Models\Song", "calon_id", "id");
    }

    public function reservasi()
    {
        return $this->hasMany("App\Models\Reservasi", "calon_id", "id");
    }

    public function quotes()
    {
        return $this->hasOne("App\Models\Quotes", "calon_id", "id");
    }

    public function comment()
    {
        return $this->hasMany("App\Models\Comment", "calon_id", "id");
    }

    public function user()
    {
        return $this->hasOne("App\Models\User", "id", "id");
    }

    public function loveStory()
    {
        return $this->hasOne("App\Models\LoveStory", "calon_id", "id");
    }

    public function fotoHeader()
    {
        return $this->hasOne("App\Models\FotoHeader", "calon_id", "id");
    }

    public function fotoBody()
    {
        return $this->hasOne("App\Models\FotoBody", "calon_id", "id");
    }

    public function fotoFooter()
    {
        return $this->hasMany("App\Models\FotoFooter", "calon_id", "id");
    }

    public $timestamps = false;


    protected $primarykey = 'id';
}