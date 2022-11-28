<?php


namespace App\classes;


class Brand
{
    public $brands = [];

    public function __construct()
    {
        $this->brands = [
            0 => [
                "id" => 1,
                "name" => "Sony",
                "image" => 'b1.jpg'
            ],
            1 => [
                "id" => 2,
                "name" => "Samsung",
                "image" => 'b2.jpg'
            ],
            2 => [
                "id" => 3,
                "name" => "Gentle Park",
                "image" => 'b3.jpg'
            ],
            3 => [
                "id" => 4,
                "name" => "Yellow",
                "image" => 'b4.jpg'
            ],
            4 => [
                "id" => 5,
                "name" => "Arong",
                "image" => 'b5.jpg'
            ],
            5 => [
                "id" => 6,
                "name" => "Sailor",
                "image" => 'b6.jpg'
            ],
            6 => [
                "id" => 7,
                "name" => "PepsiCo",
                "image" => 'b7.jpg'
            ],
            7 => [
                "id" => 8,
                "name" => "Pizza Hut",
                "image" => 'c8.jpg'
            ],
            7 => [
                "id" => 9,
                "name" => "Burger King",
                "image" => 'c9.jpg'
            ]
        ];
    }

    public function getAllBrand(){
        return $this->brands;
    }
}