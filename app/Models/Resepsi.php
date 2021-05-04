<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resepsi extends Model
{
    use HasFactory;
    protected $table = 'resepsi';
    protected $fillable = [
        "calon_id", "tgl_rsp","waktu_rsp","tempat_rsp","alamat_rsp","google_loc_rsp","status"
    ];

    protected $casts = [
        'tgl_rsp' => 'datetime',
    ];

    public function calon()
    {
        return $this->hasOne("App\Models\Calon", "id", "calon_id");
    }
    
    public $timestamps = false;


    protected $primarykey = 'id';
}