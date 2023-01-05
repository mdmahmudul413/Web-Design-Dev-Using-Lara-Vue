<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function manage(){
        return view('blog.manage');
    }

    public function create(Request $request){
        Blog::newBlog($request);
        return redirect('/blog/add')->with('message', 'New Blog Created');
    }
}
