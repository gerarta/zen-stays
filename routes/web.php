<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

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
    
}); 

Route::controller(BookingController::class)->prefix('booking')->name('booking.')->group(function (){
    Route::get('check-out', 'create')->name('check-out');
});

Route::controller(UserController::class)->prefix('user')->name('user.')->group(function (){
    Route::get('/', 'index')->name('index');
    Route::put('/', 'update')->name('update');
});