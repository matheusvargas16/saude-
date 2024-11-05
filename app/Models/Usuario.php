<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $fillable = [
        'email',
        'senha',
        'cliente_id',
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }


}
