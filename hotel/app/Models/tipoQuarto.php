<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoQuarto extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'valor',
        'tamanho',
        'limite_pessoa',
        'descricao',
    ];

    public function endereco(){
        return $this->hasOne(Pessoa::class);
    }
}