<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    function cite(){
        return $this->belongsTo('App\Cite');
    }

    function terrain(){
        return $this->belongsTo('App\Terrain');
    }
}
