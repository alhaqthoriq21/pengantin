<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = [
        "calon_id","nama","comment","status"
    ];

    public $timestamps = false;

    public function calon()
    {
        return $this->hasOne("App\Models\Calon", "id", "calon_id");
    }


    protected $primarykey = 'id';
}