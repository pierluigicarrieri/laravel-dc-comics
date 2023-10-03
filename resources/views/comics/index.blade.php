@extends('layouts.public')

@section('title', 'Comics')

@section('content')

<main class="py-5">

    <div class="container">

        <h1 class="py-3 text-center">Our comics!</h1>

        <h2 class="py-3 text-center">Click on a comic thumbnail to be able to read all its details, edit it and delete it!</h2>

        <div class="d-flex justify-content-center py-5">

            <a href="{{route('comics.create')}}" class="btn btn-primary">Create New Comic</a>

        </div>

        <div class="row row-cols-4 g-4">

            @foreach ($comics as $comic )
                
                <div class="col">

                    <div class="card h-100">
                        <a href="{{route('comics.show', $comic['id'])}}">
                            <img src="{{$comic['thumb']}}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$comic['title']}}</h5>
                            <p class="card-text">{{substr_replace($comic['description'], '...', 100)}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">${{$comic['price']}}</li>
                            <li class="list-group-item">{{$comic['series']}}</li>
                            <li class="list-group-item">{{$comic['sale_date']}}</li>
                            <li class="list-group-item">{{$comic['type']}}</li>
                        </ul>
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</main>

@endsection
