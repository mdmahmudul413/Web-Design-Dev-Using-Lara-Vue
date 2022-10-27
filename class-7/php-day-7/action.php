<?php
require_once "vendor/autoload.php";
use App\classes\Home;

//echo "<pre>";
//print_r($_GET);

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $home = new Home();
        $students = $home->getAllStudents();
        include 'pages/home.php';
    }
}