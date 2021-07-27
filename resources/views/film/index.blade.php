@extends('film.app')

@section('title', 'Data Film')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Film</li>
    </ol>
</nav>
@if (session()->get('alert')=="create")
<div class="alert alert-success" role="alert">
    Data baru telah ditambahkan!
</div>
@elseif (session()->get('alert')=="update")
<div class="alert alert-primary" role="alert">
    Data telah berhasil diupdate!
</div>
@elseif (session()->get('alert')=="delete")
<div class="alert alert-danger" role="alert">
    Data telah terhapus!
</div>
@endif
<h2>Data Film</h2>
<a href="/film/create" class="btn btn-info btn-sm float-right mb-1">New +</a>
@foreach ($films as $film)
<div class="card mb-2" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">{{ $film->judul }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $film->genre }}</h6>
        <p class="card-text">{{ $film->sinopsis }}</p>
        <a href="/film/{{$film->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
        <a href="#" class="btn btn-danger btn-sm">Delete</a>
    </div>
</div>
@endforeach

{{ $films->links()}}

@endsection