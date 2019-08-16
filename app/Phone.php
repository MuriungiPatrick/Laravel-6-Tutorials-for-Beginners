<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /**
     * Get the users that Own the Phone
     */
public function user()
{
return $this->belongsTo('App\User')
}
}
