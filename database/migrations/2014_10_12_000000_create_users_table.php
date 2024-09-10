<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tb_alumnos', function (Blueprint $table) {
                $table->increments('id'); // Crea una columna 'id' de tipo INT con auto-increment
                $table->string('nombre'); // Crea una columna 'nombre' de tipo VARCHAR
                $table->date('fn'); // Crea una columna 'fn' de tipo DATE (fecha de nacimiento)
                $table->text('foto'); // Crea una columna 'foto' de tipo TEXT
                // $table->timestamps(); // Omitida si no necesitas las columnas 'created_at' y 'updated_at'
            });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_alumnos');
    }
};
