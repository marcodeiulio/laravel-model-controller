<h1>{{$welcome_message}}</h1>

@foreach ($movies as $movie)
<h3>{{$movie->title}}</h3>
@endforeach