<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('project', ['projects' => $projects]);
    }
}
