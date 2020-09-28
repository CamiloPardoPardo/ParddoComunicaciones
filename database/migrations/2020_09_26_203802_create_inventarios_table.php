<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('Referencia');
            $table->string('Marca');
            $table->string('Producto');
            $table->text('Descripcion');
            $table->string('img')->nullable();
            $table->string('Inversion_Total');
            $table->string('Cantidad');
            $table->string('Precio_Unidad')->nullable();
            $table->string('Precio_Final');
            $table->string('Disponibles')->nullable();
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
        Schema::dropIfExists('inventarios');
    }
}
