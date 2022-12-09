<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $secondNumber, $operator, $result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->secondNumber = $post['second_number'];
        $this->operator = $post['choice'];
    }

    public function getResult(){
        switch ($this->operator){
            case '+':
                $this->result = $this->addition();
                break;

            case '-':
                $this->result = $this->subtraction();
                break;

            case '*':
                $this->result = $this->multiplication();
                break;

            case '/':
                $this->result = $this->division();
                break;

            case '%':
                $this->result = $this->modulus();
                break;
        }
        return $this->result;
    }

    public function addition(){
        return $this->firstNumber + $this->secondNumber;
    }

    public function subtraction(){
        return $this->firstNumber - $this->secondNumber;
    }

    public function division(){
        return $this->firstNumber / $this->secondNumber;
    }

    public function multiplication(){
        return $this->firstNumber * $this->secondNumber;
    }

    public function modulus(){
        return $this->firstNumber % $this->secondNumber;
    }
}