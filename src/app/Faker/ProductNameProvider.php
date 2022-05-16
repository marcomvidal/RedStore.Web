<?php

namespace App\Faker;

use Faker\Provider\Base;

class ProductNameProvider extends Base
{
    protected static $names = [
        'shirt',
        't-shirt',
        'pants',
        'shorts',
        'belt',
        'hat',
        'jacket',
        'socks',
        'shoes',
        'tie',
        'cap',
        'scarf',
        'blouse',
        'gloves',
        'dress'
    ];

    public function productName()
    {
        return static::randomElement(static::$names);
    }
}
