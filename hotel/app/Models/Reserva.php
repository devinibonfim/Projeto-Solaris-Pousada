<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable=[
        'numeroQuartoReservado','Valor','dataEntrada','dataSaida',
    ];

    public function hospede(){
        return $this->belongsTo(Hospede::class);
    }

    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }

    public function quarto(){
        return $this->belongsTo(Quarto::class);
    }

}
