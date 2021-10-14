<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'entryDate',//Data de entrada
        'departureDate',//Data de saida
        'number',//Numero
        'value',//Valor
           
    ];
}
