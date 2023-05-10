@extends('layouts.app')


@section('title', 'Creation')
@section('content')
   
    <div class="container mt-5">

    
        <h1>Adicione um novo Livro</h1>
        <hr>
        <form action=" {{ route('books-store') }} " method="POST" name="check_form">
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
                    <label for="value">Valor:</label>
                    <input type="number" class="form-control" name="value" placeholder="Digite o valor do livro">
                </div>

                <div class="input-group mb-3">
                        <select name="gender" class="custom-select" id="inputGroupSelect02">
                            <option selected value="1">Gênero...</option>
                            <option value="romance">Romance</option>
                            <option value="fantasia">Fantasia</option>
                            <option value="aventura">Aventura</option>
                        </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                    </div>
                </div>

                <div class="form-group">
                    <button onclick="return validador()" value="Criar" class="btn  btn-primary" >Criar</button>
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

            if (gender == "" || gender == "1"){
                alert("Prencha o campo Gênero")
                return false;
            }

            document.forms["check_form"].submit()
        }
    </script>  


       
@endsection()