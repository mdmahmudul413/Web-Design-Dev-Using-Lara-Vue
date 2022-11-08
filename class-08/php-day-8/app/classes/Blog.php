<?php

namespace App\classes;

class Blog {
    public $blog = [];

    public function getAllBlogs()
    {
//        preparing blog array

        $this->blog = [
            0 => [
                "id" => '1',
                "title" => 'Blog Title One',
                "description" => 'This is Blog One Description',
                "image" => '1.jpg',
            ],
            1 => [
                "id" => '2',
                "title" => 'Blog Title Two',
                "description" => 'This is Blog Two Description',
                "image" => '2.jpg',
            ],
            2 => [
                "id" => '3',
                "title" => 'Blog Title Three',
                "description" => 'This is Blog Three Description',
                "image" => '3.jpg',
            ],
            3 => [
                "id" => '4',
                "title" => 'Blog Title Four',
                "description" => 'This is Blog Four Description',
                "image" => '4.jpg',
            ],
        ];

        return $this->blog;
    }
}