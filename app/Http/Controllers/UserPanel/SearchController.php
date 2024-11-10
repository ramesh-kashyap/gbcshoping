<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;


class SearchController extends Controller
{
    
    public function filter()
    {

        return view('user.search.filter');
    }
    public function reset_item()
    {

        $categories = Categorie::with('products')->get();
        return view('user.search.search-product',compact('categories'));    }


    public function search_product()
    {
        $categories = Categorie::with('products')->get();
        return view('user.search.search-product',compact('categories'));
    }
    

    public function search_item(Request $request)
{
    $searchTerm = $request->input('search');
    
    // Fetch categories and filter products based on the search term
    $categories = Categorie::with(['products' => function ($query) use ($searchTerm) {
        if ($searchTerm) {
            $query->where('productName', 'LIKE', '%' . $searchTerm . '%');
        }
    }])->get();

    return view('user.search.search-product', compact('categories', 'searchTerm'));
}

}
