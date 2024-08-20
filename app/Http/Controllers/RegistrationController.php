<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {
        // dd($request->all());
        // save data to db

        $request->validate(
            [
                'name' => 'nullable|string',
                'email' => 'required|email',
                'secret_key' => 'required|min:8'
            ]
        );

        dd("successfully validated and proceeding to save the data");
    }
}
