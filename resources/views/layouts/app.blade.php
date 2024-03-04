<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>App Name - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto max-w-lg w-full min-h-screen">
    @include('component.header')

    <div class="pt-16">
        @yield('content')
    </div>
</div>


@section('bottombar')
    @include('component.bottom-nav')
@show
</body>

</html>
