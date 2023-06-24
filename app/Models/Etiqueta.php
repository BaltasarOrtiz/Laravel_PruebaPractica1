<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    
    /*
    public function gastos(){
        return $this->belongsToMany(Gasto::class);
    }
    Duda */

    public function etiqueta_gasto(){
        return $this->hasMany(Etiqueta_gasto::class);
    }
}
