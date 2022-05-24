<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = array('title', 'author', 'description', 'image_url');


    public function categories() {
        return $this->belongsToMany('App\Category');
    }
}
