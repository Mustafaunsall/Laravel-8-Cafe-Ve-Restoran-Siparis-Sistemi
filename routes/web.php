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
/*Route::get('/', function () {   //sadece bir dosya çağıracaksak burdanda viewe çağırabiliriz
    return view('home.index');//viewe isim gönderebiliyoruz routedan   , ['name' => 'Mustafa Ünsal']
});*/
    Route::get('/', [HomeController::class, 'index'])->name('home');
//Home
    Route::get('/home', [HomeController::class, 'index'])->name('homepage');
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
    Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
    Route::get('/refrences', [HomeController::class, 'refrences'])->name('refrences');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
//Admin
Route::middleware('auth')->prefix('admin')->group(function (){



    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    //Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');

    //Product
    Route::prefix('product')->group(function (){

    Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_product');
    Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
    Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
    Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
    Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
    Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');


    });
    //Product Image Gallery
    Route::prefix('image')->group(function (){

        Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');

    });
    //settings
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

});



//Admin login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login'); //controllerdaki fonsiyonu çalıştırıyor
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
