<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pf extends Model
{
    use HasFactory;
    protected $fillable=[
        'cpf',
    ];

    public function pessoa(){
        return $this->BelongsTo(Pessoa::class);
    }

    public function funcionario(){
        return $this->belongsTo(Funcionario::class);
    }

    public function hospede(){
        return $this->hasOne(Hospede::class);
    }
}
