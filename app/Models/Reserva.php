<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reserva extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos via formulário
    protected $fillable = ['sala_id', 'user_id', 'data', 'horario'];

    // Uma reserva pertence a uma sala
    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    // Uma reserva pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
