<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
    ];
    
    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function cidade(){
        return $this->hasMany(Cidade::class);
    }

}
