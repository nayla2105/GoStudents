<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Login'); // Pastikan ada file login.blade.php di resources/views
    }

    public function processLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Contoh login manual (bisa kamu ganti dengan query ke DB)
        if ($request->email === 'admin@gmail.com' && $request->password === '123456') {
            // Simpan ke session kalau mau
            session(['user' => $request->email]);

            // Redirect ke dashboard
            return redirect('/DashboardSiswa');
        }

        // Jika gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
}
