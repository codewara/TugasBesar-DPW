<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }

    public function createCharge(Request $request)
    {
        $validated = $request->validate([
            'car_id' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'include_driver' => 'nullable|boolean|default:0',
            'total_price' => 'required|numeric|min:0',
        ]);
        
        $validated['customer_id'] = Auth::user()->id;

        Transaction::create($validated);

        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $request->total_price,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('pages.tes', ['snapToken' => $snapToken]);
    }
}