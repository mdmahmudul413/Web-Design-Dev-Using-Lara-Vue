<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;
use App\classes\Series;
use App\classes\EvenOdd;
use App\classes\Counter;

$title = '';
$calculation = '';
$seriesResult = '';
$evenOddRes = '';
$wordCount = '';
$letterCount = '';
$result = ['givenString' => '', 'words' => '', 'letters' => ''];

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $title = 'Home';
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'calculator'){
        $title = 'Calculator';
        include 'pages/calculator.php';
    }
    elseif($_GET['page'] == 'series'){
        $title = 'Series';
        include 'pages/series.php';
    }
    elseif($_GET['page'] == 'even-odd'){
        $title = 'Even/Odd';
        include 'pages/even-odd.php';
    }
    elseif($_GET['page'] == 'counter'){
        $title = 'Counter';
        include 'pages/counter.php';
    }
}

elseif (isset($_POST['submit_btn'])){
    $calculator = new Calculator($_POST);
    $calculation = $calculator->getResult();
    $title = 'Calculator';
    include 'pages/calculator.php';
}

elseif (isset($_POST['submit_series_btn'])){
    $series = new Series($_POST);
    $seriesResult = $series->getResult();
    $title = 'Series';
    include 'pages/series.php';
}

elseif (isset($_POST['even_odd_btn'])){
    $evenOdd = new EvenOdd($_POST);
    $evenOddRes = $evenOdd->getResult();
    $title = 'Even/Odd';
    include 'pages/even-odd.php';
}

elseif (isset($_POST['string_btn'])){
    $counter = new Counter($_POST);
    $letterCount = $counter->getLettersCount();
    $wordCount = $counter->getWordsCount();
    $result = $counter->getResult();
    $title = 'Counter';
    include 'pages/counter.php';
}