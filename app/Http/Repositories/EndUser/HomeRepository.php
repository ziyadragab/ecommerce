<?php

namespace App\Http\Repositories\EndUser;

use App\Models\Cart;
use App\Http\Traits\endUser\AdTrait;
use App\Http\Traits\endUser\ProductTrait;
use App\Http\Traits\endUser\SettingTrait;
use App\Http\Traits\endUser\CategoryTrait;
use App\Http\Interfaces\EndUser\HomeInterface;

class HomeRepository implements HomeInterface{
    use AdTrait,CategoryTrait,ProductTrait,SettingTrait;
     public function index()
     {
        $ads=$this->getAds(1);
        $categories=$this->getCategories(12);
        $products=$this->getProducts(8);
        $carts = Cart::where('user_id', auth()->id())->get();

        return view('EndUser.index',compact(['ads','categories','products','carts']));
     }

}

?>


