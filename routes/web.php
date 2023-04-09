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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/loyalty', [ProfileController::class, 'loyalty'])->name('profile.loyalty');
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // History
    Route::get('/history', [ProfileController::class, 'history'])->name('history');

    // Room Routes
    Route::get('/room', [RoomController::class, 'index'])->name('room');

    // Order
    Route::get('/room/order', [OrderController::class, 'index'])->name('order');
    Route::get('/room/order/payment', [OrderController::class, 'payment'])->name('payment');
    Route::get('/room/order/receipt', [OrderController::class, 'receipt'])->name('receipt');
});

require __DIR__.'/auth.php';
