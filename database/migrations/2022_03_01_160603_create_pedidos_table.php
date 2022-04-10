<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('cod_pedido');
            $table->string('descripcion');
            $table->unsignedBigInteger('cantidad');
            $table->unsignedDecimal('precio_unitario',8,2)->default(0);
            //para cliente
            $table->string('confirmacion_cancelacion')->default('no');
            //para imprenta
            $table->string('estado')->default('pendiente');
            
            $table->string('ruta_imagen')->nullable();
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
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
};
