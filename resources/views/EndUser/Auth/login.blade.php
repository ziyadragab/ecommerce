<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href=" {{asset("assetEndUser/Auth/fonts/icomoon/style.css")}} ">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{asset("assetEndUser/Auth/css/bootstrap.min.css")}} ">

    <!-- Style -->
    <link rel="stylesheet" href=" {{asset("assetEndUser/Auth/css/style.css")}}" >

    <title>Contact Form #6</title>
</head>
<body>


<div class="content">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">


                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <h3 class="heading mb-4">Let's talk about everything!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

                        <p><img src=" {{asset("assetEndUser/Auth/images/undraw-contact.svg")}} " alt="Image" class="img-fluid"></p>


                    </div>
                    <div class="col-md-6">

                        <form class="mb-5" action="{{route('endUser.login')}}" method="post" id="contactForm" name="contactForm">
                            @csrf

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="password" class="form-control" name="password" id="subject" placeholder="password">
                                </div>
                                @error('password')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <a href="{{route('endUser.registerForm')}}" style="color: blue">create new Account</a>



                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-0 py-2 px-4">Login</button>
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>

                        <div id="form-message-warning mt-4"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src=" {{asset("assetEndUser/Auth/js/jquery-3.3.1.min.js")}} "></script>
<script src=" {{asset("assetEndUser/Auth/js/popper.min.js")}} "></script>
<script src=" {{asset("assetEndUser/Auth/js/bootstrap.min.js")}} "></script>
<script src=" {{asset("assetEndUser/Auth/ js/jquery.validate.min.js")}}"></script>
<script src=" {{asset("assetEndUser/Auth/js/main.js")}} "></script>

</body>
</html>
