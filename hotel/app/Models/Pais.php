<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pais extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomePais',
    ];

    public function estado(){
        return $this->hasMany(Estado::class);
    }
}
