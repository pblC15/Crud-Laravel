@extends('layouts.app')

@section('content')

<h1 class="text-center">FORMULARIO DE CADASTRO</h1><hr>

<div class="col-5 m-auto">

  <form action="{{ route('create.do')}}" method='post' name="formCad" id="formCad"> 
  @csrf 

    <div class="form-group">
      <label for="id_title">Título</label>
      <input type="text" class="form-control form-control-lg" name="title" id="id_title" placeholder="ex: Os miseráveis" required="required">
    </div>

    <div class="form-group">
      <label for="id_user">Escolha o Autor</label>
      <select class="form-control form-control-lg" id="id_user" name="id_user" required="required">
        <option value=''></option>
        @foreach($authors as $author)

        <option value='{{ $author->id}}'>{{ $author->name }}</option>
        
        @endforeach
      </select>

      <a class="btn btn-primary btn-sm mt-2" href="#">Cadastrar Autor</a>
    </div>

    <div class="form-group">
      <label for="id_pages">Páginas</label>
      <input type="text" class="form-control form-control-lg" name="pages" id="id_pages" placeholder="ex: 500" required="required">
    </div>
    
    <div class="form-group">
      <label for="id_price">Preço</label>
      <input type="text" class="form-control form-control-lg" name="price" id="id_price" placeholder="ex: 155.99" required="required">
    </div>

    <div class="text-left">
    <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
      <a class="btn btn-primary btn-lg" href="{{ route('home')}}">
          Voltar
      </a>
    </div>

  </form>
</div>

@endsection