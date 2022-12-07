<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;
    /* protected $fillable = ['nombre','apellido','direccion','fecha_nacimiento','nivel_academ']; */
    /* protected $guarded = []; */
    public $timestamps = false;
    protected $primaryKey = 'id_profesor';
    public function inscripcion()
    {
        return $this->hasOne(inscripcion::class);
    }
}
