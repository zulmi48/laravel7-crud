<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::Orderby('id', 'desc')->paginate(5);
        return view('film.index', compact('films'));
    }
    public function create()
    {
        return view('film.create');
    }
    public function store(Request $request)
    {
        $film=Film::create([
          'judul' => $request->judul,
          'genre' => $request->genre,
          'sinopsis' => $request->sinopsis
        ]);
        return redirect('/film')->with(['alert' => 'create']);
    }
    public function edit($id)
    {
        $film=Film::find($id);
        return view('film.edit', compact('film'));
    }
    public function update(Request $request, $id)
    {
        Film::find($id)->update([
          'judul' => $request->judul,
          'genre' => $request->genre,
          'sinopsis' => $request->sinopsis
        ]);
        return redirect('/film')->with(['alert' => 'update']);
    }
}
