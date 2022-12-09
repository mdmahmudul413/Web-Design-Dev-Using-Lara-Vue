<?php


namespace App\classes;

abstract class Teacher
{
    public $name = 'Mahmud';

    public function demo(){
        echo $this->name;
    }
}