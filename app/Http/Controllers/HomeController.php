<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "Blog personal de Bruno";
        return view("home.index", compact("title"));
    }
}
