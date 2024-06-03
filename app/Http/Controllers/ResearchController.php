<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function researchDev(){
        return view('frontend/research/research-dev');
    }

    public function researchProjects(){
        $projects = Project::all();
        return view('frontend.projects.index',compact('projects'));
    }

    public function show(Project $project){
        return view('frontend.projects.show', compact('project'));
    }
}
