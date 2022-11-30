<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->bigIncrements("id_inscripcion");
            $table->unsignedBigInteger("fk_alumno");
            $table->unsignedBigInteger("fk_profesor");
            $table->unsignedBigInteger("fk_asignatura");
            $table->dateTime("fecha");
            $table->timestamps();
            $table->foreign("fk_alumno")->references("id_alumno")->on("alumnos");
            $table->foreign("fk_profesor")->references("id_profesor")->on("profesors");
            $table->foreign("fk_asignatura")->references("id_asignatura")->on("asignaturas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcions');
    }
}
