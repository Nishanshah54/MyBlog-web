<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
