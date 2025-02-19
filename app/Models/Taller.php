<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
}
