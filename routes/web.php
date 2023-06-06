<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\AdditionalController;

use App\Models\Room;
use App\Models\Rating;

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
    $room = Room::withCount('rating')->paginate(8);
    foreach ($room as $rooms){
        $totalposts = $rooms->rating_count;
    }
    $room->each(function ($rooms) {
        $averageRating = Rating::where('room_id', $rooms->id)->average('star_rating');
        $rooms->average_rating = $averageRating;
    });
    return view('welcome', compact('room'));
});

// ROLE
Route::get('/role', [RoleController::class, 'index'])->name('role.index');

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
    Route::get('/room/rating/{id}', [RoomController::class, 'roomRating'])->name('roomRating');
    Route::post('/room/{id}/session', [RoomController::class, 'session'])->name('session');
    Route::get('/order/{id}/additional', [RoomController::class, 'additional'])->name('additional');
    Route::get('/order/{id}/additional', [RoomController::class, 'additional'])->name('additional');

    // Order
    Route::get('/order/form/{id}', [OrderController::class, 'index'])->name('order');

    Route::get('/order/additional/{id}', [OrderController::class, 'additional'])->name('additional');
    Route::post('/order/additional/total/{id}', [OrderController::class, 'totaladditional'])->name('totalAdditional');
    Route::post('/order/form/{id}', [OrderController::class, 'orderWithAdditional'])->name('orderWithAdditional');
    Route::post('/order/form/store/{id}', [OrderController::class, 'store'])->name('store');

    Route::get('/order/payment/{id}', [OrderController::class, 'payment'])->name('payment');
    Route::post('/order/payment/{id}', [OrderController::class, 'paymentStore'])->name('paymentStore');
    Route::get('/order/point', [OrderController::class, 'addPoint'])->name('addPoint');
    Route::get('/order/point/remove', [OrderController::class, 'removePoint'])->name('removePoint');

    Route::get('/order/confirm-payment/{id}', [OrderController::class, 'confirmPayment'])->name('confirmPayment');
    Route::post('/order/confirm-payment/{id}', [OrderController::class, 'confirmPaymentStore'])->name('confirmPaymentStore');
    Route::get('/order/receipt/{id}', [OrderController::class, 'receipt'])->name('receipt');
    Route::delete('/order/refund/{id}', [OrderController::class, 'refund'])->name('refund');
});

// ADMIN ROUTE

Route::prefix('partner')->group(function () {
    Route::get('/login', [PartnerController::class, 'index'])->name('partnerLogin-form');
    
    Route::post('/login', [PartnerController::class, 'login'])->name('partnerLogin');

    Route::get('/logout', [PartnerController::class, 'logout'])->name('partner.logout');

    Route::get('/register', [PartnerController::class, 'registerForm'])->name('partnerRegister-form');
    Route::post('/register', [PartnerController::class, 'register'])->name('partnerRegister');
    
    Route::get('/dashboard', [PartnerController::class, 'dashboard'])->name('partnerDashboard')->middleware('partner');

    // CRUD Additional & Properties
    Route::resource('properties', PropertiesController::class)->middleware('partner');
    Route::resource('additional', AdditionalController::class)->middleware('partner');

    // Order History
    // Route::get('orderhistory', [PartnerController::class, 'orderHistoryGet'])->name('partnerHistoryGet')->middleware('partner');
    Route::get('orderhistory', [PartnerController::class, 'orderHistory'])->name('partnerHistory')->middleware('partner');
    Route::patch('/statusUpdate/{id}', [PartnerController::class, 'updateStatus'])->name('updateStatus')->middleware('partner');

    // Chart
    Route::get('adminchart', [PartnerController::class, 'dashboardChart'])->name('dashboardChart')->middleware('partner');
    
    // Notification
    Route::get('notification', [PartnerController::class, 'notification'])->name('notification')->middleware('partner');
});

require __DIR__.'/auth.php';
