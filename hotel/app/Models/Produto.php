<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'descricao',
        'validade',
        'valor',
    ];

    public function listaConsumo(){
        return $this->hasMany(ListaConsumo::class);
    }
}
