<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable=[
        'cep','complementoEndereco','numeroCasa',
    ];

    public function bairro(){
        return $this->BelongsTo(Bairro::class);
    }

    public function pessoa(){
        return $this->hasOne(Pessoa::class);
    }
}
