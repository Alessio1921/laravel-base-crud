<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Base CRUD</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('main-content')
        </main>
        @include('partials.footer')
    </body>
</html>
