<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlogQL</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased">
        <div id="app"></div>
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
    </body>
</html>
