<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable=[
        'numero_quarto_reservado',
        'valor',
        'data_entrada',
        'data_saida',
    ];

    public function hospede(){
        return $this->belongsTo(Hospede::class);
    }

    public function consumo(){
        return $this->belongsTo(Consumo::class);
    }

    public function quarto(){
        return $this->belongsTo(Quarto::class);
    }

}
