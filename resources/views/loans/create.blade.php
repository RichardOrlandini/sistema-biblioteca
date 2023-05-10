@extends('layouts.app')


@section('title', 'Creation')
@section('content')
   
    <div class="container mt-5">
    <h1>Cadastre um novo Empréstimo</h1>
       
        <div class="alert alert-danger" role="alert">
            Se os Números de Registros não existirem, a pagina será recarregada!
        </div>
        
        <hr>
        <form action=" {{ route('loans-store') }} " method="POST" name="check_form">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="loan_date">Data Empréstimo:</label>
                    <input type="date" class="form-control" name="loan_date" placeholder="Digite a data de Empréstimo">
                </div>

                <div class="form-group">
                    <label for="return_date">Data Devolução:</label>
                    <input type="date" class="form-control" name="return_date" placeholder="Digite a data de Devolução">
                </div>


                <div class="form-group">
                    <label for="book_id">Nr_Registro do livro:</label>
                    <input type="number" class="form-control" name="book_id" placeholder="Digite o valor de Registro do livro">
                </div>

                <div class="form-group">
                    <label for="people_id">Nr_Registro da Pessoa:</label>
                    <input type="number" class="form-control" name="people_id" placeholder="Digite o valor de Registro da Pessoa">
                </div>

                <div class="input-group mb-3">
                        <select name="status" class="custom-select" id="inputGroupSelect02">
                            <option selected>Status...</option>
                            <option value="1">Emprestado</option>
                        </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                    </div>
                </div>

                <div class="form-group">
                     <button onclick="return validador()" value="Atualizar" class="btn btn-warning" >Criar</button>
                </div>
            </div>
        </form>
    </div>


    <script>
        function validador(){
            let loan_date = check_form.loan_date.value;
            let return_date = check_form.return_date.value;
            let book_id = check_form.book_id.value;
            let people_id = check_form.people_id.value;
            let status = check_form.status.value;

            if (loan_date == ""){
                alert("Prencha o campo data de retorno")
                return false;
            }

            if (return_date == ""){
                alert("Prencha o campo data de retorno")
                return false;
            }

            if (book_id == ""){
                alert("Prencha o campo Nr registro do Livro")
                return false;
            }

            if (people_id == ""){
                alert("Prencha o campo Nr registro da pessoa")
                return false;
            }

            if (status == ""){
                alert("Prencha o campo data de Status Emprestimo")
                return false;
            }
            
            document.forms["check_form"].submit()
        }
    </script>
       
@endsection()