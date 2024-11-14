<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'data_nascimento',
        'genero',
    ];

    protected $hidden = [
        'senha',
    ];

    public $timestamps = true;
}
