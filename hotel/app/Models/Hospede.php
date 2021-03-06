<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    use HasFactory;

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }

    public function reserva(){
        return $this->hasMany(Reserva::class);
    }
}
