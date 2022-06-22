<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductsService
{
    public function getPaginated()
    {
        return Product::paginate(6);
    }

    public function getBySku($sku)
    {
        return Product::where('sku', $sku)->first();
    }
}