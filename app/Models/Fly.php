<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fly extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id','id','id','salaabordaje','holasalida', 'horallegada','photo']; 
    protected $table = 'flies';

    protected $attributes = [
        'codefly' => '0'
    ];

    public function destination(){
        return $this->belongsTo(Destination::class);
    }

    public function airline(){
        return $this->belongsTo(Airline::class);
    }

    public function passenger(){
        return $this->hasMany('App\Models\Passenger');
    }

}
