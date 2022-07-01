<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function create()
    {
        return response()->json('You are good to go');
    }
}
