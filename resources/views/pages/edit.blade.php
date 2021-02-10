@extends('layouts.app')

@section('content')

<h1 class="text-center">EDITAR CADASTRO</h1><hr>

<div class="col-5 m-auto">

<form action="{{ route('edit.do', ['id'=>$book->id] )}}" method='post' name="formEdit" id="formEdit"> 
@csrf 


  <div class="form-group">
    <label for="id_title">Título</label>
    <input type="text" class="form-control" name="title" id="id_title" value="{{ $book->title}}" required>
  </div>

  <div class="form-group">
    <label for="id_user">Escolha o Autor</label>
    <select class="form-control" id="id_user" name="id_user" required>
      <option value='{{ $book->relUsers->id }}'>{{ $book->relUsers->name}}</option>
      @foreach($users as $user)

      <option value='{{ $user->id}}' >{{ $user->name }}</option>
      
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="id_pages">Páginas</label>
    <input type="text" class="form-control" name="pages" id="id_pages" value="{{ $book->pages}}" required>
  </div>
  
  <div class="form-group">
    <label for="id_price">Preço</label>
    <input type="text" class="form-control" name="price" id="id_price" value="{{ $book->price}}" required>
  </div>
  <button type="submit" class="btn btn-success">Editar</button>

</form>
    <div class="text-right">
    
        <a href="{{ route('home')}}">
            <button type='submit' class="btn btn-primary">Voltar</button>
        </a>
    </div>
</div>


@endsection