<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('user.cart.cart-details');
    }
    public function checkout_details()
    {
        return view('user.cart.checkout-details');
    }
    public function pin_code()
    {
        return view('user.cart.checkout-details');
    }
    public function wishlist()
    {
        return view('user.wishlist.wishlist-screen');
    }
}
