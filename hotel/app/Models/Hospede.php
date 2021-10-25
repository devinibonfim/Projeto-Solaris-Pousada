<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    use HasFactory;

    public function pessoa(){
        return $this->BelongsTo(Pessoa::class);
    }

    public function perfil(){
        return $this->belongsTo(Perfil::class);
    }

    public function reserva(){
        return $this->hasMany(Reserva::class);
    }
}
