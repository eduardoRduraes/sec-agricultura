@extends('admin.layouts.app')

@section('title', 'Editar')

@section('content')
    <h1>Editar Currículo</h1>
    <form action="{{route('funcionarios.update',$fun->id)}}" method="post">
        @method('put')
        @include('admin.funcionarios._partials.form')
    </form>
@endsection
