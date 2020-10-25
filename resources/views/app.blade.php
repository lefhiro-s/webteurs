@extends('headers.nav')

<html>
    <head>
        <title>WebCamers - @yield('title')</title>
        @section('header')
            <meta charset="utf-8">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @show
    </head>
    <body class="bg-black">
        @section('container')
            @section('navbar')
                @parent
            @endsection
    </body>
</html>