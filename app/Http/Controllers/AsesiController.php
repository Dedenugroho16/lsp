<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesiController extends Controller
{
    public function profile(Request $request)
    {

        return view('profile');
    }
}
