<?php


namespace App\classes;


class User
{
    public $email = 'admin@admin.com';
    protected $password = '1234';
    private $userType = 'admin';

    public function login(){
        echo $this->password . '<br>';
        echo $this->userType . '<br>';
        echo 'OOP is Simple';
    }

    protected function register(){
        echo "hello";
    }

    private function logout(){
        echo 'in logout';
    }
}