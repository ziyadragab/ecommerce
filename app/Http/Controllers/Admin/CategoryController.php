<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryInterface;
    public function __construct(CategoryInterface $category)
    {
        $this->categoryInterface = $category;
    }

    public function index()
    {
        return $this->categoryInterface->index();
    }
    public function create()
    {
        return $this->categoryInterface->create();
    }
    public function store(StoreCategoryRequest $request)
    {
        return $this->categoryInterface->store($request);
    }
    public function edit($category)
    {
        return $this->categoryInterface->edit($category);
    }
    public function update($category, UpdateCategoryRequest $request)
    {
        return $this->categoryInterface->update($category, $request);
    }
    public function delete($category)
    {
        return $this->categoryInterface->delete($category);
    }
}
