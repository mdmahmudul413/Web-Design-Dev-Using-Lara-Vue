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
                "image" => "category1.jpg"
            ],
            1 => [
                "id" => 2,
                "name" => "Man Fashion",
                "image" => "category2.jpg"
            ],
            2 => [
                "id" => 3,
                "name" => "Woman Fashion",
                "image" => "category3.jpg"
            ],
            3 => [
                "id" => 4,
                "name" => "Kids Fashion",
                "image" => "category4.jpg"
            ]
        ];
    }

    public function getAllCategory(){
        return $this->categories;
    }
}