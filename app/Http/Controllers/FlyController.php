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
        // $fly -> id = str_pad(mt_rand(0,999999),6,'0', STR_PAD_LEFT);
        // $fly -> codefly = $request->codefly;
    
        $destination = Destination::find($request->destination_id);
        $fly->destination()->associate($destination);
    
        $airline = Airline::find($request->airline_id);
        $fly->airline()->associate($airline);
    
        $fly->salaabordaje = $request->salaabordaje;
        $fly->horasalida = $request->horasalida;
        $fly->horallegada = $request->horallegada;
        $fly->save();
    
        return $request;
    }
    

    /**
     * Display the specified resource.
     */
    public function show(int $codefly)
    {
        $flie = Fly::where('codefly',$codefly)->first();
        $flie -> load(['destination','airline']);
        return view('vuelos.show',compact('flie'));
        // return response()->json($flie);
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
