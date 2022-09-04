<!doctype html>
<html lang="fa" dir="rtl">
<head>

    <meta charset="UTF-8">
    <meta name="keywords" content="Investate website">
    <meta name="description" content="">
    <meta name="author" content="EJ">
    <link rel="icon" href="{{ asset('favicon.ico')}}">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pandplus -  Digital Marketing Agency</title>

    {{--  plugins styles  --}}
    <link href="{{ asset('css/extra-style.css') }}" rel="stylesheet">

    <!--  for  RTL website -->
    <link href="{{ asset('css/rtl-style.css?ver=1.0') }}" rel="stylesheet">

    <!--  for LTR website -->
    <!-- <link href="{{ asset('css/ltr-style.css?ver=1.0') }}" rel="stylesheet">-->

    @yield('style')

</head>
<body class="p-0 position-relative">

    <div id="app position-relative">
        <div class="custom-background position-fixed w-100 h-100 top-0 end-0">
            <div class="box-1 position-absolute"></div>
            <div class="box-2 position-absolute"></div>
        </div>
        @include('layout.header')

        <main class="z-top">

            @yield('content')
        </main>

        @include('layout.footer')
    </div>

</body>

@yield('script')
<script src="{{ asset('js/app.js?ver=1.0') }}"></script>
</html>
