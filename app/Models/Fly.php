<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fly extends Model
{
    protected $primaryKey = 'codefly';
    public $incrementing = false; // Desactivar auto-incremento si `codefly` no es auto-incremental
    protected $keyType = 'int'; // o 'string' si `codefly` es de tipo string

    protected $fillable = [
        'codefly', 'salaabordaje', 'horasalida', 'horallegada', 'destination_id', 'airline_id'
    ];

    // Definir las relaciones si es necesario
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function passenger(){
        return $this->hasMany('App\Models\Passenger');
    }

}
