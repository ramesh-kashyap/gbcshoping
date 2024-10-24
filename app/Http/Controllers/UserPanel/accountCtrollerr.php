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
}
