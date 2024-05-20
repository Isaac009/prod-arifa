<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function program(){
        return view('frontend.training/program');
    }

    public function corporate(){
        return view('frontend.training/corporate');
    }

    public function government(){
        return view('frontend.training/gvt');
    }

    public function registerCourse(){
        return view('frontend.training/register-course');
    }
}
