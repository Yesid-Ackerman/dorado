<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fly extends Model
{
    protected $primaryKey = 'codefly';
    protected $fillable = ['codefly','codedestination','codeairline','salaabordaje','holasalida', 'horallegada','photo']; 

    protected $attributes = [
        'codefly' => '0'
    ];

    public function Destination(){
        return $this->belongsTo('App\Models\Destination','codedestination','codedestination');
    }

    public function airline(){
        return $this->belongsTo('App\Models\Airline', 'codeairline', 'codeairline');
    }

    public function passenger(){
        return $this->hasMany('App\Models\Passenger');
    }

}
