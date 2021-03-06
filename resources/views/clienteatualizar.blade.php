@extends('layouts.app')

@section('main')

<div class="card border">
    <div class="card-body">
        <form action="/cliente/atualizar/{{$cliente->id}}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">

                <label for="nome">Nome do Cliente</label>
                <input type="text" class="form-control" name="nome"
                    id="nome" value="{{$cliente->nome}}"><br>

                <label for="cpf">CPF do Cliente</label>
                <input type="text" class="form-control" name="cpf"
                    id="cpf" value="{{$cliente->cpf}}" onkeyup="mascara_cpf()"><br>
            </div>
            <button class="btn btn-primary btn-lg" type="submit">Salvar</button>
    </form>
</div>
</div>
<script>
    function mascara_cpf(){
        var cpf = document.getElementById('cpf')
        if(cpf.value.length == 3 || cpf.value.length == 7) {
            cpf.value += "."
        } else if (cpf.value.length == 11) {
            cpf.value += "-"
        }
    }
</script>
@endsection