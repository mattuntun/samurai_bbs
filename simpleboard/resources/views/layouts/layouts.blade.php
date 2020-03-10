<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @component('components.header')
    @endcomponent


    <div class="container pt-5 pb-5">
        @component('components.flash')
        @endcomponent

        @yield('content')
    </div>

    @component('components.footer')
    @endcomponent




    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>