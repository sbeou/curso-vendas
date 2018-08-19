<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompraModel extends Model
{
    protected $table = 'compra';

    protected $primaryKey = 'comp_id';

    use SoftDeletes;

    public function fornecedor() {
        return $this->belongsTo(FornecedorModel::class, 'cod_fornecedor');
    }
    public function produto()
    {
        return $this->belongsToMany(ProdutoModel::class, 'compra_produto', 'cod_compra', 'cod_produto')->withPivot(['comp_pro_quantidade']);
    }
    
}
