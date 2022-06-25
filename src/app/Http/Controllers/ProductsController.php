<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Services\ProductsService;
use App\Models\Product;

class ProductsController extends Controller
{
    private ProductsService $service;

    public function __construct(ProductsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('products.index', [
            'products' => $this->service->getPaginated()
        ]);
    }

    public function show($sku)
    {
        return view('products.show', [
            'product' => $this->service->getBySku($sku)
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'categories' => $this->service->getCategories()
        ]);
    }

    public function store(ProductRequest $request)
    {
        $this->service->save($request);

        return redirect()->to(route('products.index'));
    }
}
