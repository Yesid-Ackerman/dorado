<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id']; 

    protected $attributes = [
        'id' => '0'
    ];
    public function flies(){
        return $this->hasMany(Fly::class);
    }
}
