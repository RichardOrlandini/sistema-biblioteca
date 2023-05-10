@extends('layouts.app')


@section('title', 'Edition')
@section('content')
   
    <div class="container mt-5">
        <h1>Editar Livro</h1>
        <hr>
        <form action=" {{ route('books-update', ['id'=> $book->id]) }} " method="POST" name="check_form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" value="{{$book->name}}" placeholder="Digite o nome do livro">
                </div>

                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" name="author" value="{{$book->author}}"  placeholder="Digite o nome do autor">
                </div>


                <div class="form-group">
                    <label for="value">Valor:</label>
                    <input type="number" class="form-control" name="value" value="{{$book ->value}}" placeholder="Digite o valor do livro">
                </div>


                <div class="input-group mb-3">
                        <select name="gender" class="custom-select" id="inputGroupSelect02">
                            <option selected value=" {{$books ->gender}} ">Gênero...</option>
                            <option value="romance">Romance</option>
                            <option value="fantasia">Fantasia</option>
                            <option value="aventura">Aventura</option>
                        </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                    </div>
                </div>

                <div class="form-group">
                     <button onclick="return validador()" value="Atualizar" class="btn btn-success" >Atualizar</button>
                </div>
            </div>
        </form>
    </div>


    <script>
        function validador(){
            let name = check_form.name.value;
            let author = check_form.author.value;
            let value = check_form.value.value;
            let gender = check_form.gender.value;

            if (name == ""){
                alert("Prencha o campo Nome")
                return false;
            }

            if (author == ""){
                alert("Prencha o campo Autor")
                return false;
            }

            if (value == ""){
                alert("Prencha o campo Valor")
                return false;
            }

            if (gender == ""){
                alert("Prencha o campo Gênero")
                return false;
            }

            document.forms["check_form"].submit()
        }
    </script>  
       
@endsection()