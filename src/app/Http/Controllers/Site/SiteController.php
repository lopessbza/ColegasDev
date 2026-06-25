<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Plano;
use App\Http\Controllers\Controller;


class SiteController extends Controller
{
    public function servicos()
    {
        // Carrega os planos trazendo os preços e serviços acoplados de forma limpa
        $planos = \App\Models\Plano::with(['precos', 'servicos'])->orderBy('id_plano', 'asc')->get();

        return view('site.servicos.index', compact('planos'));
    }
    public function planos()
    {
        // Busca os planos trazendo junto os preços deles (Eager Loading)
        $planos = Plano::with('precos')->get();

        return view('planos', compact('planos'));
    }
}
