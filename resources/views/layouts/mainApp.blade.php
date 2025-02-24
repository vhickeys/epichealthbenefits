<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Victor Osaronwafor">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Epic Health Benefits">
    <meta name="description" content="Epic Health Benefits">

    <!-- title  -->
    <title>@yield('title', 'Welcome to ') | Epic Health Benefits</title>

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('assets/search/search.css') }}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('assets/quform/css/base.css') }}">

    <!-- theme core css -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        @include('layouts.partials.header')

        @yield('content')

        <!-- FOOTER
        ================================================== -->
        @include('layouts.partials.footer')

    </div>

    @include('layouts.partials.scripts')

</body>

</html>
