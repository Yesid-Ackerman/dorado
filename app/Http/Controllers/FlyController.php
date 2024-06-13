<?php

namespace App\Http\Controllers;

use App\Models\Fly;
use Illuminate\Http\Request;

class FlyController extends Controller
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
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fly = new Fly();
        $fly -> codefly = $request -> codefly;
        // $fly -> codedestination = $request -> codedestination;
        // $fly -> codeairline = $request ->codeairline;
        $fly -> salaabordaje = $request -> salaabordaje;
        $fly -> horasalida = $request -> horasalida;
        $fly -> horallegada = $request -> horallegada;
        $fly -> save();
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Fly $fly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fly $fly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fly $fly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fly $fly)
    {
        //
    }
}
