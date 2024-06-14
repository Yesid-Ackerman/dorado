<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $primaryKey = 'codeairline';
    protected $fillable = ['codeairline']; 

    protected $attributes = [
        'codeairline' => '0'
    ];
    public function flies(){
        return $this->hasMany('App\Models\Fly');
    }
}
