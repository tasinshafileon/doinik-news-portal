<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- META TAGS --}}
    <meta charset="utf-8">
    <meta name="description" content="Doinik News Portal - Daily News" />
    <meta name="author" content="Tasin Shafi Leon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- DYNAMIC TITLE SECTION --}}
    <title>@yield('title')</title>

    {{-- FAVICON --}}
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon">

    {{-- WEB FONTS --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- STYLESHEETS --}}
    <link href="{{ url('css/admin_bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    
    @yield('content')

    {{-- SCRIPTS --}}
    
    <script src="{{ url('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    
</body>

</html>
