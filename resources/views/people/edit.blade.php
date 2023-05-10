@extends('layouts.app')


@section('title', 'Edition')
@section('content')
   
    <div class="container mt-5">
        <h1>Editar Usúario</h1>
        <hr>
        <form action=" {{ route('people-update', ['id'=> $people->id]) }} " method="POST" name="check_form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" value="{{$people->name}}" placeholder="Digite o nome do livro">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="{{$people->email}}"  placeholder="Digite o nome do autor">
                </div>

                <div class="form-group">
                    <button onclick="return validador()" value="Atualizar" class="btn  btn-success" >Atualizar</button>
                </div>

            </div>
        </form>
    </div>

    <script>
        function validador(){
            let name = check_form.name.value;
            let email = check_form.email.value;

            if (name == ""){
                alert("Prencha o campo Nome")
                return false;
            }

            if (email == ""){
                alert("Prencha o campo Email")
                return false;
            }

            document.forms["check_form"].submit()
        }
    </script>    
       
@endsection()