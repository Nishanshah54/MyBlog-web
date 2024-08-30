<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    //funcation 
    public function Register()
    {
        return view('Register.index');
    }
    public function Login_U()
    {
        return view('Register.login');
    }
    public function register_validation(Request $request)
    {
        // Validate the form data

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the user in the database
        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'user', // Set default role or handle this as needed
        ]);

        // Redirect to a success page or the home page
        return redirect()->route('home')->with('success', 'Registration successful. Welcome!');
    }

    
}
