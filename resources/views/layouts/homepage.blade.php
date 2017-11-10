<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <body>
    <div id="app">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
        @include('inc.navbar')
        @yield('title')
        @yield('works')

                </div>
            </div>
        </nav>
    </div>    
    </body>
</html>