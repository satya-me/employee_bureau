<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AccountView(Request $request)
    {
        return view('settings.account');
    }

    public function GenerateApiKey(Request $request)
    {
        $check = DB::table('personal_access_tokens')->where('tokenable_id', Auth::user()->id);

        if ($check->count() == 1) {
            $response = [
                'flag' => 'exist_user',
                '_token' => $check->first(),
            ];
        } else {

            $user = User::where('email', Auth::user()->email)->first();
            $token = $user->createToken('my-app-token')->plainTextToken;
            $affected = DB::table('personal_access_tokens')
                ->where('tokenable_id', Auth::user()->id)
                ->update(['web_token' => $token, 'is_api' => 1, 'flag' => 1]);

            $response = [

                'flag' => 'just_created',

            ];
        }

        return response($response, 201);
    }

    public function GetApiKey(Request $request)
    {
        $check = DB::table('personal_access_tokens')->where('tokenable_id', Auth::user()->id)->first();
        $response = [
            'flag' => 'exist_user',
            '_token' => $check,
            'button' => 'checked',
        ];
        return response($response, 201);
    }
}
