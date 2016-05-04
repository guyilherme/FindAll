<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['Nome', 'Login', 'senha', 'Tipo_Usuario_ID', 'Logista_ID'];
}
