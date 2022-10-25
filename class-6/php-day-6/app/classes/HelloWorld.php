<?php
namespace App\classes;

class HelloWorld
{
    public $message;
    public $i;

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index(){
//        Repeated Statement(for, while, do while, foreach)
////        Repeated statement "for" example
//        for ($this->i = 10; $this->i > 15; $this->i++){
//            echo $this->message; //false condition
//        }

        for ($this->i = 10; $this->i < 15; $this->i++){
            echo $this->message . "<br>"; //true condition
        }
    }
}