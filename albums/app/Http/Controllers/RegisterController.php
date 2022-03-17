<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        $request->session()->put("user", $user);

        $request->session()->flash("success", "Sikeres regisztráció");

        return redirect()->route('home');
    }
}
