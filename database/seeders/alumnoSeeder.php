<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\alumno;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $alumno = new alumno();
        $alumno->nombre="Pablo";
        $alumno->apellido="Tazza Mucha";
        $alumno->direccion="Jr. Chupaca";
        $alumno->fecha_nacimiento="2022-11-28 23:57:19.000000";

        $alumno->save();
    }
}
