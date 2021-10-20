<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('users.index');
});
    
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');


Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/gifts/{slug}', [App\Http\Controllers\HomeController::class, 'catType'])->name('cat');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::post('/login', [App\Http\Controllers\HomeController::class, 'vLogin'])->name('verifylogin');
Route::post('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
// Users Dashboard
Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account')->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get('/home', function () {
        if (Auth::user()->user_type == 'admin') {
            return redirect('/admin');
       }elseif (Auth::user()->user_type == 'vendor') {
            return redirect('/vendor');
       }else{
            return redirect('/account');
       }
});

// Vendor Dashboard
Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'index'])->name('index')->middleware('auth','vendor');

Route::get('/vendor/all-users', [App\Http\Controllers\VendorController::class, 'users'])->name('users')->middleware('auth','vendor');

Route::get('/vendor/all-orders', [App\Http\Controllers\VendorController::class, 'orders'])->name('orders')->middleware('auth','vendor');

Route::get('/vendor/categories', [App\Http\Controllers\VendorController::class, 'category'])->middleware('auth','vendor');
Route::get('/vendor/add-category', [App\Http\Controllers\VendorController::class, 'addCategoryP'])->middleware('auth','vendor');
Route::post('/vendor/add-category', [App\Http\Controllers\VendorController::class, 'addCategory'])->middleware('auth','vendor');

Route::get('/vendor/account', [App\Http\Controllers\VendorController::class, 'account'])->name('account')->middleware('auth','vendor');
Route::post('/vendor/account', [App\Http\Controllers\VendorController::class, 'editAccount'])->name('editAccount')->middleware('auth','vendor');

Auth::routes();
