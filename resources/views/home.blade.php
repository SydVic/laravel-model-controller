@extends('layouts.app')

@section('title')
  Movies | Homepage
@endsection

@section('main_content')

  <div class="container">
    <div class="movies-container">
      @foreach ($movies as $movie)
        @include('components.movie-card', $movie)
      @endforeach
    </div>
  </div>

@endsection