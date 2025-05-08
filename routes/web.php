<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardSiswaController;




Route::get('/', [LandingPageController::class, 'LandingPage'])->name('LandingPage');
Route::get('/DashboardSiswa', [DashboardSiswaController::class, 'DashboardSiswa'])->name('DashboardSiswa');
use App\Http\Controllers\LoginController;


Route::get('/', [LandingPageController::class, 'LandingPage'])->name('LandingPage');
Route::get('/Login', [LoginController::class, 'Login'])->name('Login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//Use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//    return view('welcome');
// });
//Route::get('/', [HomeController::class, 'index']);
//Route::get('/contact', [HomeController::class, 'contact']);
//Route::get('/welcome', function () {
    //return view('welcome');
//});
//Route::get('/user/{id}', function ($id) {
    //return 'User dengan ID' . $id;
//});
//Route::prefix('admin')->group(function () {
    //Route::get('/dashboard', function () {
      //  return 'Admin Dashboard';
    //});
    //Route::get('/users', function () {
      //  return 'Admin Users';
    //});
//});
// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//    return view('list_barang', compact('id', 'nama'));
// });
//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
//use App\Http\Controllers\DashboardController;
//Route::get('/dashboard', [DashboardController::class, 'index']);
//use App\Http\Controllers\ListItemController;
//Route::get('/list-item', [ListItemController::class, 'index']);

