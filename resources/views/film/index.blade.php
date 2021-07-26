@extends('film.app')

@section('title', 'Data Film')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Film</li>
    </ol>
</nav>
<h2>Data Film</h2>
<div class="card mb-2" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-warning btn-sm">Edit</a>
        <a href="#" class="btn btn-danger btn-sm">Delete</a>
    </div>
</div>
@endsection