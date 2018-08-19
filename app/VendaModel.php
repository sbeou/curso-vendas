<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendaModel extends Model
{
    protected $table = 'venda';

    protected $primaryKey = 'vend_id';

    use SoftDeletes;

    public function cliente() {
        return $this->belongsTo(ClienteModel::class, 'cod_cliente');
    }
    public function produto()
    {
        return $this->belongsToMany(ProdutoModel::class, 'venda_produto', 'cod_venda', 'cod_produto')->withPivot(['vend_pro_quantidade']);
    }
    
}
