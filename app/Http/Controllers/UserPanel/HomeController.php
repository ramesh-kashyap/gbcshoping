<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;


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

    public function show_product($id)
{
    // Get the specific product by ID
    $product = Product::findOrFail($id);
    
    // Pass product data to the view
    return view('user.add-cart', compact('product'));
}

}
