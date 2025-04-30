<?php

namespace App\Models;

use App\Enums\EstadoPersona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $casts = [
        'estado' => EstadoPersona::class,
        'fnacimiento' => 'date',
    ];    
    public function taller()
    {
        return $this->belongsTo(Taller::class);
    }
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    // Scopes útiles
    public function scopeImpagas($query)
    {
        return $query->where('estado', EstadoPersona::IMPAGA->value);
    }

    public function scopePagadas($query)
    {
        return $query->where('estado', EstadoPersona::PAGADA->value);
    }
}
