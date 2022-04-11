<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Desc_ansiedad');
            $table->string('N_ansiedad');
            $table->string('Desc_ansiedad2');
            $table->string('N_ansiedad2');
            $table->string('Des_compensacion');
            $table->string('N_compensacion');
            $table->integer('id_test');            
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
        Schema::dropIfExists('diagnosticos');
    }
}
