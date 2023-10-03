<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller {

    public function create() {

        return view('comics.create');

    }

    public function store(Request $request) {

        $comic = $request->all();

        $newComic = new Comic();

        $newComic->title = $comic['title'];
        $newComic->description = $comic['description'];
        $newComic->thumb = $comic['thumb'];
        $newComic->price = str_replace('$', '', $comic['price']);
        $newComic->series = $comic['series'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->type = $comic['type'];
        $newComic->writers = json_encode($comic['writers']);
        $newComic->artists = json_encode($comic['artists']);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);

    }


    public function index() {

        $comics = Comic::all();

        return view('comics.index', ['comics'=>$comics]);
    }

    public function show($id) {

        $comic = Comic::findOrFail($id);

        return view('comics.show', ['comic'=>$comic]);

    }

    public function edit($id) {

        $comic = Comic::findOrFail($id);

        return view('comics.edit', ['comic'=>$comic]);

    }

    public function update($id) {

    }
}
