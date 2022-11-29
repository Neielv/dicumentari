<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->integer('existencia');
            
            $table->foreign('producto_id')
                    ->references('id')->on('productos')
                    ->onDelete('set null');

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
        Schema::dropIfExists('bodegas');
    }
}
