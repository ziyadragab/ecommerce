<?php

namespace App\Http\Interfaces\EndUser;

interface OrderInterface{
    public function create($request);
    public function store($request);


}



?>
