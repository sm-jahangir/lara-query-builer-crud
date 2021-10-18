<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
    @yield('content')

    
    <script src="{{asset('asset/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('asset/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
