<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'tbl_clientes';
    protected $primaryKey = 'id_cliente';
    
    // Um cliente pode ter uma assinatura
    public function assinatura()
    {
        return $this->hasOne(Assinatura::class, 'tbl_clientes_id_cliente', 'id_cliente');
    }
}