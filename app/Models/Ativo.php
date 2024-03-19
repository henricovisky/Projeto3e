<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    // Nome da tabela no banco ativos_3e
    protected $table = 'ativos';

    // Lista dos atributos
    protected $fillable = [
        'nome',
        'descricao',
        'categoria',
        'data_aquisicao',
        'valor',
        'localizacao',
    ];
}
