<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $fullName;

    public function index(){
        return view('home.index');
    }

}
