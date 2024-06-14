<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $primaryKey = 'codedestination';
    protected $fillable = ['codedestination']; 

    protected $attributes = [
        'codedestination' => '0'
    ];
    public function flies(){
        return $this->hasMany('App\Models\Fly');
    }
}
