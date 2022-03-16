<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.register');
    }
    public function store(Request $request)
    {
        //validate
        $data = $request;
        User::create($data);
        return redirect()->route('home');
    }
}
