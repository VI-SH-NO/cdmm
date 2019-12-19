<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $connection = 'goexpert_backoffice';
    protected $table = 'dossier';
}
