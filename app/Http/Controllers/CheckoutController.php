<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        // Save Users Data
        $user = Auth::user();
        $user->update($request->except('total_price'));

        // Process Checkout
        $code = 'STORE-' . mt_rand(0000, 9999);
        $carts = Cart::with(['product', 'user'])->where('users_id', Auth::user()->id)->get();


        // Transaction create
        $transaction = Transaction::create([
            'users_id' => Auth::user()->id,
            'inscurance_id' => 0,
            'shipping_price' => 0,
            'total_price' => $request->total_price,
            'transaction_status' => 'PENDING',
            'code' => $code,
        ]);

        foreach ($carts as $cart) {
            $code = 'TRX-' . mt_rand(00000, 99999);
            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' =>  "PENDING",
                'resi' => '',
                'code' => $code,
            ]);
        }

        // DELETE CART DATA
        Cart::with(['product', 'user'])->where('users_id', Auth::user()->id)->delete();



        // Configuration Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');
        
        // Create Array for send to Midtrans
        $midtrans  = [
            'transaction_details' => [
                'order_id' => $code,
                'gross_amount' => (int) $request->total_price,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,                
            ],
            'enabled_payments' => [
                'gopay', 'permata_va', 'bank_transfer',
            ],
            'vtweb' => [],
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    public function callback(Request $request)
    {
        // Set Configuration Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Instance Midtrans Notifications
        $notification = new Notification();

        // Assign to Variable for Eazy Coding
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $orderId = $notification->order_id;

        // Search Transaction bedasarkan ID
        $transaction = Transaction::findOrFail($orderId);

        // Handle Notification status
        if($status == 'capture') {
            if($type == 'credit_card') {
                if($fraud == 'challenge'){
                    $transaction->status = "PENDING";
                }else {
                    $transaction->status = "SUCCESS";
                }
            }
        }

        else if($status = 'settlement') {
            $transaction->status == 'SUCCESS';
        }
        else if($status = 'pending') {
            $transaction->status == 'PENDING';
        }
        else if($status = 'deny') {
            $transaction->status == 'CANCELLED';
        }
        else if($status = 'expire') {
            $transaction->status == 'CANCELLED';
        }
        else if($status = 'cancel') {
            $transaction->status == 'CANCELLED';
        }

        // Save Transaction
        $transaction->save();
    }
}
