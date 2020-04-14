<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />  

        <title>@yield('title')</title>

        <script src="{{ asset('js/app.js') }}" defer></script>    
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        @include('menu')

        @section('page_content')
            Page content.
        @show


        @include('footer')

    </body>
</html>
