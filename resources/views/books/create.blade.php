@extends('layouts.app')


@section('title', 'Creation')
@section('content')
   
    <div class="container mt-5">
        <h1>Adicione um novo Livro</h1>
        <hr>
        <form action=" {{ route('books-store') }} " method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite o nome do livro">
                </div>

                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" name="author" placeholder="Digite o nome do autor">
                </div>

                <div class="form-group">
                    <label for="year_of_creation">Ano de Criação:</label>
                    <input type="number" class="form-control" name="year_of_creation" placeholder="Digite o ano de criação do livro">
                </div>

                <div class="form-group">
                    <label for="value">Valor:</label>
                    <input type="number" class="form-control" name="value" placeholder="Digite o valor do livro">
                </div>

                <div class="form-group">
                    <input type="submit" = name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
       
@endsection()