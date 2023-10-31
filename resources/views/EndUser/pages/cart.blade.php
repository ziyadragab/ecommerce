@extends('EndUser.includes.master')
@section('content')
<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse (auth()->user()->carts as $cart)
                    <tr>
                        <td class="align-middle">
                            <img src="{{ $cart->product->image }}" alt="" style="width: 50px;">
                            {{ $cart->product->name }}
                        </td>
                        <td class="align-middle">
                            <span id="price_{{ $cart->id }}" data-price="{{ $cart->product->price }}">${{ $cart->product->price }}</span>
                        </td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" data-cart-id="{{ $cart->id }}">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" id="quantity_{{ $cart->id }}" class="form-control form-control-sm bg-secondary border-0 text-center" value="1" data-price="{{ $cart->product->price }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus" data-cart-id="{{ $cart->id }}">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <span id="total_{{ $cart->id }}"></span>
                        </td>
                        <td class="align-middle">

                            <form action="{{ route('cart.delete',$cart) }}" method="post">
                                @csrf
                                @method('delete')
                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        </form>
                        </td>
                    </tr>


                </tbody>
                @empty
                @endforelse

            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="{{route('order.create')}}" method="get">
                @csrf
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6 id="subtotal"></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium" id="shippingPrice">$20</h6>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5 id="total"></h5>
                                <input type="hidden" name="total" id="hiddenTotal" value="">
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Cart End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script src="{{ asset('assetEndUser/js/cart.js') }}"></script>
@endsection
