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
            return "User has no API access";
        } else {
            if ($check->first()->status == '' || $check->first()->status == 0) {
                return "Not a active user";
                // return Redirect::route('activate');
            }else{
                return "active user";
            }
        }
    }

    public function AadharSearch(Request $request)
    {

        return $this->SecureEyeAction();
        $aadhar = $request->aadhar_search;

        $data = FraudDB::where('aadhar', $aadhar)->first();

        return view('fraud_profile', compact('data'));
    }
}
