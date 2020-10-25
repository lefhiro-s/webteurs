@extends('headers.nav')
@extends('headers.header')
@extends('contents.'. $content .'.'. $template)

<html>
    <head>
        <title>WebCamers - @yield('title')</title>
        @section('head')
            @section('header')
                @parent
            @endsection
        @show
    </head>
    <body class="bg-black">
        @section('container')
            @section('navbar')
                @parent
            @endsection
            
            @section('case')
                @parent
            @endsection
        @show
    </body>
</html>