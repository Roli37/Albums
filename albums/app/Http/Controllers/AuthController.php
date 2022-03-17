<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function authenticate(Request $request)
    {
        //validate
        $data = $request->all();

        $loginData['email'] = $data['email'];
        $loginData['password'] = $data['password'];

        if(!auth()->attempt($loginData))
        {
            return redirect()->route("auth.login")->with("error", "Hibás adatok");
        }

        $request->session()->regenerateToken();

        $request->session()->put("user", auth()->user());

        $request->session()->flash("success", "Sikeres bejelentkezés");

        return redirect()->route("home");
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')->with('success', 'Kijelentkeztél');

    }
}
