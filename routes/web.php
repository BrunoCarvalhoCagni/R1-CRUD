<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;

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

Route::get('/', HomeController::class)->name('home'); 

Route::get('products/insert', [ProductsController::class, 'create'])->name('products.insert');

Route::get('products/{id}', [ProductsController::class, 'show'])->name('products.description');

Route::get('products', [ProductsController::class, 'index'])->name('products');

Route::post('products', [ProductsController::class, 'insert'])->name('products.insert');

Route::get('products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');

Route::put('products/{product}', [ProductsController::class, 'editRequest'])->name('products.editRequest');

Route::get('products/{product}/delete', [ProductsController::class, 'modal'])->name('products.modal');

Route::delete('products/{product}', [ProductsController::class, 'delete'])->name('products.delete');

Route::post('painel', [UsersController::class, 'login'])->name('users.login');

Route::get('', [UsersController::class, 'logout'])->name('users.logout');