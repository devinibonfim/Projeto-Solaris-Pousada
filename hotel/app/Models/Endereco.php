<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable=[
        'cep',
        'complemento',
        'numero_casa',
    ];

    public function bairro(){
        return $this->BelongsTo(Bairro::class);
    }

    public function pessoa(){
        return $this->hasOne(Pessoa::class);
    }
}
