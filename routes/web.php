<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home2', function () {    //eski user laravelin sayfası
    return view('welcome');
});
//Route::redirect('/anasayfa', '/home')->name('anasayfa'); //bir sayafadan diğer sayfaya direk yönlendirme
Route::get('/', function () {   //sadece bir dosya çağıracaksak burdanda viewe çağırabiliriz
    return view('home.index');//viewe isim gönderebiliyoruz routedan   , ['name' => 'Mustafa Ünsal']
});

//Route::get('/home', [HomeController::class, 'index']); //controllerdaki fonsiyonu çalıştırıyor

//Admin
Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
