@extends('layouts.app')

@section('content')

<h1 class="text-center">Visualizar</h1><hr>

<div class="col-8 m-auto">
@php
    $user = $book->find($book->id)->relUsers;
@endphp
<table class="table">
  <h2>Livro cadastrado</h2>

  <p><b>Título:</b> {{ $book->title }}</p>
  <p><b>Páginas:</b> {{ $book->pages }}</p>
  <p><b>Autor:</b> {{ $user->name }}</p>
  <p><b>Email:</b> {{ $user->email }}</p>

  <a href=" {{ route('home') }}">
    <button class="btn btn-success">Voltar</button>
  </a>
  
</div>

@endsection