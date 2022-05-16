<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);

        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', ['product' => $product]);
    }
}
