<?php

require_once "vendor/autoload.php";
use App\classes\Home;
//use App\classes\Category;


//we can not create object of trait
//$category = new Category();

//We don't need to create object for calling static property, methods from view
//Home::edit();
//echo Home::$contact;

$home = new Home();
$home->index();
