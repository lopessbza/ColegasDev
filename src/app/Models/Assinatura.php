<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    protected $table = 'tbl_assinaturas';
    protected $primaryKey = 'id_assinatura';

    // A assinatura pertence a um cliente
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'tbl_clientes_id_cliente', 'id_cliente');
    }

    // A assinatura está vinculada a um preço/plano específico
    public function preco()
    {
        return $this->belongsTo('App\Models\Preco', 'tbl_precos_id_preco', 'id_preco');
    }
}