<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable=[
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'numero_casa',
        'complemento',
    ];

    public function pessoa(){
        return $this->hasOne(Pessoa::class);
    }
}
