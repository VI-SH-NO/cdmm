<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public function articl()
    {
        return $this->belongsTo('App\Articl');
    }
}
