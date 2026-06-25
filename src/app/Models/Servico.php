<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'tbl_servicos';
    protected $primaryKey = 'id_servico';

    // Um serviço pertence a muitos planos
    public function planos()
    {
        return $this->belongsToMany(Plano::class, 'tbl_plano_servico', 'tbl_servicos_id_servico', 'tbl_planos_id_plano');
    }
}