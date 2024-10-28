<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::with('products')->get();

        return view('user.home', compact('categories'));
    }

    public function all_product()
    {

        return view('user.all-product');
    }
    
    public function add_cart()
    {

        return view('user.add-cart');
    }
}
