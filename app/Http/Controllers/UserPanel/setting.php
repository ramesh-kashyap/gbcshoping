<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class setting extends Controller
{
   
    public function notification_option()
    {
        return view('user.setting.notification-option');
    }
    public function langauge()
    {
        return view('user.setting.language-select');
    }
    public function currency()
    {
        return view('user.setting.currency-screen');
    }

    public function about_us()
    {
        return view('user.setting.about-us');
    }
    public function contact_us()
    {
        return view('user.setting.contact-us');
    }
    public function privacy()
    {
        return view('user.setting.privacy-screen');
    }
    public function invite()
    {
        return view('user.setting.invite');
    }
    public function feedback()
    {
        return view('user.setting.feedback');
    }
    public function faq()
    {
        return view('user.setting.faq');
    }
}
