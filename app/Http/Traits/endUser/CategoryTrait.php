<?php
namespace App\Http\Traits\endUser;

use App\Models\Category;

trait CategoryTrait{
     public function getCategories($count){
        return Category::inRandomOrder()->limit($count)->with('products')->get();
     }
}




?>
