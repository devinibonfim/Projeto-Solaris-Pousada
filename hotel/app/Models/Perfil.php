<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;


    public function funcionario(){
        return $this->hasMany(funcionario::class);
    }

    public function hospede(){
        return $this->hasMany(Hospede::class);
    }
}
