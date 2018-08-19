<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FornecedorModel extends Model
{
    protected $table = 'fornecedor';

    protected $primaryKey = 'forn_id';

    use SoftDeletes;
}
