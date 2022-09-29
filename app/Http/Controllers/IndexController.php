<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //shows "index.blade.php"
    public function index(){
        return view("index");
    }

    public function signin(){
        return view("signin");
    }

    public function signup(){
        return view("signup");
    }
}