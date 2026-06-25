<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // Mostra a tela de login
    public function mostrarLogin()
    {
        return view('login'); // Certifique se de ter um arquivo login.blade.php
    }

    // Processa a tentativa de login
    public function logar(Request $request)
    {
        // Valida se os campos foram preenchidos
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        // Busca o usuário no banco pelo e-mail
        $usuario = Usuario::where('email_usuario', $request->email)->first();

        // Verifica se o usuário existe e se a senha digitada é igual à do banco (texto puro)
        if ($usuario && $usuario->senha_usuario === $request->senha) {
            
            // Cria uma sessão manual para o usuário
            Session::put('usuario_id', $usuario->id_usuario);
            Session::put('usuario_nome', $usuario->nome_usuario);
            Session::put('usuario_cargo', $usuario->cargo_usuario);

            // Redireciona para o painel de clientes (aquela rota que criamos antes)
            return redirect()->route('admin.clientes');
        }

        // Se errar, volta para o login com uma mensagem de erro
        return back()->withErrors(['login_erro' => 'E-mail ou senha incorretos.']);
    }

    // Desloga do sistema
    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}