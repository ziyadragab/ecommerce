@extends('EndUser.includes.master')
@section('content')

    <!-- Checkout Start -->
    <form action="{{ route('order.store') }}" method="post" class="container-fluid">
        @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                <div class="bg-light p-3 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="first_name">First Name</label>
                            <input name="first_name" id="first_name" class="form-control" type="text" placeholder="John" value="{{ old('first_name') }}">
                            @error('first_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="last_name">Last Name</label>
                            <input name="last_name" id="last_name" class="form-control" type="text" placeholder="Doe" value="{{ old('last_name') }}">
                            @error('last_name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">E-mail</label>
                            <input class="form-control" name="email" id="email" type="email" placeholder="example@email.com" value="{{ old('email') }}">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Mobile No</label>
                            <input class="form-control" name="phone" id="phone" type="text" placeholder="+123 456 789" value="{{ old('phone') }}">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="address_one">Address Line 1</label>
                            <input class="form-control" name="address_one" id="address_one" type="text" placeholder="123 Street" value="{{ old('address_one') }}">
                            @error('address_one')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="address_two">Address Line 2</label>
                            <input class="form-control" type="text" name="address_two" id="address_two" placeholder="123 Street" value="{{ old('address_two') }}">
                            @error('address_two')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="country">Country</label>
                            <input class="form-control" type="text" name="country" id="country" placeholder="Egypt" value="{{ old('country') }}">
                            @error('country')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="city">City</label>
                            <input class="form-control" name="city" id="city" type="text" placeholder="New York" value="{{ old('city') }}">
                            @error('city')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="zip_code">ZIP Code</label>
                            <input class="form-control" name="zip_code" id="zip_code" type="number" placeholder="123" value="{{ old('zip_code') }}">
                            @error('zip_code')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-3 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        @foreach ($carts as $cart)
                        <div class="d-flex justify-content-between">
                            <p>Product Name: {{ $cart->product->name }}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>The Total Price:</h5>
                            <h5>{{ $total }}</h5>
                            <input type="hidden" name="total" value="{{ $total }}">
                        </div>
                        <div class="bg-light p-3">
                            <button class="btn btn-block btn-primary font-weight-bold py-3">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="mb-5"></div>
            </div>
        </div>
    </form>


    <!-- Checkout End -->
    <script src="{{ asset('assetEndUser/js/cart.js') }}"></script>
@endsection

