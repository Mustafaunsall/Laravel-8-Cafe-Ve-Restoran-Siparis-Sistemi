<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MenuwishController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\OrderContoller as AdminOrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\UserController;
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
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
#menu
Route::middleware('auth')->prefix('/')->group(function () {



    Route::post('/menuwishcreate', [HomeController::class, 'menuwishcreate'])->name('menuwishcreate');
    Route::get('/menuwish', [HomeController::class, 'menuwish'])->name('menuwish');
    Route::get('/menuwishshow', [HomeController::class, 'menuwishshow'])->name('menuwishshow');
    #menu permission
    Route::middleware('menu')->group(function () {
        Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
        Route::get('/menutile', [HomeController::class, 'menutile'])->name('menutile');
    });
});
//search
Route::post('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/productlist/{search}', [HomeController::class, 'productlist'])->name('productlist');

//Admin
Route::middleware('auth')->prefix('admin')->group(function () {

    #admin role
    Route::middleware('admin')->group(function () {

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
        Route::prefix('product')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_product');
            Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
            Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');

        });
        //Contact Message
        Route::prefix('message')->group(function () {

            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');

        });

        //Product Image Gallery
        Route::prefix('image')->group(function () {

            Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
            Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');

        });
        //Review
        Route::prefix('review')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');

        });
        //settings
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        //Faq
        Route::prefix('faq')->group(function () {

            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');

        });
        //Order
        Route::prefix('order')->group(function () {

            Route::get('/', [AdminOrderController::class, 'index'])->name('admin_orders');
            Route::get('list/{status}', [AdminOrderController::class, 'list'])->name('admin_order_list');
            Route::post('create', [AdminOrderController::class, 'create'])->name('admin_order_add');
            Route::post('store', [AdminOrderController::class, 'store'])->name('admin_order_store');
            Route::get('show/{id}', [AdminOrderController::class, 'show'])->name('admin_order_show');
            Route::post('update/{id}', [AdminOrderController::class, 'update'])->name('admin_order_update');
            Route::post('itemupdate/{id}', [AdminOrderController::class, 'itemupdate'])->name('admin_order_item_update');
            Route::get('edit/{id}', [AdminOrderController::class, 'edit'])->name('admin_order_edit');
            Route::get('delete/{id}', [AdminOrderController::class, 'destroy'])->name('admin_order_delete');

        });
        //Menuwish
        Route::prefix('menuwish')->group(function () {

            Route::get('/', [MenuwishController::class, 'index'])->name('admin_menuwish');
            Route::get('list/{status}', [MenuwishController::class, 'list'])->name('admin_menuwish_list');
            Route::post('create', [MenuwishController::class, 'create'])->name('admin_menuwish_add');
            Route::post('store', [MenuwishController::class, 'store'])->name('admin_menuwish_store');
            Route::get('show/{id}', [MenuwishController::class, 'show'])->name('admin_menuwish_show');
            Route::post('update/{id}', [MenuwishController::class, 'update'])->name('admin_menuwish_update');
            Route::get('edit/{id}', [MenuwishController::class, 'edit'])->name('admin_menuwish_edit');
            Route::get('delete/{id}', [MenuwishController::class, 'destroy'])->name('admin_menuwish_delete');

        });
        //User
        Route::prefix('user')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::post('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    });#admin
}); #auth

//User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/deletereviews/{id}', [UserController::class, 'destroyreview'])->name('user_reviews_delete');

});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    //Shopcart
    Route::prefix('shopcart')->group(function () {

        Route::get('/', [ShopcartController::class, 'index'])->name('user_shopcart');
        Route::post('store/{id}', [ShopcartController::class, 'store'])->name('user_shopcart_add');
        Route::post('update/{id}', [ShopcartController::class, 'update'])->name('user_shopcart_update');
        Route::get('delete/{id}', [ShopcartController::class, 'destroy'])->name('user_shopcart_delete');

    });
    //User Order
    Route::prefix('order')->group(function () {

        Route::get('/', [OrderController::class, 'index'])->name('user_orders');
        Route::post('create', [OrderController::class, 'create'])->name('user_order_add');
        Route::post('store', [OrderController::class, 'store'])->name('user_order_store');
        Route::get('show/{id}', [OrderController::class, 'show'])->name('user_order_show');
        Route::post('update/{id}', [OrderController::class, 'update'])->name('user_order_update');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('user_order_edit');
        Route::get('delete/{id}', [OrderController::class, 'destroy'])->name('user_order_delete');

    });


});


//Admin login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login'); //controllerdaki fonsiyonu çalıştırıyor
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
