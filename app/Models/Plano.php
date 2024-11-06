<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{

    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'tipo',
        'beneficios',
        'faixaetaria',
        'preco',
    ];
    public function apolices()
    {
        return $this->hasMany(Apolice::class);
    }

}
