<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ getOptions('site_name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=100" >
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
        <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/bootstrap-responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/flexslider.css') }}" type="text/css" media="screen" rel="stylesheet"  />
        <link href="{{ asset('front/css/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/cloud-zoom.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/portfolio.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <!-- fav -->
        <link rel="shortcut icon" href="asset/ico/favicon.ico">
    </head>
    <body>
        <!-- Header Start -->
        <header>
            @include('layouts.header')
        </header>
        <!-- Header End -->

        <div id="maincontainer">

            @yield('content')

            <!-- Footer -->
            <footer id="footer">
                @include('layouts.footer')
            </footer>
            <!-- javascript
                ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="{{ asset('front/js/jquery.js') }}"></script> 
            <script src="{{ asset('front/js/bootstrap.js') }}"></script> 
            <script src="{{ asset('front/js/respond.min.js') }}"></script> 
            <script src="{{ asset('front/js/application.js') }}"></script> 
            <script src="{{ asset('front/js/bootstrap-tooltip.js') }}"></script> 
            <script defer src="{{ asset('front/js/jquery.fancybox.js') }}"></script> 
            <script defer src="{{ asset('front/js/jquery.flexslider.js') }}"></script> 
            <script type="text/javascript" src="{{ asset('front/js/jquery.tweet.js') }}"></script> 
            <script  src="{{ asset('front/js/cloud-zoom.1.0.2.js') }}"></script> 
            <script  type="text/javascript" src="{{ asset('front/js/jquery.validate.js') }}"></script> 
            <script type="text/javascript"  src="{{ asset('front/js/jquery.carouFredSel-6.1.0-packed.js') }}"></script> 
            <script type="text/javascript"  src="{{ asset('front/js/jquery.mousewheel.min.js') }}"></script> 
            <script type="text/javascript"  src="{{ asset('front/js/jquery.touchSwipe.min.js') }}"></script> 
            <script type="text/javascript"  src="{{ asset('front/js/jquery.ba-throttle-debounce.min.js') }}"></script> 
            <script src="{{ asset('front/js/jquery.isotope.min.js') }}"></script> 
            <script src="{{ asset('front/js/custom.js') }}"></script>
    </body>
</html>