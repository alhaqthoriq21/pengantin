<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkadNikah extends Model
{
    use HasFactory;
      protected $table = 'akad_nikah';
    protected $fillable = [
        "calon_id","tgl","waktu","tempat","alamat","google_loc","status"
    ];
    protected $casts = [
        'tgl' => 'datetime',
    ];
    public $timestamps = false;

    public function calon()
    {
        return $this->hasOne("App\Models\Calon", "id", "calon_id");
    }

    protected $primarykey = 'id';
}