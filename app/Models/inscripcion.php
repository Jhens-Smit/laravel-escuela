<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripcion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_inscripcion';
    
    public function asignatura()
    {
        return $this->hasOne(asignatura::class);
    }
    public function profesor()
    {
        return $this->hasOne(profesor::class);
    }
    public function alumno()
    {
        return $this->hasOne(alumno::class);
    }
}
