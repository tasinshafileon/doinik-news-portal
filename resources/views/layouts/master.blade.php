<!DOCTYPE html>
<html lang="en">

<head>

    {{-- META TAGS --}}
    <meta charset="UTF-8">
    <meta name="description" content="Doinik News Portal - Daily News" />
    <meta name="author" content="Tasin Shafi Leon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- DYNAMIC TITLE SECTION --}}
    <title>@yield('title')</title>

    {{-- FAVICON --}}
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon">

    {{-- WEB FONTS --}}
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Condensed%7CRoboto+Slab:300,400,700%7CRoboto:300,400,500,700"
        rel="stylesheet" />

    {{-- STYLESHEETS --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/colors.css') }}" />
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ url('css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/weather-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    @yield('css')

</head>

<body>

    <div id="pageloader">
        <div class="loader-item">
            <img src="{{ url('img/load.gif') }}" alt="loader" />
        </div>
    </div>
    <!--========== BEGIN #WRAPPER ==========-->
    <div id="wrapper" data-color="pink">

        @yield('content')

    </div>
</body>

{{-- JAVASCRIPTS --}}
<script src="{{ url('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/jquery-ui.min.js') }}"></script>
<script src="{{ url('js/plugins.js') }}"></script>
<script src="{{ url('js/functions.js') }}"></script>

@yield('js')

</html>
