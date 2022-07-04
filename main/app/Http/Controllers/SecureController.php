<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FraudDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class SecureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function SecureEyeAction()
    {

        $check = PersonalAccessToken::where('tokenable_id', Auth::user()->id);
        if ($check->count() == 0) {
            return [
                'code' => 1003,
                'status' => 'Denied',
                'message' => 'User has no API access',
            ];
        } else {
            if ($check->first()->status == '' || $check->first()->status == 0) {
                return [
                    'code' => 1005,
                    'status' => 'Denied',
                    'message' => 'Not allowed to access this resource',
                ];
            } else {
                return [
                    'code' => 2001,
                    'status' => 'Access',
                    'message' => 'User allowed',
                ];
            }
        }
    }

    public function AadharSearch(Request $request)
    {

        $eye = $this->SecureEyeAction();

        if ($eye{'code'} === 2001) {
            # code...
            $aadhar = $request->aadhar_search;

            $data = FraudDB::where('aadhar', $aadhar)->first();

            return view('fraud_profile', compact('data'));
        }
        return view('wallet.wallet', compact('eye'));

    }
}
