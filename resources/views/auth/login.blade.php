<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from Opectrade.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:02:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login to your account - Opectrade Trading Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ URL('assets/img/favicon.png') }}" sizes="32x32">
    <link href="{{ asset('assets/account/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/js/sweetalert/sweetalert.css') }}">
    <script src="{{ asset('assets/dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/global.js') }}"></script>

    <!-- chatway Live Chat script -->
    <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=hwvnCnpOedP5"></script>
</head>

</head>

<body class="h-100" style="background: transparent rgba(255, 255, 255, 0), url('assets/img/bg2.jpg');">
    <div class="authincation h-100" style="background: transparent url('assets/img/bg2.jpg');">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">

                                <a href="/"><img src="{{ asset('assets/img/logo-footer.png') }}" alt=""
                                        style="display: block; width: 30%; margin: 30px auto 0 auto;"></a>
                                <div class="auth-form">
                                    <form action="{{ route('user.login') }}"
                                        class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST">
                                        @csrf

                                        <h4 class="text-center mb-4">Sign in</h4>

                                        @if (!empty($noMatch))
                                        <p class="text-danger" style="text-align: center">{{ $noMatch }}</p>
                                        @endif

                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                        <div class=" wrap-input100 form-group validate-input m-b-16"
                                            data-validate="Please enter email">
                                            <input type="text" class="form-control input100" placeholder="Email"
                                                required name="email" value="{{ old('email') }}">
                                            <span class="focus-input100"></span>
                                        </div>

                                        @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                        <div class="form-group wrap-input100 validate-input"
                                            data-validate="Please enter password">
                                            <input type="password" class="form-control input100" placeholder="Password"
                                                name="password" required>
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="text-center container-login100-form-btn">
                                            <button type="submit" class="btn btn-primary btn-block login100-form-btn"
                                                id="submit">Sign Me In</button>
                                        </div>

                                    </form>
                                    <hr>
                                    <div class="text-left p-t-13 p-b-23">
                                        <span class="txt1">
                                            Forgot
                                        </span>

                                        <a href="{{ route('user.pages.view', ['forgot-password']) }}"
                                            class="txt2 text-info">
                                            Password?
                                        </a>
                                    </div>
                                    <div class="new-account mt-3">
                                        <p>Don't have membership yet? <a class="text-primary" href="register">Sign
                                                up</a></p>
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
    <!-- Required vendors -->
    <script src="{{ asset('assets/account/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('asset/account/js/custom.min.js') }}"></script>
    <script src="{{ asset('/assets/account/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/asset/js/main.js') }}"></script>
    <script src="../../widget-v4.tidiochat.com/1_137_1/static/js/render.d653de6259cab871576f.js" async></script>
</body>




<!-- Mirrored from Opectrade.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:02:17 GMT -->

</html>