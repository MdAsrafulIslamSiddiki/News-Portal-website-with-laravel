<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'news 24')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('frontend/assets/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/lib/slick/slick-theme.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- Topbar Start -->
        <div class="container-fluid d-none d-lg-block">
            <div class="row align-items-center bg-dark px-lg-5">
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-sm bg-dark p-0">
                        <ul class="navbar-nav ml-n2">
                            <li class="nav-item border-right border-secondary">
                                <a class="nav-link text-white small" href="#">Monday, January 1, 2045</a>
                            </li>
                            <li class="nav-item border-right border-secondary">
                                <a class="nav-link text-white small" href="#">Advertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white small" href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 text-right d-none d-md-block">
                    <nav class="navbar navbar-expand-sm bg-dark p-0">
                        <ul class="navbar-nav ml-auto mr-n2 social">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><small class="fab fa-twitter"></small></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><small class="fab fa-facebook-f"></small></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><small class="fab fa-linkedin-in"></small></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><small class="fab fa-instagram"></small></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><small class="fab fa-google-plus-g"></small></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"><small class="fab fa-youtube"></small></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row align-items-center bg-white py-3 px-lg-5">
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-uppercase text-deep-orange">Biz<span class="text-secondary font-weight-normal">News</span></h1>
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-white font-weight-normal">News</span></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="index.html" class="nav-item nav-link ">Breaking News</a>
                        <a href="category.html" class="nav-item nav-link">National</a>
                        <a href="single.html" class="nav-item nav-link">International</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link nav-link" data-toggle="dropdown">Politics</a>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Economy</a>
                        <a href="contact.html" class="nav-item nav-link">Sports</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Others</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Health</a>
                                <a href="#" class="dropdown-item">Education</a>
                                <a href="#" class="dropdown-item">Science & Technology</a>
                                <a href="#" class="dropdown-item">Entertainment</a>
                                <a href="#" class="dropdown-item">Environment</a>
                                <a href="#" class="dropdown-item">Agriculture</a>
                            </div>
                        </div>
                    </div>
                    <div class="input-group ml-auto d-none d-lg-flex search" style="width: 100%; max-width: 300px;">
                        <input type="text" class="form-control border-0" placeholder="Keyword">
                        <div class="input-group-append">
                            <button class="text-dark bg-deep-orange border-0 px-3"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        @yield('content')



        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Useful Links</h3>
                            <ul>
                                <li><a href="#">Pellentesque</a></li>
                                <li><a href="#">Aliquam</a></li>
                                <li><a href="#">Fusce placerat</a></li>
                                <li><a href="#">Nulla hendrerit</a></li>
                                <li><a href="#">Maecenas</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Quick Links</h3>
                            <ul>
                                <li><a href="#">Posuere egestas</a></li>
                                <li><a href="#">Sollicitudin</a></li>
                                <li><a href="#">Luctus non</a></li>
                                <li><a href="#">Duis tincidunt</a></li>
                                <li><a href="#">Elementum</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 Terry Lane, New York, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->


        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend/assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/lib/slick/slick.min.js') }}"></script>


        <!-- Template Javascript -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    </body>
</html>
