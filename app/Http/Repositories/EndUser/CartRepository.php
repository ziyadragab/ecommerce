<?php
namespace App\Http\Repositories\EndUser;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Http\Interfaces\EndUser\CartInterface;

class CartRepository implements CartInterface{

    public function add($request)
    {
        if (Auth::check()) {
        Cart::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
        ]);
        toast('This Product Was Added To Your Cart', 'success');
        return back();
    }
    else {
       alert()->error('Error', 'You Must To Be Logined First!');
       return back();
      }
    }

    public function show()
    {
        if (Auth::check()) {
            $carts=Cart::with('product')->get();
            return view('EndUser.pages.cart',compact('carts'));
        } else {
           return back();
        }
    }
    
    public function delete($cart)
    {
        $cart->delete();
        toast('Cart Deleted Successfully','success');
        return back();
    }
}


?>
