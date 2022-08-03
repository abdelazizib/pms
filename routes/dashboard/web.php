<?php

use App\Models\Messages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\BlogsController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\MessagesController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\EmployeesController;
use App\Http\Controllers\Dashboard\ReservationController;

Route::group(['prefix'=>'admin','middleware' => ['admin']],function (){
    Route::get('home', [HomeController::class,'index'])->name('admin.home');
    Route::resource('messages', MessagesController::class);

    Route::get('category/deleted', [CategoryController::class, 'recover'])->name('category.trashed');
    Route::post('category/deleted/restore/{id}', [CategoryController::class, 'restore'])->name('category.trash.restore');
    Route::resource('category', CategoryController::class);


    Route::resource('blogs', BlogsController::class);
    
    Route::resource('slider', SliderController::class);

    Route::get('empty', function ()
    {
        return view('dashboard.empty');
    });

    Route::resource('users', UsersController::class);

    Route::resource('employees', EmployeesController::class);

    Route::resource('reservation', ReservationController::class);


 

    Route::get('products/search', [ProductsController::class,'search'])->name('products.search');
    Route::resource('products', ProductsController::class);



    Route::resource('orders', OrderController::class);

    
});