<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function program(){
        return view('frontend.industry/program');
    }

    public function engagement(){
        return view('frontend.industry/engagement');
    }
}
