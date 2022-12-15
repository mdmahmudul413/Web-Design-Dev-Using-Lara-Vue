<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProducts(){
        return [
            0 => [
                'id' => 1,
                'name' => 'Product One',
                'description' => 'Product One Description',
                'image' => '1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'Product Two',
                'description' => 'Product Two Description',
                'image' => '2.jpg'
            ],
            2 => [
                'id' => 3,
                'name' => 'Product Three',
                'description' => 'Product Three Description',
                'image' => '3.jpg'
            ],
            3 => [
                'id' => 4,
                'name' => 'Product Four',
                'description' => 'Product Four Description',
                'image' => '4.jpg'
            ]
        ];
    }
}
