<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
    ];

    public function pais(){
        return $this->BelongsTo(Pais::class);
    }

    public function bairro(){
        return $this->hasMany(Bairro::class);
    }
}
