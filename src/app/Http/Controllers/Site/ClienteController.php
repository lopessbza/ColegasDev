<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Controllers\Controller; 


class ClienteController extends Controller
{
    public function index()
    {
        // Busca todos os clientes e também a assinatura ativa de cada um
        $clientes = Cliente::with('assinatura.preco.plano')->get();

        return view('admin.clientes.index', compact('clientes'));
    }
}
