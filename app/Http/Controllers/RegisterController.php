<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function Store(Request $request)
    {
        dd($request->validate());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        return view('login');
    }
}
