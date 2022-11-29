<?php

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

require_once 'vendor/autoload.php';
use App\classes\FullName;
use App\classes\Calculate;
$title = '';
$result = '';

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $title = 'Home';
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'full-name'){
        $title = 'Full Name';
        include 'pages/full-name.php';
    }
    elseif($_GET['page'] == 'calculator'){
        $title = 'Calculator';
        include 'pages/calculator.php';
    }
}
elseif(isset($_POST['btn_full_name'])){
    $fullName = new FullName($_POST);
    $result = $fullName->getFullName();
    include 'pages/full-name.php';
}
elseif(isset($_POST['btn_calculator'])){
    $calculator = new Calculate($_POST);
    $result = $calculator->getCalculation();
    include 'pages/calculator.php';
}