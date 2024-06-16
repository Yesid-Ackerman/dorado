<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fly extends Model
{
    use HasFactory;

    protected $primaryKey = 'codefly';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'codefly',
        'salaabordaje',
        'horasalida',
        'horallegada',
        'destination_id',
        'airline_id',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function passengers(){
        return $this->hasMany(Passenger::class,'codefly','codefly');
    }

}
