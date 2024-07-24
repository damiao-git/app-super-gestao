<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Usuario e ou senha incorretos.';
        };
        if($request->get('erro') == 2){
            $erro = 'Necessario realizar login para acessar a página.';
        };
        return view("site.login", ['erro' => $erro]);
    }

    public function autenticar(Request $request){
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.email' => 'Digite um email válido!',
            'senha.required' => 'Campo senha é obrigatório!'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuário: $email | Senha: $password";
        echo "<br>";
        // print_r($request->all());

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($usuario->name)){
            session_start();

            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.clientes');
        }else{
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }
}
