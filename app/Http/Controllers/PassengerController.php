<?php

namespace App\Http\Controllers;

use App\Models\Fly;
use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function asociar()
    {
        $flies = Fly::all();
        return view('pasajeros.create', ['flies' => $flies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|string|max:255',
            'names' => 'required|string|max:255',
            'lnames' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'codefly' => 'required', 
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $passenger = new Passenger();
        $passenger->dni = $request->dni;
        $passenger->names = $request->names;
        $passenger->lnames = $request->lnames;
        $passenger->email = $request->email;
        $passenger->phone = $request->phone;
        $passenger->codefly = $request->codefly;
        $passenger->photo = $request ->photo;
        $passenger->save();
        return redirect()->route('fly.index')->with('success', 'Pasajero creado correctamente.');
    
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
        return redirect()->back();
    }
}
