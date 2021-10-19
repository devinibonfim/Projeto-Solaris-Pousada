<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pj extends Model
{
    use HasFactory;
    protected $fillable=[
        'cnpj','nomePublico',
    ];

    public function pessoa(){
        return $this->BelongsTo(Pessoa::class);
    }

    public function fornecedor(){
        return $this->hasOne(Fornecedor::class);
    }

}
