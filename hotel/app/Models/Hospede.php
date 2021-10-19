<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    use HasFactory;

    public function pf(){
        return $this->BelongsTo(Pf::class);
    }

    public function reserva(){
        return $this->hasOne(Reserva::class);
    }
}
