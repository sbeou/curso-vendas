<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutoModel extends Model
{
    protected $table = 'produto';

    protected $primaryKey = 'prod_id';

    use SoftDeletes;

    public function fornecedor() {
        return $this->belongsTo(FornecedorModel::class, 'cod_fornecedor');
    }
}


