<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function callforpaper(){
        return view('frontend.opportunities.callforpapers');
    }

    public function callforproposal(){
        return view('frontend.opportunities.callforproposal');
    }

    public function becomeinstructor(){
        return view('frontend.opportunities.becominstructor');
    }

    public function careers(){
        return view('frontend.opportunities.careers');
    }
}
