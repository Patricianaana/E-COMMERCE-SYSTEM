<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('index');
});

Route::get('product', function()
{
    return view('addProducts');
});

Route::get('category', function(){
    return view('selectCategroy');
});

Route::get('products', function() {
    return view('allProduct');
});

Route::get('details', function() {
    return view('productDetails');
});

Route::post('product', [UsersController::class, 'addProduct'])->name('add-product');

Route::get('products', [UsersController::class, 'viewProducts']);

// Route::get('details', [UsersController::class, 'viewProductDetails']);
