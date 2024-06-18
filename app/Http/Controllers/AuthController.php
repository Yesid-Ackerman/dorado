<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('dorado.logout');
    }
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('dorado.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $user = new User();
        $request->validate([
            'name' => 'required',
            'email' =>'required | email | unique:App\Models\User,email', 
            'password' => ['required','max:30',Password::min(8)->mixedCase()->letters()->numbers()->simbols()->uncompromised()],
        ]);
        $user -> name = $request-> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request->password);
        $user -> save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_log(Request $request)
    {
        $credenciales = $request -> only('email','password');
        if(Auth::attemp($credenciales)){
            return redirect()->route('view-inicio');
        }else{
            return back()->withInput($credenciales);
        }
    }

    /**
     * Display the specified resource.
     */
    public function logout()
    {
        // Auth::logout();
        // Session::flush();
        // return back();
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function register()
    {
        return view('dorado.logout');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
