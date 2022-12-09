<?php


namespace App\classes;


class EvenOdd
{
    public $number, $sum = 0, $result;

    public function __construct($post)
    {
        $this->number = $post['number'];
    }

    public function getResult(){
        $this->sum = $this->number % 2;

        if($this->sum == 0){
            $this->result = $this->number . ' is Even Number.';
        }
        else{
            $this->result = $this->number . ' is Odd Number.';
        }
        return $this->result;
    }
}