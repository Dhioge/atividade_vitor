<?php

namespace Atividade;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'nome','preco','autor_id','quantidade'
    ];
}
