<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller {
    public function home() {
        return view('pages.home');
    }

    public function admin() {
        return view('admin.dashboard');
    }
}
