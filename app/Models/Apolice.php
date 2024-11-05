<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apolice extends Model
{

    use HasFactory;

    protected $fillable = [
        'id',
        'status',
        'valor',
        'descricao',
        'alteracao',
        'datainicio',
        'datafim',
        'created_at',
        'updated_at',
    ];
    public function apolices()
    {
        return $this->hasMany(Apolice::class);
    }


}
