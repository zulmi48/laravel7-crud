@extends('film.app')

@section('title','Tambah Data')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/film">Film</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>
<h2>Tambahkan data baru!</h2>
<form class="" action="/film" method="post">
    @csrf
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
        </div>
        <input name="judul" type="text" class="form-control" placeholder="Silahkan isi judul film" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Genre</span>
        </div>
        <input name="genre" type="text" class="form-control" placeholder="Silahkan isi genre film" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Sinopsis</span>
        </div>
        <input name="sinopsis" type="text" class="form-control" placeholder="Silahkan isi sinopsis film" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <button type="submit" name="button" class="btn btn-primary">Simpan</button>
</form>

@endsection