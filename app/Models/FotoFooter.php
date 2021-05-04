<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoFooter extends Model
{
    use HasFactory;
    protected $table = 'foto_footer';
    protected $fillable = [
        "calon_id","foto","status"
    ];

    public $timestamps = false;

    public function calon()
    {
        return $this->hasOne("App\Models\Calon", "id", "calon_id");
    }


    protected $primarykey = 'id';
}