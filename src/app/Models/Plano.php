<?php

// app/Models/Plano.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $table = 'tbl_planos';
    protected $primaryKey = 'id_plano';

    // Relação com os Preços (Um plano tem muitos preços: mensal, anual)
    public function precos()
    {
        return $this->hasMany(Preco::class, 'tbl_planos_id_plano', 'id_plano');
    }

    // Relação muitos-para-muitos com Serviços via tabela pivô
    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'tbl_plano_servico', 'tbl_planos_id_plano', 'tbl_servicos_id_servico');
    }
}
