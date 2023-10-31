<?php

namespace App\Http\Controllers\EndUser;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\CartInterface;
use App\Http\Requests\EndUser\CartRequest;
use App\Models\Cart;

class CartController extends Controller
{
    private $cartInterface;
    public function __construct(CartInterface $cart)
    {
        $this->cartInterface=$cart;
    }
    public function add (CartRequest $request)
    {
     return $this->cartInterface->add($request);
    }
    public function show(){
        return $this->cartInterface->show();
    }
    public function delete(Cart $cart){
        return $this->cartInterface->delete($cart);
    }
}
