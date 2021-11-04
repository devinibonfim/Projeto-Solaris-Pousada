<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    use HasFactory;
    protected $fillable=[
        'quantidade',
    ];
    
    public function listaconsumo(){
        return $this->belongsTo(ListaConsumo::class);
    }
    
    public function reserva(){
        return $this->hasOne(Reserva::class);
    }

}
