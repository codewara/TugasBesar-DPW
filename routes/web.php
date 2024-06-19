<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Models\Car;
use Illuminate\Http\Request;
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

Route::get('/rent', function (Request $request) {
    $cars = Car::where('availability', 1)->get();
    $selected = null;

    if ($request->has('id')) {
        $selected = Car::find($request->id);
    }

    return view('pages.rent', compact('cars', 'selected'));
})->middleware(['auth', 'verified'])->name('rent');

Route::get('/cars/{id}', function ($id) {
    $car = Car::findOrFail($id);
    return response()->json($car);
});

Route::resource('gallery', CarController::class);

Route::get('/admin', [LogController::class, 'admin']
)->middleware(['auth', 'verified', 'admin'])->name('admin');
Route::prefix('admin')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::resource('car', CarController::class);
});

Route::get('/home', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/createInvoice', [PaymentController::class, 'createCharge'])->name('createCharge');
Route::get('/invoice/{id}', [PaymentController::class, 'viewInvoice'])->name('viewInvoice');

require __DIR__ . '/auth.php';
