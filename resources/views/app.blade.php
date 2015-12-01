<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPOnline</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="{{ URL::asset('material/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ URL::asset('material/css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('material/css/app.min.2.css') }}" rel="stylesheet">


</head>
<body>

@include('header')



@include('footer')



    <div class="container-fluid" style="padding-top: 80px">
        @yield('content')
    </div>


      <!-- Javascript Libraries -->
            <script src="{{ URL::asset('material/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/flot/jquery.flot.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/flot.curvedlines/curvedLines.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/sparklines/jquery.sparkline.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/moment/min/moment.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>
            <script src="{{ URL::asset('material/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js') }}"></script>

            <!-- Placeholder for IE9 -->
            <!--[if IE 9 ]>
                <script src="{{ URL::asset('material/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
            <![endif]-->

            <script src="{{ URL::asset('material/js/flot-charts/curved-line-chart.js') }}"></script>
            <script src="{{ URL::asset('material/js/flot-charts/line-chart.js') }}"></script>
            <script src="{{ URL::asset('material/js/charts.js') }}"></script>
            <script src="{{ URL::asset('material/js/charts.js') }}"></script>
            <script src="{{ URL::asset('material/js/functions.js') }}"></script>
            <script src="{{ URL::asset('material/js/demo.js') }}"></script>
</body>
</html>
