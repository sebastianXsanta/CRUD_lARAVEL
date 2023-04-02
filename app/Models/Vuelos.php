<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    use HasFactory;
    public function JsAerolineas(){
        return $this->hasMany(Aerolineas::class);
    }
}
