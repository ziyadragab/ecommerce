<?php
namespace App\Http\Traits\endUser;

use App\Models\Product;

trait ProductTrait{
     public function getProducts($count){
        return Product::inRandomOrder()->limit($count)->with('colors','sizes');
     }
}




?>
