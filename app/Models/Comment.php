<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = ["comment"];


    public function post(){
        // return $this->belongsTo("App\Models\Post");
        return $this->belongsTo(Post::class);
    }
}
