@extends('layouts.main')

@section('title', 'App Laravel')
@section('content')

    <h1>PAGINA HOME</h1>
    @foreach ($events as $event)
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
    @endforeach

@endsection
