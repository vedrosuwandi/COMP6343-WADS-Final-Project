<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customniture | @yield('title')</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('/assets/register/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('/assets/register/css/style.css')}}">
</head>
<body>
    <div class="main">
        @yield('content')
    </div>
    <!-- JS -->
    <script src="{{ asset('/assets/register/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/assets/register/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>