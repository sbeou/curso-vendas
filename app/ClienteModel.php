<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClienteModel extends Model
{
    protected $table  = 'cliente';

    protected $primaryKey ='clie_id';

    use SoftDeletes;
}
