<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Destination;
use App\Models\Fly;
use App\Models\Passenger;
use Illuminate\Http\Request;

class FlyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flies = Fly::with(['airline','destination'])->orderBy('codefly', 'desc')->get();
        return view('vuelos.listar', compact('flies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function asociar()
    {
        $destinations = Destination::all();
        $flies = Fly::all();
        $passengers = Passenger::all();
        $airlines = Airline::all();
        return view('vuelos.create',['destinations'=>$destinations,'airlines'=>$airlines,'flies'=>$flies]) ;
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fly = new Fly();
        $codefly = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $fly->codefly = $codefly;

        $destination = Destination::find($request->destination_id);
        $fly->destination()->associate($destination);
    
        $airline = Airline::find($request->airline_id);
        $fly->airline()->associate($airline);

        $fly->salaabordaje = $request->salaabordaje;
        $fly->horasalida = $request->horasalida;
        $fly->horallegada = $request->horallegada;
    
        $fly->save();

        return redirect()->route('fly.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(int $codefly)
    {
        $flie = Fly::where('codefly', $codefly)->first();

        if (!$flie) {
            return response()->json(['error' => 'Flight not found'], 404);
        }

        $flie->load(['destination', 'airline']);
        return view('vuelos.show', compact('flie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $codefly)
    {
        $destinations = Destination::all();
        $airlines = Airline::all();
        $fly = Fly::where('codefly', $codefly)->firstOrFail();
        return view('vuelos.editar', [
            'destinations' => $destinations,
            'airlines' => $airlines,
            'fly' => $fly
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $codefly)
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
     * Remove the specified resource from storage.
     */
    public function destroy($codefly)
    {
        // Buscar el vuelo por su código y eliminarlo
        $fly = Fly::where('codefly', $codefly)->firstOrFail();
        $fly->delete();
    
        // Redirigir a la lista de vuelos con un mensaje de éxito
        return redirect()->route('fly.index');
    }

}
