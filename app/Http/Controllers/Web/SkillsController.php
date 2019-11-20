<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class SkillsController extends Controller
{
    public function index(){
        return view('skills');
    }
}
