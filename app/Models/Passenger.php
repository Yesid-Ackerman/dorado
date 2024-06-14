<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $primaryKey = 'codepassenger';
    protected $fillable = ['codepassenger']; 

    protected $attributes = [
        'codepassenger' => '0'
    ];
    public function flies(){
        return $this->belongsTo('App\Models\Fly','codefly','codefly');
    }
}
