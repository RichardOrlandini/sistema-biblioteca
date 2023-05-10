@extends('layouts.app')


@section('title', 'Creation')
@section('content')
   
    <div class="container mt-5">
        <h1>Adicione um novo Usúario</h1>
        <hr>
        <form action=" {{ route('people-store') }} " method="POST" name="check_form">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite o nome do usúario">
                </div>

                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite o email do usúario">
                </div>

                <div class="form-group">
                    <button onclick="return validador()" value="Atualizar" class="btn btn-primary" >Criar</button>
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