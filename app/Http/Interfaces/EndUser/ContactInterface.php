<?php

namespace App\Http\Interfaces\EndUser;

interface ContactInterface{
    public function create();
    public function store($request);
    public function index();
    public function delete($contact);



}



?>
