<?php
namespace App\Http\Interfaces\Admin;

interface AdInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($ad);
    public function update($ad,$request);
    public function delete($ad);
}
