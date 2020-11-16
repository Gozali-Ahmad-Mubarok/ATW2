<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ATW</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('public')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    {{--  sidebar  --}}
    @include('template/section/sidebar')
    {{--  end sidebar  --}}

        {{--  header  --}}
       @include('template/section/header')
       {{--  end header  --}}
       <!-- Start Welcome area -->
      <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{url('public')}}/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
      </div>
      <div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
               @include('template.utils.notif')
            </div>
          </div>
        </div>
      </div>
            @yield('content')
        {{--  footer  --}}
        @include('template/section/footer')
        {{--  end footer  --}}
       </div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{url('public')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{url('public')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- wow JS
		============================================ -->
    <script src="{{url('public')}}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{url('public')}}/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{url('public')}}/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{url('public')}}/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{url('public')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{url('public')}}/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{url('public')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{url('public')}}/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{url('public')}}/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{url('public')}}/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{url('public')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('public')}}/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{url('public')}}/js/calendar/moment.min.js"></script>
    <script src="{{url('public')}}/js/calendar/fullcalendar.min.js"></script>
    <script src="{{url('public')}}/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="{{url('public')}}/js/flot/jquery.flot.js"></script>
    <script src="{{url('public')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{url('public')}}/js/flot/curvedLines.js"></script>
    <script src="{{url('public')}}/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{url('public')}}/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('public')}}/js/main.js"></script>
</body>

</html>