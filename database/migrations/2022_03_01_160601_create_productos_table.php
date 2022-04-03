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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_prod',500);
            $table->string('Descripcion',2000);
            $table->decimal('Precio_fabricacion',10,2);
            $table->decimal('Precio_venta',10,2);
            $table->unsignedBigInteger('id_tipo_producto');
            $table->foreign('id_tipo_producto')->references('id')->on('TipoProductos');
            $table->string('imagen',2500)->nullable();
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
        Schema::dropIfExists('productos');
    }
};
