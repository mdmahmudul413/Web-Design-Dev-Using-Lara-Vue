<?php


namespace App\classes;

// This is a way of inheritance
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\Teacher;

//class Home extends User implements  ExampleOne, ExampleTwo
// extending abstract class
class Home extends Teacher implements  ExampleOne, ExampleTwo
{
//    These properties are accessible from other files
//    public $message;
//    public $messageTwo;
//    public $messageThree;

    public $message;
    protected $messageTwo;
    private $messageThree;

    public function __construct()
    {
        $this->message = "Hello World";
        $this->messageTwo = "Hello PHP";
        $this->messageThree = "Hello Laravel";
    }

    public function funcOne()
    {
        // TODO: Implement funcOne() method.
        $this->demo();
    }

    public function funcTwo()
    {
        // TODO: Implement funcTwo() method.
    }

    public function one()
    {
        // TODO: Implement one() method.
    }

    public function two()
    {
        // TODO: Implement two() method.
    }

    public function three()
    {
        // TODO: Implement three() method.
    }


    public function polymorphism(){
        $this->password = '000000';
        echo $this->password;
    }

    public function inheritance(){
//        Inheritance without importing class and without making object
//        echo $this->login() . '<br>';
//        echo $this->password . '<br>';
//        echo $this->register() . '<br>';
    }

    public function user(){
//        Inheritance with importing class
//        $user = new User();

//        In this way, we can access User's class protected and private properties
//        $user->login();
//        echo $user->email;
    }

    public function index(){
        echo $this->message;
    }

    private function bitm(){
        echo $this->messageTwo;
    }

    protected function basis(){
        echo $this->messageThree;
    }
}