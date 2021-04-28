<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = [
        "calon_id","nama","alamat","ket","status"
    ];
    
    public $timestamps = false;

    public function calon()
    {
        return $this->belongsTo("App\Models\Calon", "calon_id", "id");
    }
    
    protected $primarykey = 'id';
}