<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'endereco',
        'data_nascimento',
        'telefone',
        'nacionalidade',
    ];

    public function endereco(){
        return $this->BelongsTo(Encdereco::class);
    }

    public function funcionario(){
        return $this->belongsTo(Funcionario::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function hospede(){
        return $this->hasOne(Hospede::class);
    }

}
