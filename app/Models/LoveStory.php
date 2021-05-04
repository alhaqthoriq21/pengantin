<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveStory extends Model
{
    use HasFactory;
    protected $table = 'love_story';
    protected $fillable = [
        "calon_id","tgl_firstmeet","story_firstmeet","foto_firstmeet","tgl_firstdate",
        "story_firstdate","foto_firstdate","tgl_relationship","story_relationship","foto_relationship",
        "tgl_enganged","story_enganged","foto_enganged","status"
    ];
    public $timestamps = false;

    public function calon()
    {
        return $this->hasOne("App\Models\Calon", "id", "calon_id");
    }

    protected $primarykey = 'id';
}