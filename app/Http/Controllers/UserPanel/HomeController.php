<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Color;



class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::with('products')->get();
        $allProducts = Product::all(); // Ye line sabhi products ko fetch karegi


        return view('user.home', compact('categories', 'allProducts'));
    }

    public function fetchProductByColor(Request $request)
{
    // Validate the color ID
    $request->validate([
        'color_id' => 'required|exists:colors,id',
    ]);

    // Get the product based on color_id
    $product = Product::where('color_id', $request->color_id)->first();

    if ($product) {
        // Return product details as JSON
        return response()->json(['success' => true, 'product' => $product]);
    } else {
        return response()->json(['success' => false, 'message' => 'Product not found for this color']);
    }
}


    
    public function add_cart()
    {

        return view('user.add-cart');
    }
    // ProductController.php



    public function store(Request $request)
    {
        // Retrieve form data
        $data = $request->only('size', 'color', 'quantity', 'price', 'image');
        
        // Store data in session
        session(['cart' => $data]);

        // Redirect to cart view
        return redirect()->route('user.cart');
    }

    public function show_product($id)
{
    // Get the specific product by ID
    $product = Product::findOrFail($id);
    $colors = Color::all(); // Adjust this if you need specific colors or filtering

    // Pass product data to the view
    return view('user.add-cart', compact('product', 'colors'));
}

}
