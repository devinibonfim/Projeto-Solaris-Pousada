<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable=[
        'cnpj','nomePublico',
    ];

    public function pj(){
        return $this->BelongsTo(Pj::class);
    }

    public function produto(){
        return $this->hasMany(Produto::class);
    }
}
