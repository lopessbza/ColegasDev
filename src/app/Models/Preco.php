<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preco extends Model
{
    protected $table = 'tbl_precos';
    protected $primaryKey = 'id_preco';

    // O preço pertence a um plano
    public function plano()
    {
        return $this->belongsTo(Plano::class, 'tbl_planos_id_plano', 'id_plano');
    }
}
