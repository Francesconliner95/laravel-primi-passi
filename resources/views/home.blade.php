<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1>home</h1>
        <a href="{{ route('pag_test') }}">Pagina di prova collegamento 1</a>
        <a href="{{ url('/test') }}">Pagina di prova collegamento 2</a>

        @foreach($colors as $color)
            <p>{{$color}}</p>
        @endforeach
    </body>
</html>
