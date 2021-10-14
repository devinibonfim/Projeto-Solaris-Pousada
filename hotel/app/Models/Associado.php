<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class associado extends Model
{
    use HasFactory;
    protected $filleable=[
        'nome','idade','id_hospede',
    ];
}
