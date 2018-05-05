<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
    </head>

    <body>
        <h1>{{ $campsite-> name }}</h1>
        <p>{{ $campsite-> description }}</p>
    </body>
</html>