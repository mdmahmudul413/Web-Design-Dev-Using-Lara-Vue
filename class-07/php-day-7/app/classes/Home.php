<?php

namespace App\classes;

class Home
{
    public $data = [];

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index(){
        header("Location: action.php?page=home");
    }

    public function getAllStudents(){
        $this->data = [
            0 => [
                "id" => "1",
                "name" => "Habib",
                "email" => "habib@gmail.com",
                "mobile" => "12345678",
            ],
            1 => [
                "id" => "2",
                "name" => "Mahmud",
                "email" => "mahmud@gmail.com",
                "mobile" => "456789",
            ],
            2 => [
                "id" => "3",
                "name" => "Santo",
                "email" => "santo@gmail.com",
                "mobile" => "987654",
            ],
            3 => [
                "id" => "4",
                "name" => "Mahadi",
                "email" => "mahadi@gmail.com",
                "mobile" => "45678",
            ]
        ];

//        Built in function "print_r()", "var_dump()"
//        echo "<pre>";
//        print_r($this->data);
//        var_dump($this->data);

        return $this->data;
    }
    
    
}