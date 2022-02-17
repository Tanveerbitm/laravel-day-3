<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function getAllProduct(){
        return [
            0=>[
                'id'=>1,
                'name'=>'T-Shirt',
                'price'=>'2850',
                'description'=>'description',
                'image'=>asset('/img/sh.jpg')

            ],
            1=>[
                'id'=>2,
                'name'=>'Watch',
                'price'=>'3000',
                'description'=>'description',
                'image'=>asset('/img/w.png')

            ],
            2=>[
                'id'=>3,
                'name'=>'Shoes',
                'price'=>'4050',
                'description'=>'description',
                'image'=>asset('/img/1.jpg')

            ]
        ];
    }
}
