<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articl extends Model
{
    public function images()
    {
        return $this->hasMany('App\Picture');
    }
}
