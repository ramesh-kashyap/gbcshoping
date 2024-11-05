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

    public function search_product()
    {
        $categories = Categorie::with('products')->get();
        return view('user.search.search-product',compact('categories'));
    }
}
