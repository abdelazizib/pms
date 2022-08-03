<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\Front\MenuController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ChefsController;
use App\Http\Controllers\front\OrderController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\front\ProfileController;
use App\Http\Controllers\front\CheckoutController;
use App\Http\Controllers\front\ReservationController;
use App\Http\Controllers\front\ChangePasswordController;
use GuzzleHttp\Middleware;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/product', [ProductController::class,'index'])->name('product');

Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/chefs', [ChefsController::class,'index'])->name('chefs');

Route::get('/menu', [MenuController::class,'index'])->name('menu');

Route::get('/reservation', [ReservationController::class,'index'])->name('reservation');

Route::post('/reservation/store', [ReservationController::class,'store'])->name('reservation.store');

Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::post('/contact/send', [ContactController::class,'store'])->name('contact.store');



Route::get('/blog', [BlogController::class,'index'])->name('blog');

Route::get('/cart', [CartController::class,'cartList'])->name('cart.list');

Route::post('/cart/update', [CartController::class,'updateCart'])->name('cart.update');

Route::post('/cart/delete', [CartController::class,'removeCart'])->name('cart.delete');

Route::post('/cart/delete/all', [CartController::class,'clearAllCart'])->name('cart.delete.all');

Route::post('/cart/add', [CartController::class,'addToCart'])->name('cart.add');

Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');
Route::post('/checkout/store', [CheckoutController::class,'store'])->name('checkout.store');
Route::get('/checkout/done', [CheckoutController::class,'done'])->name('checkout.done');

Route::get('/changepassword', [ChangePasswordController::class,'index'])->name('changepassword');

Route::group(['middleware' => ['auth']],function (){

    Route::get('/profile', [ProfileController::class,'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class,'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class,'update'])->name('profile.update');

});

Route::resource('/order', OrderController::class);

Auth::routes();

