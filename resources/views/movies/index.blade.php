@extends('layouts.main')

@section('title', '| Home')

@section('main_content')
<div class="container">
	<div class="row gy-4 justify-content-center">
		@foreach ($movies as $movie)
		<div class="col-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">{{$movie->title}}</h5>
					<h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{$movie->original_title}}</h6>
					<h6 class="card-subtitle mb-2">Nazione: {{$movie->nationality}}</h6>
					<h6 class="card-subtitle mb-2">Data di pubblicazione: {{$movie->date}}</h6>
					<h6 class="card-subtitle mb-2">Voto: {{$movie->vote}}</h6>
					<a href="{{route('movies.show', ['id' => $movie->id])}}" class="card-link">Maggiori dettagli</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection