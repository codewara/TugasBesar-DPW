<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;
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
    return view('pages.home');
});

Route::get('/iyah', function () {
    return view('pages.tes');
});

Route::get('/oqe', function () {
    return view('pages.tesz');
});

Route::resource('gallery', CarController::class);

Route::get('/admin', [LogController::class, 'admin']
)->middleware(['auth', 'verified', 'admin'])->name('admin');

Route::get('/home', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/create-transaction', [PaymentController::class, 'createCharge'])->name('createCharge');
Route::post('/notification-handler', [PaymentController::class, 'notificationHandler']);


require __DIR__.'/auth.php';