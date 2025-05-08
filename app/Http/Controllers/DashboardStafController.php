<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardStafController extends Controller
{
    public function DashboardStaf()
    {
        // Ini akan mengembalikan tampilan Dashboard Staf.
        return view('DashboardStaf');
        middleware('auth')->name('DashboardStaf');
    }
}
