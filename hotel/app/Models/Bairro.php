<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomeBairro',
    ];

    public function cidade(){
        return $this->BelongsTo(Cidade::class);
    }

    public function endereco(){
        return $this->hasOne(Pessoa::class);
    }
}
