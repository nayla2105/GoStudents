<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function LandingPage()
    {
        // Ini akan mengembalikan tampilan landing page.
        return view('LandingPage');
    }
}
