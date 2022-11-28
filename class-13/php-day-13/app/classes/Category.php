<?php


namespace App\classes;


class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                "id" => 1,
                "name" => "Electronics",
                "image" => 'c1.jpg'
            ],
            1 => [
                "id" => 2,
                "name" => "Men's Fashion",
                "image" => 'c2.jpg'
            ],
            2 => [
                "id" => 3,
                "name" => "Women's Fashion",
                "image" => 'c3.jpg'
            ],
            3 => [
                "id" => 4,
                "name" => "Food",
                "image" => 'c4.jpg'
            ]
        ];
    }

    public function getAllCategory(){
        return $this->categories;
    }
}