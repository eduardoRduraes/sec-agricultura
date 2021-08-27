@csrf
<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="{{$fun->nome ?? old('Nome')}}"/>
    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" class="form-control" placeholder="Idade" value="{{$fun->idade ?? old('Idade')}}"/>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf"class="form-control" placeholder="CPF" value="{{$fun->cpf ?? old('CPF')}}"/>
    <label for="profissao">Profissão:</label>
    <input type="text" name="profissao" id="profissao" class="form-control" placeholder="Profissão" value="{{$fun->profissao ?? old('Profissão')}}"/>
    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" value="{{$fun->endereco ?? old('Endereco')}}"/>
</div>
<div class="row justify-content-between">
    <a href="{{ route('funcionarios.index') }}" class="col-2 btn btn-info">Voltar</a>
    <button type="submit" class="col-2 btn btn-success">Salvar</button>
</div>
