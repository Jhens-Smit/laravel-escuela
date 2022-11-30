<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\profesor;

class profesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profesor = new profesor();
        $profesor->nombre="Darwin";
        $profesor->apellido="Chamorro Cruz";
        $profesor->direccion="Jr. huancavelica #234";
        $profesor->fecha_nacimiento="2022-11-28 23:49:46.000000";
        $profesor->nivel_academ="Secundaria";
        
        $profesor->save();
    }
}
