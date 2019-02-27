<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Machine learning - Claudiu  Popa</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="/img/logo.png">

    <!-- >>>>>>>>>>>>>>>> All CSS Files <<<<<<<<<<<<<<<< -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <!-- Style css -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
    

    <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- preloader start -->
    <div id="preloader">
        <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
    </div>
    <!-- /.end preloader -->

    <div id="app">
        @yield('content')
    </div>

    <!-- >>>>>>>>>>>>>>>> All jQuery Plugins <<<<<<<<<<<<<<<< -->
    <script src="/js/app.js"></script>
    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="/js/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Owl-carousel js -->
    <script src="/js/owl.carousel.min.js"></script>

    <!-- Ajax Contact js -->
    <script src="/js/ajax-contact.js"></script>

    <!-- Meanmenu js -->
    <script src="/js/meanmenu.js"></script>

    <!-- Onepage Nav js -->
    <script src="/js/jquery.nav.min.js"></script>

    <!-- Magnific Popup js -->
    <script src="/js/jquery.magnific-popup.min.js"></script>

    <!-- Back to top js -->
    <script src="/js/jquery.scrollUp.js"></script>

    <!-- jQuery easing js -->
    <script src="/js/jquery.easing.1.3.js"></script>

    <!-- WOW js -->
    <script src="/js/wow.min.js"></script>

    <!-- parallux js -->
    <script src="/js/jquery.stellar.min.js"></script>

    <!-- Footer Reveal js -->
    <script src="/js/footer-reveal.js"></script>

    <!-- YouTube Video Player js -->
    <script src="/js/YTPlayer.min.js"></script>

    <!-- Active js -->
    <script src="/js/custom.js"></script>

    
</body>

</html>