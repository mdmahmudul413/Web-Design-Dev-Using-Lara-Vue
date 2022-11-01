<?php


namespace App\classes;
use App\classes\Blog;

class Home
{
    public $message, $blog, $blogs;

    public function __construct()
    {
        $this->message = "hello world";
    }

    public function index(){
//        echo $this->message;

//        $this->blog = new Blog();
//        $this->blogs = $this->blog->getAllBlogs();
//
//        foreach ($this->blogs as $blog){
//            echo $blog['id'] . '<br/>';
//            echo $blog['title'] . '<br/>';
//            echo $blog['description'] . '<br/>';
//            echo $blog['image'] . '<br/>';
//            echo "<br/>";
//        }

        header("Location: action.php?page=home");
    }
}