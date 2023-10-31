<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('EndUser/includes/head')
        <title>Ecommerce App</title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row bg-secondary py-1 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">

                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My
                                Account</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                @guest
                                <a href="{{ route('endUser.loginForm') }}" class="dropdown-item" type="button">Sign in </a>

                                <a href="{{ route('endUser.registerForm') }}" class="dropdown-item"> Sign Up </a>
                                @endguest

                                @auth
                                <form action="{{ route('endUser.logout') }}" method="POST">
                                    @csrf
                                    @method('delete')
                                   <button class="dropdown-item">Sign Out</button>
                            </form>
                                @endauth


                            </div>
                        </div>


                    </div>
                    <div class="d-inline-flex align-items-center d-block d-lg-none">
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-heart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                <div class="col-lg-4">
                    <a href="" class="text-decoration-none">
                        <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                        <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                    </a>
                </div>
                <div class="col-lg-4 col-6 text-left">
                    <form action="">
                        <div class="input-group">
                      </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid bg-dark mb-30">
            <div class="row px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a class="btn d-flex align-items-center justify-content-between bg-primary w-100"
                        data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                        <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                        <i class="fa fa-angle-down text-dark"></i>
                    </a>
                    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                        id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                        @php
                            $categories=App\Models\Category::get('name')??null;
                        @endphp
                        @forelse ($categories as $category )
                        <div class="navbar-nav w-100">
                            <a href="" class="nav-item nav-link">{{ $category->name }}</a>
                        </div>
                        @empty
                        No Category Found
                        @endforelse

                    </nav>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                        <a href="" class="text-decoration-none d-block d-lg-none">
                            <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                            <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ route('endUser.index') }}" class="nav-item nav-link active">Home</a>
                                <a href="{{ route('shop.show') }}" class="nav-item nav-link">Shop</a>

                                <div class="nav-item dropdown">
                                    <a href="{{ route('cart.show') }}" class="nav-link dropdown-toggle" >Shoping Cart </a>
                                </div>

                                <a href="{{route('contact.create')}}" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                                <div class="cart-notification-container" style="display: flex; align-items: center;">
                                    <div class="cart-icon ml-auto py-0 d-none d-lg-block">
                                        <a href="{{ route('cart.show') }}" class="btn px-0 ml-3">
                                            <i class="fas fa-shopping-cart text-primary"></i>
                                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">
                                                @auth
                                                    {{ auth()->user()->carts()->count() }}
                                                @else
                                                    0
                                                @endauth
                                            </span>
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="btn px-0 ml-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bell text-primary"></i>
                                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px; position: relative; background-color: red; color: white; font-size: 12px; font-weight: bold; border-radius: 50%;">
                                                @auth
                                                    {{ auth()->user()->unreadNotifications->count() ?? 0 }}
                                                @else
                                                    0
                                                @endauth
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            @auth
                                                @if (auth()->user()->unreadNotifications->count() > 0)
                                                    @foreach (auth()->user()->unreadNotifications as $notification)
                                                        <a class="dropdown-item" href="#">{{ $notification->data['title'] }}</a>
                                                    @endforeach
                                                @else
                                                    <a class="dropdown-item" href="#">No Notification</a>
                                                @endif
                                            @else
                                                <a class="dropdown-item" href="#">No Notification</a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        @yield('content')

        @include('EndUser/includes/footer')
    </body>

</html>
