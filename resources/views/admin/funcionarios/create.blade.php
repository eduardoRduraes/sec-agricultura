@extends('admin.layouts.app')

@section('title', 'Cadastrar Currículo')


@section('content')
    <p class="text-center h3">Novo Curriculo</p>

    <form action="{{ route('funcionarios.novo') }}" method="post">
        @include('admin.funcionarios._partials.form')
    </form>

@endsection
