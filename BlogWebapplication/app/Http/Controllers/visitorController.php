<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visitorController extends Controller
{
    //funcation
    public function BrowserPostsF()
    {
        return view('VisitorPage.BrowserPosts');
    }
    public function index()
    {
        return view('welcome');
    }
    
    public function Addcomment()
    {
        return view('VisitorPage.AddComment');
    }
    
    public function ViewPost()
    {
        return view('VisitorPage.ViewPost');
    }

}