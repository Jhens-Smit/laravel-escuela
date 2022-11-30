<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id_profesor';
    public function inscripcion()
    {
        return $this->hasOne(inscripcion::class);
    }
}
