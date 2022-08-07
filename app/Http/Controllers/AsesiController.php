<?php

namespace App\Http\Controllers;

use App\Models\SkemaAsesi;
use Exception;
use Illuminate\Http\Request;

class AsesiController extends Controller
{
    public function profile(Request $request)
    {

        return view('profile');
    }

    public function umpanBalik($id) {
        try {
            SkemaAsesi::findOrFail($id);
            return view('asesi.umpan-balik', compact('id'));
        } catch(Exception $err) {
            // dd($err);
            abort(404);
        }
    }
}
