<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Wallet;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function MyWallet(Request $request)
    {
        $transaction = Payment::where('user_id', Auth::user()->id)->get();
        return view('wallet.wallet', compact('transaction'));
    }

    public function WalletTopUp(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('wallet.wallet');
        }
        return "DO Recharge Payment Gateway Page";
    }

    public function Transaction(Request $request)
    {
        // return $request;

        $amt = $request->amt; // "100"
        $email = $request->email; // "satyajitbarik83@gmail.com"
        $mobile = $request->mobile; // "9658730362"
        $name = $request->name; // "Satyajit Barik"
        $razorpay_payment_id = $request->razorpay_payment_id; // "pay_JqrWJ83pmN4EES"
        $user_id = $request->user_id; // "2"

        $check = DB::table('wallets')->where('user_id', $user_id)->count();

        $date = date('Y-m-d H:i:s');
        if ($check == 1) {
            Wallet::where('user_id', $user_id)->increment('balance', $amt);
            // DB::table('wallets')->where('user_id', $user_id)->increment('balance', $amt);
        } else {
            DB::table('wallets')->insert([
                'user_id' => $user_id,
                'balance' => $amt,
                'created_at' => $date,
            ]);
        }

        $payment = new Payment;
        $payment->amt = $amt;
        $payment->email = $email;
        $payment->mobile = $mobile;
        $payment->name = $name;
        $payment->razorpay_payment_id = $razorpay_payment_id;
        $payment->user_id = $user_id;
        $payment->save();

        return response()->json(['success' => true, 'user_id' => $user_id, 'balance' => $amt]);

    }

    public function Balance(Request $request)
    {
        $user_id = Auth::user()->id;

        return Wallet::where('user_id', $user_id)->first();
    }
}

// DB::table('users')->increment('votes');
// DB::table('users')->decrement('votes');
// DB::table('users')->decrement('votes', 5);
