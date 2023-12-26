<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocationController;


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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('/home',[TripController::class, 'index'])->name('home.index');
    Route::get('/trip/create',[TripController::class, 'create'])->name('trip.create');
    Route::post('/trip/store',[TripController::class, 'store'])->name('trip.store');
    Route::get('/trip',[TripController::class, 'searchBus'])->name('trip.searhBus');
   Route::post('/users',[UserController::class, 'store'])->name('users.store');

   Route::get('/location',[LocationController::class, 'create'])->name('location.create');
   Route::post('/location',[LocationController::class, 'store'])->name('location.store');
  

    


});
