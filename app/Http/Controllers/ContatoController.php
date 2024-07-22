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
            'email' => 'required|email',
            'motivo' => 'required',
            'mensagem' => 'required|max:200',
        ]);
        // dd($request);
    }
}
