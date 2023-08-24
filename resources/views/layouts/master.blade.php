<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP CLOTHES</title>
    <link href="{{asset('frontend/icon/logoman.png')}}" rel="icon" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.scss')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('layouts.inc.navbar')
    @include('layouts.inc.slider')
    <div style="margin-top:20px; background: #fff5e9;">
        @yield('content')
    </div>
    @include('layouts.inc.footer')
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
  
</body>
</html>