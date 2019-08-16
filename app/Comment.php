<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the Blog Post that owns the comment
     */
public function post()
{
  return $this->belongsTo('App\Post');
}
}
