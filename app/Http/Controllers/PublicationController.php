<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(){
        $publications = Publication::all();
        $recent_posts = array();
        return view('frontend.publications.index', compact('publications', 'recent_posts'));
    }

    public function show(Publication $publication){
        return view('frontend.publications.show', compact('publication'));
    }
}
