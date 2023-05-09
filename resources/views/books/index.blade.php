@extends('layouts.app')


@section('title', 'Listing')
@section('content')

<div class="container mt-5 " > 

<div class="row">
    <div class="col-sm-10">
        <h1>Livros </h1>

    </div>

    <div class="col-sm-2"> 
        <a href="{{route('books-create')}}" class="btn btn-success" >Novo Livro</a>
    </div>
</div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Nr_Registro</th>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">Valor</th>
                <th scope="col">Gênero</th>
                <th scope="col">Status</th>
                <th scope="col">...</th>
             </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->value }}</td>
                <td>{{ $book->gender }}</td>
                <td>{{ $book->status ? 'Emprestado' : 'Disponível'}}</td>
                <td class="d-flex ">
                    <a href=" {{route('books-edit', ['id' => $book->id])}} " class="btn btn-primary me-2" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>
                    <form action=" {{route('books-destroy', ['id' => $book->id])}} " method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/></svg></button>
                    </form>
                </td>
                </tr>
            @endforeach
             </tbody>
        </table>
</div>
@endsection()