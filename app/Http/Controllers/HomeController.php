<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function __invoke(){
    
        //return view('welcome');
        return view('home');
}
}
