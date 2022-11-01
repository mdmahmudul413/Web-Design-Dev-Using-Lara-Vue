<?php


namespace App\classes;


class Home
{
    public $message;

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index(){
//        echo $this->message;
        header("Location: action.php?page=home");
    }

}