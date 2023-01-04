<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JaibhimController extends Controller
{
    //
    public function registration(Request $request)
    {
        return view('jaibhimfoundation-register');
    }
}
