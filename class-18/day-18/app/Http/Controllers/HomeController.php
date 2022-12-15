<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    private $allProducts;

    public function index(){
        $this->allProducts = Product::getAllProducts();
        return view('home.index', ['products' => $this->allProducts]);
    }

    public function about(){
        return view('about.index');
    }

    public function contact(){
        return view('contact.index');
    }

    public function login(){
        return view('login.index');
    }
}
