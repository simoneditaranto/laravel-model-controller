@extends('layouts/app')

@section('content')

<div class="container py-5">

    <h1>Movies</h1>

    <div class="all-movies d-flex justify-content-between flex-wrap row-gap-3">

        @foreach($movies as $movie)
    
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">nationality: {{$movie->nationality}}</li>
                    <li class="list-group-item">date: {{$movie->date}}</li>
                    <li class="list-group-item">vote: {{$movie->vote}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
    
        @endforeach

    </div>



</div>

@endsection