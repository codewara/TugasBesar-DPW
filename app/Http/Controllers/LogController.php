<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Transaction;
use Illuminate\Http\Request;

class LogController extends Controller {
    public function home() {
        return view('pages.home');
    }

    public function admin() {
        $cars = Car::all();
        $transactions = Transaction::all();
        return view('admin.dashboard', ['cars' => $cars, 'transactions' => $transactions]);
    }
}
