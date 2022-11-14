<?php


namespace App\classes;


class Product
{
    public $products = [];
    public $data = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                "id" => 1,
                "category_id" => 1,
                "name" => "A New Mobile",
                "description" => "A New Mobile Description",
                "price" => 3550,
                "image" => "p1.jpg"
            ],
            1 => [
                "id" => 2,
                "category_id" => 1,
                "name" => "New Sony Mobile",
                "description" => "New Sony Mobile Description",
                "price" => 2550,
                "image" => "p2.jpg"
            ],
            2 => [
                "id" => 3,
                "category_id" => 2,
                "name" => "Fashionable T-Shirt",
                "description" => "Fashionable T-Shirt Description",
                "price" => 550,
                "image" => "p3.jpg"
            ],
            3 => [
                "id" => 4,
                "category_id" => 3,
                "name" => "Zamdani Shari",
                "description" => "Zamdani Shari Description",
                "price" => 32550,
                "image" => "p4.jpg"
            ],
            4 => [
                "id" => 5,
                "category_id" => 4,
                "name" => "Baby Dress",
                "description" => "Baby Dress Description",
                "price" => 7850,
                "image" => "p5.jpg"
            ],
            5 => [
                "id" => 6,
                "category_id" => 1,
                "name" => "Hp Laptop",
                "description" => "Hp Laptop Description",
                "price" => 23434550,
                "image" => "p6.jpg"
            ]
        ];
    }

    public function getAllProducts(){
        return $this->products;
    }

    public function getProductsById($id){
        foreach ($this->products as $product){
            if($product['id'] == $id){
                return $product;
            }
        }
    }

    public function getProductByCategoryId($id){
        foreach ($this->products as $product){
            if($product['category_id'] == $id){
                array_push($this->data, $product);
            }
        }
        return $this->data;
    }
}