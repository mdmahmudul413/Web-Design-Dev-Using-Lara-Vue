<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    private $blogs, $blog;

    public function index(){
        return view('blog.index');
    }

    public function manage(){
        $this->blogs = Blog::all();
        return view('blog.manage', ['blogs' => $this->blogs]);
    }

    public function create(Request $request){
        Blog::newBlog($request);
        return redirect('/blog/add')->with('message', 'New Blog Created');
    }

    public function edit($id){
        $this->blog = Blog::find($id);
        return view('blog.edit', ['blog' => $this->blog]);
    }

    public function update(Request $request ,$id){
        Blog::updateBlog($request, $id);
        return redirect('blog/manage')->with('message', 'Blog info updated');
    }

    public function delete($id){
        Blog::deleteBlog($id);
        return redirect('blog/manage')->with('message', 'Blog info deleted');
    }
}
