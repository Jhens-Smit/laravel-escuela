<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\asignatura;

class asignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $asigantura = new asignatura();
        $asigantura->nombre="Religión";

        
        $asigantura->save();
    }
}
