<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'mensagem',
        'status',
    ];

    /**
     * Retorna o status formatado do ticket.
     */
    public function getStatusLabelAttribute()
    {
        switch ($this->status) {
            case 'aberto':
                return 'Aberto';
            case 'em_andamento':
                return 'Em Andamento';
            case 'resolvido':
                return 'Resolvido';
            default:
                return 'Indefinido';
        }
    }
}
