<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['Nome', 'Descricao', 'Lojista_ID', 'Categoria_ID'];
}
