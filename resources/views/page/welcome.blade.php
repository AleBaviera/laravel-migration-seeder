<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
        <header>
          <h1>header</h1>
        </header>
          @yield('content')
        <footer>
          <h1>footer</h1>
        </footer>
    </body>
</html>
