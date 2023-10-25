@extends('EndUser.includes.master')

@section('content')
<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-4">
            <!-- Color Start -->
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by color</span></h5>
            <div class="bg-light p-4 mb-30">
                <form method="get" action="{{ route('shop.filterByColor') }}">
                    @csrf
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input"   id="color-all">
                        <label class="custom-control-label" for="color-all">All Color</label>
                        <span class="badge border font-weight-normal">{{$colors->count()}}</span>
                    </div>
                    @foreach($colors as $color)
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input color-radio" name="color" value="{{ $color->name }}" id="color-{{$color->id}}">
                        <label class="custom-control-label" for="color-{{$color->id}}">{{$color->name}}</label>
                        <span class="badge border font-weight-normal">{{ $color->products->count() }}</span>
                    </div>
                    @endforeach

                    <button class="btn btn-outline-primary" style="border-radius: 10px;">Filter By Color</button>                </form>
                </form>
                </div>

            <!-- Color End -->

            <!-- Size Start -->
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by size</span></h5>
            <div class="bg-light p-4 mb-30">
                <form method="get" action="{{ route('shop.filterBySize') }}">
                    @csrf
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input" name="size"  id="size-all">
                        <label class="custom-control-label" for="size-all">All Size</label>
                        <span class="badge border font-weight-normal">{{ $sizes->count() }}</span>
                    </div>
                    @foreach($sizes as $size)
                    <div class="custom-control custom-radio d-flex align-items-center justify-content-between mb-3">
                        <input type="radio" class="custom-control-input size-radio" name="size" value="{{$size->name}}" id="size-{{$size->id}}">
                        <label class="custom-control-label" for="size-{{$size->id}}">{{$size->name}}</label>
                        <span class="badge border font-weight-normal">{{ $size->products->count() }}</span>
                    </div>
                    @endforeach
                    <button class="btn btn-outline-primary" style="border-radius: 10px;">Filter By Size</button>                </form>
            </div>
            <!-- Size End -->
        </div>
        <!-- Shop Sidebar End -->

        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3" id="product-container">
                @foreach ($products->sortBy('price') as $product)
                <div class="col-lg-4 col-md-6 col-sm-6 pb-1 product-item" data-color="{{$product->color_id}}" data-size="{{$product->size_id}}">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{$product->image}}" alt="">
                            <div class="product-action">
                                <form action="{{ route('cart.add') }}" method="get">
                                    @csrf
                                    <div class="product-action">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">{{ $product->name }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>${{$product->price}}</h5>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $products->previousPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                                    Previous
                                </a>
                            </li>
                            <li class="page-item {{ $products->nextPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                                    Next
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->

<!-- Back to Top -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection



