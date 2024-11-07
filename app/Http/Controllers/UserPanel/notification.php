<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class notification extends Controller
{
    public function notification()
    {
        return view('user.notification');
    }
}
