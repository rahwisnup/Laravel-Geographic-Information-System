<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aliensix.com/particles-1.4/HTML/index-default-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Sep 2018 07:11:57 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Denis Samardjiev" />
    <meta name="description" content="Particles - Personal + Agency Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    @yield('title')
    
    <!-- Royal Preloader CSS -->
    <link href="{{asset('assets_frontend_user/css/royal_preloader.css')}}" rel="stylesheet">

    <!-- jQuery Files -->
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/jquery.min.js')}}"></script>

    <!-- Parallax File -->
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/parallax.min.js')}}"></script>

    <!-- Royal Preloader -->
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/royal_preloader.min.js')}}"></script>
    <script type="text/javascript">
        Royal_Preloader.config({
            mode:           'number',
            showProgress:   false,
            background:     '#1d1d1d'
        });
    </script>

    <!-- Stylesheets -->
    <link href="{{asset('assets_frontend_user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_frontend_user/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets_frontend_user/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
    <link href="{{asset('assets_frontend_user/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets_frontend_user/css/logoiconfont.css')}}" rel="stylesheet">
    <link href="{{asset('assets_frontend_user/css/style.css')}}" rel="stylesheet" title="main-css">

    <!-- Style Switcher / remove for production -->
    <link href="{{asset('assets_frontend_user/css/style-switcher.css')}}" rel="stylesheet">
    
    <!-- Alternate Stylesheets / choose what color and base you want and include the 2 files regularly AFTER style.css')}} above -->
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/colors/blue.css')}}" title="blue">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/colors/green.css')}}" title="green">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/colors/orange.css')}}" title="orange">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/colors/red.css')}}" title="red">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/colors/orangelight.css')}}" title="orangelight">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/colors/pinkish.css')}}" title="pinkish">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/colors/seagul.css')}}" title="seagul">
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets_frontend_user/css/base-light.css')}}" title="base-light">
</head>
<body class="royal_preloader" data-spy="scroll" data-target=".navbar" data-offset="70">
    
    @yield('content')

    <!-- Javascript Files -->
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/bootstrap.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArLNT3t4qsJEBmR0R9P_6ueLIQz0Jvt1M&amp;callback=initMap" async defer></script>
    <script type="text/javascript">
        /* ---- Google Maps ---- */
        function initMap() {
            var mapOptions = {
                zoom: 15,
                zoomControl: false,
                scaleControl: false,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                center: new google.maps.LatLng(40.6700, -73.9400), // New York
                styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                title: 'Our Office!'
            });
        }
    </script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/particles.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/particlesRun.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/jquery.mixitup.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/form-validator.min.js')}}"></script>  
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/jquery.inview.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/jquery.countTo.js')}}"></script>  
    <script type="text/javascript">
        /* ---- Counter (our count) ---- */
        $('#ourcount').one('inview', function(event, isInView) {
            if (isInView) {
                $('.timer').countTo({speed: 3000});
            }
        });
    </script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/scrollreveal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/style-switcher.js')}}"></script><!-- Remove for production -->
    <script type="text/javascript" src="{{asset('assets_frontend_user/js/main.js')}}"></script>
</body>

<!-- Mirrored from aliensix.com/particles-1.4/HTML/index-default-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Sep 2018 07:13:32 GMT -->
</html>