<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accountCtrollerr extends Controller
{
    public function account()
    {
        return view('user.account.account-screen');
    }
    public function profile()
    {
        return view('user.account.profile-edit-screen');
    }


    public function wallet()
    {
        return view('user.account.wallet');
    }
    public function myorder()
    {
        return view('user.account.order.myorder');
    }




    public function payment()
    {
        return view('user.account.payment.payment-method');
    }
    public function paymentAdd()
    {
        return view('user.account.payment.add-new-card');
    }   



    public function address()
    {
        return view('user.account.address.address-screen');
    }
    public function addAddress()
    {
        return view('user.account.address.add-address');
    }


    public function promocode()
    {
        return view('user.account.promocode.my-promocode');
    }
    public function promocodeAdd()
    {
        return view('user.account.promocode.add-promocode');
    }
    public function promocodeWith()
    {
        return view('user.account.promocode.with-promocode');
    }
    public function promocodeWithout()
    {
        return view('user.account.promocode.without-promocode');
    }
    public function checkout()
    {
        return view('user.account.promocode.checkout');
    }
    public function enterPin()
    {
        return view('user.account.promocode.enter-pin');
    }
    public function order_success()
    {
        return view('user.account.promocode.order-success');
    }
    public function order_track()
    {
        return view('user.account.promocode.track-order');
    }
    

    public function logouts()
    {
        return view('user.account.logout');
    }
}
