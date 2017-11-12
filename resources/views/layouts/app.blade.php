<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/imports.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway Dots" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    
    @if(Route::current()->getName() === 'works.index')
        <link href="{{ asset('css/results.css') }}" rel="stylesheet">
    @elseif(Route::current()->getName() === 'works.create')
        <link href="{{ asset('css/upload.css') }}" rel="stylesheet">
    @elseif(Route::current()->getName() === 'works.show')
        <link href="{{ asset('css/workpage.css') }}" rel="stylesheet">
    @elseif(Request::is('search/*'))
        <link href="{{ asset('css/results.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif

</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
