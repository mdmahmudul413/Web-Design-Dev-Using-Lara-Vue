<?php


namespace App\classes;

abstract class Teacher
{
    public $name = 'Mahmud';

    public function demo(){
        echo $this->name;
    }

//    we can create resource like interface inside abstract class
    public abstract function hello();
}