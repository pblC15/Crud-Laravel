@extends('layout.layout')

@section('content')

<h1 class="text-center">FORMULARIO DE CADASTRO</h1><hr>

<div class="col-5 m-auto">

<form action="{{ route('create.do')}}" method='post' name="formCad" id="formCad"> 
@csrf 

  <div class="form-group">
    <label for="id_title">Título</label>
    <input type="text" class="form-control" name="title" id="id_title" placeholder="ex: Os miseráveis">
  </div>

  <div class="form-group">
    <label for="id_user">Escolha o Autor</label>
    <select class="form-control" id="id_user" name="id_user">
      <option value=''></option>
      @foreach($users as $user)

      <option value='{{ $user->id}}'>{{ $user->name }}</option>
      
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="id_pages">Páginas</label>
    <input type="text" class="form-control" name="pages" id="id_pages" placeholder="ex: 500">
  </div>
  
  <div class="form-group">
    <label for="id_price">Preço</label>
    <input type="text" class="form-control" name="price" id="id_price" placeholder="ex: 155.99">
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>

</form>
    <div class="text-right">
    
        <a href="{{ route('home')}}">
            <button type='submit' class="btn btn-primary">Voltar</button>
        </a>
    </div>
</div>



@endsection