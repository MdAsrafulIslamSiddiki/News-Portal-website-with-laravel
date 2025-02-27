<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>news 24 - admin login</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/favicon.png') }}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.min.css') }}">

</head>


<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <a href="{{ route('homepage') }}" target="__blank" class="site-logo"><img src="{{ asset('backend/assets/images/logo/logo.png') }}" alt="logo"></a>
                </div>
                {{-- <div class="col-sm-8">
                    <div class="singin-header-btn">
                        <p>Not a member?</p>
                        <a href="sign-up.html" class="axil-btn btn-bg-secondary sign-up-btn">Sign Up Now</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--9">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        
                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('backend/assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('backend/assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/js.cookie.js') }}"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="{{ asset('backend/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendor/waypoints.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

</body>

</html>


