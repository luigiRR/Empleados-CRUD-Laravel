<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();

            $table->string('REP_Nombre');
            $table->text('REP_Descripcion');

            $table->unsignedBigInteger('empleado_id')->unique();
            $table->foreign('empleado_id')->references('id')->on('empleados')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('falta_id')->unique()->nullable();
            $table->foreign('falta_id')->references('id')->on('faltas')
                ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('reportes');
    }
}
