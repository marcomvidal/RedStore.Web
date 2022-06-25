<?php

namespace App\Http\Services;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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

    public function getCategories()
    {
        return array_map(
            fn ($picture) => str_replace('.png', '', $picture),
            Storage::disk('pictures')->allFiles()
        );
    }

    public function save(ProductRequest $request)
    {
        $product = new Product($request->all());
        
        return $product->save();
    }
}