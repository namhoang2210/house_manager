<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@29b111'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg-pink-50 min-h-screen">
        <!-- header-start -->
            @include('partial.header')
        <!-- header-end -->

        <!-- main-start -->
        <div class="flex flex-col lg:flex-row pt-18">
            @include('partial.sidebar')
            <div class="w-full ">
                <div id="main" class="main-content flex-1 py-20 md:pb-5">
                    <div class="px-4 md:px-8 text-gray-700">
                       @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- main-end -->
    </div>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
</div>
</body>
</html>
