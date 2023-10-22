<?php

namespace App\Http\Interfaces\EndUser;

interface CartInterface{
    public function add($request);
    public function show();
    public function delete($cart);



}



?>
