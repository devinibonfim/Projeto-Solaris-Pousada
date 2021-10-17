<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validade extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateValidity',//data
        'batchValidity',//lote
    ];
}
