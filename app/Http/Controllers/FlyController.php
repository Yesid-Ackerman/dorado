<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Destination;
use App\Models\Fly;
use Illuminate\Http\Request;

class FlyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flies = Fly::with(['airline', 'destination'])->orderByDesc('codefly')->get();
        return view('vuelos.listar', compact('flies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function asociar()
    {
        $destinations = Destination::all();
        $airlines = Airline::all();
        return view('vuelos.create', compact('destinations', 'airlines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'destination_id' => 'required',
            'airline_id' => 'required',
            'salaabordaje' => 'required|string|max:255',
            'horasalida' => 'required|string|max:255',
            'horallegada' => 'required|string|max:255',
        ]);
    
        $fly = new Fly();
        $fly->codefly = uniqid();
    
        $fly->destination()->associate($request->destination_id);
        $fly->airline()->associate($request->airline_id);
    
        $fly->salaabordaje = $request->salaabordaje;
        $fly->horasalida = $request->horasalida;
        $fly->horallegada = $request->horallegada;
    
        $fly->save();
    
        return redirect()->route('fly.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codefly)
    {
        $destinations = Destination::all();
        $airlines = Airline::all();
        $fly = Fly::where('codefly', $codefly)->firstOrFail();
        return view('vuelos.editar', compact('fly', 'destinations', 'airlines'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codefly)
    {
        $request->validate([
            'horasalida' => 'required|string|max:255',
            'horallegada' => 'required|string|max:255',
        ]);
    
        $fly = Fly::where('codefly', $codefly)->firstOrFail();
    
        $fly->update([
            'horasalida' => $request->input('horasalida'),
            'horallegada' => $request->input('horallegada'),
        ]);
    
        return redirect()->route('fly.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($codefly)
    {
        $fly = Fly::with('destination')->where('codefly', $codefly)->firstOrFail();
        return view('vuelos.show', compact('fly'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codefly)
    {
        $fly = Fly::where('codefly', $codefly)->firstOrFail();
        $fly->delete();

        return redirect()->route('fly.index');
    }

    /**
     * Show passengers of a specific flight.
     */
    public function flypass($flie)
    {
        $flie = Fly::with('passengers', 'destination')->where('codefly', $flie)->firstOrFail();
        return view('vuelos.pass', compact('flie'));
    }
}
