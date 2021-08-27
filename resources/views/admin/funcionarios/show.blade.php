@extends('admin.layouts.app')

@section('title', 'Detalhe do curriculo')

@section('content')
    <p class="text-center h3">Detalhes do curriculo {{$fun->title}}</p>
    @csrf
    <div class="container">
        <ul>
            <li><strong>Nome:</strong>{{$fun->nome}}</li>
            <li><strong>Idade:</strong>{{$fun->idade}}</li>
            <li><strong>CPF:</strong>{{$fun->cpf}}</li>
            <li><strong>Profissão:</strong>{{$fun->profissao}}</li>
            <li><strong>Endereço:</strong>{{$fun->endereco}}</li>
            <li><strong>status:</strong>{{$fun->status}}</li>
        </ul>

        <form action="{{route('funcionarios.destroy', $fun->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-warning">Deletar</button>
        </form>
    </div>
@endsection
