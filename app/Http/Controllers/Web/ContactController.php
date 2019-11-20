<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
}
