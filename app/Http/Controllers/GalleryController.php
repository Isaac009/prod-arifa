<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $photos = Gallery::all();
        return view('frontend.gallery.index', compact('photos'));
    }

    public function show(Gallery $photo){
        return view('frontend.gallery.show', compact('photo'));
    }
}
