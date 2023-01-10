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
//        If we want to use query builder

//        DB::table('blogs')->insert([
//            'title'          =>      $request->title,
//            'author'         =>      $request->author,
//            'description'    =>      $request->description,
//            'image'          =>      $request->image,
//        ]);

        Blog::newBlog($request);
        return redirect('/blog/add')->with('message', 'New Blog Created');
//        return redirect()->route('blog.add')->with('message', 'New Blog Created');
    }
}
