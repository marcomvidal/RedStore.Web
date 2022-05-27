<?php

namespace App\Faker;

use Faker\Provider\Base;

class ProductNameProvider extends Base
{
    protected static $names = [
        'Apron',
        'Bathrobe',
        'Coat',
        'Dress',
        'Hoodies',
        'Pajamas',
        'Pants',
        'Raincoat',
        'Scarf',
        'Shirt',
        'Shorts',
        'Skirt',
        'Sweater',
        'Swimsuit',
        'T-Shirt',
        'Tank',
        'Tie',
        'Tracksuit',
        'Underwear',
        'Uniform',
        'Vest',
    ];

    public function productName()
    {
        return static::randomElement(static::$names);
    }
}
