<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'T3D')}}</title>
    </head>
    <body>
        @include('navigation.navbar')

        {{--  @yield('content')  --}}

        @yield('content')

        @yield('bottom');
    </body>
</html>