<?php

namespace App\Http\Interfaces\EndUser;

interface OrderInterface{
    public function create($request);
    public function store($request);
    public function index();
    public function changeStatus($order);
    public function delete($order);



}



?>
