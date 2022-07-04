<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function MyWallet(Request $request)
    {
        return view('wallet.wallet');
    }

    public function WalletTopUp(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('wallet.wallet');
        }
        return "DO Recharge Payment Gateway Page";
    }
}
