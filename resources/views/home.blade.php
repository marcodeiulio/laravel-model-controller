<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>{{env('APP_NAME')}}</title>
</head>

<body>


	<div class="container">
		<h1 class="my-3">{{$welcome_message}}</h1>
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
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

</body>

</html>