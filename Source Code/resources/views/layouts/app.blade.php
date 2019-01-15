<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<head>

    <!--Start Common meta -->
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--End Common meta -->

    <!--Start page meta & title -->
    <title>@yield('title', 'TekMedi Co,Ltd')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <!--End page meta & title -->

    <!--Start GLOBAL Stylesheet-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}"/>

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/mainf603.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/fonts/font-awesome/font-awesome.min.css') }}" media="screen" rel="stylesheet">
    <link href="{{ asset('/assets/extras/normalize.css')  }}" rel="stylesheet" type="text/css">
    @yield('css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script><![endif]-->
    <!--End GLOBAL Stylesheet-->
</head>

<body>

@include('partials.nav')

@yield('content')

@include('partials.footer')
<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>


<!--Start Common Javascript -->
<script src="{{ asset('assets/js/jquery-min.js')}}"></script>
<script src="{{ asset('assets/js/tether.min.js')  }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')  }}"></script>
<script src="{{ asset('assets/js/wow.js')  }}"></script>
<script src="{{ asset('assets/js/owl.carousel.js')  }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js')  }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js')  }}"></script>
<script src="{{ asset('assets/js/main.js')  }}"></script>
<!--End Common Javascript -->


</body>

<script src="{{ asset('assets/js/typed.js')  }}"></script>
<script src="{{ asset('assets/js/theme.js')  }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js')  }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 50,
            time: 1000
        });

    });
</script>

@yield('js')

</html>