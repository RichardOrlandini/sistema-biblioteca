@extends('layouts.app')


@section('title', 'Edition')
@section('content')
   
    <div class="container mt-5">
        <h1>Editar Empréstimo</h1>
        <hr>
        <form action=" {{ route('loans-update', ['id'=> $loan->id]) }} " method="POST" name="check_form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="loan_date">Data Empréstimo:</label>
                    <input type="date" class="form-control" name="loan_date" value="{{$loan->loan_date}}" readonly>
                </div>

                <div class="form-group">
                    <label for="return_date">Data Devolução:</label>
                    <input type="date" class="form-control" name="return_date" value="{{$loan->return_date}}">
                </div>

                <div class="form-group">
                    <label for="book_id">Nr do Livro:</label>
                    <input type="number" class="form-control" name="book_id" value="{{$loan ->book_id}}" readonly>
                </div>

                <div class="form-group">
                    <label for="people_id">Nr da Pessoa:</label>
                    <input type="number" class="form-control" name="people_id" value="{{$loan ->people_id}}" readonly>
                </div>

                <div class="input-group mb-3">
                        <select name="status" class="custom-select" id="inputGroupSelect02">
                            <option selected value="{{$statusValue}}"> {{$status}}</option>
                            <option value="1">Deixar como Emprestado</option>
                            <option value="0">Deixar como Disponível</option>
                        </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Opções</label>
                    </div>
                </div>

                <div class="input-group mb-3">
                        <select name="delay" class="custom-select" id="inputGroupSelect02">
                            <option selected value="{{$delay}}">Status Atual: {{$delay}}</option>
                            <option value="atrasado">Atrasado</option>
                            <option value="devolvido">Devolvido</option>
                            <option value="a prazo">A prazo</option>
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
            let return_date = check_form.return_date.value;
            let status = check_form.status.value;
            let delay = check_form.delay.value;

            if (return_date == ""){
                alert("Prencha o campo data de retorno")
                return false;
            }

            if (status == ""){
                alert("Prencha o campo data de Status Emprestimo")
                return false;
            }

            if (delay == ""){
                alert("Prencha o campo data de Status Devolução")
                return false;
            }
            document.forms["check_form"].submit()
        }
    </script>    
@endsection()