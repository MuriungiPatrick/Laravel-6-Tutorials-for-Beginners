<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the Comments for the Blog Post
     */
public function comments()
{
  return $this->hasMany('App\Comment');
}
}
