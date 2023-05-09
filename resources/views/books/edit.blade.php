@extends('layouts.app')


@section('title', 'Edition')
@section('content')
   
    <div class="container mt-5">
        <h1>Editar Livro</h1>
        <hr>
        <form action=" {{ route('books-update', ['id'=> $books->id]) }} " method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" value="{{$books->name}}" placeholder="Digite o nome do livro">
                </div>

                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" name="author" value="{{$books->author}}"  placeholder="Digite o nome do autor">
                </div>

                <div class="form-group">
                    <label for="year_of_creation">Ano de Criação:</label>
                    <input type="number" class="form-control" name="year_of_creation" value="{{$books->year_of_creation}}" placeholder="Digite o ano de criação do livro">
                </div>

                <div class="form-group">
                    <label for="value">Valor:</label>
                    <input type="number" class="form-control" name="value" value="{{$books ->value}}" placeholder="Digite o valor do livro">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
       
@endsection()