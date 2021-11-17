<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS FIle Included -->
@extends('link') 
</head>
<body style="margin-left: 0px; margin-top: 0px;">

    <!-- Section 1 Start Here -->
    <section class="py-5 animated-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5 col-xl-4" style="max-width: 500px;">
                    <div class="Login-Form">
                        <h3 class="text-center my-3">Login</h3>
                        <p class="text-center my-3">New to Al Sadat School? <a href="signup.php"
                                class="text-primarycolor fw-bold">Create an account</a></p>

                        <form method="get" action="{{route('user_login')}}">
                            @csrf
                            @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail')}}
                            </div>
                            @endif
                            <div class="mb-4">
                                <h6>Email</h6>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-4">
                                <h6>Password</h6>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex justify-content-center align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">Remember Me</label>
                                </div>
                                <div>
                                    <a href="#" class="text-primarycolor fw-bold">Forget Password?</a>
                                </div>
                            </div>
                            <div class="my-4">
                                <button type="submit" name="submit" class="btn">Log in</button>
                            </div>

                            <div>
                                <p class="or">Or</p>
                            </div>

                            <div class="text-center">
                                <a href="#" class="facebook-btn">
                                    <i class="fab fa-facebook"></i>
                                    Continue with Facebook
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 1 End Here -->

    <!-- JS File included -->
 @extends('jslink') 
</body>
</html>