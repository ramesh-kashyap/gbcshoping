<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cateController extends Controller
{
    public function clothes()
    {
        return view('user.category.clothes-screen');
    }
    public function electronic()
    {
        return view('user.category.electronic-screen');
    }
    public function details()
    {
        return view('user.category.details');
    }
}
