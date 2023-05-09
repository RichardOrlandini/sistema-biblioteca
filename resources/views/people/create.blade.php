@extends('layouts.app')


@section('title', 'Creation')
@section('content')
   
    <div class="container mt-5">
        <h1>Adicione um novo Usúario</h1>
        <hr>
        <form action=" {{ route('people-store') }} " method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite o nome do usúario">
                </div>

                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Digite o email do usúario">
                </div>
                

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
       
@endsection()