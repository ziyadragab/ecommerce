<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUser\OrderInterface;
use App\Http\Requests\EndUser\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderInterface;
    public function __construct(OrderInterface $orderInterface) {
     $this->orderInterface=$orderInterface;
    }
    public function create(Request $request){
      return $this->orderInterface->create($request);
    }
    public function store(OrderRequest $request){
        return $this->orderInterface->store($request);
      }
      public function index(){
        return $this->orderInterface->index();
      }
      public function changeStatus(Order $order){
        return $this->orderInterface->changeStatus($order);
      }
      public function delete(Order $order)
      {
        return $this->orderInterface->delete($order);

      }
}
