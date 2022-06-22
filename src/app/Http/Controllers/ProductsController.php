<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductsService;

class ProductsController extends Controller
{
    private ProductsService $service;

    public function __construct(ProductsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $products = $this->service->getPaginated();

        return view('products.index', ['products' => $products]);
    }

    public function show($sku)
    {
        $product = $this->service->getBySku($sku);

        return view('products.show', ['product' => $product]);
    }
}
