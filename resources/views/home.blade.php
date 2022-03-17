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

	<h1>{{$welcome_message}}</h1>

	@foreach ($movies as $movie)
	<h3>{{$movie->title}}</h3>
	@endforeach
</body>

</html>