<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstanteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estanterias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');  
            $table->string('descripcion');  
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->integer('largo')->nullable();
            $table->integer('alto')->nullable();
            $table->integer('profundidad')->nullable();
            $table->foreign('ciudad_id')
                    ->references('id')->on('ciudades')
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
        Schema::dropIfExists('_estanterias');
    }
}
