@extends('film.app')

@section('title','Tambah Data')

@section('content')
<h2>ini adalah halaman Create</h2>
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