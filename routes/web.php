<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('aboutus', [HomeController::class, 'aboutus'])->name('home.aboutus');
Route::get('products', [HomeController::class, 'products'])->name('home.products');
Route::get('productsdetails', [HomeController::class, 'productsdetails'])->name('home.productsdetails');
Route::get('contactus', [HomeController::class, 'contactus'])->name('home.contactus');
Route::get('cart/product', [HomeController::class, 'cart'])->name('home.cart');
Route::post('store/session', [HomeController::class, 'session'])->name('store.session');
Route::get('admin',[AdminController::class, 'adminsignin'])->name('admin.signin');
Route::get('mariaadmin/dashboard',[AdminController::class, 'adminDashboard'])->name('admin.dashboard')/* ->middleware('admin_auth') */;
Route::get('admincontact',[AdminController::class, 'adminContact'])->name('admin.contact');
Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
Route::get('/payment-success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment-cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
Route::get('/completed-orders', [OrderController::class, 'completed'])->name('completed.orders');
Route::get('/incompleted-orders', [OrderController::class, 'inCompleted'])->name('incompleted.orders');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
Route::put('/orders/complete/{id}', [OrderController::class, 'statusChange'])->name('orders.complete');
Route::resource('user', UserController::class);


