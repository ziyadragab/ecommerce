<?php
namespace App\Http\Interfaces\Admin;

interface ProductInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($product);
    public function update($product,$request);
    public function delete($product);

}
