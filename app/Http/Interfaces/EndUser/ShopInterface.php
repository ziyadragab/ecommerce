<?php

namespace App\Http\Interfaces\EndUser;

interface ShopInterface{
    public function show();
    public function filterByColor($request);
    public function filterBySize($request);




}



?>
