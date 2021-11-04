<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaConsumo extends Model
{
    use HasFactory;

    public function produto(){
        return $this->belongsTo(produto::class);
    }

    public function consumo(){
        return $this->hasOne(consumo::class);
    }
}
