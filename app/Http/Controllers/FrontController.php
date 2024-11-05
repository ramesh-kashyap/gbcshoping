<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        $categories = Categorie::with('products')->get();
        $allProducts = Product::all(); // Ye line sabhi products ko fetch karegi


        return view('user.home', compact('categories', 'allProducts'));
    }
   
   
    

 
   
   



}
