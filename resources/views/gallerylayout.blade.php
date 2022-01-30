<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('public/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}" />

    <title>Галерея детского творчества</title>
</head>

<body>


    @include('gallery.include.nav')


    <div class="background-wrapper">
        <div class="background-wrapper__shape background-wrapper__shape_right-margin animated pulse">
            <img src="{{asset('public/img/svg/Polygon2.svg')}}" alt="" />
        </div>
        <div class="background-wrapper__shape animated pulse">
            <img src="{{asset('public/img/svg/polygon.svg')}}" alt="" />
        </div>
    </div>

    <main class="main">



        <div class="container">
            @yield('content')
        </div>


        <div class="background-wrapper background-wrapper_bottom">
            <div class="background-wrapper__shape animated pulse">
                <img src="{{asset('public/img/svg/Polygon4.svg')}}" alt="" />
            </div>
            <div class="background-wrapper__shape animated pulse">
                <img src="{{asset('public/img/svg/Polygon3.svg')}}" alt="" />
            </div>
        </div>
    </main>

    <!--
                 __
     w  c(..)o   (
      \__(-)    __)
          /\   (
         /(_)___)
         w /|
          | \
M-m-m    m  m
Monkey

     -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('public/JS/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

    <script src="{{ asset('public/JS/parallax.js') }}"></script>
</body>

</html>
