<?php

namespace App\Http\Controllers;

use App\Models\Fly;
use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function asociar()
    {
        $flies = Fly::all();
        return view('pasajeros.create',['flies'=>$flies]) ;
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $passenger = new Passenger();
        $passenger -> dni = $request ->dni;
        $passenger -> names=$request->names;
        $passenger -> lnames=$request->lnames;
        $passenger -> email=$request->email;
        $passenger -> phone=$request->phone;
        $passenger -> codefly=$request->codefly;
        $passenger -> photo=$request->photo;
        $passenger -> save();
        return view('pasajeros.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Passenger $passenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passenger $passenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Passenger $passenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passenger $passenger)
    {
        $passenger->delete();
    
        return redirect()->back()->with('Pasajero eliminado correctamente.');
    }
}
