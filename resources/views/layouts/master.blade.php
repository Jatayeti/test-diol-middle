<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kitty Store</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>

        <main id="app">
            @include('partials.header')

            @yield('content')

            @include('partials.footer')
        </main>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
