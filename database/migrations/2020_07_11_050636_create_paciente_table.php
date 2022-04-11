<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('Consecutivo');            
            $table->string('Nombre') ;
            $table->string('Apellidos') ;
            $table->string('Id') ;
            $table->integer('Numero') ;
            $table->integer('Telefono') ;
            $table->string('Correo') ;
            $table->string('Contraseña') ;
            $table->date('Fecha_nacimiento') ;        
            $table->boolean('Hab_test') ;                    
            $table->boolean('Mostrar_paciente') ;            
            $table->text('Observaciones') ;
            $table->integer('id_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
