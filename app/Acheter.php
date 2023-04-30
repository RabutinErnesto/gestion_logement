<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheter extends Model
{
    use HasFactory;

    function client(){
        return $this->belongsTo('App\Client');
    }

    function logement(){
        return $this->belongsTo('App\Logement');
    }
}
