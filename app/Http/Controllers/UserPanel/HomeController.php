<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('user.home');
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
