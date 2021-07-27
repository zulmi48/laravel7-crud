@extends('film.app')

@section('title','Edit Data')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/film">Film</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>
<h2>Update data!</h2>
<form class="" action="/film/{{$film->id}}" method="post">
    @method('PUT')
    @csrf
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
        </div>
        <input name="judul" value="{{$film->judul}}" type="text" class="form-control" placeholder="Silahkan isi judul film" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Genre</span>
        </div>
        <input name="genre" value="{{$film->genre}}" type="text" class="form-control" placeholder="Silahkan isi genre film" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Sinopsis</span>
        </div>
        <input name="sinopsis" value="{{$film->sinopsis}}" type="text" class="form-control" placeholder="Silahkan isi sinopsis film" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <button type="submit" name="button" class="btn btn-primary">Update</button>
</form>

@endsection