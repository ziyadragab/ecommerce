<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\ShopInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $shopInterface;
    public function __construct(ShopInterface $shopInterface){
      $this->shopInterface=$shopInterface;
    }
    public function show(){
          return $this->shopInterface->show();
    }
    public function filterByColor(Request $request){
        return $this->shopInterface->filterByColor($request);
  }
  public function filterBySize(Request $request){
    return $this->shopInterface->filterBySize($request);
}
}
