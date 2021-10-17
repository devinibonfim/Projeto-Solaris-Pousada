<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'entryDateReserve',//Data de entrada
        'departureDateReserve',//Data de saida
        'numberReserve',//Numero
        'valueReserve',//Valor
           
    ];
}
