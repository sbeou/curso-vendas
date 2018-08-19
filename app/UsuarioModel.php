<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Foundation\Auth\User;

class UsuarioModel extends User
{
    protected $table = 'usuario';

    protected $primaryKey = 'usua_id';

    use SoftDeletes;
}
