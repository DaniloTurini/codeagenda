<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillaable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        //
    }
}