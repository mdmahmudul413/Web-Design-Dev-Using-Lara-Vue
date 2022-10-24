<?php
namespace App\classes;

class HelloWorld
{
    public $numberOne;
    public $numberTwo;
    public $numberThree;
    public function __construct($post)
    {
        $this->message = $post;
    }

    public function index(){
//        arithmetic operator example

//        $this->numberOne = 20;
//        $this->numberTwo = 30;
//
//        echo $this->numberOne + $this->numberTwo;
//        echo '<br>';
//        echo $this->numberOne - $this->numberTwo;
//        echo '<br>';
//        echo $this->numberOne * $this->numberTwo;
//        echo '<br>';
//        echo $this->numberOne / $this->numberTwo;
//        echo '<br>';
//        echo $this->numberOne % $this->numberTwo;
//        echo '<br>';

//        pre increment and post increment

//        echo ++$this->numberOne;
//        echo "<br>";
//        echo $this->numberOne++;
//        echo "<br>";
//        echo ++$this->numberOne;
//        echo "<br>";




//        Assignment operator example

//        $this->numberOne = 10;
//        $this->numberTwo = 30;
//
//        echo $this->numberOne += $this->numberTwo; // $this->numberOne = 40
//        echo "<br>";
//        echo $this->numberOne -= $this->numberTwo; // $this->numberOne = 10
//        echo "<br>";
//        echo $this->numberOne *= $this->numberTwo; // $this->numberOne = 300
//        echo "<br>";
//        echo $this->numberOne /= $this->numberTwo; // $this->numberOne = 10
//        echo "<br>";
//        echo $this->numberOne %= $this->numberTwo; // $this->numberOne = 10
//        echo "<br>";
//        echo $this->numberOne .= $this->numberTwo;
//        // $this->numberOne = 1030, type = string
//
//        echo "<br>";
//        echo $this->numberOne += $this->numberTwo;
//        // $this->numberOne = 1060, type = integer
//
//        echo "<br>";


//        Logical operator example

//        $this->numberOne = 10;
//        $this->numberTwo = 30;
//        $this->numberThree = '30';

//        echo $this->numberOne > $this->numberTwo;
//        echo "<br>";
//        echo $this->numberOne < $this->numberTwo;
//        echo "<br>";
//        echo $this->numberOne >= $this->numberTwo;
//        echo "<br>";
//        echo $this->numberOne <= $this->numberTwo;
//        echo "<br>";
//        echo $this->numberTwo == $this->numberThree;
////        "==" check only value not data type
//        echo "<br>";
//        echo $this->numberTwo === $this->numberThree;
////        "===" checks value and also data type
//        echo "<br>";
//        echo $this->numberTwo != $this->numberThree;
////        "!=" check only value not data type
//        echo "<br>";
//        echo $this->numberTwo !== $this->numberThree;
////        "!==" checks value and also data type



//    Logical Operator Example

        $this->numberOne = 10;
        $this->numberTwo = 20;
        $this->numberThree = 30;


//        echo ($this->numberOne > $this->numberTwo) && ($this->numberTwo < $this->numberThree);
//        echo "<br>";
//        echo ($this->numberOne < $this->numberTwo) && ($this->numberTwo > $this->numberThree);
//        echo "<br>";
//        echo ($this->numberOne > $this->numberTwo) && ($this->numberTwo > $this->numberThree);
//        echo "<br>";
//        echo ($this->numberOne < $this->numberTwo) && ($this->numberTwo < $this->numberThree);
//        echo "<br>";

        echo ($this->numberOne > $this->numberTwo) || ($this->numberTwo < $this->numberThree);
        echo "<br>";
        echo ($this->numberOne < $this->numberTwo) || ($this->numberTwo > $this->numberThree);
        echo "<br>";
        echo ($this->numberOne > $this->numberTwo) || ($this->numberTwo > $this->numberThree);
        echo "<br>";
        echo ($this->numberOne < $this->numberTwo) || ($this->numberTwo < $this->numberThree);
        echo "<br>";

    }
}