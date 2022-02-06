<?php


namespace App\classes;


class Product
{
    protected $products;

    public function getAllProduct()

    {
        return [
            0 =>[
                'title' => 'Blajer',
                'description' => 'Winter Product',
                'category' => 'Shiter Poshak',
                'brand' => 'Gentle park',
                'price' => 'Tk. 5000',
                'image'=> '0.jpg'
            ],
            1 =>[
                'title' => 'T shirt',
                'description' => 'Half Sleev',
                'category' => 'Shiter Poshak',
                'brand' => 'Dorjibari',
                'price' => 'Tk. 6000',
                'image'=> '1.jpg'
            ],
            2 =>[
                'title' => 'Shirt',
                'description' => 'Full Hata',
                'category' => 'Casual',
                'brand' => 'Easy',
                'price' => 'Tk. 1000',
                'image'=> '2.jpg'
            ],
            3 =>[
                'title' => 'Pant',
                'description' => 'Full Pant',
                'category' => 'Regular',
                'brand' => 'Grameen Uniqlo',
                'price' => 'Tk. 2000',
                'image'=> '3.jpg'
            ],
            4 =>[
                'title' => 'Pant Formal',
                'description' => 'Formal Pant',
                'category' => 'Regular Pant',
                'brand' => 'Dorjibari',
                'price' => 'Tk. 4000',
                'image'=> '4.jpg'
            ],
            5 =>[
                'title' => 'Shirt Formal',
                'description' => 'Shirt cotton',
                'category' => 'Cotton Shirt',
                'brand' => 'Easy',
                'price' => 'Tk. 1500',
                'image'=> '5.jpg'
            ],
            6 =>[
                'title' => 'Shoe',
                'description' => 'Winter Product',
                'category' => 'Shoe Formal',
                'brand' => 'Apex',
                'price' => 'Tk. 7000',
                'image'=> '6.jpg'
            ],
            7 =>[
                'title' => 'Belt',
                'description' => 'Belt Formal',
                'category' => 'Casuaal',
                'brand' => 'Bata',
                'price' => 'Tk. 900',
                'image'=> '7.jpg'
            ],
            8 =>[
                'title' => 'Shock',
                'description' => 'Winter Product',
                'category' => 'Moja',
                'brand' => 'Walker',
                'price' => 'Tk. 1500',
                'image'=> '8.jpg'
            ],
            9 =>[
                'title' => 'Wacth',
                'description' => 'Formal Wacth',
                'category' => 'F0rmal',
                'brand' => 'Casio',
                'price' => 'Tk. 5000',
                'image'=> '9.jpg'
            ],
        ];
    }
    public function getSingleProduct()
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            return $this->result;
        }

    }

}