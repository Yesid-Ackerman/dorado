<?php

namespace App\Http\Controllers;

use App\Models\create_passenger;
use Illuminate\Http\Request;

class CreatePassengerController extends Controller
{
    public function create(){
        return view('pasajeros.create');
    }
    public function store(Request $request){        

    }

    public function show(){
        return view('...');
    }
}
