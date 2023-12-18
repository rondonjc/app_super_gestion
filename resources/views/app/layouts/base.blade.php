<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
        @include('site.layouts.menu')
        @yield('conteudo')
        @include('site.layouts.footer')
    </body>
</html>