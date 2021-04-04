<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function register() { 
        // Your logic here 
        return view('register'); 
       } 

      public function signin() { 
        // Your logic here 
        return view('signin'); 
       }  
}
