@extends('layouts.app')

@section('title')
  Movies | Homepage
@endsection

@section('main_content')

  @foreach ($movies as $movie)
    @include('components.movie-card', $movie)
  @endforeach

@endsection