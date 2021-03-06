<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zakumi - @yield('head.title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('head.css')
</head>
<body>
    
    @section('body.sidebar')
        @include('partials.sidebar')
    @show

    <div class="container">
        @yield('body.content')
    </div>

    @section('body.footer')
        @include('partials.footer')
    @show

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('body.js')

</body>
</html>