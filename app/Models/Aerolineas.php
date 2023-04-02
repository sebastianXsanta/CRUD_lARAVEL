<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolineas extends Model
{
    use HasFactory;
    public function Jsvuelos(){
        return $this->hasMany(Vuelos::class);
    }
}
