<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primary_key = 'id_usuario';

    protected $fillable = ['nombre', 'nick'];
}
