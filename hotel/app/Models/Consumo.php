<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'quantidade',
        'valor',
    ];
    
    public function produto(){
        return $this->belongsTo(Produto::class);
    }
    
    public function reserva(){
        return $this->hasOne(Reserva::class);
    }

}
