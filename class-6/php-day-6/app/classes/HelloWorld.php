<?php
namespace App\classes;

class HelloWorld
{
    public $numberOne;
    public $numberTwo;
    public $numberThree;
    public function __construct()
    {
        $this->message = "hello";
    }

    public function index(){
        echo $this->message;
    }
}