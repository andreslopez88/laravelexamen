<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camion extends Model
{
    use HasFactory;

    public function camioneros(){
        return $this->belongsToMany('App\Models\Camionero');
    }
}
