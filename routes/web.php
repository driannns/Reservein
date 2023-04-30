<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

// ROLE
Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::post('/role', [RoleController::class, 'post'])->name('register.index');

Route::get('/dashboard',[RoomController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/loyalty', [ProfileController::class, 'loyalty'])->name('profile.loyalty');
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::get('/profile/faqs', [ProfileController::class, 'faqs'])->name('profile.faqs');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile', [ProfileController::class, 'avatar'])->name('avatar');
    
    // History
    Route::get('/history', [ProfileController::class, 'history'])->name('history');
    
    // Dashboard
    Route::get('/dashboard/filter',[RoomController::class, 'indexfilter'])->name('filtered');


    // Room Routes
    Route::get('/room/{id}', [RoomController::class, 'room'])->name('room');
    Route::get('/room/{id}/additional', [RoomController::class, 'additional'])->name('additional');

    // Order
    Route::get('/order/form/{id}', [OrderController::class, 'order'])->name('order');
    Route::get('/order/payment/{id}', [OrderController::class, 'payment'])->name('payment');
    Route::get('/order/receipt/{id}', [OrderController::class, 'receipt'])->name('receipt');
});

require __DIR__.'/auth.php';
