<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoHeader extends Model
{
    use HasFactory;
    protected $table = 'foto_header';
    protected $fillable = [
        "calon_id","foto_header","foto_countdown","status"
    ];

    public $timestamps = false;

    public function calon()
    {
        return $this->hasOne("App\Models\Calon", "id", "calon_id");
    }


    protected $primarykey = 'id';
}