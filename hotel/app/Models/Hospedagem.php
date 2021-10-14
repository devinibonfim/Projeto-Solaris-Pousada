<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateEntry',//Data de entrada
        'departureDate',//Data de saida
    ];
}
