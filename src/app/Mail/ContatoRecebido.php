<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoRecebido extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function build()
    {
        return $this->subject($this->dados['subject'])
                    ->html("
                        <h2>Novo contato recebido pelo site!</h2>
                        <p><strong>Nome:</strong> {$this->dados['name']}</p>
                        <p><strong>E-mail:</strong> {$this->dados['email']}</p>
                        <p><strong>Telefone:</strong> {$this->dados['phone']}</p>
                        <p><strong>Mensagem:</strong><br>{$this->dados['message']}</p>
                    ");
    }
}