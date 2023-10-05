<!DOCTYPE html>
<html lang="en">

    <head>
        <!--=====================================
                    META-TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <title> Login Form</title>


        <!-- FOR FONTAWESOME -->
        <link rel="stylesheet" href="{{ asset('assetEndUser/css/font-awesome/fontawesome.css') }}">

        <!-- FOR BOOTSTRAP -->
        <link rel="stylesheet" href="{{asset ('assetEndUser/css/bootstrap.min.css') }}">

        <!-- FOR COMMON STYLE -->
        <link rel="stylesheet" href="{{asset ('assetEndUser/css/main.css') }}">

        <!-- FOR USER FORM PAGE STYLE -->

        <link rel="stylesheet" href="{{ asset('assetEndUser/css/user-form.css') }}">

    </head>

    <title>Login Form</title>

    <body>




        <div class="container" id="login-tab">
            <div class="row d-flex justify-content-center align-items-center vh-100">
                <div class="row w-50 mt-3">
                    <form method="POST" action="{{ route('endUser.login') }}">
                        <div class="user-form-title">
                            <h2>Login Form</h2>
                            <p>Use credentials to access your account.</p>
                        </div>
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                    <small class="form-alert">Please follow this example - ziyad@ragab.com</small>
                                </div>
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="pass"
                                        placeholder="Password">
                                    <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button>
                                    <small class="form-alert">Password must be 6 characters</small>
                                </div>
                            </div>
                            @error('password')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-inline">
                                        <i class="fas fa-unlock"></i>
                                        <span>Enter your account</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="user-form-direction">
                            <p>Don't have an account? Click here <a href="{{ route('endUser.registerForm') }}"><span>( sign up )</span></a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('sweetalert::alert')
        @stack('js')


    </body>

</html>
