<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSiswaController extends Controller
{
    public function DashboardSiswa()
    {
        // Ini akan mengembalikan tampilan Dashboard Siswa.
        return view('DashboardSiswa');
        middleware('auth')->name('DashboardSiswa');
    }
    
}
