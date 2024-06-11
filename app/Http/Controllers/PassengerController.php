<?php

namespace App\Http\Controllers;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $fly = new Passenger();
        $fly -> names=$request->names;
        $fly -> lnames=$request->lnames;
        $fly -> email=$request->email;
        $fly -> phone=$request->phone;
        $fly -> codvuelo=$request->codvuelo;
        $fly -> photo=$request->photo;
        $fly -> save();
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
        //
    }
}
