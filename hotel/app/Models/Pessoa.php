<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomePessoa',
        'enderecoPessoa',
        'dataNascimentoPessoa',
        'telefonePessoa',
        'nacionalidadePessoa',
    ];

    public function endereco(){
        return $this->BelongsTo(Encdereco::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function pj(){
        return $this->hasOne(Pj::class);
    }

    public function pf(){
        return $this->hasOne(Pf::class);
    }
}
