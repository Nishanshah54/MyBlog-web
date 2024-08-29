<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //function
    public function index_c()
    {
        return view('Administrator.index');
    }
}
