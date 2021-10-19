<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable=[
        'ra','rg','pisPasep',
    ];

    public function cargo(){
        return $this->BelongsTo(Cargo::class);
    }

    public function pf(){
        return $this->hasOne(Pf::class);
    }
}
