<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable=[
        'ra',
        'rg',
        'pis_pasep',
    ];

    public function pessoa(){
        return $this->hasOne(Pessoa::class);
    }
}
