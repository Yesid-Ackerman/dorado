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
            return redirect(route('registro'))
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);
        return redirect()->intended(route('privada'), 303);
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->intended(route('privada'), 303);
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('privada'), 303);
        } else {
            return redirect(route('login'))->withErrors(['email' => 'Las credenciales no coinciden con nuestros registros.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login', 303);
    }
}