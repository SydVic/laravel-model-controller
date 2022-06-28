{{-- MOVIE CARD --}}
<div class="movie-card">
  {{-- CARD INNER --}}
  <div class="card-inner">
    {{-- CARD FRONT --}}
    <div class="card-front">
      <div class="poster-wrapper">
        <img src="{{ $movie->poster }}" alt="{{ $movie->original_title }}">
      </div>
    </div>
    {{-- /CARD FRONT --}}

    {{-- CARD BACK --}}
    <div class="card-back">
      <div class="text">
        <h3>Title: {{ $movie->title }}</h3>
        <h5>Original Title: {{ $movie->original_title }}</h5>
        <p>Nationality: {{ $movie->nationality }}</p>
        <p>Release Date: {{ $movie->date }}</p>
        <h4>Vote: {{ $movie->vote }}</h4>
      </div>
    </div>
    {{-- /CARD BACK --}}
  </div>
  {{-- /CARD INNER --}}
</div>
{{-- /MOVIE CARD --}}