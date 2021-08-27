@extends('admin.layouts.app')

@section('title','Lista de Curriculos');


@section('content')

<div class="container">
    <p class="text-center h3">Lista de Currículos</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <td scope="col">id</td>
                <td scope="col">nome</td>
                <td scope="col">idade</td>
                <td scope="col">cpf</td>
                <td scope="col">profissao</td>
                <td scope="col">endereco</td>
                <td scope="col">status</td>
                <td scope="col">ações</td>
            </tr>
        </thead>
        <tbody>
            @foreach($funcionarios as $fun)
            <tr>
                <td scope="row">{{$fun->id}}</td>
                <td>{{$fun->nome}}</td>
                <td>{{$fun->idade}}</td>
                <td>{{$fun->cpf}}</td>
                <td>{{$fun->profissao}}</td>
                <td>{{$fun->endereco}}</td>
                <td>{{$fun->status}}</td>
                <td>
                    <a href="{{ route('funcionarios.show', $fun->id) }}" type="button" class="btn btn-primary" style="color: #ffff">Ver</a>
                    <a href="{{ route('funcionarios.edit', $fun->id) }}" type="button" class="btn btn-warning">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('funcionarios.novo') }}" class="btn btn-info">Novo</a>
</div>
@endsection
