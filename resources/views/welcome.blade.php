<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CDMA</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css") }}" />
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css") }}" />
    <link rel="stylesheet" href="{{asset("css/jquery-ui.min.css") }}" />
    <link rel="stylesheet" href="{{asset("css/style.css")}}" />
</head>

<body>



    @include('inc.indexNav')
    @yield('content')


    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>