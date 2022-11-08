<?php
require_once "vendor/autoload.php";
use App\classes\Blog;
if(isset($_GET['page'])){

    if($_GET['page'] == 'home'){
//        echo '<pre>';
//        echo print_r($_GET);
        $blog = new Blog();
        $blogs = $blog->getAllBlogs();
        include 'pages/home.php';
    }

}
