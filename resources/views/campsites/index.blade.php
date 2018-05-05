<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>
    </head>

    <body>
        @foreach ($campsites as $campsite)
            <li>
                <a href="/campsites/{{ $campsite-> id }}">{{ $campsite-> name }}</a>
            </li>
        @endforeach
    </body>
</html>
