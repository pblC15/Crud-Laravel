@extends('layouts.app')

@section('content')

<h1 class="text-center">CRUD com Laravel</h1>
<hr>

<div class="container text-right mt-3 mb-4 ml-5">
    <a href="{{ route('create') }}">
        <button class="btn btn-success">Cadastrar Livro</button>
    </a>
</div>

<div class='col-8 m-auto'>
    <table class="table text-center" >
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">preço</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        @php 
            $user = $books->find($book->id)->relUsers;
        @endphp
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $user->name }}</td>
                <td>R${{ $book->price }}</td>
                <td>
                    <a href="{{ route('view', ['id'=>$book->id] )}}">
                        <button class="btn btn-primary btn-sm">Visualizar</button>
                    </a>
                    <a href="{{ route('edit', ['id'=>$book->id])}}">
                        <button class="btn btn-info btn-sm">Editar</button>
                    </a>
                    <a href="{{ route('delete', ['id'=>$book->id])}}">
                        <button class="btn btn-danger btn-sm">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>

</div>
@endsection