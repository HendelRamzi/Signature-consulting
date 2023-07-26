<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
    @vite(['resources/css/admin/adminlte.css'])

    @stack('custom-css')

</head>
<body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')


                        
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>


            @include('admin.layouts.footer')
        </div>
    @stack('custom-js')
</body>
</html>
