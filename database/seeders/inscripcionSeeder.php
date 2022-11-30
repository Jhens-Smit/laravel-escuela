<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\inscripcion;

class inscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $inscripcion = new inscripcion();
        $inscripcion->fk_alumno=1;
        $inscripcion->fk_profesor=1;
        $inscripcion->fk_asignatura=1;
        $inscripcion->fecha="2022-11-28 23:57:19.000000";

        $inscripcion->save();
    }
}
