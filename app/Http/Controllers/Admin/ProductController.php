<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    private $productInterface;
    public function __construct(ProductInterface $product)
    {
        $this->productInterface = $product;
    }

    public function index()
    {
        return $this->productInterface->index();
    }
    public function create()
    {
        return $this->productInterface->create();
    }
    public function store(StoreProductRequest $request)
    {
        return $this->productInterface->store($request);
    }
    public function edit(Product $product)
    {
        return $this->productInterface->edit($product);
    }
    public function update(Product $product, UpdateProductRequest $request)
    {
        return $this->productInterface->update($product, $request);
    }
    public function delete(Product $product)
    {
        return $this->productInterface->delete($product);
    }
}
