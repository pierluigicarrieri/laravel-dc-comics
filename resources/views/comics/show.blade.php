@extends('layouts.public')

@section('title', $comic->title)

@section('content')

<main>

    <div class="container">

        <div class="row">

            <div class="col col-6 offset-md-3">

                <div class="card my-5">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="">
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

        </div>



    </div>

</main>

@endsection
