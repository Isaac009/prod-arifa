<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('frontend.projects.index',compact('projects'));
    }

    public function show(Project $project){
        return view('frontend.projects.show', compact('project'));
    }
}
