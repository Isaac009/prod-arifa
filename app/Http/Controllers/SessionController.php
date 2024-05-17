<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function removeValue(Request $request)
    {
        $request->session()->forget('message');
        return response()->json(['success' => true]);
    }
}
