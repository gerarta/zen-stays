<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;

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
    return view('home');
});

require __DIR__.'/auth.php';

Route::controller(KostController::class)->prefix('kost')->name('kost.')->group(function(){
    Route::get('{id}/show', 'show')->name('show');
    Route::get('wishlist', 'wishlist')->name('wishlist');
    Route::get('kost-list', 'showList')->name('show-list');
    Route::post('wishlist', 'addWishlist')->name('add-wishlist');
    Route::delete('wishlist/{id}', 'deleteWishlist')->name('delete-wishlist');
}); 

Route::controller(BookingController::class)->prefix('booking')->name('booking.')->group(function (){
    Route::get('confirmation', 'confirmation')->name('confirmation')->middleware('auth');
    Route::post('store', 'store')->name('store')->middleware('auth');
});

Route::controller(UserController::class)->prefix('user')->name('user.')->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/edit', 'edit')->name('edit');
    Route::put('/edit/{userId}', 'update')->name('update');
});

Route::controller(BookingController::class)->prefix('booking')->name('booking.')->group(function (){
    Route::get('confirmation', 'confirmation')->name('confirmation')->middleware('auth');
    Route::post('store', 'store')->name('store')->middleware('auth');
});

Route::controller(NotificationController::class)->prefix('notification')->name('notification.')->group(function(){
    Route::get('', 'index')->name('index')->middleware('auth');
});

Route::controller(PaymentController::class)->prefix('payment')->name('payment.')->group(function(){
    Route::get('create/{bookingId}', 'create')->name('create')->middleware('auth');
    Route::post('store', 'store')->name('store')->middleware('auth');
});