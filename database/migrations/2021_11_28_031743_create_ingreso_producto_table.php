<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingreso_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->integer('cantidad')->nullable();
           
            $table->foreign('ingreso_id')
            ->references('id')->on('ingresos')
            ->onDelete('set null');

            $table->foreign('producto_id')
            ->references('id')->on('productos')
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
        Schema::dropIfExists('ingreso_producto');
    }
}
