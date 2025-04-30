<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Enums\EstadoCiudad;

class Ciudad extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ciudads';
    
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
    // public function scopeWhereEstado($query, EstadoCiudad $estado)
    // {
    //     return $query->where('estado', $estado->value);
    // }
}
