<?php


namespace App\classes;


class Series
{
    public $startingNum, $endingNum, $choice, $i, $sum = 0, $result;

    public function __construct($post)
    {
        $this->startingNum = $post['starting_number'];
        $this->endingNum = $post['ending_number'];
        $this->choice = $post['choice'];
    }

    public function getResult(){

        switch ($this->choice){
            case 'none':
                $this->none();
                break;
            case 'even':
                $this->evenSeries();
                break;
            case 'odd':
                $this->oddSeries();
                break;
        }

        return $this->result;
    }

    public function none(){
        if($this->startingNum > $this->endingNum){
            for($this->i = $this->startingNum; $this->i >= $this->endingNum; $this->i--){
                $this->result .= $this->i . ' ';
            }
        }
        else{
            for($this->i = $this->startingNum; $this->i <= $this->endingNum; $this->i++){
                $this->result .= $this->i . ' ';
            }
        }
        return $this->result;
    }

    public function evenSeries(){
        if($this->startingNum > $this->endingNum){
            for($this->i = $this->startingNum; $this->i >= $this->endingNum; $this->i--){
                $this->sum = $this->i % 2;
                if($this->sum == 0){
                    $this->result .= $this->i . ' ';
                }
            }
        }
        else{
            for($this->i = $this->startingNum; $this->i <= $this->endingNum; $this->i++){
                $this->sum = $this->i % 2;
                if($this->sum == 0){
                    $this->result .= $this->i . ' ';
                }
            }
        }
        return $this->result;
    }

    public function oddSeries(){
        if($this->startingNum > $this->endingNum){
            for($this->i = $this->startingNum; $this->i >= $this->endingNum; $this->i--){
                $this->sum = $this->i % 2;
                if($this->sum == 1){
                    $this->result .= $this->i . ' ';
                }
            }
        }
        else{
            for($this->i = $this->startingNum; $this->i <= $this->endingNum; $this->i++){
                $this->sum = $this->i % 2;
                if($this->sum == 1){
                    $this->result .= $this->i . ' ';
                }
            }
        }
        return $this->result;
    }

}