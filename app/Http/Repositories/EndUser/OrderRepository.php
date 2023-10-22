<?php
namespace App\Http\Repositories\EndUser;

use App\Models\Cart;
use App\Http\Interfaces\EndUser\OrderInterface;
use App\Models\Order;

class OrderRepository implements OrderInterface{

    public function create($request)
    {
     $total=$request->total;
     $carts=Cart::where('user_id',auth()->id())->with('product')->get();
     return view ('EndUser.pages.checkout',compact(['total','carts']));

    }
    public function store($request)
    {
       Order::create([
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address_one'=> $request->address_one,
        'address_two'=>$request->address_two??null,
        'country'=>$request->country,
        'city'=>$request->city,
        'zip_code'=>$request->zip_code,
        'user_id'=>auth()->id(),
        'total_price'=>$request->total
       ]);
       toast('Order Created Successfully ','success');
       return redirect()->route('endUser.index');
    }
}


?>
