<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view("login", ['type' => 'login']);
    }

    public function login(loginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return response()->json(
                'Logged in successfully'
            );
        }

        else{
            return response()->json('
            There was a problem logging in!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
