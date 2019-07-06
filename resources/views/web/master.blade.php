<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kava Organics</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public/assets/img/favicon.png') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{ url('public/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/custom.css') }}" rel="stylesheet">

    @yield('header-css')
</head>

<body id="page-top" class="landing-page no-skin-config">
    
    <!-- Header Area Start -->
        @include('web.header')
    <!-- End Header Area -->

    @yield('main-content')

    <!-- Footer Area Start -->
        @include('web.footer')
    <!-- End Footer Area -->

    <!-- Mainly scripts -->
    <script src="{{ url('public/assets/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ url('public/assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ url('public/assets/js/inspinia.js') }}"></script>
    <script src="{{ url('public/assets/js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('public/assets/js/plugins/wow/wow.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('body').scrollspy({
                target: '.navbar-fixed-top',
                offset: 80
            });

            // Page scrolling feature
            $('a.page-scroll').bind('click', function(event) {
                var link = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(link.attr('href')).offset().top - 50
                }, 500);
                event.preventDefault();
                $("#navbar").collapse('hide');
            });
        });

        var cbpAnimatedHeader = (function() {
            var docElem = document.documentElement,
                    header = document.querySelector( '.navbar-default' ),
                    didScroll = false,
                    changeHeaderOn = 200;
            function init() {
                window.addEventListener( 'scroll', function( event ) {
                    if( !didScroll ) {
                        didScroll = true;
                        setTimeout( scrollPage, 250 );
                    }
                }, false );
            }
            function scrollPage() {
                var sy = scrollY();
                if ( sy >= changeHeaderOn ) {
                    $(header).addClass('navbar-scroll')
                }
                else {
                    $(header).removeClass('navbar-scroll')
                }
                didScroll = false;
            }
            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }
            init();
        })();

        // Activate WOW.js plugin for animation on scrol
        new WOW().init();
    </script>

    @yield("footer")
</body>

</html>