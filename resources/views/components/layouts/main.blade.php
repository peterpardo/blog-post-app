<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >

        <title>PostAnything</title>

        <!-- Fonts -->
        <link
            href="https://fonts.bunny.net"
            rel="preconnect"
        >
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        @vite('resources/css/app.css')
    </head>

    <body class="antialiased">
        {{ $slot }}
    </body>

</html>
