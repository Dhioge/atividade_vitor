<?php

namespace Atividade;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'nome','data_de_nasc'
    ];
}
