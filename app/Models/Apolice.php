<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apolice extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'plano_id'];

    // Relacionamento com Plano
    public function plano()
    {
        return $this->belongsTo(Plano::class);
    }

    // Relacionamento com User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
