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
        $data = $request;
        return redirect()->route('home');
    }
}
