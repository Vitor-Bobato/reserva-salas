<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sala extends Model
{
    use HasFactory;

    // Campos permitidos para preenchimento em massa
    protected $fillable = ['nome', 'capacidade'];

    // Relacionamento: uma sala tem muitas reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
