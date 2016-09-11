<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mustardman Developments - @yield('pageName')</title>
    
    <link href="{{elixir('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{elixir('css/app.css')}}" rel="stylesheet"/>

    <script src="{{elixir('js/jquery.js')}}"></script>
    <script src="{{elixir('js/bootstrap.js')}}"></script>

</head>
<body>
    <div id="main">
        @yield('content')
    </div>
</body>
    <script src=""></script>
</html>