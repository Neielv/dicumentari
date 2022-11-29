<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ci')->unique();
            $table->string('nombre')->unique();   
            $table->text('email');        
            $table->text('telefono');
            $table->unsignedBigInteger('user_id')->nullable();  
            $table->unsignedBigInteger('tipo_id')->nullable(); 

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('set null');   
            

            $table->foreign('tipo_id')
            ->references('id')->on('tipocliente')
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
        Schema::dropIfExists('clientes');
    }
}
