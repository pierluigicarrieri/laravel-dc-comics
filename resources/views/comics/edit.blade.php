@extends('layouts.public')

@section('title', 'Edit Comic')

@section('content')

<main class="py-5">

    <div class="container">

        <h1 class="py-5 text-center">Edit your comic by filling in the following form!</h1>

        <div class="row">
                
                <div class="col offset-md-2">

                    <form action="{{route('comics.update', $comic->id)}}" method="POST" class="w-75">
                        @csrf()
                        @method('patch')

                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $comic->title) }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="description">{{ old('description', $comic->description) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Thumb</label>
                            <input type="text" class="form-control" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input type="number" step=".01" class="form-control" name="price" value="{{ old('price', $comic->price) }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Series</label>
                            <input type="text" class="form-control" name="series" value="{{ old('series', $comic->series) }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Sale Date</label>
                            <input type="date" class="form-control" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Type</label>
                            <input type="text" class="form-control" name="type" value="{{ old('type', $comic->type) }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Artists</label>
                            <input type="text" class="form-control" name="artists" value="{{ old('artists', str_replace(['[', ']','"'], '', $comic->artists)) }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Writers</label>
                            <input type="text" class="form-control" name="writers" value="{{ old('writers', str_replace(['[', ']','"'], '', $comic->artists)) }}">
                        </div>

                        <button class="btn btn-primary">Edit</button>

                        <a href="{{route('comics.index')}}" class="btn btn-primary">Abort</a>

                    </form>

                </div>

        </div>

    </div>

</main>

@endsection
