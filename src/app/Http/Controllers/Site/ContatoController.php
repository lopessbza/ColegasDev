<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class ContatoController extends Controller{
    public function enviar(Request $request)
{
    $dados = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'phone'   => 'nullable|string|max:20',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Mudamos de Mail::send para Mail::html para o Laravel processar a string diretamente
    Mail::html("
        <h3>Nova mensagem de contato recebida</h3>
        <p><strong>Nome:</strong> {$dados['name']}</p>
        <p><strong>E-mail:</strong> {$dados['email']}</p>
        <p><strong>Telefone:</strong> " . ($dados['phone'] ?? 'Não informado') . "</p>
        <p><strong>Assunto:</strong> {$dados['subject']}</p>
        <p><strong>Mensagem:</strong><br>" . nl2br($dados['message']) . "</p>
    ", function ($message) use ($dados) {
        $message->to('colegasdev@gmail.com')
                ->subject('Novo Contato do Site: ' . $dados['subject']);
    });

    return back()->with('sucesso', 'Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.');
}
}