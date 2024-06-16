<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $primaryKey = 'id';

    public function fly(){
        return $this->belongsTo(Fly::class,'codefly','codefly');
    }
}
