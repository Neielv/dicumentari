<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traslados', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('producto_id')->nullable();
            $table->string('nombre');  
            $table->string('descripcion');  
            $table->unsignedBigInteger('origen_id')->nullable();
            $table->unsignedBigInteger('destino_id')->nullable();
            $table->unsignedBigInteger('estadoingresos_id')->nullable();
            /*$table->integer('cantidad'); 
                $table->foreign('producto_id')
                    ->references('id')->on('productos')
                    ->onDelete('set null');
                    */
            $table->foreign('origen_id')
                    ->references('id')->on('ciudades')
                    ->onDelete('set null');
            $table->foreign('destino_id')
                    ->references('id')->on('ciudades')
                    ->onDelete('set null');  
            $table->foreign('estadoingresos_id')
                    ->references('id')
                    ->on('estadoingresos')
                    ->onDelete('set null');      

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
        Schema::dropIfExists('traslados');
    }
}
