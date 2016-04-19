<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lojista extends Model
{
    protected $fillable = ['Nome_Fantasia', 'Razao_Social', 'Loogradouro', 'Bairro', 'CEP', 'Grupo_ID'];
}
