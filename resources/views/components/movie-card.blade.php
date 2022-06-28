<div class="movie-card">
  <h3>Title: {{ $movie->title }}</h3>
  <h5>Original Title: {{ $movie->original_title }}</h5>
  <p>Nationality: {{ $movie->nationality }}</p>
  <p>Release Date: {{ $movie->date }}</p>
  <h4>Vote: {{ $movie->vote }}</h4>
  {{-- @php
      dd($movie);
  @endphp --}}
</div>