@extends('EndUser.includes.master')
@section('content')

    <!-- Checkout Start -->
    <div class="container-fluid">
        <form action="{{ route('order.store') }}" method="post">
          @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">

                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input name="first_name" class="form-control" type="text" placeholder="John" value="{{old('first_name')}}">
                        </div>
                        @error('first_name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input name="last_name" class="form-control" type="text" placeholder="Doe" value="{{old('last_name')}}">

                        </div>
                            @error('last_name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="email" type="text" placeholder="example@email.com" value="{{old('email')}}">
                        </div>
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" name="phone" type="text" placeholder="+123 456 789" value="{{old('phone')}}">
                        </div>
                        @error('phone')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" name="address_one" type="text" placeholder="123 Street" value="{{old('address_one')}}">
                        </div>
                         @error('address_one')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" name="address_two" placeholder="123 Street" value="{{old('address_two')}}">
                        </div>
                         @error('address_two')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <input class="form-control" type="text" name="country" placeholder="egypt" value="{{old('country')}}">

                        </div>
                         @error('country')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" name="city" type="text" placeholder="New York" value="{{old('city')}}">
                        </div>
                        @error('city')
                        <p class="text-danger">{{$message}}</p>
                        @enderror


                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" name="zip_code" type="text" placeholder="123" value="{{old('zip_code')}}">
                        </div>
                        @error('zip_code')
                        <p class="text-danger">{{$message}}</p>
                        @enderror


                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                      @foreach ($carts as $cart )

                        <div class="d-flex justify-content-between">
                            <p>Product Name :{{$cart->product->name}}</p>
                        </div>
                      @endforeach
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>The Total Price :</h5>
                            <h5 >{{$total}}</h5>
                            <input type="hidden" name="total" value="{{ $total }}">
                          </div>
                          <div class="bg-light p-30">
                            <button class="btn btn-block btn-primary font-weight-bold py-3">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="mb-5">

                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Checkout End -->
    <script src="{{ asset('assetEndUser/js/cart.js') }}"></script>
@endsection

