<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('items');
            $table->float('subtotal',5,2);
            $table->float('iva',5,2);
            $table->float('total',5,2);
            
            $table->integer('devolucion');
            $table->integer('factura');
            $table->unsignedBigInteger('estadopedido_id')->nullable();
            
            $table->foreign('cliente_id')
            ->references('id')->on('clientes')
            ->onDelete('set null');

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('set null');

            $table->foreign('estadopedido_id')
                    ->references('id')
                    ->on('estadopedidos')
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
        Schema::dropIfExists('pedidos');
    }
}
