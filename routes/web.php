<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;



// Route::get('/', function () {
//     return view('index');
// });
// Route::get('aboutus', function () {
//     return view('aboutus');
// });
// Route::get('products', function () {
//     return view('products');
// });
// Route::get('contactus', function () {
//     return view('contactus');
// });
// Route::get('productsdetails', function () {
//     return view('productsdetails');
// });
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('aboutus', [HomeController::class, 'aboutus'])->name('home.aboutus');
Route::get('products', [HomeController::class, 'products'])->name('home.products');
Route::get('productsdetails', [HomeController::class, 'productsdetails'])->name('home.productsdetails');
Route::get('contactus', [HomeController::class, 'contactus'])->name('home.contactus');
Route::get('cart/product', [HomeController::class, 'cart'])->name('home.cart');


Route::get('admin',[AdminController::class, 'adminsignin'])->name('admin.signin');
Route::get('mariaadmin/dashboard',[AdminController::class, 'adminDashboard'])->name('admin.dashboard')/* ->middleware('admin_auth') */;
Route::get('admincontact',[AdminController::class, 'adminContact'])->name('admin.contact');
