<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();            
            $table->string('nombre');  
            $table->string('descripcion');  
            $table->unsignedBigInteger('estadoingresos_id')->nullable();//1 creado, 2 registrado, 3 cancelado; 
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
        Schema::dropIfExists('ingresos');
    }
}
