<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'equired|string|max:255',
            'email' => 'equired|string|email|max:255|unique:users',
            'password' => 'equired|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
<<<<<<< HEAD
            return redirect()->route('register')
=======
            return redirect(route('registro'))
>>>>>>> 7abb2a9dfb5240f828d9e352fe7563102f592241
                        ->withErrors($validator)
                        ->withInput();
        }

        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();

<<<<<<< HEAD
            Auth::login($user);
            return redirect()->route('privada')->with('success', 'Registro exitoso y sesión iniciada.');
        } catch (\Exception $e) {
            return redirect()->route('register')->withErrors(['error' => 'Ocurrió un error al registrarse. Inténtalo de nuevo.']);
        }
=======
        Auth::login($user);
        return redirect()->intended(route('privada'), 303);
>>>>>>> 7abb2a9dfb5240f828d9e352fe7563102f592241
    }

    public function login(Request $request)
    {
<<<<<<< HEAD
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                        ->withErrors($validator)
                        ->withInput();
=======
        if (Auth::check()) {
            return redirect()->intended(route('privada'), 303);
>>>>>>> 7abb2a9dfb5240f828d9e352fe7563102f592241
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
<<<<<<< HEAD
            return redirect()->intended(route('privada'))->with('success', 'Sesión iniciada correctamente.');
=======
            return redirect()->intended(route('privada'), 303);
>>>>>>> 7abb2a9dfb5240f828d9e352fe7563102f592241
        } else {
            return redirect()->route('login')->withErrors(['email' => 'Las credenciales no coinciden con nuestros registros.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
<<<<<<< HEAD
        return redirect()->route('login')->with('success', 'Sesión cerrada correctamente.');
=======
        return redirect()->route('login', 303);
>>>>>>> 7abb2a9dfb5240f828d9e352fe7563102f592241
    }
}