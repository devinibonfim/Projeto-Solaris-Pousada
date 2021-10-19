<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_quarto extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomeTipoQuarto','descricaoTipoQuarto',
    ];

    public function endereco(){
        return $this->hasOne(Pessoa::class);
    }
}
