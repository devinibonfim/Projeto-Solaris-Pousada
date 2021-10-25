<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    use HasFactory;
    protected $fillable=[
        'descricao',
        'numero',
    ];

    public function tipo_quarto(){
        return $this->belongsTo(Tipo_quarto::class);
    }

    public function reserva(){
        return $this->hasMany(reserva::class);
    }
}
