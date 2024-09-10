<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlumnosTable extends Migration
{
    public function up()
    {
        Schema::create('tb_alumnos', function (Blueprint $table) {
            $table->id(); // Creará una columna 'id' de tipo BIGINT con auto-increment
            $table->string('nombre'); // Creará una columna 'nombre' de tipo VARCHAR
            $table->date('fn'); // Creará una columna 'fn' de tipo DATE
            $table->text('foto'); // Creará una columna 'foto' de tipo TEXT
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_alumnos');
    }
}
