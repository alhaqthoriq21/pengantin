<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = 'song';
    protected $fillable = [
        "calon_id","judul_song","song","video","status"
    ];

    public $timestamps = false;

    public function calon()
    {
        return $this->hasOne("App\Models\Calon", "id", "calon_id");
    }

    protected $primarykey = 'id';
}