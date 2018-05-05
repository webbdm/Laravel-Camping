@extends('layout')


@section ('content')
        <h1>{{ $campsite-> name }}</h1>
        <p>{{ $campsite-> description }}</p>
@endsection
