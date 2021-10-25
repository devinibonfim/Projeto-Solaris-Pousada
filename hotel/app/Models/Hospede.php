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

    public function reserva(){
        return $this->hasOne(Reserva::class);
    }
}
