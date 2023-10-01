@extends('layouts.public')

@section('title', $comic->title)

@section('content')

<main>

    <div class="container">

        <div class="row">

            <div class="col col-6 offset-md-3 d-flex flex-column align-items-center">

                <button class="btn btn-primary mt-5">
                    <a class="text-light" href="{{route('comics.index')}}">Back to comics</a>
                </button>

                <div class="card my-5">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{substr_replace($comic['description'], '...', 100)}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">${{$comic->price}}</li>
                        <li class="list-group-item">{{$comic->series}}</li>
                        <li class="list-group-item">{{$comic->sale_date}}</li>
                        <li class="list-group-item">{{$comic->type}}</li>
                        <li class="list-group-item">{{str_replace(['[', ']','"'], '', $comic->artists)}}</li>
                        <li class="list-group-item">{{str_replace(['[', ']','"'], '', $comic->writers)}}</li>
                    </ul>
                </div>

                <button class="btn btn-primary mb-5">
                    <a class="text-light" href="{{route('comics.index')}}">Back to comics</a>
                </button>

            </div>

        </div>

    </div>

</main>

@endsection