@extends ('layout')

@section ('content')
        @foreach ($campsites as $campsite)
            <li>
                <a href="/campsites/{{ $campsite-> id }}">{{ $campsite-> name }}</a>
            </li>
        @endforeach
@endsection
