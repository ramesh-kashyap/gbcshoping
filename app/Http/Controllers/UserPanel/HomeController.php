<?php

namespace App\Http\Controllers\UserPanel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Color;
use App\Models\SubProduct;

use Illuminate\Support\Facades\Log;



class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::with('products')->get();
        $allProducts = Product::all(); 


        return view('user.home', compact('categories', 'allProducts'));
    }

    public function all_products($categoryId)
    {
        // Fetch the specific category with its products
        $category = Categorie::with('products')->find($categoryId);
    
        // If category not found, redirect or show error
        if (!$category) {
            return redirect()->route('your_default_route')->with('error', 'Category not found');
        }
    
        return view('user.all-product', compact('category'));
    }
    
    public function all_product()
    {

        return view('user.all-product');

    }
    


    public function add_cart()
    {

        return view('user.add-cart');
    }



    // CartController.php
public function addToCart(Request $request)
{
    $data = $request->only(['productId', 'size', 'color', 'quantity']);
    
    // Assuming you save this data to the session for demonstration purposes
    session()->put('cart_item', $data);
    
    return response()->json(['success' => true]);
}

    

    public function show_product($id)
    {
        $product = Product::findOrFail($id);
    
        // Access sub-products directly via the relationship
    
        return view('user.add-cart', compact('product'));
    }
    

}
