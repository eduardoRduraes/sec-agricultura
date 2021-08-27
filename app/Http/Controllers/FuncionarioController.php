<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::get();
        return view('admin.funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('admin.funcionarios.create');
    }

    public function show($id)
    {
        $fun = Funcionario::where('id', $id)->first();

        if (!$fun) {
            return redirect()->route('funcionarios.index');
        }

        return view('admin.funcionarios.show', compact('fun'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        var_dump($data);

        Funcionario::create($data);

        return redirect()->route('funcionarios.index')->with('message', 'Curriculo criado com sucesso!');
    }

    public function edit($id)
    {
        $fun = Funcionario::where('id', $id)->first();

        if (!$fun) {
            return redirect()->back();
        }

        return view('admin.funcionarios.edit', compact('fun'));
    }

    public function update(Request $request, $id)
    {
        $fun = Funcionario::find($id)->first();
        if(!$fun) return redirect()->back();

        $data = $request->all();

        $fun->update($data);

        return redirect()->route('funcionarios.index')->with('message', 'Dados atualizados com sucesso!');
    }

    public function destroy($id){
        $fun = Funcionario::find($id)->first();

        if(!$fun) return redirect()->route('funcionarios.index');

        $fun->delete();

        return redirect()->route('funcionarios.index')->with('message', 'Dados deletados com sucesso!');
    }

}
