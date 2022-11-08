<?php
require_once 'vendor/autoload.php';
use App\classes\HelloWorld;

$helloWorld = new HelloWorld('123');
$helloWorld->index();