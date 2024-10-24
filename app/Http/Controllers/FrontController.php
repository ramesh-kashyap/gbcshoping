<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {

        return view('main.home');
    }

    public function cart()
    {
        return view('main.cart');
    }

 
   
   



}
