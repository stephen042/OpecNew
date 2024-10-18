<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from Opectrade.com/account/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:01:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Create an account - Opectrade Trading Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ URL('assets/img/favicon.png') }}" sizes="32x32">
    <link href="{{ asset('assets/account/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/account/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('assets/account/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/account/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/cdn.lineicons.com/2.0/LineIcons.html') }}" rel="stylesheet">
    <link href="{{ asset('assets/account/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ 'assets/dashboard/js/sweetalert/sweetalert.css' }}">
    <script src="{{ asset('assets/dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/global.js') }}"></script>

    <!-- chatway Live Chat script -->
    <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=hwvnCnpOedP5"></script>
</head>
</head>

<body class="h-100" style="background: transparent url('assets/img/bg2.jpg');">
    <div class="authincation h-100" style="background: transparent url('assets/img/bg2.jpg');">
        <div class="container h-100" style="margin-top: 40px;">

            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">

                                <div class="auth-form">
                                    <a href="/"><img src="{{ asset('assets/img/logo-footer.png') }}" alt=""
                                            style="display: block; width: 30%; margin: 10px auto;"></a>
                                    <hr>

                                    <form action="{{ route('user.register.post') }}"
                                        class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST">
                                        @csrf

                                        <h4 class="text-center mb-4">Sign up</h4>
                                        <hr>

                                        <div class="basic-form">

                                            <div class="form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Please enter username">
                                                <input type="text" value="{{ old('username') }}"
                                                    class="form-control input100" placeholder="Username"
                                                    name="username">
                                                <span class="focus-input100"></span>
                                                @error('username')
                                                <p class="">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Please enter email">
                                                <input type="text" class="form-control input100"
                                                    value="{{ old('email') }}" placeholder="Enter Your Email"
                                                    name="email">
                                                <span class="focus-input100"></span>
                                                @error('email')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class=" form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Please enter firstname">
                                                <input class="form-control input100" type="text"
                                                    value="{{ old('firstname') }}" name="firstname"
                                                    placeholder="Firstname">
                                                <span class="focus-input100"></span>
                                                @error('firstname')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>


                                            <div class="form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Please enter lastname">
                                                <input class="form-control input100" type="text"
                                                    value="{{ old('lastname') }}" name="lastname"
                                                    placeholder="Lastname">
                                                <span class="focus-input100"></span>
                                                @error('lastname')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Please enter phone">
                                                <input class="form-control input100" type="tell"
                                                    value="{{ old('phone') }}" name="phone" placeholder="Phone">
                                                <span class="focus-input100"></span>
                                                @error('phone')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Please enter pin">
                                                <input class="form-control input100" type="number"
                                                    value="{{ old('pin') }}" name="pin" placeholder="Financial PIN">
                                                <span class="focus-input100"></span>
                                                @error('pin')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Country">
                                                <input class="form-control input100" type="text"
                                                    value="{{ old('country') }}" name="country" placeholder="Country">
                                                <span class="focus-input100"></span>
                                                @error('country')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="form-group  wrap-input100 m-b-16">
                                                <input class=" form-control input100" type="text"
                                                    value="{{ !empty($ref) ? $ref : old('referral') }}" name="referral"
                                                    placeholder="Referral ID" readonly>
                                                <span class="focus-input100"></span>
                                                @error('referral')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="form-group wrap-input100 validate-input m-b-16"
                                                data-validate="Please enter password">
                                                <input class="form-control input100" type="password"
                                                    value="{{ old('password') }}" name="password"
                                                    placeholder="Password">
                                                <span class="focus-input100"></span>
                                                @error('password')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="form-group wrap-input100 validate-input"
                                                data-validate="Please enter password">
                                                <input class="form-control input100" type="password"
                                                    value="{{ old('password_confirmation') }}"
                                                    name="password_confirmation" placeholder="Confirm Password">
                                                <span class="focus-input100"></span>
                                                @error('password_confirmation')
                                                <p class="text-danger">{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="container-login100-form-btn text-center mt-4">
                                                <button class="login100-form-btn btn btn-primary btn-block"
                                                    type="submit" id="submit">
                                                    Sign Up
                                                </button>
                                            </div>
                                    </form>
                                </div>
                                <div class="new-account mt-3">
                                    <p>I already have membership <a class="text-primary" href="login">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--**********************************
 Scripts
***********************************-->
    <!--  vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="{{ asset('assets/asset/js/main.js') }}"></script>
    <script src="../../widget-v4.tidiochat.com/1_137_1/static/js/render.d653de6259cab871576f.js" async></script>
    <!-- GetButton.io widget -->
</body>


<!-- Mirrored from Opectrade.com/account/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:01:18 GMT -->

</html>