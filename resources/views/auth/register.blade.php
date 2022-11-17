@extends('layouts.front')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Login 04</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
        <section class="ftco-section">
            <div class="container">
                {{-- <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #04</h2>
                </div>
            </div> --}}
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="img" style="background-image: url(images/bg-register.jpg);">
                            </div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100 text-center">
                                        <h3 class="mb-4 fw-bold"> Join Us ! </h3>
                                    </div>
                                </div>
                                <form class="signin-form" action="{{ route('registrasi') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Name</label>
                                        <input type="text" name ="name" class="form-control" placeholder="Name" required>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="notelp" >Phone Number</label>
                                        <input type="text" name ="notelp" class="form-control" placeholder="Phone Number" required>
                                        @if ($errors->has('notelp'))
                                            <span class="text-danger">{{ $errors->first('notelp') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="email">Email</label>
                                        <input type="email" name ="email" class="form-control" placeholder="Email" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" name ="password" class="form-control" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"
                                            class="form-control btn btn-primary rounded submit px-3">Register</button>
                                    </div>
                                    {{-- <div class="form-group d-md-flex">
                                        <div class="w-50 text-left">
                                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            <a href="#">Forgot Password</a>
                                        </div>
                                    </div> --}}
                                </form>
                                <p class="text-center">Have a Account? <a href="/login">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>

    </html>
@endsection
