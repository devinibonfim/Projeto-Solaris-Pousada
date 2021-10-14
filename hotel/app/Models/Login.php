<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $fillable = [
        'login',
        'password',//senha
    ];

    public function pessoas(){

        return $this->hasOne('App\Models\Pessoa');
    }
}
