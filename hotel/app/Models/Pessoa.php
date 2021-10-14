<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'telephone',//telefone
        'name',//nome
    ];

    public function login(){

        return $this->hasOne('App\Models\login');
    }

}
