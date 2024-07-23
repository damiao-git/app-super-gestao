<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['Contato (teste)', 'motivo_contatos' => $motivo_contatos]);

    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3',
            'telefone' => 'required',
            'email' => 'required|email|unique:site_contatos',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:200',
        ],[
            'required'=> 'O campo :attribute deve ser preenchido.',

            'nome.min'=> 'O campo NOME precisa ter no minimo 3 caracteres.',
            'email.email'=> 'Email inválido.',
            'email.unique'=> 'E-mail em uso.',
            'mensagem.max'=> 'Quantidade de caracteres excedida. Max:200',
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
