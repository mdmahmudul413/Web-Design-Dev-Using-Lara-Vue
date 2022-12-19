<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    private $blogs, $fullName;

    public function index(){
        return view('home.index');
    }

    public function about(){
        $this->blogs = Blog::getAllBlog();
        return view('about.index', ['blogs' => $this->blogs]);
    }

    public function contact(){
        $this->fullName = '';
        return view('contact.index', ['fullName' => $this->fullName]);
    }

    public function detail($id){
        return view('about.detail', ['blog' => Blog::getBlogById($id)]);
    }

    public function form(Request $request){
        $this->fullName = $request->first_name . ' ' . $request->last_name;
        return redirect('/contact')->with('fullName', $this->fullName);
    }
}
