<?php


namespace App\classes;
class Blog
{
    protected $blogs;

    public function getAllBlog()

    {
        return [
            0 =>[
                'title' => 'A new Blog',
                'description' => 'Blog Description',
                'author' => 'Tapu',
                'image'=> 's3.jpg'
            ],
            1 =>[
                'title' => 'Another Blog',
                'description' => 'Blog Description',
                'author' => 'rahat',
                'image'=> 's4.jpg'
            ],
            2 =>[
                'title' => 'Number 2 Blog',
                'description' => 'Blog Description',
                'author' => 'Shahun',
                'image'=> 's5.jpg'
            ],
        ];
    }
}