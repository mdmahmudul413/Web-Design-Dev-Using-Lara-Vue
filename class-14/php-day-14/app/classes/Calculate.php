<?php


namespace App\classes;


class Calculate
{
public $firstNum, $lastNum, $operator, $result;

    public function __construct($post)
    {
        $this->firstNum = $post['first_number'];
        $this->lastNum = $post['last_number'];
        $this->operator = $post['choice'];
    }

    public function getCalculation(){
        if($this->operator == '+'){
            return $this->firstNum + $this->lastNum;
        }
        elseif ($this->operator == '-'){
            return $this->firstNum - $this->lastNum;
        }
        elseif ($this->operator == '*'){
            return $this->firstNum * $this->lastNum;
        }
        elseif ($this->operator == '/'){
            return $this->firstNum / $this->lastNum;
        }
        elseif ($this->operator == '%'){
            return $this->firstNum % $this->lastNum;
        }
    }


}