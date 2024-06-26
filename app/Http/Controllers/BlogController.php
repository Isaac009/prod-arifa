<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('frontend.blog.index', compact('blogs'));
    }

    public function details(Blog $blog){
        return view('frontend/blog.details', compact('blog'));
    }
}
