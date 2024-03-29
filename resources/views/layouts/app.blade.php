<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title>@yield('title', 'mxbbs') - mxbbs</title>
    <meta name="description" content="@yield('description', 'mxbbs 社区')" />

    <title>@yield('title', 'mxbbs')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
<div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

        @include('layouts._message')
        @yield('content')

    </div>

    @include('layouts._footer')
</div>

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@yield('scripts')

</body>
</html>