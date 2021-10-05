<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospedagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'dataEntrada',
        'dataSaida',
    ];
}
