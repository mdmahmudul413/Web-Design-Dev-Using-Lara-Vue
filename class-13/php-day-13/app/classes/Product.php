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
                "brand_id" => 2,
                "name" => "Samsung Galaxy",
                "description" => "Samsung Galaxy Mobile Description",
                "price" => 25000,
                "image" => 'p1.jpg'
            ],
            1 => [
                "id" => 2,
                "category_id" => 1,
                "brand_id" => 1,
                "name" => "Sony Experia",
                "description" => "description",
                "price" => 32000,
                "image" => 'p2.jpg'
            ],
            2 => [
                "id" => 3,
                "category_id" => 2,
                "brand_id" => 4,
                "name" => "Fashionable T-Shirt",
                "description" => "Fashionable T-Shirt Description",
                "price" => 600,
                "image" => 'p3.jpg'
            ],
            3 => [
                "id" => 4,
                "category_id" => 3,
                "brand_id" => 5,
                "name" => "Fashionable Saree",
                "description" => "Fashionable Saree Description",
                "price" => 5000,
                "image" => 'p4.jpg'
            ],
            4 => [
                "id" => 5,
                "category_id" => 3,
                "brand_id" => 6,
                "name" => "Fashionable Baby Dress",
                "description" => "Fashionable Baby Dress Description",
                "price" => 1200,
                "image" => 'p5.jpg'
            ],
            5 => [
                "id" => 6,
                "category_id" => 3,
                "brand_id" => 5,
                "name" => "Fashionable Salwar Suit",
                "description" => "Fashionable Salwar Suit Description",
                "price" => 3500,
                "image" => 'p7.jpg'
            ],
            6 => [
                "id" => 7,
                "category_id" => 4,
                "brand_id" => 7,
                "name" => "Tasty Drink",
                "description" => "Tasty Drink Description",
                "price" => 120,
                "image" => 'p8.jpg'
            ],
            7 => [
                "id" => 8,
                "category_id" => 2,
                "brand_id" => 3,
                "name" => "Fashionable Men's Suit",
                "description" => "Fashionable Men's Suit Description",
                "price" => 11990,
                "image" => 'p6.jpg'
            ],
            8 => [
                "id" => 9,
                "category_id" => 4,
                "brand_id" => 8,
                "name" => "Tasty Pizza",
                "description" => "Tasty Pizza Description",
                "price" => 780,
                "image" => 'p9.jpg'
            ],
            9 => [
                "id" => 10,
                "category_id" => 4,
                "brand_id" => 9,
                "name" => "Tasty Burger",
                "description" => "Tasty Burger Description",
                "price" => 320,
                "image" => 'p10.jpg'
            ],
            10 => [
                "id" => 11,
                "category_id" => 2,
                "brand_id" => 4,
                "name" => "Baby Boy Dress",
                "description" => "Baby Boy Dress Description",
                "price" => 560,
                "image" => 'p11.jpg'
            ],
            11 => [
                "id" => 12,
                "category_id" => 4,
                "brand_id" => 9,
                "name" => "Pastry",
                "description" => "Pastry Description",
                "price" => 130,
                "image" => 'p12.jpg'
            ],
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
    public function getProductsByCategory($id){
        foreach ($this->products as $product){
            if($product['category_id'] == $id){
                array_push($this->data, $product);
            }
        }
        return $this->data;
    }
    public function getProductsByBrand($id){
        foreach ($this->products as $product){
            if($product['brand_id'] == $id){
                array_push($this->data, $product);
            }
        }
        return $this->data;
    }
}