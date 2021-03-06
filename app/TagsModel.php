<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsModel extends Model
{
    protected $table = "tags";
    protected $fillable = ['name'];

    public function selectedPosts()
    {
        return $this->belongsToMany('App/PostsModel');
    }
}
