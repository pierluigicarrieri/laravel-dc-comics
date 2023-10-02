@extends('layouts.public')

@section('title', 'New Comic')

@section('content')

<main class="py-5">

    <div class="container">

        <h1 class="py-5 text-center">Insert new comic</h1>

        <div class="row">
                
                <div class="col offset-md-2">

                    <form action="{{route('comics.store')}}" method="POST" class="w-75">
                        @csrf()

                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Thumb</label>
                            <input type="text" class="form-control" name="thumb">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input type="number" step=".01" class="form-control" name="price">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Series</label>
                            <input type="text" class="form-control" name="series">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Sale Date</label>
                            <input type="date" class="form-control" name="sale_date">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Type</label>
                            <input type="text" class="form-control" name="type">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Artists</label>
                            <input type="text" class="form-control" name="artists">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Writers</label>
                            <input type="text" class="form-control" name="writers">
                        </div>

                        <button class="btn btn-primary">Save</button>

                        <a href="{{route('comics.index')}}" class="btn btn-primary">Abort</a>

                    </form>

                </div>

        </div>

    </div>

</main>

@endsection
