<?php

use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMemberController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardFlashsaleController;

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

Route::get('/', HomeController::class);
Route::post('sendProduct', [ProductController::class, 'sendProduct']);
Route::post('tanyaProduct', [ProductController::class, 'tanyaProduct']);
Route::get('product/{product:nama_product}', [ProductController::class, 'detailProduct']);
Route::get('product', [ProductController::class, 'index']);
Route::get('product-list', [ProductController::class, 'productList']);
Route::get('flash-sale', [ProductController::class, 'flashSale']);
Route::get('category/{category:nama_kategori}', [ProductController::class, 'category']);
Route::get('settings', SettingsController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/anggota', DashboardMemberController::class)->middleware('auth');
Route::resource('/dashboard/products', DashboardProductController::class, ['names' => 'products'])->middleware('auth');
Route::get('/dashboard/products/get/{id}', [DashboardProductController::class, 'getProduct'])->middleware('auth');
Route::resource('/dashboard/flashsale', DashboardFlashsaleController::class)->middleware('auth');
Route::post('/dashboard/flashsale/{remove_flashsale}', [DashboardFlashsaleController::class, 'removeFlashsale']);
Route::post('/dashboard/flashsale/{add_flashsale}', [DashboardFlashsaleController::class, 'addFlashsale']);
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
