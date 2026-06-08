<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Importação essencial para o envio
use App\Mail\ContatoRecebido;         // Importação do modelo de e-mail criado

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // 1. Validação dos campos
        $dados = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // 2. O DISPARO: Define para onde o e-mail vai e cria a mensagem com os dados capturados
        Mail::to('colegasdev@gmail.com')->send(new ContatoRecebido($dados));

        // 3. O RETORNO: Redireciona o usuário de volta com a mensagem de sucesso
        return redirect()->back()->with('sucesso', 'Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.');
    }
}